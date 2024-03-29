<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Contact Form Admin Page Connection</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <!-- google font  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet"> 

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Js script -->
    <script src="./assets/js/burgerMenu.js" defer></script>
</head>
<body>
    <header>
        <img id="logo" src="./assets/img/SBT.png" alt="logo">
        <div id="h1Container">
            <h1>Modern Contact Form Admin Page Connection</h1>
        </div>
        <div id="burgerMenuMainContainer">
            <div id="burgerMenuOpenerContainer">
                <div class="bgMenuBar" id="bgMenuBar1"></div>
                <div class="bgMenuBar" id="bgMenuBar2"></div>
                <div class="bgMenuBar" id="bgMenuBar3"></div>
            </div>
            <div id="burgerMenuContentContainer">
                <div id="closeBurgerMenu" title="Cliquez pour fermer">x</div>
                <div id="contactIconsContainer">
                    <a href="https://www.linkedin.com/in/simon-b%C3%A9net/" class="externLink" title="link to my Linkedin profile" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon"></a>
                    <a href="https://www.fiverr.com/simonbenet" class="externLink" title="Lien vers mon profil Fiverr" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/732/732025.png" alt="Logo fiverr au format svg"></a>
                    <a href="https://github.com/SimonBnt" class="externLink" title="Link to my Github profile" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/2111/2111432.png" alt="Github icon"></a>
                    <a href="https://simonbenet.com" class="externLink"  title="Link to my personal website" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/3138/3138305.png" alt="Website icon"></a>
                </div>
            </div>
        </div>
    </header>

    <?php 
    ?>

    <main id="adminConnectionPageMain">
        <!-- ---- // ADMIN CONNECTION FORM // ---- -->

        <h1>Admin Page Connection</h1>

        <form action="" method="POST" id="adminConnectionForm">
            <div class="labelsInputsContainers">
                <label for="adminId">Admin ID</label>
                <div class="inputContainers">
                    <span class="material-symbols-outlined">person</span>
                    <input type="text" name="adminId" aria-describedby="idError idValidation" placeholder="Enter your admin ID" required>
                    <div class="validationErrorMessagesContainers">
                        <p class="validationMessage"></p>
                        <p class="errorMessage"></p>
                    </div>
                </div>
            </div>
            <div class="labelsInputsContainers">
                <label for="adminPassword">Password</label>
                <div class="inputContainers">
                    <span class="material-symbols-outlined">lock</span>
                    <input type="text" name="adminPassword" aria-describedby="passwordError passwordValidation" placeholder="Enter your password" required>
                    <div class="validationErrorMessagesContainers">
                        <p class="validationMessage"></p>
                        <p class="errorMessage"></p>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <div id="myLink">
            <p>Designed and developed by <a href="https://simonbenet.com/index.html" title="Link to my website" rel="noopener noreferrer" target="_blank" ><strong>Simon Bénet</strong></a></p>
        </div>
    </footer>
</body>
</html>

