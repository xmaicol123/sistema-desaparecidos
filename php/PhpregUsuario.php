<?php 
include_once('Conection.php');
/**
* 
*/
class Usuario extends Conexion
{
	private $tipo_usuario;
	private $cod_usuario;
	private $nombre;
	private $usuario;
	private $password;
	private $fecha_nacimiento;
	private $celular;
	private $email;
	
	public function Usuario()
	{
		parent::conexion();
		$this->tipo_usuario=0;
		$this->cod_usuario=0;
		$this->nombre="";
		$this->usuario="";
		$this->password="";
		$this->fecha_nacimiento="";
		$this->celular=0;
		$this->email="";
	}

	public function setCodUsuario($valor)
	{
		$this->cod_usuario = $valor;
	}

	public function getCodUsuario()
	{
		return $this->cod_usuario;
	}

	public function setTipoUsuario($valor)
	{
		$this->tipo_usuario = $valor;
	}

	public function getTipoUsuario()
	{
		return $this->tipo_usuario;
	}

	public function setNombre($valor)
	{
		$this->nombre = $valor;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setUsuario($valor)
	{
		$this->usuario = $valor;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setPassword($valor)
	{
		$this->password = $valor;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setFechaNacimiento($valor)
	{
		$this->fecha_nacimiento = $valor;
	}

	public function getFechaNacimiento()
	{
		return $this->fecha_nacimiento;
	}

	public function setCelular($valor)
	{
		$this->celular = $valor;
	}

	public function getCelular()
	{
		return $this->celular;
	}

	public function setEmail($valor)
	{
		$this->email = $valor;
	}

	public function getEmail()
	{
		return $this->email;
	}

	//DATABASE CONSULTAS
	public function guardar()
	{
		$sql = "INSERT INTO `usuario` (`cod_tipo_usuario_table`, `nombre_usuario`, `usuario_usuario`, `password_usuario`, `fecha_nacimiento`, `celular`, `email`) VALUES ('$this->tipo_usuario', '$this->nombre', '$this->usuario','$this->password', '$this->fecha_nacimiento', '$this->celular', '$this->email');";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}
}
?>