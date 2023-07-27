@extends('layouts.layout')
@section('Dissolution')




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
<form action="{{ route('store.DissolutionForm.data') }}" method="post">
    @csrf  
    <div class="row">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
    <input type="text" name="Publier Une Annonce Légale" value=" Annonce Légale de Dissolution d’une SARL" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  / Annonce Légale de Dissolution d’une SARL</div>
        <div class="Annonce">
            <div class="row">
                <h1>Annonce Légale de Dissolution d'une SARL</h1>
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
                    <h4>Annonce Légale de Dissolution d'une SARL</h4>
                <div>
                             Dénomination sociale : 
                         
                         <input name="denomination_sociale" type="text" placeholder="dénomination sociale de la SARL"><br>
                    Forme : 
                    <input type="text" name="forme"  placeholder="Société à responsabilité limitée">
                         <br>
                         Siège Social : 
                         
                         <input name="siege_social" type="text" placeholder="lieu du siège social de la société"><br>
                         Capital Social : 
                         <input name="capital_social" placeholder="montant du capital social ">en DH dirhams.<br>
                         
                          
                         Numéro R.C : 
                         
                         <input name="numero_rc" type="text" placeholder="numéro R.C">   <input name="ville2" type="text" placeholder="ville"><br>
                         I-  Par décision en date du
                         <input name="par_decision_en_date" type="date"   id="">
                         ,  les associé ont décidé la dissolution anticipée de la société à compter du
                         <input name="dissolution_anticipee_date" type="date"   id="">
                         et sa mise en liquidation amiable. 
                         
                         <input   type="text" placeholder="" name="prenom_nom_liquidateur" id="">
                         demeurant 
                         
                         <input name="adresse_liquidateur" type="text" placeholder="adresse du liquidateur"   id="">
                          a été nommé en qualité de liquidateur. Les pouvoirs les plus étendus pour terminer les opérations sociales en cours, réaliser l’actif, acquitter le passif lui ont été confiées. Le siège de liquidation est fixé au 
                         
                         <input name="siege_de_liquidation" type="text" placeholder="lieu du siège de la liquidation"   id="">
                         , au même titre que l’adresse de correspondance.
                         
                         <br>
                         
                         II- Le dépôt légal a été effectué au 
      <select name="depot_legal" id="">
      <option value="Greffe du Tribunal de Commerce">Greffe du Tribunal de Commerce</option>
                             <option value="Tribunal d’Instance">Tribunal d’Instance</option>
                             <option value="Centre Régional d’Investissement">Centre Régional d’Investissement</option>
                         </select>
                          de 
                         
                         <input name="ville" type="text" placeholder="ville">
                          le 
                         <input name="date_depot" type="date">
                          sous le N° 
                         
                         <input name="numero_depot" type="number" placeholder="numéro de dépôt" >
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