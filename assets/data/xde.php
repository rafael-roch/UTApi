<?php
try{
$con = new PDO('mysql:host=localhost;dbname=apiFace',  
                            'root',
                                '');
                                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                echo 'Conectado a la base de datos <br><br>';
/*

ESTO BUSCA TODOS LOS USUARIOS Y REGRESA SOLO LOS NOMBRES
                                $stmt=$con->prepare('SELECT nombre FROM usuario');
                                $stmt->execute();



                                    while($datos=$stmt->fetch()){
                                        echo 'Nombre: '.$datos[0].'<br>';
                                    }
*/


                                    /*Regresa registros de JUAN*/
                                                               //     $user='Juan';
                                                         //           $stmt=$con->prepare('SELECT nombre, correo_e FROM usuario WHERE usuario=:usuario');
                                                           //         $stmt->bindParam(':usuario',$user,PDO::PARAM_STR);
                                                                // $stmt->execute(array(':usuario'=>$user));

                                                             //       while($datos=$stmt->fetch()){
                                                                 //       echo 'Nombre: '.$datos[0].'<br>'.'Correo'.$datos[1];
                                                               //     }




                                                                //ejemplo insert
                                                              /*  $user='Juan';
                                                                $pass='bbbb';
                                                                $nombre='Lebron James';
                                                                $correo='lebron@gmail.com';

                                                                $stmt=$con->prepare('INSERT INTO usuario(usuario,contrasena,nombre,correo_e)
                                                                
                                                                VALUES(:user,:pass,:nombre,:nombre,:correo)');
                                                                $rows=$stmt->execute(array(':user'=>$user,':pass'=>$pass,'nom'=>$nombre,'mail'=>$correo));

                                                                if($rows==1){
                                                                    echo 'Inserccion exitosa';
                                                                } */
                                                                      /*  $stmt=$con->prepare('UPDATE ususario SET usuario=:user WHERE nombre=nom');
                                                                        $rows=$stmt->execute(array(':user:'=>$user,':nom'=>$nombre));

                                                                        if($rows>0){
                                                                            echo 'Modificacion exitosa';
                                                                        } */


                                                                                    $stmt=$con->prepare('DELETE FROM usuario WHERE= user');
                                                                                    $rows=$stmt->execute(array(':user'=>$user));
                                                                                        if($rows>0){
                                                                                            echo 'Borrado correcto';
                                                                                        }
}                                                                       
catch(PDOException $e){
    echo 'ERROR conecttando con la base de datos; '
            .$e->getMessage();


}
?>