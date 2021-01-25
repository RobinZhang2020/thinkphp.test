<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\user\model\User;

class Auth extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
        //dump($this->request->name);
        $token=$this->request->token('__token__','sha1');

        $this->assign('token',$token);
        return $this->fetch();
        //return view();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        //dump($request->__token__);
        $requestData=$request->post();
        $result=$this->validate($requestData, 'app\user\validate\Auth');
        if($result!==true){
            //dump($result);
            return redirect('user/auth/create')->with('validate',$result);
        }else{
            //dump($requestData);
            return User::create($requestData);
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
