<?php
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    if (isset($_SESSION["connected"])){
        session_destroy();
        unset($_SESSION['connected']);
        $_SESSION['connected']= NULL;
        header('Location: connection.php?id=logout');
    }
    else {
        header('Location: index.php');
    }
?>