@extends('layouts.layout2')
@section('ListeRapport')
<form action="" onSubmit="return confirm('confirmation')" method="post">
    <div class="connexion">
      <div class="row">
        <div class="col-12 text-center">
         <button class="mb-2"><a href="NouveauRapport.php" style="height: 10vh;/* background: blue; */padding: 13px;text-decoration: none;color: white;">Ajouter une Rapport</a></button>   
        <div class="row">
          <div class="col-12" >
            <label for="" class="h5">Rechereche Par Date</label>
         <input type="date" name="societe"  value="" placeholder="Recherche par numero ou sociéte">
        
         <button id="buton" type="submit">Recherche</button>
          </div>
          
        </div>
         <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Le reste</th>     
        <th scope="col">Plus L'informations</th>
        <th scope="col">Le total</th>
        <th scope="col">Date Insére</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      
        </tbody>
  </table>     
        </div>
      </div>
    </div>
  </form>
  @endsection