<?php 
include_once('Conection.php');
/**
* 
*/
class Desaparecido extends Conexion
{
	private $cod_desaparecido;
	private $cod_usuario;
	private $imagen;
	private $nombre_desaparecido;
	private $sexo;
	private $edad;
	private $estatura;
	private $tez;
	private $ojos;
	private $cabello;
	private $fecha_desaparicion;
	private $señas_particulares;
	private $vestimenta;
	private $circunstancia;
	private $fecha_registro;
	private $estado_desaparecido;

	public function Desaparecido()
	{
		parent::conexion();
		$this->cod_desaparecido;
		$this->cod_usuario;
		$this->imagen;
		$this->nombre_desaparecido;
		$this->sexo;
		$this->edad;
		$this->estatura;
		$this->tez;
		$this->ojos;
		$this->cabello;
		$this->fecha_desaparicion;
		$this->señas_particulares;
		$this->vestimenta;
		$this->circunstancia;
		$this->fecha_registro;
		$this->estado_desaparecido;
	}

	public function setCodDesaparecido($valor)
	{
		$this->cod_desaparecido = $valor;
	}

	public function getCodDesaparecido()
	{
		return $this->cod_desaparecido;
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

	public function setNombreDesaparecido($valor)
	{
		$this->nombre_desaparecido = $valor;
	}

	public function getNombreDesaparecido()
	{
		return $this->nombre_desaparecido;
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

	public function setFechaDesaparicion($valor)
	{
		$this->fecha_desaparicion = $valor;
	}

	public function getFechaDesaparicion()
	{
		return $this->fecha_desaparicion;
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

	public function setEstadoDesaparecido($valor)
	{
		$this->estado_desaparecido = $valor;
	}

	public function getEstadoDesaparecido()
	{
		return $this->estado_desaparecido;
	}

	public function guardar()
	{
		$sql = "INSERT INTO `desaparecido` (`cod_usuario_table`, `imagen`, `nombre_desaparecido`, `sexo`, `edad`, `estatura`, `tez`, `ojos`, `cabello`, `fecha_desaparicion`, `señas_particulares`, `vestimenta`, `circunstancia`, `fecha_registro`, `estado_desaparecido`) VALUES ('$this->cod_usuario', '$this->imagen', '$this->nombre_desaparecido', '$this->sexo', '$this->edad', '$this->estatura', '$this->tez', '$this->ojos', '$this->cabello', '$this->fecha_desaparicion', '$this->señas_particulares', '$this->vestimenta', '$this->circunstancia', '$this->fecha_registro', '$this->estado_desaparecido');";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function modificar()
	{
		$sql = "UPDATE `desaparecido` SET `imagen` = '$this->imagen', `nombre_desaparecido` = '$this->nombre_desaparecido', `sexo` = '$this->sexo', `edad` = '$this->edad', `estatura` = '$this->estatura', `tez` = '$this->tez', `ojos` = '$this->ojos', `cabello` = '$this->cabello', `fecha_desaparicion` = '$this->fecha_desaparicion', `señas_particulares` = '$this->señas_particulares', `vestimenta` = '$this->vestimenta', `circunstancia` = '$this->circunstancia', `fecha_registro` = '$this->fecha_registro', `estado_desaparecido` = '$this->estado_desaparecido' WHERE `desaparecido`.`cod_desaparecido` = $this->cod_desaparecido;";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function modificarImagen()
	{
		$sql = "UPDATE `desaparecido` SET `imagen` = '$this->imagen', `nombre_desaparecido` = '$this->nombre_desaparecido', `sexo` = '$this->sexo', `edad` = '$this->edad', `estatura` = '$this->estatura', `tez` = '$this->tez', `ojos` = '$this->ojos', `cabello` = '$this->cabello', `fecha_desaparicion` = '$this->fecha_desaparicion', `señas_particulares` = '$this->señas_particulares', `vestimenta` = '$this->vestimenta', `circunstancia` = '$this->circunstancia', `fecha_registro` = '$this->fecha_registro', `estado_desaparecido` = '$this->estado_desaparecido' WHERE `desaparecido`.`cod_desaparecido` = $this->cod_desaparecido;";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function mostrarDesaparecidoIndex()
	{
		$sql="SELECT * FROM desaparecido ORDER BY cod_desaparecido DESC";
		return parent::ejecutar($sql);
	}

	public function mostrarDesaparecido($setCod)
	{
		$sql="SELECT * FROM desaparecido WHERE cod_desaparecido = '$setCod' ";
		return parent::ejecutar($sql);
	}

	public function consultaDesaparecido($cod_usuario)
	{
		$sql="SELECT * FROM usuario,desaparecido WHERE cod_usuario = cod_usuario_table and cod_usuario = '$cod_usuario' ORDER BY cod_desaparecido DESC ";
		return parent::ejecutar($sql);
	}
	

}
?>