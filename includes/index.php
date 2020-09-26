<?php
require_once('../core/init.php');

// $user = DB::getInstance()->get('users', array('username', '=', 'priom'));
// $user = DB::getInstance()->delete('users', array('username', '=', 'priom'));
// $user = DB::getInstance()->insert('users', array(
//     'username' => "ppp",
//     'password' => "ppp", 'salt' => 'ppp'
// ));

$user = DB::getInstance()->update('users', 2, array(
    'username' => "newppp",
    'password' => "newppp"
));

// if (!$user->count()) {
//     echo 'No User';
// } else {
//     echo $user->first()->username;
// }
