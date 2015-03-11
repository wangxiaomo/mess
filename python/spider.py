# coding: utf8

import re
from os.path import basename
from w3lib.html import remove_entities
from urlparse import urljoin, urlparse
from scrapy import log
from scrapy.http import Request
from scrapy.selector import Selector
from scrapy.contrib.spiders import CrawlSpider, Rule


class UnvalidUrlException(Exception):
    pass


def get_url_basename(url):
    return basename(urlparse(url).path)

def clean_url(base, link):
    url = urljoin(base, remove_entities(link.strip("\t\r\n '\"")))
    parsed = urlparse(url)
    if not parsed.scheme:
        raise UnvalidUrlException()
    return url


class MiniSpider(CrawlSpider):
    name = 'mini_spider'
    start_urls = [
        'http://www.baidu.com/s?wd=scrapy',
        'http://www.baidu.com/s?wd=x',
    ]
    pattern = r'\.gif$'

    def pattern_check(self, text):
        log.msg("check %s" % text, log.INFO)
        return bool(re.findall(self.pattern, text))

    def parse(self, response):
        if self.pattern_check(response.url):
            filename = get_url_basename(response.url)
            with open('./output/%s' % filename, 'w') as f:
                f.write(response)

        hxs = Selector(response)
        links = hxs.xpath(
            '//a/@href |'
            '//img/@src |'
            '//link/@href |'
            '//script/@src'
        ).extract()
        for link in links:
            try:
                url = clean_url(response.url, link)
            except UnvalidUrlException:
                pass
            yield Request(url, callback=self.parse)


if __name__ == '__main__':
    from twisted.internet import reactor
    from scrapy.crawler import Crawler
    from scrapy import signals
    from scrapy.utils.project import get_project_settings

    spider = MiniSpider()
    settings = get_project_settings()
    settings.setdict({
        'DEPTH_PRIORITY': 1,
        'SCHEDULER_DISK_QUEUE': 'scrapy.squeue.PickleFifoDiskQueue',
        'SCHEDULER_MEMORY_QUEUE': 'scrapy.squeue.FifoMemoryQueue'
    })
    crawler = Crawler(settings)
    crawler.signals.connect(reactor.stop, signal=signals.spider_closed)
    crawler.crawl(spider)
    crawler.start()
    log.start()
    reactor.run()
