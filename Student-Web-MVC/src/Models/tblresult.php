<?php

namespace App\Models;

class tblresult{
    public $id;
    public $StudentId;
    public $ClassId;
    public $subjectId;
    public $marks;
    public $PostingDate;
    public $UpdationDate;
    
    public function __construct($id, $StudentId, $ClassId, $subjectId, $marks, $PostingDate, $UpdationDate) {
        $this->id = $id;
        $this->StudentId = $StudentId;
        $this->ClassId = $ClassId;
        $this->subjectId = $subjectId;
        $this->marks = $marks;
        $this->PostingDate = $PostingDate;
        $this->UpdationDate = $UpdationDate;
    }
}