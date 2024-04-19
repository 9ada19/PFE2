<?php
// Ajoutez ici la logique pour vérifier si l'utilisateur est connecté en tant qu'enseignant ou étudiant
// et récupérez les cours en conséquence.
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord etudiant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
    <!-- Header -->
        <div class="header">
            <div class="image_header">
                <img class="img_univ" src="img/ump2.png">
            </div>
            <div class="title_header">
                <h1>EduFSO</h1>
            </div>
        </div>
        
        <div class="divider"></div>
    <!-- body -->
        <div class="bodd">
            <div class="circularProgressBarContainer">
                <div class="circularProgressBar" style="transform: rotate(90deg);"></div> <!-- Adjust rotation to change starting point -->
            </div>
            

            <div class="container">
                <h2>Tableau de Bord Etudiant test</h2>
                <div class="tableau">
                    <div class="proverve">

                    </div>
                    <div class="Suivi">


                    </div>
                    <!-- Cartes Cours ghadi ykono wrapped bachnila zdna maykonch mouchkil w ykono flex row-->
                    <div class="cours">
                    <h2>Vos Cours</h2>
                    
                        <div class="cour1">
                            <div class="card">
                                <div class="progress">
                                </div>
                                <div class="percentage"></div>
                            </div>
                            <div class="infos"></div>
                        </div>

                        <div class="cour2">
                            <div class="card">
                                <div class=progress></div>
                                <div class="percentage"></div>
                            </div>
                            <div class="infos"></div>
                        </div>
                        <div class="cour3">
                            <div class="card"></div>
                            <div class="infos"></div>
                            
                        </div>
                        
                        <div class="cour4">
                            <div class="card"></div>
                            <div class="infos"></div>
                        </div>

                    </div>
                    <div class="exercices">Ajouterdddddddd des exercices</div>
            </div>
            
        </div>
    <!-- Footer -->
        <div class="footer">

        </div>

            
        </div>
    </div>
</body>
</html>

