<?php
namespace app\admin\validate;

use think\Validate;
class Admin extends Validate
{
protected $rule=[
          'username'=>'require|max:25',
          'password'=>'require|max:16',

];
protected $message=[
         'username.require'=>'管理员名称必须填写',
         'username.max'=>'管理名称长度不得大于25',
         'password.require'=>'密码必须填写',
         'password.max'=>'密码长度不得大于16'
        
];
protected $scene=[
      'add'=>['username'=>'require','password'],
      
];
 }