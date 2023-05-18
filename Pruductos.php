<?php 

class Producto{

    //1. Declaracion de Propiedades 
    private $nombre;
    private $precio;
    private $codigo;
    private $marca;
    private $categoria;
    private $estado;
    private $descuento;

    //2. metodo constructor


    public function __construct($nombre,$precio,$codigo,$marca,$categoria,$estado,$descuento){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->codigo= $codigo;
        $this->marca = $marca;
        $this->categoria = $categoria;
        $this->estado = $estado;
        $this->descuesto = $descuento;
    }

    //3. metodos(getters and setters)
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
   
    public function getCodigo(){
        return $this->codigo;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getMategoria(){
        return $this->categoria;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getDescuesto(){
        return $this->descuesto;
    }

   


}

//Instanciar clases ----> variables de instancia
$producto = new Producto("Coca-Cola","3000", 102568, "Coca-Cola","Bebida","No vencida","10%");
$producto2 = new Producto("Pepsi","2800", 1508, "Pepsi","Bebida","No vencida","15%");
$producto3 = new Producto("Papas","3000", 15198, "Margarita","Comida","No vencida","15%");
$producto4 = new Producto("Martillo","15000", 15615, "Martillos","Ferreteria","Buen estado","20%");
echo $producto->getNombre() . "<br>";
echo $producto->getPrecio() . "<br>";
echo $producto->getCodigo() . "<br>";
echo $producto->getMarca() . "<br>";

echo "<br>".$producto2->getNombre() . "<br>";
echo $producto2->getPrecio() . "<br>";
echo $producto2->getCodigo() . "<br>";
echo $producto2->getMarca() . "<br>";

echo "<br>".$producto3->getNombre() . "<br>";
echo $producto3->getPrecio() . "<br>";
echo $producto3->getCodigo() . "<br>";
echo $producto3->getMarca() . "<br>";

echo "<br>".$producto4->getNombre() . "<br>";
echo $producto4->getPrecio() . "<br>";
echo $producto4->getCodigo() . "<br>";
echo $producto4->getMarca() . "<br>";

?>
