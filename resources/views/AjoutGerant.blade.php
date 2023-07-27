@extends('layouts.layout')
@section('AjoutGerant')
<form action="" method="post">
    <div class="row">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
    <input type="text" name="Publier Une Annonce Légale" value="Annonce légale de modification – Ajout ou changement de Gérant" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  / Annonce légale de modification – Ajout ou changement de Gérant</div>
        <div class="Annonce">
            <div class="row">
                <h1>Annonce légale de modification – Ajout ou changement de Gérant</h1>
                <div class="col-12 entry">
                    <p>
                    Lors de la création d’une entreprise on nomme un gérant soit dans les statuts de la société soit lors d’une AGE. Le <strong style="    color: rgb(118 91 0);">changement de ce gérant</strong>  peut être nécessaire dans le cas, d’une démission, d’un décès, d’une révocation, de l’expiration de la durée de son mandat ou la décision d’une cogérance. <br>
                    La décision de <strong style="    color: rgb(118 91 0);">changement de gérant</strong>  doit suivre un certain formalisme juridique. D’abord tenir une AGE nommant le nouveau gérant, et indiquant le gérant partant.  Déclaration au greffe du tribunal de commerce dans le mois de l’acte qui en a décidé.<strong style="    color: rgb(118 91 0);">Publier un avis de modification dans un journal d’annonces légales</strong> . <br>
                    
                    Les représentants légaux de la personne morale doivent être nommés dans l’acte de désignation du gérant et figurés dans l’avis paru dans le journal d’annonces légales.
                <br><br>
            </p>
                </div>
                <h2><strong style="    color: rgb(118 91 0);">Formulaire de modification Annonce légale Ajout ou changement de Gérant</strong> </h2>
                <div class="col-12 text-center h4" style="letter-spacing: -5px;color: #707070;">----------</div>
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
                    <h4>Annonce Légale Changement de Gérant</h4>
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
                    <div class="col-12">
                        <select name="Nombre de journaux:" id="">
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select>
                    </div>
                    <div>
                    Avis de changement de gérant <br>
                    Dénomination:
                    <input name="Nom de la société  Dénomination" type="text" placeholder=""> 
                    <select name="FJ" id="">
                        <option value="SARL">SARL</option>
                        <option value="SARL AU">SARL AU</option>
                    </select> <br>
                    Adresse du siège social : 
                    
                    <input name="Siège sociale Dénomination" type="text" placeholder=""><br>
                    Capital 
                    <input type="number" name="Capital">
                     DHS <br>
                    RC : <input name="RC" type="number" placeholder=""><br>
                    <div class="col-12 text-center h4" style="letter-spacing: -5px;color: #707070;">***********</div>
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
                         <div class="col-12 text-center">Changement de gérance</div>
                         - La nomination d’un nouveau gérant dans la société soit 
                         <input type="text" name=" La nomination d’un nouveau gérant dans la société soit ">
                         . <br>
                         
                         En remplacement de 
                         <input type="text" name="  En remplacement de">
                          partant <br>
                         
                         Modification de l'article n° 
                         <input type="text" name="Modification de l'article n° ">
                          des statuts. <br>
                         
                         Modifications à compter du 
                         <input type="date" name="Modifications à compter du ">
                         . <br>
                         <span style="color: rgb(118 91 0);font-weight: font;font-weight: 700;font-size: 20px;">Espace plus 1 si vous avez autres choses à ajouter <input type="text" name="Espace plus 1 si vous avez autres choses à ajouter"></span><br>
                         <span style="color: rgb(118 91 0);font-weight: font;font-weight: 700;font-size: 20px;">Espace plus 2 si vous avez autres choses à ajouter <input type="text" name="Espace plus 2 si vous avez autres choses à ajouter"></span><br>
                         II - Le dépôt légal a été effectué au 
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