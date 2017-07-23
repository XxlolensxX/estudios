<?php

  /*
  public:     Acceso desde cualquier método de la clae u objeto que la invoque
  private:    Acceso sólo desde los métodos de la clases, los objetos no los pueden invocar
  protected:  Acceso sólo desde los métodos de la clase y subclases que la heredan, los objetos no los pueden invocar
  */

class Perro {
  //ATRIBUTOS
  public $nombre;
  public $raza;
  public $edad;
  public $sexo;
  public $adiestrado;
  public $foto;
  public $comida;
  private $pulgas;
  public static $mejor_amigo = 'Hombre';
  const MEJOR_CUALIDAD = 'Fidelidad';

  public function __construct($n,$r,$e,$s,$a,$f,$p){
    $this->nombre = $n;
    $this->raza = $r;
    $this->edad = $e . ' años';
    $this->sexo = ($s) ? 'Macho' : 'Hembra';
    $this->adistrado = ($a) ? 'Adiestrado' : 'No adiestrado';
    $this->foto = $f;
    $this->pulgas = $p;
    echo '<p><mark>Hola soy el Constructor de la Clase</mark><p>';
  }
  public function __destruct(){
    echo '<p><mark>Adiós soy el Destructor de la Clase</mark><p>';
  }
  //MÉTODOS
  public function ladrar(){
    echo '<p><mark>GUAUUU GUAUU</mark></p>';
  }
  public function comer($c){
    $this->comida = $c;
    echo '<p>' . $this->nombre . ' come ' . $this->comida . '</p>';
  }
  public function aparecer(){
  echo '<img src=">' . $this->foto . '">';
  }
  public function tiene_pulgas(){
    echo ($this->pulgas) ? '<p>Tiene Pulgas</p>' : '</p>No tiene pulgas</p>';
  }
  public function ladrar_y_comer(){
    self::ladrar();//esto es lo mismo de abajo
    $this->ladrar();//esto es lo mismo de arriba
  }

}

//Instanciar un objeto de la clase
$principe = new Perro(
  'Principe',
  'callejero',
  3,
  true,
  false,
  'http://jonmircha.github.io/slides-poo-js/img/kenai.jpg',
  false
);
///////////////
// AQUI APARECE EL CONSTRUCTOR
///////////////
//var_dump($principe);
echo '<h1>' . $principe->nombre . '</h1>';
echo '<h2>' . $principe->raza . '</h2>';
//echo '<h3>' . $principe->pulgas . '</h3>';
$principe->ladrar();
$principe->comer(croquetas);
$principe->aparecer();
$principe->tiene_pulgas();
$principe->ladrar_y_comer();
/////////////
// AQUI APARECE EL DESTRUCTOR
/////////////
