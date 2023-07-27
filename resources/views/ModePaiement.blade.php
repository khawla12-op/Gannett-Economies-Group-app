@extends('layouts.layout')
@section('ModePaiement')
<style>
.pay {



/* background-image: url("images/print.svg"); */



overflow-x: hidden;



font-size: 19px;



line-height: 2.5;



color: #333;



font-family: cursive;



}



* {}



.menu {



height: 300px;



display: flex;



justify-content: center;



align-items: center;



}



.menu ul {



list-style-type: none;



display: flex;



justify-content: center;



align-items: center;



background-color: yellow;



padding: 0;



margin-left: !important;



position: relative;



}



.menu ul li {



padding: 20px;



list-style: none;



}



.menu li a {



text-decoration: none;



font-family: Helvetica;



text-transform: uppercase;



padding: 0;



margin: 0;



color: #222;



}



ul:before {



display: block;



content: "";



width: 100%;



height: 20px;



background: linear-gradient(45deg, yellow 25%, transparent 25%), linear-gradient(-45deg, yellow 25%, transparent 25%);



background-size: 20px 20px;



background-position: -50px;



position: absolute;



top: -20px;



left: 0;



}



.half {



height: 100%;



background-color: #1F3EA3;
;



width: 100%;



background-size: 86.65511265px 100px;



background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1 1.154"><path d="M1 1.154L0 0.577 1 0" fill="maroon"/></svg>');



background-repeat: repeat-y;



background-position: 100% 0;



}



i {



background: transparent;



}



a:hover {



color: white;



}
</style>
    
    <div class="row pay">



        <div class="col-12 text-center" style="font-family: system-ui;font-size:50px;color:black;font-weight:500;"><i style='margin-left:10px;margin-right:10px;' class="fas fa-chevron-right"></i>Moyens de paiement</div>



        <div class="col-12 h4" style="font-family: system-ui;font-size:40px;color:#5c9eff;padding-left:30px;">Vous recherchez des informations sur...</div>



        <div class="col-12 h4" style="font-family: system-ui;font-size:25px;padding-left:30px;">Les différents moyens de paiement proposés par GANNETT



            ECONOMIES</div>



        <a style='font-family: system-ui;text-decoration:none;color:#5c9eff;padding-left:30px;' class="col-12 h6" href="#cheque"><img src="/img/11.png" style="font-family: system-ui;background:red;background-size: 20px 20px;width: 20px;height: 20px;" alt="" srcset=""> Chèques</a>



        <a style='font-family: system-ui;text-decoration:none;color:#5c9eff;padding-left:30px;' class="col-12 h6" href="#mandat"><img src="/img/11.png" style="font-family: system-ui;background:red;background-size: 20px 20px;width: 20px;height: 20px;" alt="" srcset=""> Virements / Versements (Mandat)</a>



        <a style='font-family: system-ui;text-decoration:none;color:#5c9eff;padding-left:30px;' class="col-12 h6" href=""> <img src="img/11.png" style="font-family: system-ui;background:red;background-size: 20px 20px;width: 20px;height: 20px;" alt="" srcset=""> Paiement par carte bancaire </a>



        <div class="col-12 mb-3" style='font-family: system-ui;background: -webkit-linear-gradient(#e3efff, #fbf9f9);color: #ff7348;height: 5vh;border-radius: 10px;box-shadow: 10px 10px 10;box-shadow: 0px 0px 23px #ff734'></div>



        <div class="col-12 h5" id="cheque" style="font-family: system-ui;color: #1F3EA3;font-size: 50px;padding-left:30px;">Chèques</div>



        <div class="col-12 h5" style='font-family: system-ui;padding-left:30px'> Votre chèque doit émaner d'un établissement bancaire situé sur le territoire Marocain.</div>



        <div class="col-12 h5" style='font-family: system-ui;padding-left:30px'>Il doit être libellé à l'ordre « GANNETT



            ECONOMIES » et envoyé à l'adresse suivante :</div>



        <div class="col-1 col-md-4"></div>



        <div class="col-10 col-md-7 text-center pb-5 pt-1 mt-3 mb-3 pt-3" style='font-family: system-ui;border: 1px solid #5c9eff;'>



            <h5>GANNETT



                ECONOMIES </h5>



            <h5>59 BD Zerktouni RS Les Fleurs</h5>



            <h5> 7eme étage App N° 20 CASABLANCA.</h5>



        </div>



        <div class="col-11 col-md-9 h5" style='font-family: system-ui;padding-left:30px'>



            Dès l'encaissement de votre règlement, (attention aux aléas de la poste), votre bon de commande sera validé. Vous recevrez immédiatement un email confirmant la bonne réception de votre chèque et l'initialisation de votre service débutera.



        </div>



        <div class="col-12 mb-3" style='font-family: system-ui;background: -webkit-linear-gradient(#e3efff,#fbf9f9);color: #ff7348;height: 5vh;border-radius: 10px;box-shadow: 10px 10px 10;box-shadow: 0px 0px 23px #ff734'></div>







        <div class="col-12 h5" id="mandat" style="font-family: system-ui;color: #1F3EA3;font-size: 30px;padding-left:30px;">Virements / Versements (Mandat)</div>



        <div class="col-12 col-md-8 h5" style='font-family: system-ui;padding-left:30px'>Dès que nous avons la confirmation que la somme due a bien été versée sur le compte, et qu'elle correspond exactement à votre commande, nous activons votre service.



            <br>



            Voici nos coordonnées :



        </div>



        <div class="col-12"></div>



        <div class="col-3"></div>



        <div class="col-md-5 col-12 pt-3" style='font-family: system-ui;padding-left:30px'>



            <div class="row">



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;' class="col-5 h5">Domiciliation :</div>



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;' class="col-7 h5">Crédit du Maroc</div>





                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;' class="col-5 h5">Titulaire du compte :</div>



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;' class="col-7 h5">GANNETT ECONOMIES - </div>



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;background:#f2f5ff' class="col-5 h5">Numéro RIB :</div>



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;background:#f2f5ff' class="col-md-7 h5">021780000021703005017815</div>



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;' class="col-5 h5">Identifiant SWIFT :</div>



                <div style='font-family: system-ui;border:1px solid #5c9eff;padding:5px;' class="col-7 h5">CDMAMAMC</div>



            </div>



        </div>



        <div style='font-family: system-ui;padding-left:30px' class="col-12 col-md-9 h5">



            N'oubliez pas d'indiquer votre numéro de bon de commande dans le champ "Communication" de l'opération bancaire.



        </div>



        <div style='font-family: system-ui;padding-left:30px' class="col-12 col-md-9 h5">



            Sans cette information votre paiement ne pourra être validé, car des recherches du payeur seront nécessaires et fastidieuses avec pour conséquence un retard de validation de paiement et donc de mise en œuvre du service souscrit.



        </div>



        <div style='font-family: system-ui;padding-left:30px' class="col-12 col-md-9 mt-2 h5">



            Le paiement par virement bancaire ou par Mandat entraîne systématiquement un traitement minimum de trois jours. Afin de retrouver plus facilement votre paiement, envoyez nous <span style="font-family: system-ui;color:red;font-weight;700;">OBLIGATOIREMENT</span> en pièce jointe sur <span style="font-family: system-ui;color:blue;font-weight;700;">gannettemaroc@gmail.com</span> Ou WhatsApp « <span style="font-family: system-ui;color:blue;">0606098871</span> » une copie de votre ordre de virement ainsi que votre N° de Bon de Commande.







        </div>



        <div style='font-family: system-ui;padding-left:30px;font-wieght:900;font-size:20px;' class="col-12 col-md-10 mt-2 h5">



            Le payement par virement prend 72h ouvrées pour activer une commande.



            <br />Le payement par versement prend 24h ouvrées pour activer une commande.



            <br />Le paiement par chèque entraîne systématiquement un traitement minimum de sept jours.



        </div>
    </div>

@endsection
