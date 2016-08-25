<?php
if( !defined('IN') ) die('bad request');
class creditController
{
    function __construct()
    {
        echo 1;
    }

    function  test(){
        echo 2;
    }

    function index()
    {
        $data['title'] =$data['top_title'] = '信用卡申领';
       // render( $data );
    }

}