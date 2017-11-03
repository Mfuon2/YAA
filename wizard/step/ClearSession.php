<?php
/**
 * Created by PhpStorm.
 * User: mfuon
 * Date: 11/3/2017
 * Time: 3:35 PM
 */

class SessionVars
{
public function clear(){
    return session_destroy();
}
public function start(){
    return session_start();
}
}
$sess = new SessionVars();