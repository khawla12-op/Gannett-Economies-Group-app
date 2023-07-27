@extends('layouts.layout')
@section('content')

<form  action="process_form.php" method="post">
  <div class="connexion">
    <div class="row">
      <div class="col-12 ">
        <div class="row">
             <label style="display:none;" for="" class="h4 col-4">Client</label>              <select style="display:none;"  class="col-7 mt-1" name="societe" id="">
                       
             <option value=1>gannete</option><option value=27>gannete</option><option value=28>CABINET BOUZIDI </option><option value=29>HOUCINE SABER BCS</option><option value=30>YOUSSEF OFFRE</option><option value=31>BCNG</option><option value=32>FIDUCIAIRE PASSION </option><option value=33>AGILE BUSINESS CENTER</option><option value=34>ANAS CHROUK</option><option value=35>DAHOU ALI</option><option value=36>MA GLOBAL</option><option value=37>MY ACCOUNTANT</option><option value=38>RIF CONSEIL</option><option value=39>YOUSSEF BOUCHTICHI</option><option value=40>AMR CENTRE</option><option value=41>FIRACO</option><option value=42>AMIN FEDOUACHE</option><option value=43>FIDUCIAIRE LQODS</option><option value=44>CABINET Y&R</option><option value=45>FIDSAGE</option><option value=46>FIDUCIAIRE YAKOUT</option><option value=47>CABINET YOUNESS</option><option value=48>CABIMOC</option><option value=49>ALTIS CONSEILS</option><option value=50>HAMZA LFANI</option><option value=51>fid info com</option><option value=52>MONDE CONSULTING </option><option value=53>FIDUASSAF CONSEIL</option><option value=54>CHARKI</option><option value=55>NAJIB ELJOUDIA</option><option value=56>RACHIDA AARIF</option><option value=57>aaa</option><option value=58>gannete</option><option value=59>ganneteqq</option><option value=60>CS PLUS</option><option value=61>CS PLUS</option><option value=62>CS PLUS</option><option value=63>bcs</option><option value=64>Azzdine</option><option value=65>Agil</option><option value=66>amar centre</option><option value=67>jawad habib allah</option><option value=68>mode consulting</option><option value=69>khadija</option><option value=70>fiscomptes</option><option value=71>AUDEXIA CONSULTING</option><option value=72>STE AMR CENTER</option><option value=73>BMA PARTNERS</option><option value=74>RHAL OFFICE</option><option value=75>FIDUCIAIRE RADI DE CONSEIL SARL AU</option>             </select> 
             <label for="" class="h4 col-4 mt-1">Rubique :</label>    <select   class="col-7 mt-1" name="rubique" id=""><option value="">----Rubrique----</option>
<option value="Création">Création</option>
<option value="Modification">modification</option>
<option value="Autre">Autre</option></select>
             <label for="" style="display:none;" class="h4 col-4 mt-1">Region :</label>     <select  style="display:none;" class="col-7 mt-1" name="region" id=""><option vlaue=""> 

----Région----</option><option vlaue=" 

Casablanca Settat"> 

Casablanca Settat</option><option vlaue=" 

Drâa Tafilalet"> 

Drâa Tafilalet</option><option vlaue=" 

Ed Dakhla- Oued ed Dahab"> 

Ed Dakhla- Oued ed Dahab</option><option vlaue=" 

Laayoune Saguia al Hamra"> 

Laayoune Saguia al Hamra</option><option vlaue=" 

Béni Mellal Khénifra"> 

Béni Mellal Khénifra</option><option vlaue=" 

L՚Oriental"> 

L'Oriental</option><option vlaue=" 

Souss Massa"> 

Souss Massa</option><option vlaue=" 

Tanger Tetouan Al Hoceima"> 

Tanger Tetouan Al Hoceima</option><option vlaue=" 

Fes Meknes"> 

Fes Meknes</option><option vlaue=" 

Marrakech Safi"> 

Marrakech Safi</option><option vlaue=" 

Rabat Salé Kenitra"> 

Rabat Salé Kenitra</option><option vlaue=" 

Guelmim - Oued Noun"> 

Guelmim - Oued Noun</option></select>
             <label for="" class="h4 col-4 mt-1">Numéro :</label>             <input required type="text"   class="col-7 mt-1" name="numero" id=""></input>
             <label for="" class="h4 col-4 mt-1">Nom Sociéte:</label><input required    class="col-7 mt-1" type="text" name="titre">
             <label for="" class="h4 col-4 mt-1" style="display:none;">Date Annonce Légale :</label><input style="display:none;"    class="col-7 mt-1" type="date" name="date" id="date"></input> 
             <label for="" class="h4 col-4">Text 1 :</label>               <textarea  class="col-7 mt-1" name="text1" id="" cols="30" rows="3"></textarea> 
             <label for="" class="h4 col-4">Text 2 :</label>               <textarea  class="col-7 mt-1" name="text2" id="" cols="30" rows="10"></textarea> 
             <div class="col-12 text-center pt-4"><button type="submit" name="ajoute">Ajouter Annonce l'égale</button> </div>
            </div>
         
      </div>
    </div>
  </div>
</form>
@endsection