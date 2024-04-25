<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/index.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/UserController.php";
if (isset($_SESSION['user_id'])) {
  header('Location:/tunisietelecom/');
}
$register = new Register();
if ($register->isValid()){
  echo '<script>alert("Registration Successfully")</script>';
}
?>
<div style="margin-left:80px;margin-top:30px;">
    <h3 class="mb-4" style="color:#001e8c"><b>Inscription</b></h3>
    <h5 class="mb-4" style="color:#001e8c">Créer votre compte personnel</h5>
</div>
<div class="text-center mt-5">
    <form action="/tunisietelecom/user/register" method="POST">
        <div style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Prénom *">
        </div>
        <div class="mt-2" style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
        </div>
        <div class="mt-2" style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="mt-2" style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" type="Password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe">
        </div>
        <div class="mt-2" style="width: 550px; margin: 0 auto;">
            <input style="border-radius:30px;height:40px;" type="Password" name="rpassword" class="form-control" id="exampleFormControlInput1" placeholder="Confirmer Mot de passe">
        </div>
        <div>       
            <input type="hidden" name="form_type" value="register">
            <button style="border-radius:30px;width:180px;height:50px;background-color:#64C832 !important;color:white;" type="submit" class="btn mt-2">CONFIRMER</button>
        </div>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/footer.php"; ?>




