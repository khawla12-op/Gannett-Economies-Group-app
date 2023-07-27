<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANNETT</title>
    <link href="/css/main.css" rel="stylesheet">

 
    <script src="ApresConnexion/script.js"></script>

    <script src='https://kit.fontawesome.com/f0841bede9.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../images/LOGO-GANNETT-ECONOMIES-png100px-ts1608958834.png" type="image/png">
    <script src='https://cdn.tiny.cloud/1/kc5nn9kytz43ny8mfmzwtoz1vihmsm1o0fqxdilke4vj1z4u/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <style>
        textarea button :hover {
            background: transparent;
        }

        textarea button :focus {
            background: transparent;
        }
        *::selection{
            background-color: rgba(230,197,90,1);
            color:black;
        }
    </style>
</head>


<body>
    <form >
        <div class="nav bootstrap-off">
            <label class="toggle" style="color:rgba(230,197,90,1)" for="toogle"><i class="fas fa-list"></i></label>
            <input type="checkbox" name="" id="toogle">
            <div class="menu ">
                <div>
                    <a style="padding-left: 10px;padding-right: 10px;" href="Apresconnexion.php"><i class="fas fa-home"></i></a>
                </div>


                <div><i class="fas fa-calendar-check"></i> Annonces Légales <i class="fas fa-angle-double-down"></i>
                    <ul>
                        <li><a href="/NouveauAnnonceLegale"><i class="fas fa-plus-square"></i> Nouveau D’annonce Légale</a></li>
                        <li><a href="/GestionAnnonceLegale"><i class="fas fa-tasks"></i> Gestion D’annonces Légales</a></li>
                        <li><a href="/ListePublication"><i class="fas fa-stream"></i> Listes Publications</a></li>
                    </ul>
                </div>

                <div><i class="far fa-file-alt"></i> Les publicités <i class="fas fa-angle-double-down"></i>
                    <ul>
                        <li><a href="/NouvellePublicite"><i class="fas fa-plus-square"></i> Nouvelle publicité</a></li>
                        <li><a href="/GestionPublicite"><i class="fas fa-stream"></i> Gestion publicités</a></li>
                    </ul>
                </div>



                <div><i class="far fa-credit-card"></i> Rapport <i class="fas fa-angle-double-down"></i>
                    <ul>
                        <li><a href="/NouveauRapport"><i class="fas fa-plus-square"></i> Nouveau Rapport</a></li>
                        <li><a href="/ListeRapport"><i class="fas fa-stream"></i> Liste Rapports</a></li>
                    </ul>
                </div>
                <div>
                    <a style="display:none;padding-left: 10px;padding-right: 10px;" href="parametres.php"><i class="fas fa-cog"></i> Parametres </a>
                </div>
                <div class="btn-disabled">
                    <button name="deco" class="button" type="submit" onclick="redirectToIndex()">
                        <i class="fas fa-sign-out-alt"></i> <a href="/deconnexion">Se déconnecter</a>
                    </button>
                </div>
            </div>
        </div>
<!--Section part-->
@yield('walo')
@yield('NouveauAnnonceLegale')
@yield('GestionAnnonceLegale')
@yield('ListePublication')
@yield('NouvellePublicite')
@yield('GestionPublicite')
@yield('NouveauRapport')
@yield('ListeRapport')





                <script>
                    function redirectToIndex() {
                        window.location.href = "../public/index.php";
                    }
                </script>
            </div>

        </div>
    </form>
</body>

</html>