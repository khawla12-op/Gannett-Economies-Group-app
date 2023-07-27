@extends('layouts.layout')
@section('ConstitutionSARLAU')

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

<form action="{{ route('store.from.dataAU') }}" method="post">
    @csrf
    <div class="row">
    <input type="text" name="Publier Une Annonce Légale" value=" Constitution SARL AU" style="display:none;">
    <div class="col-md-8 col-11" style="padding-left: 26px;">
        <div class="breadcump"><span>Publier Une Annonce Légale</span>  / Constitution SARL AU</div>
        <div class="Annonce">
            <div class="row">
                <h1>Annonce Constitution Société A Responsabilité Limitée à associés Unique (SARL AU)</h1>
                <div class="col-12 entry">
                    
                    <p>Pour toute création d’une SARL AU, il est obligatoire de procéder à la publication d’une annonce légale. L’<strong> annonce légale de constitution d’une SARL AU</strong> peut se réaliser en ligne ou de façon physique auprès de notre journal d’annonces légales. Cette annonce légale de constitution doit comporter certaines mentions obligatoires, dont certaines sont communes à toutes les sociétés et d’autres spécifiques à la SARL AU.</p>
                </div>
                <div class="col-12 text-center h4" style="letter-spacing: -5px;color: #ecce77;">***********</div>
                <h2>Votre annonce légale de constitution d’une SARL AU</h2>
                <div class="col-12 text-center h4"  style="letter-spacing: -5px;color: #ecce77;">--------------------</div>
                <div class="contact">
                   <div class="col-12 label" >Personne a contacter:</div>
                    <div class="col-12 Nom"><select name="Personne a contacter" id="">
                       <option value="Mr">Mr</option>
                       <option value="Mme">Mme</option>
                       <option value="Melle">Melle</option></select><input name="Nom" type="text"></div>
                    </div>
                    <div class="col-12 label">Email</div>
                    <div class="col-12"><input name="Email" type="text"></div>
                    <div class="col-12 label">Téléphone</div>
                    <div class="col-12"><input name="Téléphone" type="text"></div>
                    <h4>Annonce légale Constitution d'une SARL.AU</h4>
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
                        <select name="Nombre de journaux" id="">
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select>
                    </div>
                    <div class="col-12 label">Votre nom prénom et Adresse en Arabe (facultatif)</div>
                    <div class="col-12 label">النسب <input type="text" name="النسب" placeholder="النسب "></div>
                    <div class="col-12 label">الاسم  <input type="text" name="الاسم" placeholder="الاسم "></div>
                    <div class="col-12 label">العنوان  <input type="text" name="العنوان " placeholder="العنوان  "></div>
                    <div class="col-12 label" style="line-height: 54px;">
                    I- Aux termes d’un acte 
                         <select name="Aux termes d’un acte " id="">
                             <option value="sous seing privé">sous seing privé</option>
                             <option value="acte notarié">acte notarié</option>
                         </select>
                          en date du 
                         <input name=" en date du " type="date" id="">
                         , il a été Responsabilité  Limitée d’Associes Unique dont les caractéristiques sont les suivantes: <br>
                         Forme : 
                         <input type="text" name="Forme"  value="Société A Responsabilité Limitée d’Associes Unique SARL.AU">
                         <br>
                         Dénomination sociale : 
                         
                         <input name="dénomination sociale de la SARL.AU" type="text" placeholder="dénomination sociale de la SARL.AU"><br>
                         
                         Objet social : 
                         
                         <input name="description sommaire de l’objet social" type="text" placeholder="description sommaire de l’objet social de la SARL.AU"><br>
                         Siège social : 
                         
                         <input name="Siège social" type="text" placeholder="Lieu du siège social de la SARL.AU"><br>
                         Durée : 
                         
                         <input name="Durée en ans :" type="number" placeholder="99">
                         ans <br>
                         Capital Social : 
                         <input name="Capital Social" type="number" placeholder="montant du capital social en DHS">
                         
                          divisé en 
                          <input name="divisé en " type="number" placeholder="nombre de parts sociales formant le capital de la SARL.AU">
                         
                          parts sociales de 
                         
                         <input name="parts sociales de " type="number" placeholder="Valeur d’une part sociale">
                          dirhams .
                          <br>
                         <div class="br"></div>
                         Gérant : 
                         
                         <input name="Gérant : " type="text" placeholder="Nom, Prénom et adresse du gérant de la SARL.AU nommé par l’associé unique"><br>
                         Année Sociale : 
                         
                         <input name="Année Sociale : " type="text" placeholder="Du 1er janvier au 31 décembre"><br>
                         Numéro R.C : 
                         
                         <input name="Numéro R.C : " type="text" placeholder="numéro RC"> <input name="Ville1 : " type="text" placeholder="ville2"><br>
                         
                         II- Le dépôt légal a été effectué au 
      <select name="Le dépôt légal a été effectué" id="">
      <option value="Greffe du Tribunal de Commerce">Greffe du Tribunal de Commerce</option>
                             <option value="Tribunal d’Instance">Tribunal d’Instance</option>
                             <option value="Centre Régional d’Investissement">Centre Régional d’Investissement</option>
                         </select>
                          de 
                         
                         <input name="ville2php artisan migrate
" type="text" placeholder="ville">
                          le 
                         <input name="le" type="date">
                          sous le N° 
                         
                         <input name="numéro de dépôt" type="text" placeholder="numéro de dépôt" ><br>
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