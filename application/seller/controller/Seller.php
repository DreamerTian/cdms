<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/25
 * Time: 13:38
 */

namespace app\seller\controller;

use app\common\logic\SellerLogic;
use think\Page;
use think\Verify;
use think\Loader;
use think\Db;
use think\Session;


class Seller extends Base
{

    /**
     * 管理员登陆
     */
    public function login()
    {
        if (IS_POST) {
            $code = I('post.vertify');
            $username = I('post.username/s');
            $password = I('post.password/s');

            $verify = new Verify();
            if (!$verify->check($code, "seller_login")) {
                $this->ajaxReturn(['status' => 0, 'msg' => '验证码错误']);
            }

            $sellerLogic = new SellerLogic;
            $return = $sellerLogic->login($username, $password);
            $this->ajaxReturn($return);
        }

        if (session('?seller_id') && session('seller_id') > 0) {
            $this->error("您已登录", U('Seller/Index/index'));
        }

        return $this->fetch();
    }

    /**
     * 退出登陆
     */
    public function logout()
    {
        $sellerLogic = new SellerLogic;
        $sellerLogic->logout(session('seller_id'));

        $this->success("退出成功",U('Seller/Admin/login'));
    }

    /**
     * 验证码获取
     */
    public function vertify()
    {
        $config = array(
            'fontSize' => 30,
            'length' => 4,
            'useCurve' => false,
            'useNoise' => false,
            'reset' => false
        );
        $Verify = new Verify($config);
        $Verify->entry("seller_login");
        exit();
    }
}