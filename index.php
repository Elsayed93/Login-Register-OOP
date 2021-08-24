<?php
require_once 'core/init.php';

$query = DB::getInstance()->query("SELECT * FROM `groups` WHERE `name`=? OR `permissions`=?", ['administrator', '{"admin":1}']);
$getData = DB::getInstance()->get('users');
// $getData = DB::getInstance()->get('users', ['email', '=', 'user2@gmail.com']);


echo $query->error() ? 'ERROR' : 'OK';
echo '<hr>';


if (!$getData->countRows()) {
    echo '0 rows';
} else {
    echo  $getData->first()->email;
    die;
    foreach ($getData->results() as $key => $row) {
        // echo $getData->countRows();
        // echo '<hr>';
        echo ($row->email)  . '<br>';
    }
}
