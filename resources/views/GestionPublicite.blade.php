@extends('layouts.layout2')
@section('GestionPublicite')
<div class="col-12 mb-2 text-center mt-2">
    <marquee behavior="" direction="">
        <h3>Liste Annonces</h3>
    </marquee>
    <a href="NouvellePublicites.php" class="pt-1 pb-1" style="text-decoration:none;background-color:#418F3E;color:white;border:0;border-radius:5px;padding:5px;"><i class="fas fa-plus-circle"></i> Ajouter Annonce</a>
    <input type="text" name="input" value="" style="outline:none;"><button name="rech" type="submit" class="pt-1 pb-1" style="background-color:#0040FF;color:white;border:0;"><i class="fas fa-search"></i> Recherche</button>
</div>
<div class="col-12">
    <table class="table table-striped table-primary">
        <tr>
            <td>Titre Annonce:</td>
            <td>Télephone</td>
            <td>Site</td>
            <td>Pages</td>
            <td>Photo</td>
            <td>action</td>
        </tr>
        <tr>
            <td>JOURNAUX QUOTIDIENS SPÉCIALISÉS DANS LA PUBLICITÉ LÉGALE</td>
            <td>+212631933957</td>
            <td>https://www.gannetteconomies.com/index.php</td>
            <td>Publier Une Annonce Légale<br />Modèles d’annonces<br /></td>
            <td><img src='/img/gannett-ar-5051356.png' alt='' srcset=''></td>
            <td><button class='btn btn-outline-dark dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fas fa-cog'></i>Action</button>
                <div class='dropdown-menu'>
                    <span style='' onclick="Apercu('')" class='p-2'><a class='view' style='text-decoration:none;color:black' target='_blank' href='../annoncePub.php?numero=129'>Apercu</a></span><br />
                    <span onclick="Modifier('129')" class='p-2'><a class='modif' style='text-decoration:none;color:black' href='modifierAnnonce.php?id=129'>Modifier</a></span><br />
                    <button type='submit' name='suprimer' style='  padding: 0px;
                    padding-top: 0px;
                    padding-left: 4px;
                    border-radius: 0;
                    padding-right: 4px;
                    color: #c22c2c;
                    background: #ffd1d1;
                    border: 1px solid #ffbcbc;
                    border-radius: 3px;
                    font-size: 23px;' value='129'>Supprimer</button>
                </div>
            </td>
        </tr>
    </table>
</div>
</div>


@endsection