<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require ("function.php");

    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST) && !empty($_POST)) {
        $name = testInput($_POST["name"]);
        $email = testInput($_POST["email"]);
        $message = testInput($_POST["message"]);

        if (empty($name)) {
            exit;
        } elseif (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            exit;
        };
        
        if (empty($email)) {
            exit;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/", $email)){
            exit;
        };
        
        if (empty($message)) {
            exit;
        } elseif (!is_string($email) || !preg_match("/^([a-z0-9,?!;.: ]+)$/", $message) || strlen($message) > 255) {
            exit;
        };

        $_SESSION["verifiedName"] = $name;
        $_SESSION["verifiedEmail"] = $email;
        $_SESSION["verifiedMessage"] = $message;
    }
?>