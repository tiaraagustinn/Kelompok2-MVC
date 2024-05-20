<?php

namespace App\Models;

class tblclasses{
    public $id;
    public $ClassName;
    public $ClassNameNumeric;
    public $Section;
    public $CreationDate;
    public $UpdationDate;

    public function __construct($id, $ClassName, $ClassNameNumeric, $Section, $CreationDate, $UpdationDate) {
        $this->id = $id;
        $this->ClassName = $ClassName;
        $this->ClassNameNumeric = $ClassNameNumeric;
        $this->Section = $Section;
        $this->CreationDate = $CreationDate;
        $this->UpdationDate = $UpdationDate;
    }
}

