<?php

namespace App\Models;

class tblstudents{
    public $StudentId;
    public $StudentName;
    public $RollId;
    public $StudentEmail;
    public $Gender;
    public $DOB;
    public $ClassId;
    public $RegDate;
    public $UpdationDate;
    public $Status;

    public function __construct($StudentId, $StudentName, $RollId, $StudentEmail, $Gender, $DOB, $ClassId, $RegDate, $UpdationDate, $Status) {
        $this->StudentId = $StudentId;
        $this->StudentName = $StudentName;
        $this->RollId = $RollId;
        $this->StudentEmail = $StudentEmail;
        $this->Gender = $Gender;
        $this->DOB = $DOB;
        $this->ClassId = $ClassId;
        $this->RegDate = $RegDate;
        $this->UpdationDate = $UpdationDate;
        $this->Status = $Status;
    }
}