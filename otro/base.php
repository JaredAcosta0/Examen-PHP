<?
namespace App\Models;

class base implements Interfaz{ 
    public $nombre;
    public $apellido;
    public $correo;
    public $contrasena;

    public function __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function setTitle($nombre){
        $this->nombre = $nombre;
        if($nombre == ' '){
            $this -> nombre = 'N/A';
        }else{
            $this -> nombre = $nombre;
        }
    }
    
    public function getName(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this -> apellido;
    }
}