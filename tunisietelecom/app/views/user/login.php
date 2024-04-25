<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/index.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/UserController.php";

if (isset($_SESSION['user_id'])) {
  header('Location:/tunisietelecom/');
}
$usermodel = new UserModel();
$user = new Authentication($usermodel);
$user->login();

?>
<div class="text-center mt-5">
    <h1 class="mb-4" style="color:#001e8c"><b>Authentification</b></h1>
    <form action="/tunisietelecom/user/login" method="POST">
        <div style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" name="logemail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Identifiant">
        </div>
        <div class="mt-2" style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" name="logpassword" type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe">
        </div>
        <div style="margin-left:375px;">
            <input type="hidden" name="form_type" value="login">
            <button style="border-radius:30px;width:180px;height:50px;background-color:#64C832 !important;color:white;" type="submit" class="btn mt-2">CONEXION</button>
        </div>
    </form>
</div>
<div style="margin-left:410px;">
    <a href="register">Créer un Compte</a>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/footer.php"; ?>