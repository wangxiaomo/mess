# coding: utf8

import functools
import tornado.web
import tornado.ioloop
import tornado.httpserver
import tornado.options

from tornado.options import define, options
from tornado.escape import json_encode

from local_config import db_set, db_get


define("port", default=8888, help="run on the given port", type=int)
define("debug", default=False, help="run in debug mode")


def api_in_whitelist(f):
    API_WHITELIST = ["Webcam", "Quality", "Play", "Sound", "Microphone"]

    @functools.wraps(f)
    def _(self, key, **kw):
        if isinstance(self, tornado.web.RequestHandler) and key in API_WHITELIST:
            return f(self, key, **kw)
        else:
            return {"r": 0, "msg": "forbidden"}
    return _

def jsonize(f):
    @functools.wraps(f)
    def _(self, *args, **kw):
        r = f(self, *args, **kw)
        self.set_header('Content-Type', 'application/json')
        self.write(json_encode(r))
    return _


class ApiHanlder(tornado.web.RequestHandler):

    @jsonize
    @api_in_whitelist
    def get(self, key):
        return {"r": 1, "value": db_get(key, 0)}

    @jsonize
    @api_in_whitelist
    def post(self, key):
        value = self.get_argument("value")
        db_set(key, value)
        return {"r": 1, "value": db_get(key, 0)}


def engine_start():
    tornado.options.parse_command_line()
    application = tornado.web.Application(
        [
            (r"/api/(.*)", ApiHanlder),
            ],
        cookie_secret="__TODO__",
        xsrf_cookies=False, #FIXME
        debug=options.debug,
    )
    http_server = tornado.httpserver.HTTPServer(application)
    http_server.listen(options.port)
    tornado.ioloop.IOLoop.current().start()


if __name__ == "__main__":
    engine_start()
