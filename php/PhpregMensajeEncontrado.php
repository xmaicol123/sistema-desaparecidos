<?php 
include_once('Conection.php');
/**
* 
*/
class MensajeEncontrado extends Conexion
{
	private $cod_mensaje_encontrado;
	private $cod_encontrado;
	private $mensaje_1;
	private $mensaje_2;
	private $mensaje_3;
	private $mensaje_4;

	public function MensajeEncontrado()
	{
		parent::conexion();
		$this->cod_mensaje_encontrado=0;
		$this->cod_encontrado=0;
		$this->mensaje_1="";
		$this->mensaje_2="";
		$this->mensaje_3="";
		$this->mensaje_4="";
	}

	public function setCodMensajeEncontrado($valor)
	{
		$this->cod_mensaje_encontrado = $valor;
	}

	public function getCodMensajeEncontrado()
	{
		return $this->cod_mensaje_encontrado;
	}

	public function setCodEncontrado($valor)
	{
		$this->cod_encontrado = $valor;
	}

	public function getCodEncontrado()
	{
		return $this->cod_encontrado;
	}

	public function setMensaje1($valor)
	{
		$this->mensaje_1 = $valor;
	}

	public function getMensaje1()
	{
		return $this->mensaje_1;
	}

	public function setMensaje2($valor)
	{
		$this->mensaje_2 = $valor;
	}

	public function getMensaje2()
	{
		return $this->mensaje_2;
	}

	public function setMensaje3($valor)
	{
		$this->mensaje_3 = $valor;
	}

	public function getMensaje3()
	{
		return $this->mensaje_3;
	}

	public function setMensaje4($valor)
	{
		$this->mensaje_4 = $valor;
	}

	public function getMensaje4()
	{
		return $this->mensaje_4;
	}

	public function guardar()
	{
		$sql = "INSERT INTO `mensaje_encontrado` (`cod_encontrado_table`, `mensaje_1`, `mensaje_2`, `mensaje_3`, `mensaje_4`) VALUES ('$this->cod_encontrado', '$this->mensaje_1', '$this->mensaje_2', '$this->mensaje_3', '$this->mensaje_4');";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function mostrarMensaje($cod_usuario,$cod_encontrado)
	{
		$sql="SELECT * FROM usuario,encontrado,mensaje_encontrado WHERE cod_usuario = cod_usuario_table AND cod_encontrado = cod_encontrado_table and cod_usuario = '$cod_usuario' and cod_encontrado = '$cod_encontrado' ";
		return parent::ejecutar($sql);
	}

	public function mostrarMensajeAdmin($cod_encontrado)
	{
		$sql="SELECT * FROM usuario,encontrado,mensaje_encontrado WHERE cod_usuario = cod_usuario_table AND cod_encontrado = cod_encontrado_table and cod_encontrado = '$cod_encontrado' ";
		return parent::ejecutar($sql);
	}
}

?>