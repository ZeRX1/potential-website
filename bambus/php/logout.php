<html>
    <?php
        session_start();
        unset($_SESSION["login"]);
        
        $strona="/";
        header('Location: '.$strona);
    ?>
</html>