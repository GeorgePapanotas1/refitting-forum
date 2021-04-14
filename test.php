<?php 

define('IN_PHPBB', true);
$phpbb_root_path = dirname(__FILE__).'/';
$phpEx = "php";

include_once($phpbb_root_path.'common.'.$phpEx);
global $db;

if (!function_exists('user_add'))
{
    include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
}


$user_row['user_email'] = $request->variable('email','',true);
$user_row['username'] = $request->variable('username','',true);
$user_row['user_password'] = password_hash($request->variable('password','',true), PASSWORD_DEFAULT);
$user_row['user_type'] = 0;
$user_row['group_id'] = 2;

echo json_encode(user_add($user_row,false));
die;
