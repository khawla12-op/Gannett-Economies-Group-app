@extends('layouts.layout')
@section('connexion')
<form style="background-image:url('/img/x.jpg');
background-size:100% 100%;
height:120vh;
overflow-x:hidden;
" action="/connexion" method="post">
{{ csrf_field() }}
      <div class="row mb-5" style="direction:ltr;">
     <div class="col-4"></div>
      <div class="col-md-4 mt-5 mb-3 text-center  h6" style="background-color: #333;border-radius: 6px;padding: 13px;-webkit-animation:heartbeat 15s ease-in-out infinite both;animation:heartbeat 15s ease-in-out infinite both      ">
          <a href="" style=" text-decoration: none;color: rgba(230,197,90,1);">
             <span style="font-size:2rem;font-family: 'Font Awesome 5 Pro';text-align:center;">GANNETT <br> ECONOMIES </span>
             <span style="font-size:2rem;">GROUP</span>
             <br>   
           Le 1er Journal D'Annonce Légale Au Maroc</a>
     </div>
     
     <div class="col-4"></div>
     <div class="col-3"></div>
     <div class="col-md-6 connexion pt-5 pb-5">
         <div class="row">
             <div class="col-12 h5">Nom d'utilisateur</div>
             <input type="text" name="Nom" class="col-md-11">
             <div class="col-12 h5">Mot de passe</div>
             <input type="password" name="password" class="col-md-11">
             <div class="col-4"></div>
             <div class="col-md-4 mt-3"><button href="/ApresConnexion" type="submit" name="connexion">connexion</button></div>
             <div class="col-4"></div>
         </div>
         
     </div>
     <div class="col-3"></div>
    
     </div>
      </form>
      @endsection