<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/index.php";
if (session_status() == PHP_SESSION_NONE) {
  session_start();
} ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tunisietelecom/assets/css/backup.css">
    <link rel="stylesheet" href="/tunisietelecom/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css">
    
    <title>Tunisie Telecom</title>
</head>
<body>
<header>
<div class="logo mt-4"><a class="" href="/tunisietelecom/"><img width="200px" src="/tunisietelecom/assets/images/logo.png" alt="tunisie telecom logo"></a>
</div>
<div class="medaille">
  <img width="200px" src="/tunisietelecom/assets/images/medaille.png" alt="medaille">
</div>
<div class="entreprisebutton">
<button style="border-radius: 10px;" type="button" class="btn btn-primary btn-lg btn-entreprise">Entreprise</button>
</div>
<div class="line"></div>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 20px;color:#001e8c;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mobile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 20px;color:#001e8c;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fix & internet
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/tunisietelecom/fatoura?file=fatoura.txt">Fatoura</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 20px;color:#001e8c;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Divertissement
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 20px;color:#001e8c;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Assistance
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
    <div class="searchIcon">
    <div class="dropdown" id="searchDropdown">
        <button onclick="toggleDropdown()">
            <img src="/tunisietelecom/assets/images/search.png" width="40px" alt="search">
        </button>
        <div class="dropdown-content" id="dropdownContent">
            <input type="text" id="searchInput" placeholder="Search...">
            <form id="xmlForm" action="/tunisietelecom/search" method="POST" enctype="application/xml">
              <button type="button" onclick="submitXML()">Search</button>
            </form>
        </div>
    </div>
</div>
  <div class="vertical-line"></div>

  <div>
  <div class="line-height-100 text-main medium d-none d-lg-block font-13 ">
  <a href="#"style="text-decoration: none;"><img src="/tunisietelecom/assets/images/map.png" width="50px" alt="map" class="mapIcon">

               <p class=" m-0 " style="width: 60%;color:#001e8c">
                  Trouver un espace TT
               </p>
</a>
            </div>
</div>
<?php
if (isset($_SESSION['user_id'])) {
  echo '<div class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: blue;">
  Welcome
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="">
      <a class="dropdown-item" href="/tunisietelecom/profile" style="color: blue;">Profile</a>
      <div class="dropdown-divider"></div> <!-- Closing tag removed -->
      <a class="dropdown-item" href="/tunisietelecom/logout" style="color: blue;">Logout</a> <!-- Moved outside of div -->
  </div>
</div>
';
} else {
  echo '<div>
          <a class="nav-link active" aria-current="page" href="/tunisietelecom/user/login">
            <b style="font-size: 20px; color: #001e8c;"><i>MyTT</i><i class="fas fa-user"></i></b>
          </a>       
        </div>';
}
?>


</nav>
</header>


