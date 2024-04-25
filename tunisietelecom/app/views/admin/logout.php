<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/index.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/AdminController.php";
$adminmodel = new AdminModel();
$admin = new Authentication($adminmodel);
$admin->logout();

