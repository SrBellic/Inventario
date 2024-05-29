<?php
function pass_aleatoria(){
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$.%0123456789';
    $pass = array();
    $combLen = strlen($comb)-1;
    for ($i = 0; $i<8; $i++){
        $n = rand(0, $combLen);
        $pass[] = $comb[$n];
    }
    return implode($pass);
}
function email_bd($conn, $email){
    // Verificar si el correo electrónico ya existe
    $query = "SELECT * FROM usuarios WHERE correo = :email";
    $statement = $conn->prepare($query);
    $statement->execute(array(":email" => $email));
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $pass = pass_aleatoria();
        return $pass;
    }
    else{
        return "";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $pass = email_bd($conn, $email);
    if($pass != ""){
        $mensaje = "<h1>Tu nueva contraseña es:</h1>
        <br>
        <h2><b>".$pass."</b><h2>";
        include ('PHPMailer-master/index.php');
        echo '<div class="alert alert-success" role="alert">
                <b>Su contraseña ha sido cambiada con exito.</b>
            </div>';
    }else{
        $error = "Este correo no se encuentra registrado en nuestra base de datos";
        echo "<div class='alert alert-danger' role='alert'>
                <b>$error</b>
            </div>";
    }
}

?>