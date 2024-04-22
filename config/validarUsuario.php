<?php
//Se valida el usuario y la contraseña
function validarDatos($user, $pass){
    $error = null;

    if (!empty($_POST['user']) && !empty($_POST['pass'])){

        //Validar el usuario
        if (strlen($user) < 5 || strlen($user) > 30 || !is_string($user) || 
        strpos($user, ' ') !== false || !preg_match("/^[a-zA-Z0-9_]+$/", $user)){ 
            $error = 'El nombre de usuario pasa el límite de caracteres (30),
                contiene espacios en blanco o caracteres no permitidos';
        }
        
        //Validar contraseña
        if ($pass < 6 && $pass >10 && !preg_match("/^[a-zA-Z0-9_]+$/", $pass)){
            $error = 'La contraseña pasa el limite de caracteres (10), 
            no cumple el minimo (6) o contiene caracteres especiales';
        }
        return $error;

    }else{
        $error = "Debe llenar ambos campos para ingresar";
        return $error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $error = validarDatos($user, $pass);
    
    if ($error == null){
        // Realizar la consulta SQL para obtener el hash de la contraseña del usuario
        $query = "SELECT id_usuarios, contraseña, tipo_usuario FROM usuarios WHERE usuario = :user";
        $statement = $conn->prepare($query);
        $statement->execute(array(":user" =>$user));
        $result = $statement->fetch();
        if ($result){
            // Verificar la contraseña proporcionada con el hash almacenado en la base de datos
            if (password_verify($pass, $result['contraseña'])) {
                // Las credenciales son válidas, iniciar sesión
                session_start();
                $_SESSION['usuario'] = $result['tipo_usuario']; // Puedes guardar más datos del usuario si lo deseas
                switch ($_SESSION['usuario']) {
                    case 'user':
                        header("location: pages/inventario.php");
                        break;
                    case 'admin':
                        header("location: pages/admin_stock.php");
                        break;
                    case 'root':
                        header("location: pages/root_stock.php");
                        break;
                }                

            } else {
                // Las credenciales son inválidas, mostrar un mensaje de error
                $error = "Contraseña incorrecta";
            }
        } else {
            // El usuario no existe
            $error = "No hay ningun usuario registrado con ese nombre";
        }
    }
}
?>