<?php
class Usuarios extends Validator
{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $genero = null;
	private $nombre_usuario = null;
	private $correo = null;
	private $clave = null;
	private $estado = null;
	private $tipo_usuario = null;
	
	
    
	//Métodos para sobrecarga de propiedades
	public function setId($value)
	{
		if ($this->validateId($value)) {
			$this->id = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNombres($value)
	{
		if ($this->validateAlphabetic($value, 1, 50)) {
			$this->nombres = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getNombres()
	{
		return $this->nombres;
	}

	public function setApellidos($value)
	{
		if ($this->validateAlphabetic($value, 1, 50)) {
			$this->apellidos = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getApellidos()
	{
		return $this->apellidos;
	}

	public function setGenero($value){
		if ($this->validateAlphabetic($value, 1, 50)) {
			$this->genero = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getGenero()
	{
		return $this->genero;
	}


	public function setNombre_usuario($value)
	{
		if ($this->validatePassword($value)) {
			$this->nombre_usuario = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getNombre_usuario()
	{
		return $this->nombre_usuario;
	}

	public function setCorreo($value)
	{
		if ($this->validateEmail($value)) {
			$this->correo = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getCorreo()
	{
		return $this->correo;
	}

	public function setClave($value)
	{
		if ($this->validatePassword($value)) {
			$this->clave = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getClave()
	{
		return $this->clave;
	}
	

	//Métodos para manejar la sesión del usuario
	public function checkNombre_Usuario()
	{
		$sql = 'SELECT id_usuario FROM usuarios WHERE Nombre_Usuario= ?';
		$params = array($this->nombre_usuario);
		$data = Conexion::getRow($sql, $params);
		if ($data) {
			$this->id = $data['id_usuario'];
			return true;
		} else {
			return false;
		}
	}

	public function checkPassword()
	{
		$sql = 'SELECT Clave FROM usuarios WHERE id_usuario = ?';
		$params = array($this->id);
		$data = Conexion::getRow($sql, $params);
		if (password_verify($this->clave, $data['Clave'])) {
			return true;
		} else {
			return false;
		}
	}

	public function changePassword()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'UPDATE usuarios SET Clave = ? WHERE id_usuario = ?';
		$params = array($hash, $this->id);
		return Conexion::executeRow($sql, $params);
	}

	//Metodos para manejar el CRUD
	public function readUsuarios()
	{
		$sql = 'SELECT Nombre, Apellido, Nombre_Usuario, Correo, Clave FROM usuarios ORDER BY Apellido';
		$params = array(null);
		return Conexion::getRows($sql, $params);
	}

	public function searchUsuarios($value)
	{
		$sql = 'SELECT Nombre, Apellido, Nombre_Usuario, Correo, Clave FROM usuarios WHERE Apellido LIKE ? OR Nombre_Usuario LIKE ? ORDER BY Apellido';
		$params = array("%$value%", "%$value%");
		return Conexion::getRows($sql, $params);
	}

	public function createUsuario()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'INSERT INTO usuarios(Nombre, Apellido, Nombre_Usuario, Correo, Clave) VALUES(?, ?, ?, ?, ?)';
		$params = array($this->nombres, $this->apellidos,  $this->nombre_usuario, $this->correo, $hash);
		return Conexion::executeRow($sql, $params);
	}

	public function getUsuario()
	{
		$sql = 'SELECT Nombre, Apellido, Nombre_Usuario, Correo, Clave FROM usuarios WHERE id_usuario = ?';
		$params = array($this->id);
		return Conexion::getRow($sql, $params);
	}

	public function updateUsuario()
	{
		$sql = 'UPDATE usuarios SET Nombre = ?, Apellido = ?, Genero = ?, Nombre_Usuario = ?, Correo = ?, Estado = ?, id_Tipousuario = ? WHERE id_usuario = ?';
		$params = array($this->nombres, $this->apellidos, $this->genero, $this->nombre_usuario, $this->correo, $this->estado, $this->tipo_usuario, $this->id);
		return Conexion::executeRow($sql, $params);
	}

	public function deleteUsuario()
	{
		$sql = 'DELETE FROM usuarios WHERE id_usuario = ?';
		$params = array($this->id);
		return Conexion::executeRow($sql, $params);
	}
}
?>