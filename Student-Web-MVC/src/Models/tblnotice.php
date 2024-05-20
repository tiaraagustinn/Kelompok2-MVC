<?php

namespace App\Models;

class tblnotice{
    public $id;
    public $noticeTitle;
    public $noticeDetails;
    public $postingDate;
    
    public function __construct($id, $noticeTitle, $noticeDetails, $postingDate) {
        $this->id = $id;
        $this->noticeTitle = $noticeTitle;
        $this->noticeDetails = $noticeDetails;
        $this->postingDate = $postingDate;
    }
}