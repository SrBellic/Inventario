<?php
//Funcion que valida los datos
function validaciones_registro($mail, $user, $ci, $name, $apellido){
    
    $error = null;
    //Verifica que no enviaran ningun campo vacio
    if(!empty($_POST['mail']) &&!empty($_POST['user']) && !empty($_POST['ci']) 
    &&!empty($_POST['name']) &&!empty($_POST['apellido'])){

        //Valida que el nombre y apellido no contenga numeros o caracteres especiales    
        if(strlen($name)>20 ||!is_string($name) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $name)){  
            $error = 'El nombre no puede contener más de 20 caracteres, caracteres especiales o números';}

        if(strlen($apellido)>20 ||!is_string($apellido) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $apellido)){  
            $error = 'El apellido puede contener más de 20 caracteres, caracteres especiales o números';}
        
        //Validacion de la cedula
        if ($ci < 0 || strlen((string)$ci) > 8 || !ctype_digit($ci)) {
            $error = "La cédula es incorrecta";}

        //Valida el nombre del usuario
        if (strlen($user) < 5 || strlen($user) > 30 || !is_string($user) || 
            strpos($user, ' ') !== false || !preg_match("/^[a-zA-Z0-9_]+$/", $user)){  
            $error = 'El nombre de usuario pasa el límite de caracteres (30), contiene espacios en blanco o caracteres no permitidos';}      
        
        //Valida el correo
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) || strlen($mail) < 10 ||
            strlen($mail) > 255 || preg_match("/[,;'´`\"\\s]/", $mail)) {
            $error = 'El correo electronico es invalido';}

        return $error;    

    }else{
        $error = "No se han llenado todos los datos correctamente";
        return $error;
    }
}

//Se genera una contraseña aleatoria
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

function encriptacion($pass){
    //Encriptacion de la contraseña con Bcrypt
    $passEncript = password_hash($pass,PASSWORD_BCRYPT);
    return $passEncript;
}

function cargar_bd($conn,$usuario,$mail, $user, $ci, $name, $apellido, $passEncript){
    $error = null;

    // Verificar si el usuario ya existe
    $query = "SELECT * FROM usuarios WHERE usuario = :user";
    $statement = $conn->prepare($query);
    $statement->execute(array(":user" => $user));
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $error = "El nombre de usuario ya existe";
    }

    // Verificar si la cédula ya existe
    $query = "SELECT * FROM usuarios WHERE cedula = :ci";
    $statement = $conn->prepare($query);
    $statement->execute(array(":ci" => $ci));
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $error = "La cédula ya existe";
    }

    // Verificar si el correo electrónico ya existe
    $query = "SELECT * FROM usuarios WHERE correo = :mail";
    $statement = $conn->prepare($query);
    $statement->execute(array(":mail" => $mail));
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $error = "El correo electrónico ya existe";
    }
    if ($error == null){
        try {
            // Insertar el nuevo usuario en la tabla tabla_usuarios con tipo de usuario 'user' (ID 1)
            $query = "INSERT INTO `usuarios`( `usuario`, `contraseña`, `nombre`, `apellido`, `cedula`, `correo`, `tipo_usuario`) 
            VALUES (:usuario, :passEncript, :nombre, :apellido, :ci, :mail, :tipo_user)";
            $statement = $conn->prepare($query);
            $result = $statement->execute(array(":usuario"=>$user,":passEncript"=>$passEncript,
            ":nombre" => $name, ":apellido" => $apellido, ":ci" => $ci, ":mail" => $mail,
            ":tipo_user"=>$usuario));

            if ($result) {
                // Registro exitoso, elige el mensaje
                return "El registro de usuario ha sido guardado";
            } else {
                // Error al registrar, mostrar mensaje de error
                return "Error al registrar el usuario";
            }
        } catch (PDOException $e) {
            return $error = $e; // Imprime el mensaje de error de PDO
        }
    }
    return $error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Recibe los datos del usuario para registrarlo
    $usuario = $_POST["usuario"];
    $mail = $_POST["mail"];
    $user = $_POST["user"];
    $ci = $_POST["ci"];
    $name = $_POST["name"];
    $apellido = $_POST["apellido"];

    $usuario =  match ($usuario) {
        '1' => 'user',
        '2' => 'admin',
        '3' => 'root',
    };

    //Se llama una funcion para validar los campos
    $error = validaciones_registro($mail, $user, $ci, $name, $apellido);
    if($error == null){
        $pass = pass_aleatoria(); //Esta es la contraseña generada
        $passEncript = encriptacion($pass);
        $registro_resultado = cargar_bd($conn, $usuario,$mail, $user, $ci, $name, $apellido, $passEncript); //Resultados de la bd
    }
    //La variable $error es la que debes imprimir en caso de fallo
}
?>