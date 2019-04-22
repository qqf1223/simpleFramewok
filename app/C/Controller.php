<?php
/**
* @name      Controller.php
* @describe  控制类基类
* @author    qinqf
* @todo       
* @changelog  
*/

abstract class C_Controller extends ZF_Core_Controller 
{

    public $login_user_info;
    private $s_uid;
    private $s_uname;
    function __construct() 
    {
        parent::__construct();
    }


    public function returnmsg($data){
        return json_encode($data);
    }

}
