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

    public function addTopGame(){
        if($_POST){
            $name = trim(I('game_name'));
            $meta = trim(I('meta'));
            $url = trim(I('url'));
            $img = trim(I('img'));
            $user_count = (int)I('user_count');
            $rate = (int)I('rate');
            $order = (int)I('order');

            if($name && $meta && $url && $img && $user_count && $rate){
                D('TopGame')->data(array(
                    'name'  =>  $name,
                    'meta'  =>  $meta,
                    'url'   =>  $url,
                    'img'   =>  $img,
                    'user_count'    =>  $user_count,
                    'rate'  =>  $rate,
                    'rank_order' =>  $order,
                ))->add();
                return $this->success('添加成功', U('GameKing/Index/topGameList'));
            }else{
                return $this->error('信息不全');
            }
        }else{
            $this->display();
        }
    }

    public function topGameList(){
        $top_games = D('TopGame')->order('rank_order')->select();
        $this->assign('top_games', $top_games);
        $this->display();
    }

    public function deleteTopGame($id){
        $this->need_post();

        D('TopGame')->where("id=$id")->delete();
        return $this->ajaxReturn(array('r'=>1), 'JSON');
    }
}
