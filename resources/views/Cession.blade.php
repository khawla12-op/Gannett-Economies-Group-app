@extends('layouts.layout')
@section('Cession')

<form action="{{ route('store.CessionForm.data') }}" method="post">
    @csrf
    <div class="row">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
        <input type="text" name="Publier Une Annonce Légale" value="Annonce Légale Cession des Parts Sociales et changement de gérant" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  / Annonce Légale Cession des Parts Sociales et changement de gérant</div>
        <div class="Annonce">
            <div class="row">
                <h1>Annonce Légale Cession des Parts Sociales et changement de gérant</h1>
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
                    <h3></h3>
                    <div class="col-12 label">A publier dans :</div>
                    <div class="col-12">
                          <select name="A publier dans" id="">
                            <option value="Journal">Journal</option>
                            <option value="Journal + Bulletin Officiel">Journal + Bulletin Officiel</option>
                            <option value="Bulletin Officiel uniquement">Bulletin Officiel uniquement</option>
                        </select>
                    </div>
                    
                    <div class="col-12 label">Nombre de journaux:</div>
          876543          <div class="col-12">
                        <select name="Nombre de journaux" id="">
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select>
                    </div>
                    <div class="col-12 label">
                    <h4>Annonce Légale Cession des Parts Sociales</h4>
                    
Dénomination Sociale : 
<input type="text" name="Dénomination sociale de la société" placeholder="Dénomination sociale de la société"><br>
Forme : 
<input type="text" name="Forme"  placeholder="Forme juridique de la société">
<br>
Siège Social : 
<input type="text" name="Lieu du siège social de la société" placeholder="Lieu du siège social de la société"><br>
Capital Social : 
<input type="text" name="montant du capital social en DH" placeholder="montant du capital social en DH">
 dirhams. <br>
Numéro R.C : 
<input type="text" name="numéro R.C" placeholder="numéro R.C">
<input type="text" name="ville2" placeholder="ville"><br>
I- L’assemblée générale extraordinaire en 
<input type="date" name="L’assemblée générale extraordinaire en " placeholder="">
, les associés de la société ont décidé ce qui suit :
<br>
- <br>
- La nomination d’un nouveau gérant dans la société soit 
<input type="text" name="La nomination d’un nouveau gérant dans la société soit " placeholder="">
.
En remplacement de 
<input type="text" name="En remplacement de " placeholder="">
 partant <br>
Cession de part : Mr 
<input type="text" name="Nom et prénom" placeholder="Nom et prénom">
 cède 

<input type="number" name="nombredeparts" placeholder="nombre de parts">
parts sociales à Mr 
<input type="text" name="Nom et prénom" placeholder="Nom et prénom">
 :
<textarea name="Texte libre" style="width: 100%;margin-left:0;" placeholder="Texte libre" class="col-12" id="" cols="30" rows="5"></textarea>
Nouvelles répartition des parts : <br>
<input type="text" name="Nom Prénom" placeholder="Nom Prénom">
<input type="number" name="Nombre de parts" placeholder="Nombre de parts"><br>
<input type="text" name="monsieur" placeholder="monsieur">
<input type="number" name="Nombre de parts_" placeholder="Nombre de parts"><br>
<input type="text" name="monsieur" placeholder="monsieur">
<input type="number" name="Nombre de parts__" placeholder="Nombre de parts"><br>
<br>
Soit un total de :
<input type="number" name="Total des parts" placeholder="Total des parts"><br>
Modification des articles
<input type="text" name="numéro d'article" placeholder="numéro d'article">
 des statuts
                         <br>
                         
                         II- Le dépôt légal a été effectué au 
      <select name="Le dépôt légal a été effectué" id="">
                             <option value="- Greffe du Tribunal de Commerce">- Greffe du Tribunal de Commerce</option>
                             <option value="- Tribunal d’Instance">- Tribunal d’Instance</option>
                             <option value="- Centre Régional d’Investissement">- Centre Régional d’Investissement</option>
                         </select>
                          de 
                         
                         <input name="ville" type="text" placeholder="ville">
                          le 
                         <input name="le" type="date">
                          sous le N° <br>
                         
                         <input name="numéro de dépôt" type="number" placeholder="numéro de dépôt" ><br>
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