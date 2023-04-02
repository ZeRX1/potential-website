<html>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "users");
        if($conn === false) {
            die("Connection error".mysqli_connect_error());
        }
        session_start();
        $login = $_REQUEST['login'];
        $haslo = $_REQUEST['haslo'];

        $haslohash = hash('sha512', $haslo);

        $sql = "SELECT * FROM credentials WHERE login = '$login' AND haslo = '$haslohash'";
        $result = $conn->query($sql);



        if($result->num_rows > 0) {
            //echo "Login succesful";
            $_SESSION[ 'login' ] = $login;
            $strona="/";
            header('Location: '.$strona);
        } else {
            echo "Login attempt failed";
        }
        $conn->close();
    ?>
</html>