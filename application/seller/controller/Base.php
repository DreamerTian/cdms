<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/25
 * Time: 11:40
 */

namespace app\seller\controller;


use think\Controller;
use think\Session;
use app\seller\logic\UpgradeLogic;
use app\common\logic\Saas;

class Base extends Controller
{
    public $begin;
    public $end;
    public $page_size = 0;
    public $seller_id_id = 0;

    /**
     * 析构函数
     */
    function __construct()
    {
        Session::start();
        header("Cache-control: private");  // history.back返回后输入框值丢失问题 参考文章 http://www.tp-shop.cn/article_id_1465.html  http://blog.csdn.net/qinchaoguang123456/article/details/29852881
        parent::__construct();
        $upgradeLogic = new UpgradeLogic();
        $upgradeMsg = $upgradeLogic->checkVersion(); //升级包消息
        $this->assign('upgradeMsg',$upgradeMsg);
        //用户中心面包屑导航
        $navigate_seller = navigate_seller();
        $this->assign('navigate_seller',$navigate_seller);
        tpversion();
    }


    /**
     * 初始化操作
     */
    public function _initialize()
    {
        Saas::instance()->checkSso();

        //过滤不需要登陆的行为
        if (!in_array(ACTION_NAME, array('login', 'vertify'))) {
            if (session('seller_id') > 0) {
                $this->check_priv();//检查管理员菜单操作权限
                $this->seller_id = session('seller_id');
            }else {
                (ACTION_NAME == 'index') && $this->redirect( U('Seller/Seller/login'));
                $this->error('请先登录', U('Seller/Seller/login'), null, 1);
            }
        }
        $this->public_assign();
    }

    /**
     * 保存公告变量到 smarty中 比如 导航
     */
    public function public_assign()
    {
        $tpshop_config = array();

        $tp_config = M('config')->cache(true, TPSHOP_CACHE_TIME, 'config')->select();
        if($tp_config){
            foreach($tp_config as $k => $v)
            {
                $tpshop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
            }
        }

        if(I('start_time')){
            $begin = I('start_time');
            $end = I('end_time');
        }else{
            $begin = date('Y-m-d', strtotime("-3 month"));//30天前
            $end = date('Y-m-d', strtotime('+1 days'));
        }
        $this->assign('start_time',$begin);
        $this->assign('end_time',$end);
        $this->begin = strtotime($begin);
        $this->end = strtotime($end)+86399;
        $this->page_size = C('PAGESIZE');
        $this->assign('tpshop_config', $tpshop_config);
    }

    public function check_priv()
    {
        $ctl = CONTROLLER_NAME;
        $act = ACTION_NAME;
        $act_list = session('act_list');
        //无需验证的操作
        $uneed_check = array('login','logout','vertifyHandle','vertify','imageUp','upload','videoUp','delupload','login_task');
        if($ctl == 'Index' || $act_list == 'all' || $ctl == 'Wx3rd'){
            //后台首页控制器无需验证,超级管理员无需验证
            return true;
        }elseif((request()->isAjax() && $this->verifyAjaxRequest($act)) || strpos($act,'ajax')!== false || in_array($act,$uneed_check)){
            //部分ajax请求不需要验证权限
            return true;
        }else{
            $res = $this->verifyAction();
            if($res['status'] == -1){
                $this->error($res['msg'],$res['url']);
            };
        }
    }

    public function ajaxReturn($data,$type = 'json'){
        exit(json_encode($data));
    }

    /**
     * 要验证的ajax
     * @param $act
     * @return bool
     */
    private function verifyAjaxRequest($act){
        $verifyAjaxArr = ['delGoodsCategory','delGoodsAttribute','delBrand','delGoods'];
        if(request()->isAjax() && in_array($act,$verifyAjaxArr)){
            $res = $this->verifyAction();
            if($res['status'] == -1){
                $this->ajaxReturn($res);
            }else{
                return true;
            };
        }else{
            return true;
        }
    }

    private function verifyAction(){
        if(IS_SAAS){
            return 1;
        }
        $ctl = CONTROLLER_NAME;
        $act = ACTION_NAME;
        $act_list = session('act_list');
        $right = M('system_menu')->where("id", "in", $act_list)->cache(true)->getField('right',true);
        $role_right = '';
        foreach ($right as $val){
            $role_right .= $val.',';
        }
        $role_right = explode(',', $role_right);
        //检查是否拥有此操作权限
        if(!in_array($ctl.'@'.$act, $role_right)){
            return ['status'=>-1,'msg'=>'您没有操作权限['.($ctl.'@'.$act).'],请联系超级管理员分配权限','url'=>U('Seller/Index/welcome')];
        }
    }
}