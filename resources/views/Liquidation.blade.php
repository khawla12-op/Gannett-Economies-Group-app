@extends('layouts.layout')
@section('Liquidation')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif 

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form action="{{ route('store.LiquidationForm.data') }}" method="post">
    @csrf 
    <div class="row">
    <div class="col-md-8" style="padding-left: 26px;">
    <input type="text" name="Publier Une Annonce Légale" value=" Annonce légale liquidation SARL" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  /  Annonce légale liquidation SARL</div>
        <div class="Annonce">
            <div class="row">
                <h1> Annonce légale liquidation SARL</h1>
                <div class="contact">
                   <div class="col-12 label">Personne a contacter:</div>
                    <div class="col-12 Nom"><select name="personne_a_contacter" id="">
                       <option value="Mr">Mr</option>
                       <option value="Mme">Mme</option>
                       <option value="Melle">Melle</option></select><input name="nom" type="text"></div>
                    </div>
                    <div class="col-12 label">Email</div>
                    <div class="col-12"><input name="email" type="text"></div>
                    <div class="col-12 label">Télephone</div>
                    <div class="col-12"><input name="telephone" type="text"></div>
                    <h4>Annonce Légale Clôture de Liquidation</h4>
                    <div class="col-12 label">A publier dans :</div>
                    <div class="col-12">
                        <select name="a_publier_dans" id="">
                            <option value="Journal">Journal</option>
                            <option value="Journal + Bulletin Officiel">Journal + Bulletin Officiel</option>
                            <option value="Bulletin Officiel uniquement">Bulletin Officiel uniquement</option>
                        </select>
                    </div>
                    
                    <div class="col-12 label">Nombre de journaux:</div>
                    <div class="col-12">
                        <select name="" id="nombre_de_journaux">
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select>
                        <br>
                    Dénomination sociale : 
                         
                         <input name="denomination_sociale" type="text" placeholder="dénomination sociale de la société"><br>
                    Forme : 
                    <input type="text" name="forme"  placeholder="forme juridique de la société suivie de la mention en liquidation">
                         <br>
                         Siège Social : 
                         
                         <input name="siege_social " type="text" placeholder="lieu du siège social de la société"><br>
                         Capital Social : 
                         <input name="capital_social" type="number" placeholder="montant du capital social ">dirhams.<br>
                         
                          
                         Numéro R.C : 
                         
                         <input name="numero_rc" type="text" placeholder="numéro R.C"> ville  <input name="ville2" type="text" placeholder="ville"><br>
                         I- 
                         Aux termes d’une délibération de l’assemblée générale ordinaire en date du 
                          <input name="aux_termes_deliberation_date" type="date"  id="">
                          , la collectivité des associés a : <br>
                          Approuvé les comptes définitifs de la liquidation,
                          Donné quitus au Liquidateur, Monsieur 
                          
                          <input name="nom_prenom_adresse_liquidateur" type="text" placeholder="nom, prénom et adresse du liquidateur">
                          <br> 
                          pour sa gestion et le décharge de son mandat, <br/> prononcé la clôture des opérations de liquidation à compter du jour de ladite
Assemblée.
                         <br> <br>
                         
                         II- Le dépôt légal a été effectué au 
      <select name="depot_legal" id="">
      <option value="Greffe du Tribunal de Commerce">Greffe du Tribunal de Commerce</option>
                             <option value="Tribunal d’Instance">Tribunal d’Instance</option>
                             <option value="Centre Régional d’Investissement">Centre Régional d’Investissement</option>
                         </select>
                          de 
                         
                         <input name="ville" type="text" placeholder="ville">
                          le 
                         <input name="le" type="date">
                          sous le N° 
                         
                         <input name="date_depot" type="number" placeholder="numero_depot" > <br>
                         Radiation au R.C de <input type="text" name='villeDe' placeholder="ville"><br>
                         Pour avis et mention. <br>
                         
                         LE GÉRANT <br>
                         
                         En envoyant ce formulaire, vous acceptez notre politique de confidentialité.
                    </div>
                    <div class="mt-3 col-md-4 col-12"><button type="submit" name="envoyer"><i class="fa fa-2x fa-solid fa-paper-plane" style="    font-size: 21px;"></i> Envoyer</button></div>
            </div>
        </div>
      </div>
    </form>
    @endsection