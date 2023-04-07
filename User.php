<?php

namespace App\Controllers;

class User extends BaseController
{
    public function loginUserName()
    {
        echo "Insert your Username: "; 
    }

    public function loginPassword()
    {
        echo "Insert your Password: "; 
    }

    public function loginBtn()
    {
        echo "LOGIN";
    }
}
