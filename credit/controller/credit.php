<?php
if( !defined('IN') ) die('bad request');
class creditController
{
    function __construct()
    {
    }


    function index()
    {
        $data['creditList']=require(AROOT.'/data/cardlist.php');

        @extract( $data );
        require(AROOT.'/view/index.php');
    }

    function getForm(){
        $data=array();
        foreach($_POST as $k=>$v){
           $data[$k]=$v;
       };

    }


}