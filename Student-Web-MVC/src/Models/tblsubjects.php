<?php

namespace App\Models;

class tblsubject{
    public $id;
    public $SubjectName;
    public $SubjectCode;
    public $CreationDate;
    public $UpdationDate;
    
    public function __construct($id, $SubjectName, $SubjectCode, $CreationDate, $UpdationDate) {
        $this->id = $id;
        $this->SubjectName = $SubjectName;
        $this->SubjectCode = $SubjectCode;
        $this->CreationDate = $CreationDate;
        $this->UpdationDate = $UpdationDate;
    }
}