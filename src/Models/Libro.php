<?php
namespace App\Models;
use JsonSerializable;
class Libro implements JsonSerializable{
    private ?int $id;
    private string $nombre;
    private float $precio;
    private string $fabricante;
    public function __construct(?int $id, string $nombre, float $precio, string $fabricante){
    $this->id = $id;
    $this->nombre = ucfirst($nombre);
    $this->precio = $precio;
    $this->fabricante = ucfirst($fabricante);
    }
    public function jsonSerialize(): array{
    return [
    'id' => $this->id,
    'nombre' => $this->nombre,
    'precio' => $this->precio,
    'fabricante' => $this->fabricante,
    ];
}
}