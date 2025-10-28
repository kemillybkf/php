
<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie('lembrar-senha','', time() - 3600,  "/");
    header("Location: loginket.html");
    exit;
?>
