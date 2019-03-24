<?php
/**
 * Created by PhpStorm.
 * User: MD.MIZAN
 * Date: 2/28/2019
 * Time: 2:10 PM
 */
require_once 'User.php';
$user2=new User();
$user2->register();
$user2->loggin($_FILES);