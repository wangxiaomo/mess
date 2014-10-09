<?php

namespace Admin\Controller;

use Common\Controller\AdminBase;


class IndexController extends AdminBase {
    public function severList(){
        $servers = D('Server')->order('open_time desc')->select();
        $this->assign('servers', $servers);
        $this->display();
    }
}
