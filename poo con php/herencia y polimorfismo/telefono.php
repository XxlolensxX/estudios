<?php
class Telefono{
    public $marca;
    public $modelo;
    protected $alambrico = true;
    protected $comunicacion;

    public function __construct($marca,$modelo){
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->comunicacion = ($this->alambrico) ? 'Alámbrica' : 'Inalámbrica';
    }

    public function llamar(){
      return print('<p>Riiing Riiing !!!</p>');
    }

    public function mas_info(){
      return print(
        '<ul>
          <li>Marca: <b>'.$this->marca.'</b></li>
          <li>Módelo: <b>'.$this->modelo.'</b></li>
          <li>Comunicación: <b>'.$this->comunicacion.'</b></li>
        </ul>'
      );
    }

}
class Celular extends Telefono{
  protected $alambrico = false;

  public function __construct($marca,$modelo){
    parent::__construct($marca,$modelo);
  }
}
Final class SmartPhone extends Celular{
  public $alambrico = false;
  public $internet = true;

  public function __construct($marca,$modelo){
    parent::__construct($marca,$modelo);
  }

  public function mas_info(){
    return print(
      '<ul>
        <li>Marca: <b>'.$this->marca.'</b></li>
        <li>Módelo: <b>'.$this->modelo.'</b></li>
        <li>Comunicación: <b>'.$this->comunicacion.'</b></li>
        <li>Dispositivo con acceso a Internet</li>
      </ul>'
    );
  }
}

echo '<h1>Evolución del Teléfono</h1>';
//instanciamos el objeto telefono
$telefono = new Telefono('Panasonic','KX-TS550');
echo '<h2>Teléfono:</h2>';
$telefono->llamar();
$telefono->mas_info();

//instanciamos el objeto celular
$celular = new Celular('Nokia','5120');
echo '<h2>Celular</h2>';
$celular->llamar();
$celular->mas_info();

//instanciamos el objeto SmartPhone
$smart = new SmartPhone('Samsung','Galaxy S8');
echo '<h2>SmartPhone</h2>';
$smart->llamar();
$smart->mas_info();
