<?php
class Productos extends Validator 
{
    //Declaracion de propiedades
    private $id = null;
    private $Nombrep = null;
    private $descripcionp = null;
    private $preciop = null;
    private $cantidadp = null;
    private $id_categoria = null;

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
    
    public function setNombre($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->Nombrep = $value;
			return true;
		} else {
			return false;
		}
    }
    
    public function getNombre()
	{
		return $this->Nombrep;
    }
    
    public function setDescripcion($value)
	{
		if ($this->validateAlphanumeric($value, 1, 200)) {
			$this->descripcionp = $value;
			return true;
		} else {
			return false;
		}
    }
    
    public function getDescripcion()
	{
		return $this->descripcionp;
	}

	public function setPrecio($value)
	{
		if ($this->validateMoney($value)) {
			$this->preciop = $value;
			return true;
		} else {
			return false;
		}
    }
    
    public function getPrecio()
	{
		return $this->preciop;
    }
    
   /*  public function setImagen($file, $name)
	{
		if ($this->validateImageFile($file, $this->ruta, $name, 500, 500)) {
			$this->imagen = $this->getImageName();
			return true;
		} else {
			return false;
		}
    } */
    
    /* public function getImagen()
	{
		return $this->imagen;
    } */
    
    public function setCantidad($value)
	{
		if ($this->validatecantidad($value)) {
			$this-> cantidadp= $value;
			return true;
		} else {
			return false;
		}
	}

	public function getCantidad()
	{
		return $this->cantidadp;
    }
    
    public function setCategoria($value)
	{
		if ($this->validateId($value)) {
			$this->id_categoria = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getCategoria()
	{
		return $this->id_categoria;
    }

    //Metodos para el manejo del CRUD
    public function readProductosCategoria()
	{
		$sql = 'SELECT Nombre_categoria, id_producto, Nombre_producto, p.Descripcion, Precio FROM producto as p INNER JOIN categoria USING(id_categoria) WHERE id_categoria = ? ORDER BY Nombre_producto';
		$params = array($this->id_categoria);
		return Database::getRows($sql, $params);
    }
    
    public function readProductos()
	{
		$sql = 'SELECT id_producto, Nombre_producto, p.Descripcion, Precio, Nombre_categoria FROM productos as p INNER JOIN categoria USING(id_categoria) ORDER BY Nombre_producto';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function searchProductos($value)
	{
		$sql = 'SELECT id_producto, Nombre_producto, p.Descripcion, Precio, Nombre_categoria FROM productos as p INNER JOIN categoria USING(id_categoria) WHERE Nombre_producto LIKE ? OR Descripcion.p LIKE ? ORDER BY Nombre_producto';
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    
    
	public function readCategorias()
	{
		$sql = 'SELECT id_categoria, Nombre_categoria, Descripcion FROM categoria';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

    public function createProducto()
	{
		$sql = 'INSERT INTO producto(Nombre_producto, Descripcion, Precio, Cantidad, id_categoria) VALUES(?, ?, ?, ?, ?)';
		$params = array($this->Nombrep, $this->descripcionp, $this->preciop, $this->cantidadp, $this->id_categoria);
		return Database::executeRow($sql, $params);
    }
    
    public function getProducto()
	{
		$sql = 'SELECT id_producto, Nombre_producto, Descripcion, Precio, Cantidad, id_categoria FROM productos WHERE id_producto = ?';
		$params = array($this->id);
		return Database::getRow($sql, $params);
	}

	public function updateProducto()
	{
		$sql = 'UPDATE producto SET Nombre_producto = ?, Descripcion = ?, Precio = ?, Cantidad = ?, id_categoria = ? WHERE id_producto = ?';
		$params = array($this->Nombrep, $this->descripcionp, $this->preciop, $this->cantidadp, $this->id_categoria, $this->id);
		return Database::executeRow($sql, $params);
    }
    
    public function deleteProducto()
	{
		$sql = 'DELETE FROM producto WHERE id_producto = ?';
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
