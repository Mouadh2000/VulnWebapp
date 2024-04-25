<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/config/config.php";
session_start();    
class HomeController
{
    public function index()
    {
        $this->renderView();
    }
    
    private function renderView()
    {
        include $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/header.php";
    
        echo '<div class="text-center">
                <h1 style="font-size: 38px;color:#001e8c;font-family: HeronSans-Bold, Frutiger-Black;"><b>Nos Services rapides</b></h1>
                <div class="container" style="margin-left:100px;margin-top:70px;margin-bottom:50px;">
                    <div class="row justify-content-between">
                        <div class="col-2 d-flex flex-center flex-column">
                            <a class="hover-white text-decoration-none mt-4" href="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx" title="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx">
                                <img src="/tunisietelecom/assets/images/arrows.png" height="50px" alt="Achat Internet">
                                <b style="font-family: HeronSans-Medium, Frutiger-Roman;"><p class=" lh-1 pt-2 medium mb-4 ">Achat Internet</p></b>
                            </a>
                        </div>
                        <div class="col-2 d-flex flex-center flex-column">
                            <a class="hover-white text-decoration-none mt-4" href="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx" title="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx">
                                <img src="/tunisietelecom/assets/images/recharge.png" height="50px" alt="Recharge TTCash">
                                <b style="font-family: HeronSans-Medium, Frutiger-Roman;"><p class=" lh-1 pt-2 medium ">Recharge <p style="margin-top:-20px;">TTCash</p></b>
                            </a>
                        </div>
                        <div class="col-2 d-flex flex-center flex-column">
                            <a class="hover-white text-decoration-none mt-4" href="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx" title="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx">
                                <img src="/tunisietelecom/assets/images/ehdi.png" height="50px" alt="Ehdia Net">
                                <b style="font-family: HeronSans-Medium, Frutiger-Roman;"><p class=" lh-1 pt-2 medium ">Ehdia Net</p></b>
                            </a>
                        </div>
                        <div class="col-2 d-flex flex-center flex-column">
                            <a class="hover-white text-decoration-none  mt-4" href="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx" title="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx">
                                <img src="/tunisietelecom/assets/images/internet.png" height="50px" alt="Internet sabba">
                               <b style="font-family: HeronSans-Medium, Frutiger-Roman;"> <p class=" lh-1 pt-2 medium ">Internet <p style="margin-top:-20px;">Sabba</p></b>
                            </a>
                        </div>
                        <div class="col-2 d-flex flex-center flex-column ">
                            <a class="hover-white text-decoration-none mt-4" href="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx" title="https://myspace.tunisietelecom.tn/Pages/AchatForfaitAno.aspx">
                                <img src="/tunisietelecom/assets/images/paiement.png" height="50px" alt="Paiement">
                                <b style="font-family: HeronSans-Medium, Frutiger-Roman;"><p class=" lh-1 pt-2 medium ">Paiement <p style="margin-top:-20px;">Factures</p></b>
                            </a>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h1 style="font-size: 38px;color:#001e8c;font-family: HeronSans-Bold, Frutiger-Black;"><b>Actualités & évènements</b></h1>
                <div class="row" style="margin-left:50px;margin-top:80px;">
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem; border-radius: 20px;">
                            <img src="/tunisietelecom/assets/images/delivery.png" class="card-img-top" alt="delivery" style="border-top-right-radius: 20px;border-top-left-radius:20px;">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 18px !important;font-family: HeronSans-Medium, Frutiger-Roman;color:#001e8c">Tunisie Telecom et sa filiale Topnet ensemble pour la bonne cause à l’occasion du Ramadan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem; border-radius: 55px;">
                            <img src="/tunisietelecom/assets/images/offer.png" class="card-img-top" alt="delivery" style="border-top-right-radius: 20px;border-top-left-radius:20px;">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 18px !important;font-family: HeronSans-Medium, Frutiger-Roman;color:#001e8c">Tunisie Telecom révèle sa nouvelle campagne Ramadan et avec elle, son 5ème prix consécutif...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem; border-radius: 55px;">
                            <img src="/tunisietelecom/assets/images/collab.jpeg" class="card-img-top" alt="delivery" style="border-top-right-radius: 20px;border-top-left-radius:20px;">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 18px !important;font-family: HeronSans-Medium, Frutiger-Roman;color:#001e8c">Tunisie Telecom annonce la signature de son partenariat avec la Municipalité du Bardo et... </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    
        include $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/footer.php";
    }
        
}
if($_SERVER['REQUEST_METHOD'] === 'GET' ){
    $homeController = new HomeController();
    $homeController->index();
}


