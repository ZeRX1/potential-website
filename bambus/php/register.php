<html>
<?php
    try {
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "users");
        if($conn === false) {
            die("Connection error".mysqli_connect_error());
        }
        $id = "";
        $login = $_REQUEST['login'];
        $email = $_REQUEST['email'];
        $haslo = $_REQUEST['haslo'];
        $haslopowtorz = $_REQUEST['powtorzhaslo'];

        $haslohash = hash('sha512', $haslo);
        $haslopowtorzhash = hash('sha512', $haslopowtorz);
        $sql = "INSERT INTO credentials VALUES ('$id', '$login', '$email', '$haslohash')";

        $sql_u = "SELECT * FROM credentials WHERE login='$login'";
        $sql_e = "SELECT * FROM credentials WHERE email='$email'";
        $res_u = mysqli_query($conn, $sql_u);
        $res_e = mysqli_query($conn, $sql_e);
        
        if($haslopowtorzhash == $haslohash) {
            if (mysqli_num_rows($res_u) > 0) {
                echo '<script>alert("Nickname is already taken")</script>';
                header('Refresh: 0; URL = /register.html');
                
            }else if(mysqli_num_rows($res_e) > 0){
                echo '<script>alert("E-mail is already taken")</script>';
                header('Refresh: 0; URL = /register.html');
                
            } else if(mysqli_query($conn, $sql)) {
                $_SESSION[ 'login' ] = $login;
                $strona="/";
                header('Location: '.$strona);
            } else {
                echo "Registration failed".mysqli_error($conn);
                echo '<script>alert("erra")</script>';
                header('Refresh: 0; URL = /register.html');
            }
        } else {
            echo '<!doctype html>
            <html lang="en">
            
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name="author" content="Bootstrap, anxs, DJOhayo">
              <title>Signin</title>
            
              <!-- Bootstrap core CSS -->
              <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
            
              <!-- Favicons -->
              <link rel="icon" href="/res/logo.jpg">
              <meta name="theme-color" content="#7952b3">
            
              <!-- Custom styles for this template -->
              <link href="/css/signin.css" rel="stylesheet">
            
              <script>
                function validate(){
            
                if(!document.getElementById("haslo").value==document.getElementById("confirm_password").value)alert("Passwords do no match");
                return document.getElementById("password").value==document.getElementById("confirm_password").value;
                return false;
                }
              </script>
            
            </head>
            
            <body class="text-center">
              <main class="form-signin">
                <form action="/php/register.php" onSubmit="return validate()" method="post">
                  <img class="mb-4" src="/res/logo.jpg" alt="" width="64" height="64">
                  <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
                  <div class="form-floating">
                    <input type="text" class="form-control" name="login" placeholder="Nickname" required>
                    <label for="floatingInput">Nickname</label>
                  </div>
                  <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="example@example.com" required>
                    <label for="floatingInput">E-Mail</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="haslo" name="haslo" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="powtorzhaslo" name="powtorzhaslo" placeholder="Repeat Password" required>
                    <label for="floatingPassword">Repeat Password</label>
                  </div>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="accept" required> Accept <a href="terms.html">terms</a>
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                  <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
                </form>
              </main>
              <script>alert("Passwords has to match")</script>
            </body>
            </html>';
            header('Refresh: 0; URL = /register.html');
        }
        $conn->close();

    } catch(Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        header('Refresh: 2; URL = /register.html');
    }
    ?>

</html>