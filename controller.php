<?php 

include("config.php");

if(isset($_POST['login'])){

    $usuario =  $_POST ['usuario'];
    $senha =  $_POST ['senha'];

    $query = "SELECT * FROM adm where usuario_admin = '$usuario' and senha_admin = PASSWORD('{$senha}') ";
	$result = mysqli_query($conn, $query);
	$resultado = mysqli_fetch_assoc($result);

    if(isset($resultado)){
        session_start();
        $_SESSION['id'] = $resultado['id_admin'];
        $_SESSION['logged'] = true;
        
        header("Location: admin");

    }else{
        ?><script>
        alert('Dados Incorretos');
        window.location = "login";
        </script><?php
    }
}else{
    header("Location: login");
}
?>