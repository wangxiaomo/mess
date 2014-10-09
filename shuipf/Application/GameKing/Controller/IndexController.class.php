<?php

namespace GameKing\Controller;

use Common\Controller\AdminBase;


class IndexController extends AdminBase {

    private function need_post($type='PLAIN'){
        $is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
        if($is_post) return;

        switch($type){
            case 'PLAIN':
                die('need post');
            case 'JSON':
                die($this->ajaxReturn(array('r'=>0, 'msg'=>'need post'), 'JSON'));
        }
    }

    public function serverList(){
        $servers = D('Server')->order('open_time desc')->select();
        $this->assign('servers', $servers);
        $this->display();
    }

    public function addServer(){
        if($_POST){
            $name = trim(I('game_name'));
            $meta = trim(I('meta'));
            $url = trim(I('url'));
            $open_time = trim(I('open_time'));

            if($name && $meta && $url && $open_time){
                D('Server')->data(array(
                    'name'  =>  $name,
                    'meta'  =>  $meta,
                    'url'   =>  $url,
                    'open_time' =>  $open_time
                ))->add();
                return $this->success('添加成功', U('GameKing/Index/serverList'));
            }else{
                return $this->error('信息不全');
            }
        }else{
            $this->display();
        }
    }

    public function deleteServer($id){
        $this->need_post();

        D('Server')->where("id=$id")->delete();
        return $this->ajaxReturn(array('r'=>1), 'JSON');
    }
}
