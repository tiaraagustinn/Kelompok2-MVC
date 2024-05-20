<?php

namespace App\Controllers;
use App\database\Connection;
use App\Controller;

class AdminController extends Controller{
    public function login()
    {
        session_start();
        error_reporting(0);
    
        $connection = new \App\database\Connection();
        $pdo_connection = $connection->connect();
    
        if(!isset($_SESSION['alogin']) || empty($_SESSION['alogin'])) {
            $_SESSION['alogin'] = '';
        }
    
        if(isset($_POST['login'])) {
            $uname = $_POST['username'];
            $password = md5($_POST['password']);
            
            try {
                $sql = "SELECT UserName, Password FROM admin WHERE UserName=:username AND Password=:password";
                $query = $pdo_connection->prepare($sql);
                $query->bindParam(':username', $uname);
                $query->bindParam(':password', $password);
                $query->execute();
                $results = $query->fetchAll(\PDO::FETCH_ASSOC);
    
                if(count($results) > 0) {
                    $_SESSION['alogin'] = $_POST['username'];
                    echo "<script type='text/javascript'> document.location = '/dashboard'; </script>";
                    exit;
                } else {
                    echo "<script>alert('Invalid Details');</script>";
                    echo "<script>document.location = '/';</script>";
                }
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    
        }

        public function dashboard()
        {
            $this->render('dashboard');
        }
    
        public function manageStudents()
        {
            $this->render('manage-students');
        }
        public function manageSubjects()
        {
            $this->render('manage-subjects');
        }
        
        public function manageClasses()
        {
            $this->render('manage-Classes');
         
        }

        public function manageSubjectCom()
        {
            $this->render('manage-subjectcombination');
         
        }
        
        public function manageResult()
        {
            $this->render('manage-results');
        }

        public function result()
        {
            $this->render('result');
        }

        public function editClasses()
        {
            // Ambil ID kelas dari query string
            $classId = $_GET['classid'];
        

            $this->render('edit-class', ['classid' => $classid]);
        }


        public function editStudents()
        {
            // Ambil ID kelas dari query string
            $classId = $_GET['stid'];
        

            $this->render('edit-class', ['stid' => $stid]);
        }

        public function createClass()
        {
            $this->render('create-Class');
         
        }
        
        public function createSubject()
        {
            $this->render('create-subject');
         
        }

        public function addSubCom()
        {
            $this->render('add-subjectcombination');
         
        }

        public function addStudents()
        {
            $this->render('add-students');
         
        }

        public function addResult()
        {
            $this->render('add-result');
         
        }

        public function manageNotice()
        {
            $this->render('manage-notices');
         
        }

        public function addNotice()
        {
            $this->render('add-notice');
         
        }

        public function changePass()
        {
            $this->render('change-password');
         
        }

        public function noticeDetail()
        {
            // Ambil ID kelas dari query string
            $nid= $_GET['nid'];
        

            $this->render('notice-details', ['nid' => $nid]);
        }


}