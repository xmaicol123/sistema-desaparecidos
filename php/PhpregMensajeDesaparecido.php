<?php 
include_once('Conection.php');
/**
* 
*/
class MensajeDesaparecido extends Conexion
{
	private $cod_mensaje_desaparecido;
	private $cod_desaparecido;
	private $mensaje_1;
	private $mensaje_2;
	private $mensaje_3;
	private $mensaje_4;

	public function MensajeDesaparecido()
	{
		parent::conexion();
		$this->cod_mensaje_desaparecido=0;
		$this->cod_desaparecido=0;
		$this->mensaje_1="";
		$this->mensaje_2="";
		$this->mensaje_3="";
		$this->mensaje_4="";
	}

	public function setCodMensajeDesaparecido($valor)
	{
		$this->cod_mensaje_desaparecido = $valor;
	}

	public function getCodMensajeDesaparecido()
	{
		return $this->cod_mensaje_desaparecido;
	}

	public function setCodDesaparecido($valor)
	{
		$this->cod_desaparecido = $valor;
	}

	public function getCodDesaparecido()
	{
		return $this->cod_desaparecido;
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
		$sql = "INSERT INTO `mensaje_deaparecido` (`cod_desaparecido_table`, `mensaje_1`, `mensaje_2`, `mensaje_3`, `mensaje_4`) VALUES ('$this->cod_desaparecido', '$this->mensaje_1', '$this->mensaje_2', '$this->mensaje_3', '$this->mensaje_4');";

		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}

	public function mostrarMensaje($cod_usuario,$cod_desaparecido)
	{
		$sql="SELECT * FROM usuario,desaparecido,mensaje_deaparecido WHERE cod_usuario = cod_usuario_table AND cod_desaparecido = cod_desaparecido_table and cod_usuario = '$cod_usuario' and cod_desaparecido = '$cod_desaparecido' ";
		return parent::ejecutar($sql);
	}

	public function mostrarMensajeAdmin($cod_desaparecido)
	{
		$sql="SELECT * FROM usuario,desaparecido,mensaje_deaparecido WHERE cod_usuario = cod_usuario_table AND cod_desaparecido = cod_desaparecido_table and cod_desaparecido = '$cod_desaparecido' ";
		return parent::ejecutar($sql);
	}
}

?>