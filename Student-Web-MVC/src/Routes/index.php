<?php

use App\Controllers\HomeController;
use App\Controllers\AdminController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/find', HomeController::class, 'findResult');
$router->get('/admin', HomeController::class, 'admin');
$router->get('/logout', HomeController::class, 'logout');
$router->post('/login', AdminController::class, 'login');
$router->post('/result', AdminController::class, 'result');
$router->get('/change-password', AdminController::class, 'changePass');

$router->get('/dashboard', AdminController::class, 'dashboard');

$router->get('/manage-students', AdminController::class, 'manageStudents');
$router->get('/manage-subjects', AdminController::class, 'manageSubjects');
$router->get('/manage-classes', AdminController::class, 'manageClasses');
$router->get('/manage-result', AdminController::class, 'manageResult');
$router->get('/manage-subjectcombination', AdminController::class, 'manageSubjectCom');
$router->get('/manage-notice', AdminController::class, 'manageNotice');



$router->get('/edit-classes', AdminController::class, 'editClasses');
$router->post('/edit-classes', AdminController::class, 'editClasses');
$router->get('/edit-students', AdminController::class, 'editStudents');



$router->get('/create-class', AdminController::class, 'createClass');
$router->get('/create-subject', AdminController::class, 'createSubject');
$router->get('/add-subjectcombination', AdminController::class, 'addSubcom');
$router->get('/add-students', AdminController::class, 'addStudents');
$router->get('/add-result', AdminController::class, 'addResult');
$router->get('/add-notice', AdminController::class, 'addNotice');
$router->get('/notice-detail', AdminController::class, 'noticeDetail');






$router->dispatch();