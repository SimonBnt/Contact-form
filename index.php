<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Contact Form</title>

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
    <script src="./assets/js/formValidation.js" defer></script>
</head>
<body>
    <header>
        <img id="logo" src="./assets/img/SBT.png" alt="logo">
        <div id="h1Container">
            <h1>Modern Contact Form</h1>
        </div>
        <div id="burgerMenuMainContainer">
            <div id="burgerMenuOpenerContainer">
                <div class="bgMenuBar" id="bgMenuBar1"></div>
                <div class="bgMenuBar" id="bgMenuBar2"></div>
                <div class="bgMenuBar" id="bgMenuBar3"></div>
            </div>
            <div id="burgerMenuContentContainer">
                <div id="closeBurgerMenu" title="Cliquez pour fermer">x</div>
                <div id="myLink">
                    <p>Designed and developed by <a href="https://simonbenet.com/index.html" title="Link to my website" rel="noopener noreferrer" target="_blank" ><strong>Simon Bénet</strong></a></p>
                </div>
                <div id="contactIconsContainer">
                    <!-- <a href="" class="externLink" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" title="Link to my Facebook profile" src="/assets/img/svg/facebook.svg" alt="Facebook icon"></a> -->
                    <a href="https://www.linkedin.com/in/simon-b%C3%A9net/" class="externLink" title="link to my Linkedin profile" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon"></a>
                    <a href="https://www.fiverr.com/simonbenet" class="externLink" title="Lien vers mon profil Fiverr" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/732/732025.png" alt="Logo fiverr au format svg"></a>
                    <!-- <a href="" class="externLink" title="link to my Instagram profile" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="/assets/img/svg/instagram.svg" alt="Instagram icon"></a> -->
                    <a href="https://github.com/SimonBnt" class="externLink" title="Link to my Github profile" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/2111/2111432.png" alt="Github icon"></a>
                    <!-- <a href="" class="externLink" title="Link to my Codepen profile" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="/assets/img/svg/codepen-black.svg" alt="Codepen icon"></a> -->
                    <a href="https://simonbenet.com" class="externLink"  title="Link to my personal website" rel="noopener noreferrer" target="_blank"><img class="externLinkIcons" src="https://cdn-icons-png.flaticon.com/128/3138/3138305.png" alt="Website icon"></a>
                </div>
            </div>
        </div>
    </header>
        <?php 
            if (isset($_SESSION["errorMessage"]) && !empty($_SESSION["errorMessage"])) {
                echo "<div id='errorMessage' class='sessionMessage'>";
                echo $_SESSION['errorMessage'];
                echo "</div>";
                unset($_SESSION["errorMessage"]);
            }

            if (isset($_SESSION["validationMessage"]) && !empty($_SESSION["validationMessage"])) {
                echo "<div id='validationMessage' class='sessionMessage'>";
                echo $_SESSION['validationMessage'];
                echo "</div>";
                unset($_SESSION["validationMessage"]);
            }
        ?>
    <main>
                  <!-- CONTACT FORM -->

        <h2 class="formName" id="contactFormName">Contact Form</h2>
        <div class="formMainContainer" id="contactFormContainer">
            <div class="card">
                <div class="cardLogoContainer">
                    <img src="./assets/img/svg/brain.svg" alt="brain svg" class="formLogo">
                </div>
                <div class="cardHeader">
                    <h3 class="formTitle">Contact us</h3>
                    <p class="formTxt">Please fill this form before submitting</p>
                </div>
                <form action="./assets/inc/contactForm_process.php" method="POST" class="forms" id="contactForm">
                    <div class="formItem">
                        <label for="name"></label>
                        <div class="inputContainers">
                            <span class="itemIcon material-symbols-outlined">person</span>
                            <input type="text" name="name" id="nameInput" aria-describedby="nameError nameValidation" class="formInput" placeholder="Enter your full name" onblur="validateName(this)" required>
                        </div>
                        <div id="nameValidation" aria-live="polite"></div>
                        <div id="nameError" aria-live="polite"></div>
                    </div>
                    <div class="formItem">
                        <label for="email"></label>
                        <div class="inputContainers">
                            <span class="itemIcon material-symbols-outlined">mail</span>
                            <input type="email" name="email" id="emailInput" class="formInput" aria-describedby="emailError emailValidation" placeholder="Enter Email" onblur="validateEmail(this)" required>
                        </div>
                        <div id="emailValidation" aria-live="polite"></div>
                        <div id="emailError" aria-live="polite"></div>
                    </div>
                    <div class="formItem">
                        <label for="message"></label>
                        <div class="inputContainers">
                            <span id="textareaItem" class="itemIcon material-symbols-outlined">comment</span>
                            <textarea name="message" id="messageInput" aria-describedby="messageError messageValidation" class="formInput messageInput" placeholder="Your message" onblur="validateMessage(this)" required></textarea>
                        </div>
                        <div id="messageValidation" aria-live="polite"></div>
                        <div id="messageError" aria-live="polite"></div>
                    </div>
                    <button class="formBtn" name="submit" id="submitBtn" type="submit">SUBMIT</button>
                    <div class="errorMessagesContainers">
                        <div id="contactErrorMessage"></div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>