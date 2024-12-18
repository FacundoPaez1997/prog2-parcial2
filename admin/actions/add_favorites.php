<?PHP 
require_once "../../functions/autoload.php";

$postData = $_POST;
$datosArchivo = $_FILES['imagen'];
public function insert_like(int $producto_id, int $usuario_id){
    $conexion = Conexion::getConexion();
    $query = "INSERT INTO favoritos (usuario_id, producto_id) VALUES (:usuario_id, :producto_id)";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([
        "usuario_id" => $checkoutData['usuario_id'], 
        "producto_id" => $checkoutData['producto_id']
    ]);

}
try {    

    $userData = $_SESSION['loggedIn'] ?? FALSE;
    insert_like($postData['product_id'],$postData['user_id'])

    (new Alerta())->add_alerta('success', "Añadido a favoritos");

} catch (Exception $e) {
    (new Alerta())->add_alerta('danger', "Ocurrió un error inesperado, por favor pongase en contacto con el administrador de sistema.");
    header('Location: ../index.php?sec=admin_personajes');
}