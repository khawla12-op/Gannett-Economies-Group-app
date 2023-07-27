@extends('layouts.layout')
@section('Modification')
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


    <form action="{{ route('store.ModificationsForm.data') }}" method="post">
        @csrf
    
    <div class="row">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
    <input type="text" name="Publier Une Annonce Légale" value=" Formulaire d’annonce légale plusieurs modifications" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  / Formulaire d’annonce légale plusieurs modifications</div>
        <div class="Annonce">
            <div class="row">
                <h1>Formulaire d’annonce légale plusieurs modifications</h1>
                <div class="col-12 entry">
                    <p><strong>Voici un formulaire d’annonce légale de plusieurs modifications qui comporte les renseignements et mentions obligatoires. Modèle d’annonce légale de modification de société qui officialise des changements majeurs au sein de votre entreprise .</strong>
                <br><br>
            <strong>Les mentions obligatoires pour une annonce de modification</strong>   <br>
            Mentions obligatoires à fournir pendant la rédaction d’une annonce de modification
            <ul style="list-style: decimal;">
             <li>1-Dénomination sociale</li>
             <li>2-forme sociale (SARL-EURL)</li>
             <li>3-Nature du changement : Modification Démissio</li>
             <li>4-montant du capital social</li>
             <li>5-adresse du siège social</li>
             <li>6-numéro du R.C.S</li>
             <li>7-Ville du Greffe</li>
             <li>8-Choix du type d’assemblée</li>
             <li>9-Modification</li>
             <li>10-Date d’effet Modification</li>
            </ul>
            </p>
                </div>
                <div class="col-12 text-center h4"  style="letter-spacing: -5px;color: #707070;">----------</div>
                <div class="contact">
                    <div class="col-12 label">Personne a contacter:</div>
                    <div class="col-12 Nom"><select name="personne_a_contacter" id="">
                       <option value="Mr">Mr</option>
                       <option value="Mme">Mme</option>
                       <option value="Melle">Melle</option></select><input name="Nom" type="text"></div>
                    </div>
                    <div class="col-12 label">Email</div>
                    <div class="col-12"><input name="email" type="text"></div>
                    <div class="col-12 label">Télephone</div>
                    <div class="col-12"><input name="telephone" type="text"></div>
                    <h4>Annonce Légale plusieurs modifications</h4>
                    <h3></h3>
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
                        <select name="nombre_journaux" id="">
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select><br>
                        Dénomination sociale : 
                         
                         <input name="denomination_sociale" type="text" placeholder="dénomination sociale de la SARL.AU"><br>
                         Forme : 
                         <select name="forme_sociale" id="">
                         <option value="SARL">SARL</option><option value="SARL.AU">SARL.AU</option><option value="SNC">SNC</option>
                                                 </select>
                         <br>
                         Siège Social : 
                         
                         <input name="Siege_social" type="text" placeholder="lieu du siège social de la société"><br>
                         Capital Social : 
                         <input name="capital_social" type="number" placeholder="montant du capital social ">dirhams.<br>
                         
                          
                         Numéro R.C : 
                         
                         <input name="numero_rcs " type="text" placeholder="numéro R.C">   <input name="ville" type="text" placeholder="ville"><br>
                        
                    </div>

                    <div class="col-12 label">
                    I- L’assemblée générale extraordinaire en date du 
                         <input type="date" name="extraordinaire_date">
                         , les associés de la société          
                         <input type="text" palaceholder="la_societe" name="dénomination sociale de la société">
                          ont décidé ce qui suit :
                    <br>
                    <strong>Ajouter une cession des parts sociales 
                        <select name="ajouter_cession_parts_sociales" id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                    <strong>Ajouter un changement de gérant 
                        <select name="ajouter_changement_gerant" id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                    <strong>Ajouter modification objet sociale 
                        <select name="ajouter_modification_objet_sociale " id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                    <strong>Ajouer transfert du siège sociales 
                        <select name="ajouter_transfert_siege_social " id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                    <strong>Ajouer changement de dénomination 
                        <select name="ajouter_changement_denomination" id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                    <strong>Ajouer transformation de la forme juridique 
                        <select name="ajouter_transformation_forme_juridique" id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                    <strong>Ajouter un text libre 
                        <select name="ajouter_texte_libre" id="">
                        <option value="NON">NON</option>
                        <option value="OUI">OUI</option>
                    </select></strong><br>
                    <strong style="color: #5b5b5b;">*******</strong><br>
                       <div class="col-12 label">
                       II-Modification 
                        <select name="modification_article" id="">
                            <option value="de l'article">de l'article</option>
                            <option value="des articles">des articles</option>
                        </select>
                         <input type="text" name="numeros_articles_modifies" placeholder="numéros des articles à modifier ex: 4,7,9">
                        
                         des statuts<br>
                        <strong style="color: #5b5b5b;">*******</strong>
                       </div>
                         
                         III - Le dépôt légal a été effectué au 
                         <select name="depot_legal" id="">
                         <option value="Greffe du Tribunal de Commerce">Greffe du Tribunal de Commerce</option>
                             <option value="Tribunal d’Instance">Tribunal d’Instance</option>
                             <option value="Centre Régional d’Investissement">Centre Régional d’Investissement</option>
                         </select>
                          de 
                         
                         <input name="ville_depot" type="text" placeholder="ville">
                          le 
                         <input name="date_depot" type="date">
                          sous le N° 
                         
                         <input name="numero_depot" type="text" placeholder="numéro de dépôt" ><br>
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