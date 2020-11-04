<?php>

class Conexion{
    var $conn;
function conectar(){
$conn = null;
    try{
        $conn = new PDO('mysql:host=localhost;dbname=apiFace',  
                                    'root',
                                        '');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                        
                //echo 'Conectado a la base de datos <br><br>';
    }
    catch(PDOException $e){
        die(print_r('ERROR conecttando con la base de datos: '
                .$e->getMessage()));
    }
    return $conn;
    }

    function buscarUsuario($user, $pass){
        $con = $this->conectar();

        $consulta'SELECT nombre
                                FROM usuario 
                                WHERE usuario=:usuario 
                                AND contrasena=:pass';

        $stmt=$con->prepare($consulta);
        $stmt->execute(array(':usuario'=>$user,':pass'=>$pass));
       // $stmt->execute();
        $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numRegistros = count($registro);

        return $numRegistros;


    }
}
?>