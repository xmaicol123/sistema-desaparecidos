<?php
include_once('Conection.php');
Class Login extends Conexion
{
	//declarando las atributos
	private $usuario;
	private $password;

	//constructor
	public function Login()
	{
		parent::conexion();
		$this->usuario="";
		$this->password="";
	}

	//METODOS
	public function setUsuario($valor)
	{
		$this->usuario=$valor;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setPassword($valor)
	{
		$this->password=$valor;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function loginAdmin()
	{
		$sql="SELECT * FROM usuario WHERE usuario_usuario='$this->usuario' AND password_usuario=md5('$this->password') AND cod_tipo_usuario_table = '1' ";
		return parent::ejecutar($sql);
	}

	public function loginUsuario()
	{
		$sql="SELECT * FROM usuario WHERE usuario_usuario='$this->usuario' AND password_usuario=md5('$this->password') AND cod_tipo_usuario_table = '2' ";
		return parent::ejecutar($sql);
	}

} 
?>