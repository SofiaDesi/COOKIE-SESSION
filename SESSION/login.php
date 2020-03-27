
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA DE LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./ESTILOS/animate.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Caveat&display=swap');
        .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
        }
        .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        font-family: 'Muli', sans-serif;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 12px;
        }
        @import url('https://fonts.googleapis.com/css?family=Muli:900&display=swap');
        .form button {  
        font-family: 'Muli', sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: rgb(0, 0, 0);
        width: 100%;
        border: 0;
        font-weight: bold;
        padding: 15px;
        color: #FFFFFF;
        font-size: 15px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
        background: rgb(45, 46, 45);
        }
        .form .register-form {
        display: none;
        }
        .form .message {
        margin: 15px 0 0;
        color: black;
        font-size: 22px;
        font-family: 'Caveat', cursive;
        }
        body {
            background: #232526;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;      
        }
    </style>
</head>
<body>
    <script src="./ESTILOS/wow.min.js"></script>
    <script>
        new WOW().init(); 
    </script>
    <?php
                error_reporting(0);
                session_start();

                $user = $_POST['user'];
 

                if (isset($_SESSION['LOGADO'])) {
                    $_SESSION['LOGADO'] = $user;
                    $texto = "Bem vindo, {$_SESSION['LOGADO']}! &#128526";
                } else {
                    $_SESSION['LOGADO'] = " ";
                    $texto = "Olá, faça seu cadastro. &#128522";
                    $_SESSION['PASS'] = $pass;
                }
        ?>
    <div class="login-page wow zoomInUp">
        <div class="form">
          <form class="login-form" method="POST">
            <input type="text" name="user" placeholder="NOME"/>
            <input type="password" name="pass" placeholder="SENHA"/>
            <button>ENTRAR</button>
            <p class="message"><?= $texto ?></p>
          </form>
        </div>
      </div>
</body>
</html>