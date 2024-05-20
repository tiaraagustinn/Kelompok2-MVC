<?php

namespace App\Models;

class tblsubjectcombination{
    public $Id;
    public $ClassId;
    public $SubjectId;
    public $status;
    public $CreationDate;
    public $UpdationDate;
    
    public function __construct($Id, $ClassId, $SubjectId, $status, $CreationDate, $UpdationDate) {
        $this->Id = $Id;
        $this->ClassId = $ClassId;
        $this->SubjectId = $SubjectId;
        $this->status = $status;
        $this->CreationDate = $CreationDate;
        $this->UpdationDate = $UpdationDate;
    }
}