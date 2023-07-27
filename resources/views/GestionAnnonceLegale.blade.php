@extends('layouts.layout2')
@section('GestionAnnonceLegale')  
<div class="connexion">
<div class="row">
 <div class="col-12 text-center">
  <button class="mb-2"><a href="NouveauAnnonceLegale.php" style="height: 10vh;/* background: blue; */padding: 13px;text-decoration: none;color: white;">Ajouter Annonce l'égale</a></button>   
 <div class="row">
   <div class="col-12" >
     <label for="" class="h5">Rechereche Par Client</label>
  <input type="text" name="societe"  value="" placeholder="Recherche par numero ou sociéte">
 
  <button id="buton" type="submit">Recherche</button>
   </div>
   
 </div>
  <table class="table table-striped">
<thead>
<tr>
 <th scope="col">#</th>
 <th scope="col">Numéro</th>
 <th scope="col">Rubique</th>      
 <th scope="col">Text</th>
 <th scope="col">Date</th>
 <th scope="col">action</th>
</tr>
</thead>
<tbody>

<tr>
 <th scope="row">#</th>
 <td>1226</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=83" target="_blank">LIQUIDATIO...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=83" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=83" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="83">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1226</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=82" target="_blank">Aux termes...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=82" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=82" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="82">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1227</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=81" target="_blank">Aux Termes...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=81" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=81" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="81">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1227</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=80" target="_blank">Aux termes...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=80" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=80" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="80">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1221</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=79" target="_blank">Siège soci...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=79" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=79" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="79">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1208</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=78" target="_blank">Aux termes...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=78" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=78" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="78">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1221</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=77" target="_blank">Aux termes...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=77" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=77" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="77">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1224</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=76" target="_blank">Aux termes...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=76" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=76" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="76">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1221</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=75" target="_blank">DISSOLUTIO...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=75" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=75" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="75">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1224</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=74" target="_blank">Cession de...</a></td>
 <td>2022-03-26</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=74" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=74" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="74">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1213</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=53" target="_blank">Forme : SO...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=53" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=53" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="53">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1213</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=52" target="_blank">Aux termes...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=52" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=52" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="52">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1213</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=51" target="_blank">Au terme d...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=51" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=51" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="51">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1213</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=50" target="_blank">Aux termes...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=50" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=50" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="50">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1214</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=49" target="_blank">- aux term...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=49" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=49" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="49">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1214</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=48" target="_blank">Aux termes...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=48" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=48" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="48">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1214</td>
 <td>Modification</td>
 <td><a href="../annoneceLegale.php?code=47" target="_blank">Forme : SO...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=47" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=47" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="47">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1214</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=46" target="_blank">Aux termes...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=46" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=46" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="46">Supprimer</button></td>
</tr><tr>
 <th scope="row">#</th>
 <td>1214</td>
 <td>Création</td>
 <td><a href="../annoneceLegale.php?code=44" target="_blank">Aux termes...</a></td>
 <td>2022-03-08</td>
 <td>
 <button class="btn btn-outline-secondary dropdown-toggle" type="button"
 style="background: transparent;color: black;border: 1px solid black;border-radius: 0;"
 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i> action</button>
 <div class="dropdown-menu" style="text-align: left;">
 <a href="modifAnnonce.php?id=44" class="modif" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Modifier</a><br/>
 <a href="../annoneceLegale.php?code=44" class="view" style="color: black;font-size: 26px;text-decoration: none;" target="_blank">Apercu</a><br/>
 <button type="submit" name="suprimer"
 style="border: 1px solid #c8c8c8;
 border-radius: 0;
 color: red;
 background: #ffe6e6;
 padding: 5px;
 margin-right: 6px;"
 value="44">Supprimer</button></td>
</tr>  </tbody>
</table>     
 </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection