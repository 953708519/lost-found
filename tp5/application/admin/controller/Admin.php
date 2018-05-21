<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
	
	public function lst() 
	{
		return $this->fetch();
	}
	public function add()
	{   
		if(request()->isPost())
		{
             $data=
             [
               'username'=>input('username'),
               'password'=>md5(input('password')),
               'password'=>input('password'),
             ];
             $validate= \think\Loader::validate('Admin');
            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
                die;
            };
                
             if(db('admin')->insert($data)){
             	return $this->success('添加管理员成功','lst');
             }
             else
             {
             	return $this->error('添加管理员失败');
             }
             return;

		}
		return $this->fetch();
	}
}
