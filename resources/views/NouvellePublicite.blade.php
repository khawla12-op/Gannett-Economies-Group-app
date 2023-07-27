@extends('layouts.layout2')
@section('NouvellePublicite')

<form method="POST" action="" enctype="multipart/form-data">
<div class="row connexion">
 
  <h1>Ajouter une publicité</h1>       
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Page :                                           </div><div class="mt-1 col-10">
      <select name="page" id="">
          <option value=""></option>
          <option value="Publier Une Annonce Légale">Publier Une Annonce Légale</option>
          <option value="Publier Bulletin officiel">Publier Bulletin officiel</option>
          <option value="Dernières Annonces Annonce Légale">Dernières Annonces Annonce Légale</option>
          <option value="Dernières Annonces Bulletin Officiel">Dernières Annonces Bulletin Officiel</option>
          <option value="Modèles d’annonces">Modèles d’annonces</option>
      </select>
  </div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Page 2:                                           </div><div class="mt-1 col-10">
      <select name="page2" id="">
          <option value=""></option>
          <option value="Publier Une Annonce Légale">Publier Une Annonce Légale</option>
          <option value="Publier Bulletin officiel">Publier Bulletin officiel</option>
          <option value="Dernières Annonces Annonce Légale">Dernières Annonces Annonce Légale</option>
          <option value="Dernières Annonces Bulletin Officiel">Dernières Annonces Bulletin Officiel</option>
          <option value="Modèles d’annonces">Modèles d’annonces</option>
      </select>
  </div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Page 3:                                           </div><div class="mt-1 col-10">
      <select name="page3" id="">
          <option value=""></option>
          <option value="Publier Une Annonce Légale">Publier Une Annonce Légale</option>
          <option value="Publier Bulletin officiel">Publier Bulletin officiel</option>
          <option value="Dernières Annonces Annonce Légale">Dernières Annonces Annonce Légale</option>
          <option value="Dernières Annonces Bulletin Officiel">Dernières Annonces Bulletin Officiel</option>
          <option value="Modèles d’annonces">Modèles d’annonces</option>
      </select>
  </div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Titre Annonce :                                           </div><div class="mt-1 col-10"><input  required name="NomBoutique"   type="text" class="from-control"></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Email :                                           </div>        <div class="mt-1 col-10"><input   name="email"   type="text" class="from-control"></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Description :                                     </div>        <div class="mt-1 col-10"><textarea  name="description"   id="" cols="30" rows="5"></textarea></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Adresse :                                            </div>     <div class="mt-1 col-10"><textarea  name="adresse"   id="" cols="30" rows="2"></textarea></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;;'> ville  : </div>    <div class="mt-1 col-10"><input type="text" name="ville"></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;;'> Télephone : </div> <div class="mt-1 col-10"><input   name="telephone"   type="text" class="from-control"></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;;'> Site  : </div>     <div class="mt-1 col-10"><input   name="site"   type="text" class="from-control"></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;display:none'> Categorie  : </div><div style="display:none" class="mt-1 col-10"><input type="text" name="categorie"></div>
  <div class="col-2 h4" style='border-bottom:1px solid #4F6773;'>Photo :</div>        <div class="mt-1 col-10 pb-3"><input name="file" required style='height:70px;'   type="file" accept="image/*" class="from-control"></div>
  <div class="col-2" style='padding-left:10px;'>
      <button type="submit" name="ajouter">Ajouter</button>
  </div><div class="col-5">
      <img src="../images/gra.jpg" alt="" srcset="">
  </div>
</div>
   
</form>
<script>
document.querySelector("input[type='file']").addEventListener("change",function(){
let Path=URL.createObjectURL(this.files[0]);
document.querySelector("img").setAttribute("src",Path);
document.querySelector("img").style.opacity=1;
})
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection