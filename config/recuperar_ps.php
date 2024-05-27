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

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $email = $_GET['email'];
    $pass = email_bd($conn, $email);
    if($pass != ""){
        $mensaje = "<h1>Tu nueva contraseña es:</h1>
        <br>
        <b>".$pass."</b>";
        include ('PHPMailer-master/index.php');
    }
}

?>