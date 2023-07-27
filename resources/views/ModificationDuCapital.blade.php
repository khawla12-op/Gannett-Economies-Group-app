@extends('layouts.layout')
@section('ModificationDuCapital')
<form action="" method="post">
    <div class="row">
    <input type="text" name="Publier Une Annonce Légale" value="  Annonce légale modification du capital social" style="display:none;">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  /  Annonce légale modification du capital social</div>
        <div class="Annonce">
            <div class="row">
                <h1> Annonce légale modification du capital social</h1>
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
                        <br>    Société <br>
                    Dénomination:
                    <input name="Nom de la société  Dénomination" type="text" placeholder=""> 
                    <select name="FJ" id="">
                        <option value="SARL">SARL</option>
                        <option value="SARL AU">SARL AU</option>
                    </select> <br>
                    Adresse du siège social 
                    
                    <input name="Siège sociale Dénomination" type="text" placeholder=""><br>
                    Capital 
                    <input type="number" name="Capital">
                     DHS <br>
                    RC  <input name="RC" type="number" placeholder=""><br>
                    I- Par décision 
                         <select name="Par décision" id="">
                             <option value="de l'assemblée Générale Extraordinaire (AGE)">de l'assemblée Générale Extraordinaire (AGE)</option>
                             <option value="de l'assemblée Générale Ordinaire (AGO)">de l'assemblée Générale Ordinaire (AGO)</option>
                             <option value="de l'assemblée Générale Mixte">de l'assemblée Générale Mixte</option>
                             <option value="du gérant">du gérant</option>
                             <option value="du Président">du Président</option>
                             <option value="de l'associé Unique">de l'associé Unique</option>
                             <option value="du conseil d'administration">du conseil d'administration</option>
                             <option value="les associés">les associés</option>
                             <option value="par décision unanime">par décision unanime</option>
                         </select>
                          , en date du 
                         <input type="date" name="jj/mm/aaaa" >il a été décidé ce qui suit :
                         <div class="col-12 text-center">Modification de capital</div>
                         - L’augmentation du capital social de la société afin de le porter de 
                         <input type="number" name=" société afin de le porter de " id="">
                          dirhams à 
                         <input type="number" name="dirhams à " id=""> dirhams 
                         <div class="col-12 text-center">_______________________</div>
                          Modification de l'article n° <input type="number" name="Modification de l'article n°" id="">
                           des statuts. <br>
                          Modifications à compter du 
                          <input type="date" name="jj/mm/aaaa" id="">
                          . <br>
                          <input type="text" name="t1" id=""> <br>
                          <input type="text" name="t2" id="">
                          <br>
                         
                          Le dépôt légal a été effectué au 
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
                         
                         <input name="numéro de dépôt" type="number" placeholder="" >.
                         <br/>Pour extrait et mention <br>
                         
                         LE GÉRANT <br>
                         
                         En envoyant ce formulaire, vous acceptez notre politique de confidentialité.
                    </div>
                    <div class="mt-3 col-md-4 col-12"><button type="submit" name="envoyer"><i class="fa fa-2x fa-solid fa-paper-plane" style="    font-size: 21px;"></i> Envoyer</button></div>
            </div>
        </div>
      </div>
    </form>
    @endsection