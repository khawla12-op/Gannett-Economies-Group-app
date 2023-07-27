@extends('layouts.layout')
@section('Liquidation')
<form action="" method="post">
    <div class="row">
    <div class="col-md-8" style="padding-left: 26px;">
    <input type="text" name="Publier Une Annonce Légale" value=" Annonce légale liquidation SARL" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  /  Annonce légale liquidation SARL</div>
        <div class="Annonce">
            <div class="row">
                <h1> Annonce légale liquidation SARL</h1>
                <div class="contact">
                   <div class="col-12 label">Personne a contacter:</div>
                    <div class="col-12 Nom"><select name="Personne a contacter" id="">
                       <option value="Mr">Mr</option>
                       <option value="Mme">Mme</option>
                       <option value="Melle">Melle</option></select><input name="Nom" type="text"></div>
                    </div>
                    <div class="col-12 label">Email</div>
                    <div class="col-12"><input name="Email" type="text"></div>
                    <div class="col-12 label">Télephone</div>
                    <div class="col-12"><input name="Télephone" type="text"></div>
                    <h4>Annonce Légale Clôture de Liquidation</h4>
                    <div class="col-12 label">A publier dans :</div>
                    <div class="col-12">
                        <select name="A publier dans" id="">
                            <option value="Journal">Journal</option>
                            <option value="Journal + Bulletin Officiel">Journal + Bulletin Officiel</option>
                            <option value="Bulletin Officiel uniquement">Bulletin Officiel uniquement</option>
                        </select>
                    </div>
                    
                    <div class="col-12 label">Nombre de journaux:</div>
                    <div class="col-12">
                        <select name="Nombre de journaux" id="">
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select>
                        <br>
                    Dénomination sociale : 
                         
                         <input name="Dénomination sociale" type="text" placeholder="dénomination sociale de la société"><br>
                    Forme : 
                    <input type="text" name="Forme"  placeholder="forme juridique de la société suivie de la mention en liquidation">
                         <br>
                         Siège Social : 
                         
                         <input name="Siège Social " type="text" placeholder="lieu du siège social de la société"><br>
                         Capital Social : 
                         <input name="Capital Social" type="number" placeholder="montant du capital social ">dirhams.<br>
                         
                          
                         Numéro R.C : 
                         
                         <input name="numéro R.C" type="text" placeholder="numéro R.C"> ville  <input name="ville2" type="text" placeholder="ville"><br>
                         I- 
                         Aux termes d’une délibération de l’assemblée générale ordinaire en date du 
                          <input name="Aux termes d’une délibération de l’assemblée générale ordinaire en date du " type="date"  id="">
                          , la collectivité des associés a : <br>
                          Approuvé les comptes définitifs de la liquidation,
                          Donné quitus au Liquidateur, Monsieur 
                          
                          <input name="nom, prénom et adresse du liquidateur" type="text" placeholder="nom, prénom et adresse du liquidateur">
                          <br> 
                          pour sa gestion et le décharge de son mandat, <br/> prononcé la clôture des opérations de liquidation à compter du jour de ladite
Assemblée.
                         <br> <br>
                         
                         II- Le dépôt légal a été effectué au 
      <select name="Le dépôt légal a été effectué" id="">
      <option value="Greffe du Tribunal de Commerce">Greffe du Tribunal de Commerce</option>
                             <option value="Tribunal d’Instance">Tribunal d’Instance</option>
                             <option value="Centre Régional d’Investissement">Centre Régional d’Investissement</option>
                         </select>
                          de 
                         
                         <input name="ville" type="text" placeholder="ville">
                          le 
                         <input name="le" type="date">
                          sous le N° 
                         
                         <input name="numéro de dépôt" type="number" placeholder="numéro de dépôt" > <br>
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