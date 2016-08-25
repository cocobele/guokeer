<?php

if( !defined('AROOT') ) die('NO AROOT!');
if( !defined('DS') ) define( 'DS' , DIRECTORY_SEPARATOR );
// define constant
define( 'IN' , true );
define( 'ROOT' , dirname( __FILE__ ) . DS );
define( 'CROOT' , ROOT . 'core' . DS  );

$c= $GLOBALS['c']=isset( $_REQUEST['c'] ) ? $_REQUEST['c'] : false;
$a= $GLOBALS['a']=isset( $_REQUEST['a'] ) ? $_REQUEST['a'] : false;

$post_fix = '.php';
$cont_file = AROOT . 'controller'  . DS . $c . $post_fix;
$class_name = $c .'Controller' ;
if( !file_exists( $cont_file ) )
{
    $cont_file = CROOT . 'controller' . DS . $c . $post_fix;
    if( !file_exists( $cont_file ) ) die('Can\'t find controller file - ' . $c . $post_fix );
}

require_once( $cont_file );
if( !class_exists( $class_name ) ) die('Can\'t find class - '   .  $class_name );

$o = new $class_name;
if( !method_exists( $o , $a ) ) die('Can\'t find method - '   . $a . ' ');


if(strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE && @ini_get("zlib.output_compression")) ob_start("ob_gzhandler");
call_user_func( array( $o , $a ) );


