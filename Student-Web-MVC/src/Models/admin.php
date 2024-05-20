<?php

namespace App\Models;

class admin{
    public $id;
    public $UserName;
    public $password;
    public $updationDate;

    public function __construct($id, $UserName, $password, $updationDate) {
        $this->id = $id;
        $this->UserName = $UserName;
        $this->password = $password;
        $this->updationDate = $updationDate;
    }
    
}