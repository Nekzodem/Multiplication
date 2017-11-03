<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" media="screen" href="style.css">
        <title>Table de multiplication</title>
    </head>

    <body>
        <container id="selection">
            <div id="etapeun">
                <h1>Merci de selectionner la table que vous voulez consulter :</h1>
                <form id="tables" method="post" action="multiplication.php">
                    <select name="tables">
                        <option value="#" selected>Tables</option>
                        <option value="1">Table de 1</option>
                        <option value="2">Table de 2</option>
                        <option value="3">Table de 3</option>
                        <option value="4">Table de 4</option>
                        <option value="5">Table de 5</option>
                        <option value="6">Table de 6</option>
                        <option value="7">Table de 7</option>
                        <option value="8">Table de 8</option>
                        <option value="9">Table de 9</option>
                        <option value="10">Table de 10</option>
                    </select>
                    <div>
                        <input class="annuler" type="reset" value="annuler"></input>
                        <input class="voir" type="submit" value="voir la table"></input>
                    </div>                   
                </form>
            </div>

            <div id="etapedeux">
                <h1>Merci de selectionner la table que vous voulez consulter :</h1>
                <form id="checkbox" method="post" action="checkbox.php">
                    <input type="checkbox" name="choix[]" value="1">Table de 1
                    <input type="checkbox" name="choix[]" value="2">Table de 2
                    <input type="checkbox" name="choix[]" value="3">Table de 3
                    <input type="checkbox" name="choix[]" value="4">Table de 4
                    <input type="checkbox" name="choix[]" value="5">Table de 5
                    <input type="checkbox" name="choix[]" value="6">Table de 6
                    <input type="checkbox" name="choix[]" value="7">Table de 7
                    <input type="checkbox" name="choix[]" value="8">Table de 8
                    <input type="checkbox" name="choix[]" value="9">Table de 9
                    <input type="checkbox" name="choix[]" value="10">Table de 10
                    <div class="check">
                    <input class="annuler" type="reset" value="Annuler"></input>
                    <input class="voir" type="submit" value="Voir la table"></input>
                    </div>
                </form>
            </div>

            <div id="etapetrois">
                <h1>Connaissez-vous vos tables de multiplication : 4 x 5</h1>
                <form id="question" method="post" action="question.php">
                    <input class="resultat" type="text" name="resultat" placeholder="Faîtes le bon choix !"></input>
                    <input class="annuler" type="reset" value="Annuler"></input>
                    <input class="voir" type="submit" value="Valider"></input>
                </form>
            </div>
        </container>
    </body>

</html>