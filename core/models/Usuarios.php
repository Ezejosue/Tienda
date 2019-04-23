<?php
class Usuarios extends Validator
{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $alias = null;
	private $clave = null;
	private $Nombre_Usuario = null;
    
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

	public function setAlias($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->alias = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getAlias()
	{
		return $this->alias;
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
	public function setNombre_Usuario($value)
	{
		if ($this->validatePassword($value)) {
			$this->Nombre_Usuario = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getNombre_Usuario()
	{
		return $this->Nombre_Usuario;
	}

	//Métodos para manejar la sesión del usuario
	public function checkNombre_Usuario()
	{
		$sql = 'SELECT id_usuario FROM Usuarios WHERE Nombre_Usuario= ?';
		$params = array($this->Nombre_Usuario);
		$data = Database::getRow($sql, $params);
		if ($data) {
			$this->id = $data['id_usuario'];
			return true;
		} else {
			return false;
		}
	}

	public function checkPassword()
	{
		$sql = 'SELECT Clave FROM Usuarios WHERE id_usuario = ?';
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if (password_verify($this->clave, $data['Clave'])) {
			return true;
		} else {
			return false;
		}
	}

	public function changePassword()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'UPDATE Usuarios SET clave = ? WHERE id_usuario = ?';
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}

	//Metodos para manejar el CRUD
	public function readUsuarios()
	{
		$sql = 'SELECT id_usuario, Nombre, Apellido, Genero, Correo, Estado FROM usuarios ORDER BY apellidos_usuario';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function searchUsuarios($value)
	{
		$sql = 'SELECT id_usuario, Nombre, Apellido, Correo, Nombre_Usuario FROM Usuarios WHERE Apellido LIKE ? OR Nombre_Usuario LIKE ? ORDER BY Apellido';
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}

	public function createUsuario()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'INSERT INTO Usuarios(Nombre, Apellido, Correo, Nombre_Usuario, Clave) VALUES(?, ?, ?, ?, ?)';
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $hash);
		return Database::executeRow($sql, $params);
	}

	public function getUsuario()
	{
		$sql = 'SELECT id_usuario, Nombre, Apellido, Correo, Nombre FROM Usuarios WHERE id_usuario = ?';
		$params = array($this->id);
		return Database::getRow($sql, $params);
	}

	public function updateUsuario()
	{
		$sql = 'UPDATE Usuarios SET Nombres = ?, Apellido = ?, Correo = ?, Nombre_Usuario = ? WHERE id_usuario = ?';
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function deleteUsuario()
	{
		$sql = 'DELETE FROM Usuarios WHERE id_usuario = ?';
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>