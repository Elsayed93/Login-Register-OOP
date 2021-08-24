<?php
require_once 'core/init.php';

// administrator'
$query = DB::getInstance()->query("SELECT * FROM `groups` WHERE `name`=? OR `permissions`=?", ['administrator', '{"admin":1}']);

$getGroups = DB::getInstance()->get('groups');
// var_dump(DB::getInstance()->get('groups', ['name', '=', 'administrator']));
// die;

// var_dump($query);
echo '<hr>';
echo $query->error() ? 'ERROR' : 'OK';
echo '<hr>';

echo $getGroups->countRows() . ' Rows';
