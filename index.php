<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFSO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <!-- HEADER -->

        <div class="header">
            <div class="image_header">
                <img class="img_univ" src="img/ump2.png">
            </div>
            <div class="title_header">
                <h1>EduFSO</h1>
            </div>
        </div>

        <div class="divider"></div>

        <!-- BODY -->
        <div class="bodd"> 
            <div class="container">

                <!-- PROF -->
                <div class="prof" onclick="showLogin('prof')">
                    <a href="#">
                        <img src="img/professor.png" class="img_prof">
                    </a>
                    <div class="prof_txt">Connexion Enseignant</div>
                </div>

                <div class="vdivider"></div>
                
                <!-- ETUDIANT -->
                <div class="etudiant" onclick="showLogin('etudiant')">
                    <a href="#">
                        <img src="img/etudiants.png" class="img_etudiant">
                    </a>
                    <div class="etudiant_txt">Connexion Étudiant</div>
                </div>
                
            </div>
        </div>
        
        <div class="divider"></div>
        
        <!-- FOOTER -->
        <div class="footer">
            <div class="title_footer">
                <h5>EduFSO</h5>
            </div>
            <div class="names_footer">
                Mimouni Saad<br>
                Saad Eddine Zine
            </div>
        </div>

        <!-- Login Form -->
        <div class="login-form" id="loginProf" style="display: none;">
            <div class="back-button" onclick="goBack()">
                &lt;
            </div>
            <h2>Connexion Étudiant</h2>
            <div class="txt"><h4>Entrez votre émail academique et votre CIN</h4></div>
            
            <form action="Enseignant_dashboard.php" method="post">
                <input type="text" name="username" placeholder="Login">
                <input type="password" name="password" placeholder="Mot de passe">
                <button type="submit">Se connecter</button>
            </form>
        </div>

        <div class="login-form" id="loginEtudiant" style="display: none;">
            <div class="back-button" onclick="goBack()">
                &lt;
            </div>
            <h2>Connexion Étudiant</h2>
            <div class="txt"><h4>Entrez votre émail academique et votre CIN</h4></div>
            
            <form action="student_dashboard.html" method="post">
                <input type="text" name="username" placeholder="Login">
                <input type="password" name="password" placeholder="Mot de passe">
                <button type="submit">Se connecter</button>
            </form>
        </div>

    </div>

    <script>
        function showLogin(type) {
            if (type === 'prof') {
                document.getElementById('loginProf').style.display = 'block';
                document.getElementById('loginEtudiant').style.display = 'none';
            } else if (type === 'etudiant') {
                document.getElementById('loginProf').style.display = 'none';
                document.getElementById('loginEtudiant').style.display = 'block';
            }
            document.querySelector('.container').style.display = 'none';
        }

        function goBack() {
            document.querySelector('.container').style.display = 'flex';
            document.getElementById('loginProf').style.display = 'none';
            document.getElementById('loginEtudiant').style.display = 'none';
        }
    </script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
