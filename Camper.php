<?php 


class Camper
{
    //1. Declaracion de Propiedades con modificadores de acceso
    private $nombre;
    private $email;
    private $celular;

    //2. Metodo Constructor

    public function __construct($nombre,$email,$celular){
        $this->nombre = $nombre;
        $this->email = $email;
        $this ->celular =$celular;
    }
    //3. metodos (getters and setters)
        //get se obtiene valores de propiedades
        //set se modifican valores de atributos y propiedades
    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCelular(){
        return $this->celular;
    }

    //Metodos con parametros

   

    //MEtodos setters
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function setEmail($email){
        $this -> email = $email;
    }
}

//Instanciar clases -----> variables de instancia 
$camper = new Camper("Raul Tarazona","Rauldiaz0530@gmail.com", 3015850291);
$camper->setNombre("Juan");
$camper->setEmail("juan@gmail.com");
echo $camper->getNombre() . "<br>";
echo $camper->getEmail() ."<br>";
echo $camper->getCelular()  . "<br>";


?>

