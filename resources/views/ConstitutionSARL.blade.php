@extends('layouts.layout')
@section('ConstitutionSARL')

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

<form action="{{ route('store.form.data') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-8 col-11" style="padding-left: 26px;">
            <input type="text"  value="Annonce Constitution Société A Responsabilité Limitée (SARL)" style="display:none;">
            <div class="breadcump"><span>Publier Une Annonce Légale</span>  / Annonce Constitution Société A Responsabilité Limitée (SARL)</div>
            <div class="Annonce">
                <div class="row">
                    <h1>Annonce Constitution Société A Responsabilité Limitée (SARL)</h1>
                    <div class="col-12 entry">
                        <h2>Annonce Légale Création Société Maroc (SARL)</h2>
                        <p>Création d’entreprise, modification de statuts, changement de gérance, de siège ou encore de durée, dissolution ou liquidation, tous les évènements d’une société commerciale doivent faire l’objet d’une publication au <strong>Journal d’annonces légales</strong>  (JAL) .</p>
                    </div>
                    <div class="col-12 text-center h4"  style="letter-spacing: -21px;color: #ecce77;">----------</div>
                    <div class="contact">
                        <div class="col-12 label">Personne à contacter:</div>
                        <div class="col-12 Nom">
                            <select>
                                <option value="Mr">Mr</option>
                                <option value="Mme">Mme</option>
                                <option value="Melle">Melle</option>
                            </select>
                            <input name="Personne_a_contacter" type="text">
                        </div>
                    </div>
                    <div class="col-12 label">Email</div>
                    <div class="col-12"><input name="Email" type="text"></div>
                    <div class="col-12 label">Téléphone</div>
                    <div class="col-12"><input name="Téléphone" type="text"></div>
                    <h3>Annonce Légale Constitution d'Une SARL</h3>
                    <div class="col-12 label" >A publier dans :</div>
                    <div class="col-12">
                        <select name="A_publier_dans">
                            <option value="Journal">Journal</option>
                            <option value="Journal + Bulletin Officiel">Journal + Bulletin Officiel</option>
                            <option value="Bulletin Officiel uniquement">Bulletin Officiel uniquement</option>
                        </select>
                    </div>
                    <div class="col-12 label" name="Nombre_de_journaux">Nombre de journaux:</div>
                    <div class="col-12">
                        <select>
                            <option value="PDF">PDF</option>
                            <option value="2 Journaux">2 Journaux</option>
                            <option value="3 Journaux">3 Journaux</option>
                            <option value="4 Journaux">4 Journaux</option>
                        </select>
                    </div>
                    <div class="col-12 label" name="Aux_termes_dun_acte">
                        I- Aux termes d’un acte
                        <select>
                            <option value="sous seing privé">sous seing privé</option>
                            <option value="acte notarié">acte notarié</option>
                        </select>
                        en date du
                        <input name="en_date_du" type="date">
                        , il a été constitué une société A Responsabilité Limitée dont les caractéristiques sont les suivantes :
                    </div>
                    <div class="col-12 label">Numéro R.C : <input name="Numéro_R_C" type="text" placeholder="Numéro R.C :"></div>
                    <div class="col-12 label">Forme :
                        <input type="text" name="Forme"  value="Société à responsabilité limitée SARL">
                    </div>
                    <div class="col-12 label">Dénomination sociale : <input name="Dénomination_sociale" type="text" placeholder="Dénomination sociale :"></div>
                    <div class="col-12 label">Objet social : <input name="Objet_social" type="text" placeholder="description sommaire de l’objet social de la SARL"></div>
                    <div class="col-12 label">Siège social : <input name="Siège_social" type="text" placeholder="Lieu du siège social de la SARL"></div>
                    <div class="col-12 label">Durée :   <input name="Durée" type="number" placeholder=""> ans.</div>
                    <div class="col-12 label">
                        Capital social :
                        <input name="montant_du_capital_social_en_DHS" type="text" placeholder="montant du capital social en DHS">
                        DHS divisé en
                        <input name="nombre_de_parts_sociales" type="text" placeholder="nombre de parts sociales">
                        parts sociales de
                        <input name="Valeur_dune_part_sociale" type="text" placeholder="Valeur d’une part sociale">
                        dirhams.
                    </div>
                    <div class="col-12 label">Les associés :</div>
                    <div class="col-12 label">
                        <input name="Nom_Prénom_et_adresse_1er_associé" type="text" placeholder="Nom Prénom et adresse 1er associé">
                        <input name="Le_nombre_de_parts" placeholder="Le nombre de parts" type="text">Parts sociales
                    </div>
                    <div class="col-12 label">
                        <input name="Nom_Prénom_et_adresse_2er_associé" type="text" placeholder="Nom Prénom et adresse 2er associé">
                        <input name="Le_nombre_de_parts_2" placeholder="Le nombre de parts" type="text">Parts sociales
                    </div>
                    <textarea style="width: 100%;margin-left:0%;" name="Nom_Prénom_adresse_et_nombre_de_parts_des_autres_associés" id="" cols="" rows="5" placeholder="Nom Prénom adresse et nombre de parts des autres associés" class="col-12"></textarea>
                    <div class="col-12 label"><input name="total_des_parts" type="text" placeholder="total des parts"> Parts sociales</div>
                    <div class="col-12 label">Gérance :</div>
                    <div class="col-12 label">
                        <select name="Gérance" id="">
                            <option value="Gérant">Gérant</option>
                            <option value="Gérante">Gérante</option>
                            <option value="Co-Gérant">Co-Gérant</option>
                            <option value="Co-Gérante">Co-Gérante</option>
                        </select>
                        <input name="Nom_Prénom_et_adresse_du_gérant_ou_du_co_gerant" type="text" placeholder="Nom, Prénom et adresse du gérant ou du co-gerant">
                    </div>
                    <div class="col-12 label">
                        <select name="co_gerant_1" id="">
                            <option value=""></option>
                            <option value="Co-Gérant">Co-Gérant</option>
                            <option value="Co-Gérante">Co-Gérante</option>
                        </select>
                        <input name="Nom_Prénom_et_adresse_du_gérant" type="text" placeholder="Nom, Prénom et adresse du gérant">
                    </div>
                    <div class="col-12 label">
                        <select name="co_gerant_2" id="">
                            <option value=""></option>
                            <option value="Co-Gérant">Co-Gérant</option>
                            <option value="Co-Gérante">Co-Gérante</option>
                        </select>
                        <input name="Nom_Prénom_et_adresse_du_gérant2" type="text" placeholder="Nom, Prénom et adresse du gérant">
                    </div>
                    <div class="col-12 label">Année Sociale : <input name="Année_Sociale" type="text" placeholder="Du 1er janvier au 31 décembre" value="Du 1er janvier au 31 décembre">
                        <br>
                        <input type="text" placeholder="Text libre" name="Text_libre">
                    </div>
                    <div class="col-12 label">
                        II- Le dépôt légal a été effectué au
                        <select name="Le_dépôt_légal_a_été_effectué_au" id="">
                            <option value="Greffe du Tribunal de Commerce">Greffe du Tribunal de Commerce</option>
                            <option value="Tribunal d’Instance">Tribunal d’Instance</option>
                            <option value="Centre Régional d'Investissement">Centre Régional d'Investissement</option>
                        </select>
                        de
                        <input name="ville" type="text" placeholder="ville">
                        le
                        <input name="le" type="date" placeholder="date">
                        sous le N°
                        <input name="numero_de_dépôt" type="text" placeholder="numero de dépôt">
                        Pour avis et mention.
                        <br>
                        LE GÉRANT
                        <br>
                        En envoyant ce formulaire, vous acceptez notre politique de confidentialité.
                    </div>
                    <div class="mt-3 col-md-4 col-12"><button type="submit" name="envoyer"><i class="fa fa-2x fa-solid fa-paper-plane" style="    font-size: 21px;"></i> Envoyer</button></div>
                </div>
            </div>
        </div>
    </div>

</form>
<div class="col-md-4 mt-2"  style="padding-right: 19px;">
    <a href=""><img class='' style='    border: 2px solid #d8d8d8;
    background: white;
    padding: 5px;
    border-radius: 3px;width:100%;' src='/img/pub2.png'/></a>
    <div class="row annonce" style="direction:ltr;">
        <a href="../annoncePub.php?numero=129" class="">
            <div class="col-md-12 pb-2 bg-white">
                <div class="row m-1">
                    <img style="height: 214px;" src="/img/gannett-ar-5051356.png" alt="" class="col-12">
                    <div class="col-12 titre" style="    padding-right: 18px;">JOURNAUX QUOTIDIENS SPÉCIALISÉS DANS LA PUBLICITÉ LÉGALE</div>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
@endsection
