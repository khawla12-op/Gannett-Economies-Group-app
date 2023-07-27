@extends('layouts.layout')
@section('Transfert')
<form action="" method="post">
    <div class="row">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
    <input type="text" name="Publier Une Annonce Légale" value="  Annonce légale modification Transfert siège" style="display:none;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  /  Annonce légale modification Transfert siège</div>
        <div class="Annonce">
            <div class="row">
                <p>
                Le journal d’annonce légale GANNETT ECONOMIES propose plusieurs prestations <strong>gratuites</strong> , comme la <strong>rédaction et relecture de vos annonces et publication</strong> . Mais aussi la saisie et mise aux normes de vos annonces transmis sur support papier ou électronique pour publication au journal. <br><br>
                Nous sommes à votre disposition  par téléphone au <strong>05 22 47 01 08</strong>  ou sur le portable au <strong>06 31 93 39 57</strong>
                </p>
                <h1> Annonce légale modification Transfert siège</h1>
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
                    <h4>Annonce Légale Transfert de Siège Social</h4>
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
                        Société <br>
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
                    RC  <input name="RC" type="number" placeholder=""><input name="ville2" type="text" placeholder="ville"><br>
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
                         <input type="date" name="jj/mm/aaaa" >il a été décidé ce qui suit : <br>
                         - Le transfert du siège social de la société à l'adresse
                         <input type="text" name="Le transfert du siège social de la société à l'adresse">
                         <div class="col-12 text-center">________________________</div>
                         Modifications à compter du 
                         
                         <input type="date" name="jj/mm/aaaa" id=""><br/>
                         
                         Modification de l'article n° 
                         <input type="number" name=" l'article n° " id="">
                          des statuts
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
                         
                         <input name="numéro de dépôt" type="number" placeholder="" > <br>
                         Pour extrait et mention. <br>
                         
                         LE GÉRANT <br>
                         
                         En envoyant ce formulaire, vous acceptez notre politique de confidentialité.
                    </div>
                    <div class="mt-3 col-md-4 col-12"><button type="submit" name="envoyer"><i class="fa fa-2x fa-solid fa-paper-plane" style="    font-size: 21px;"></i> Envoyer</button></div>
            </div>
        </div>
      </div>
    </form>
    @endsection