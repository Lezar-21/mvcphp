<?php
namespace App\Data;
use App\Models\Libro;
use mysqli;
class DataContext{
    static $mysqli;
    private array $settings;
    function __construct(array $settings){
        $this->settings = $settings;
        self::conectar();
    }
    function
    _destruct(){
    self::$mysqli->close();
    }
    protected function conectar(){
        // Esta función es la que realiza la conexión al servidor de MysQL
        self::$mysqli = new mysqli(
            $this->settings['db' ]['host'],
            $this->settings['db'][ 'username'],
            $this->settings[ 'db']['password'],
            $this->settings['db'][ 'database']
        );
        // En caso de error lo mandamos a imprimir a la pantalla
        if (self::$mysqli->connect_error) {
            die('Error de Conexión (' . self::$mysqli->connect_errno . ') ' . self::$mysqli->connect_error);
        }
    }
    public function obten_libros(){
        // Obtenemos todos los editoriales
        $consulta = 'SELECT libro.id, libro.nombre, libro.precio, editorial.nombre AS editorial_nombre
                    FROM editorial INNER JOIN libro ON editorial.id=libro.id_editorial';
        // Creamos la consulta
        $sentencia = self::$mysqli->prepare($consulta);
        /* ejecutar la sentencia */
        $sentencia->execute();
        // Aqui queda el resultado
        $resultado = $sentencia->get_result();
        $sentencia->close();
        $libros = [];
        while ($fila = $resultado->fetch_assoc()) :
            $item = new Libro( $fila["id"], $fila["nombre"], $fila["precio"], $fila["editorial_nombre"]);
            $libros[] = $item->jsonSerialize();
        endwhile;
        return $libros;
    }
}