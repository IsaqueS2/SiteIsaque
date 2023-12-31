<!DOCTYPE html>
<html lang="en">

  <?php
require_once('../site/class/config.php');
require_once('../site/autoload.php');

if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha']) ){
    $email = limpaPost($_POST['email']);
    $senha = limpaPost($_POST['senha']);

    $login = new Login();
    $login->auth($email,$senha);
}

?>

<head>
   

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Estilos da tela de Login -->
 
  <link rel="icon" href="imgTelaDeInicio/gatinho.ico" type="image/x-icon">
  <link rel="stylesheet" href="cssTelaDeInicio/styleLogin.css">
  <link rel="stylesheet" href="cssTelaDeInicio/stylePreCarregamento.css">
  <title>Login</title>
</head>

<body>

    <form method="POST">
        <h1>Login</h1>

        <?php if(isset($login->erro["erro_geral"])){?>
        <div class="erro-geral animate__animated animate__rubberBand">
            <?php echo $login->erro["erro_geral"]; ?>
        </div>
        <?php } ?>

        <div class="input-group">
            <img class="input-icon" src="imgTelaDeInicio/user.png">
            <input type="email" name="email" placeholder="Digite seu email" required>
        </div>
        
        <div class="input-group">
            <img class="input-icon" src="imgTelaDeInicio/lock-open.png">
            <input type="password" name="senha" placeholder="Digite sua senha" required>
        </div>
       
        <button class="btn-blue" type="submit">Fazer Login</button>
        <a href="Cadastro.php">Ainda não tenho cadastro</a>
    </form>
  <script>
     //<![CDATA[
      $(window).on('load', function(){
        $('#preloader .inner').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow': 'visible'});
      })
      //]]>
  </script>
</body>
</html>
