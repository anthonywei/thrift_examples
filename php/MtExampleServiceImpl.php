<?php

include_once 'INC_COMM.php';
include_once 'MtExampleService.php';

class MtExampleServiceImpl implements MtExampleServiceIf{
    public function SetUserProfile(\UserProfile $oProfile){
        return 0;
    }
    public function GetUserProfile($userId){
        return new \UserProfile();
    }
}

?>
