<!DOCTYPE html>
<!-- déclaration de la langue du document à l'usage des lecteurs pour a11i -->
<html lang="fr">

    <head>
    <!-- déclaration de l'usage de l'encodage utf-8 -->
    <meta charset="utf-8" />

    <!-- déclaration de l'intention pour le RWD de s'adapter au dispositif, à partir du niveau de zoom 1:1, sans réduction du contenu à la largeur du dispositif -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- titre du document, utilisé pour les résultats de recherche et pour l'onglet du naviguateur -->
    <title>Form</title>

    <!-- description courte (< 160 chars) du contenus du document pour les moteurs de recherches et le réf. -->
    <meta name="description" content="">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" /> -->
    <!-- OU -->
    <!-- reboot CSS by Bootstrap  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-reboot.min.css" /> -->

    <!-- feuille de CSS personnalisée -->
    <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <h1>Le blog</h1>
        <form method="POST" action="" class="form-trier">
        <div class="trier">
            <input class="form-check-input" type="radio" name="articlesrecents" id="radiorecents" value="option1" checked>
            <label class="form-check-label" for="radiorecents"> Plus récents </label>
            <br>
            <input class="form-check-input" type="radio" name="articleanciens" id="radioanciens" value="anciens">
            <label class="form-check-label" for="radioanciens"> Plus anciens </label>
        </div>
            <button type="submit" class="btn-trier">Trier</button>
    </form>
    </body>
</html>