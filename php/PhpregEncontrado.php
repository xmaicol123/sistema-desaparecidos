<?php 
include_once('Conection.php');
/**
* 
*/
class Encontrado extends Conexion
{
	private $cod_encontrado;
	private $cod_usuario;
	private $imagen;
	private $nombre_encontrado;
	private $sexo;
	private $edad;
	private $estatura;
	private $tez;
	private $ojos;
	private $cabello;
	private $señas_particulares;
	private $vestimenta;
	private $circunstancia;
	private $fecha_registro;
	private $estado_persona;

	public function Desaparecido()
	{
		parent::conexion();
		$this->cod_encontrado;
		$this->cod_usuario;
		$this->imagen;
		$this->nombre_encontrado;
		$this->sexo;
		$this->edad;
		$this->estatura;
		$this->tez;
		$this->ojos;
		$this->cabello;
		$this->señas_particulares;
		$this->vestimenta;
		$this->circunstancia;
		$this->fecha_registro;
		$this->estado_persona;
	}

	public function setCodEncontrado($valor)
	{
		$this->cod_encontrado = $valor;
	}

	public function getCodEncontrado()
	{
		return $this->cod_encontrado;
	}

	public function setCodUsuario($valor)
	{
		$this->cod_usuario = $valor;
	}

	public function getCodUsuario()
	{
		return $this->cod_usuario;
	}

	public function setImagen($valor)
	{
		$this->imagen = $valor;
	}

	public function getImagen()
	{
		return $this->imagen;
	}

	public function setNombreEncontrado($valor)
	{
		$this->nombre_encontrado = $valor;
	}

	public function getNombreEncontrado()
	{
		return $this->nombre_encontrado;
	}

	public function setSexo($valor)
	{
		$this->sexo = $valor;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function setEdad($valor)
	{
		$this->edad = $valor;
	}

	public function getEdad()
	{
		return $this->edad;
	}

	public function setEstatura($valor)
	{
		$this->estatura = $valor;
	}

	public function getEstatura()
	{
		return $this->estatura;
	}

	public function setTez($valor)
	{
		$this->tez = $valor;
	}

	public function getTez()
	{
		return $this->tez;
	}

	public function setOjos($valor)
	{
		$this->ojos = $valor;
	}

	public function getOjos()
	{
		return $this->ojos;
	}

	public function setCabello($valor)
	{
		$this->cabello = $valor;
	}

	public function getCabello()
	{
		return $this->cabello;
	}

	public function setSeñasParticulares($valor)
	{
		$this->señas_particulares = $valor;
	}

	public function getSeñasParticulares()
	{
		return $this->señas_particulares;
	}

	public function setVestimenta($valor)
	{
		$this->vestimenta = $valor;
	}

	public function getVestimenta()
	{
		return $this->vestimenta;
	}


	public function setCircunstancia($valor)
	{
		$this->circunstancia = $valor;
	}

	public function getCircunstancia()
	{
		return $this->circunstancia;
	}

	public function setFechaRegistro($valor)
	{
		$this->fecha_registro = $valor;
	}

	public function getFechaRegistro()
	{
		return $this->fecha_registro;
	}

	public function setEstadoPersona($valor)
	{
		$this->estado_persona = $valor;
	}

	public function getEstadoPersona()
	{
		return $this->estado_persona;
	}

	public function guardar()
	{
		$sql = "INSERT INTO `encontrado` (`cod_usuario_table`, `imagen`, `nombre_encontrado`, `sexo`, `edad`, `estatura`, `tez`, `ojos`, `cabello`, `señas_particulares`, `vestimenta`, `circunstancia`, `fecha_registro`, `estado_persona`) VALUES ('$this->cod_usuario', '$this->imagen', '$this->nombre_encontrado', '$this->sexo', '$this->edad', '$this->estatura', '$this->tez', '$this->ojos', '$this->cabello', '$this->señas_particulares', '$this->vestimenta', '$this->circunstancia', '$this->fecha_registro', '$this->estado_persona');";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function modificar()
	{
		$sql = "UPDATE `encontrado` SET `imagen` = '$this->imagen', `nombre_encontrado` = '$this->nombre_encontrado', `sexo` = '$this->sexo', `edad` = '$this->edad', `estatura` = '$this->estatura', `tez` = '$this->tez', `ojos` = '$this->ojos', `cabello` = '$this->cabello', `señas_particulares` = '$this->señas_particulares', `vestimenta` = '$this->vestimenta', `circunstancia` = '$this->circunstancia', `fecha_registro` = '$this->fecha_registro', `estado_persona` = '$this->estado_persona' WHERE `encontrado`.`cod_encontrado` = $this->cod_encontrado;";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function modificarImagen()
	{
		$sql = "UPDATE `encontrado` SET `imagen` = '$this->imagen', `nombre_encontrado` = '$this->nombre_encontrado', `sexo` = '$this->sexo', `edad` = '$this->edad', `estatura` = '$this->estatura', `tez` = '$this->tez', `ojos` = '$this->ojos', `cabello` = '$this->cabello', `señas_particulares` = '$this->señas_particulares', `vestimenta` = '$this->vestimenta', `circunstancia` = '$this->circunstancia', `fecha_registro` = '$this->fecha_registro', `estado_persona` = '$this->estado_persona' WHERE `encontrado`.`cod_encontrado` = $this->cod_encontrado;";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function mostrarPersonaBuscadaIndex()
	{
		$sql="SELECT * FROM encontrado ORDER BY cod_encontrado DESC";
		return parent::ejecutar($sql);
	}

	public function mostrarEncontrado($setCod)
	{
		$sql="SELECT * FROM encontrado WHERE cod_encontrado = '$setCod' ";
		return parent::ejecutar($sql);
	}

	public function consultaEncontrado($cod_usuario)
	{
		$sql="SELECT * FROM usuario,encontrado WHERE cod_usuario = cod_usuario_table and cod_usuario = '$cod_usuario'";
		return parent::ejecutar($sql);
	}
	

}
?>