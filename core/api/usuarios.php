<?php
require_once('../../core/helpers/Conexion.php');
require_once('../../core/helpers/Validator.php');
require_once('../../core/models/Usuarios.php');

//Se comprueba si existe una petición del sitio web y la acción a realizar, de lo contrario se muestra una página de error
if (isset($_GET['site']) && isset($_GET['action'])) {
    session_start();
    $Nombre_Usuario = new Usuarios;
    $result = array('status' => 0, 'exception' => '');
    //Se verifica si existe una sesión iniciada como administrador para realizar las operaciones correspondientes
    if (isset($_SESSION['Usuario']) && $_GET['site'] == 'private') {
        switch ($_GET['action']) {
            case 'logout':
                if (session_destroy()) {
                    header('location: ../../views/private/');
                } else {
                    header('location: ../../views/private/inicio.php');
                }
                break;
            case 'readProfile':
                if ($Nombre_Usuario->setId($_SESSION['Usuario'])) {
                    if ($result['dataset'] = $Nombre_Usuario->getUsuario()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'editProfile':
                if ($Nombre_Usuario->setId($_SESSION['Usuario'])) {
                    if ($Nombre_Usuario->getUsuario()) {
                        $_POST = $Nombre_Usuario->validateForm($_POST);
                        if ($Nombre_Usuario->setNombres($_POST['profile_nombres'])) {
                            if ($Nombre_Usuario->setApellidos($_POST['profile_apellidos'])) {
                                if ($Nombre_Usuario->setCorreo($_POST['profile_correo'])) {
                                    if ($Nombre_Usuario->setAlias($_POST['profile_alias'])) {
                                        if ($Nombre_Usuario->updateUsuario()) {
                                            $_SESSION['aliasUsuario'] = $_POST['profile_alias'];
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Correo incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'password':
                if ($Nombre_Usuario->setId($_SESSION['idUsuario'])) {
                    $_POST = $Nombre_Usuario->validateForm($_POST);
                    if ($_POST['clave_actual_1'] == $_POST['clave_actual_2']) {
                        if ($Nombre_Usuario->setClave($_POST['clave_actual_1'])) {
                            if ($Nombre_Usuario->checkPassword()) {
                                if ($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']) {
                                    if ($Nombre_Usuario->setClave($_POST['clave_nueva_1'])) {
                                        if ($Nombre_Usuario->changePassword()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave nueva menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves nuevas diferentes';
                                }
                            } else {
                                $result['exception'] = 'Clave actual incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Clave actual menor a 6 caracteres';
                        }
                    } else {
                        $result['exception'] = 'Claves actuales diferentes';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'read':
                if ($result['dataset'] = $Nombre_Usuario->readUsuarios()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'No hay usuarios registrados';
                }
                break;
            case 'search':
                $_POST = $Nombre_Usuario->validateForm($_POST);
                if ($_POST['busqueda'] != '') {
                    if ($result['dataset'] = $Nombre_Usuario->searchUsuarios($_POST['busqueda'])) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'No hay coincidencias';
                    }
                } else {
                    $result['exception'] = 'Ingrese un valor para buscar';
                }
                break;
            case 'create':
                $_POST = $Nombre_Usuario->validateForm($_POST);
                if ($Nombre_Usuario->setNombres($_POST['create_nombres'])) {
                    if ($Nombre_Usuario->setApellidos($_POST['create_apellidos'])) {
                        if ($Nombre_Usuario->setCorreo($_POST['create_correo'])) {
                            if ($Nombre_Usuario->setAlias($_POST['create_alias'])) {
                                if ($_POST['create_clave1'] == $_POST['create_clave2']) {
                                    if ($Nombre_Usuario->setClave($_POST['create_clave1'])) {
                                        if ($Nombre_Usuario->createUsuario()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves diferentes';
                                }
                            } else {
                                $result['exception'] = 'Alias incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Correo incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'get':
                if ($Nombre_Usuario->setId($_POST['id_usuario'])) {
                    if ($result['dataset'] = $Nombre_Usuario->getUsuario()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'update':
                $_POST = $Nombre_Usuario->validateForm($_POST);
                if ($Nombre_Usuario->setId($_POST['id_usuario'])) {
                    if ($Nombre_Usuario->getUsuario()) {
                        if ($Nombre_Usuario->setNombres($_POST['update_nombres'])) {
                            if ($Nombre_Usuario->setApellidos($_POST['update_apellidos'])) {
                                if ($Nombre_Usuario->setCorreo($_POST['update_correo'])) {
                                    if ($Nombre_Usuario->setAlias($_POST['update_alias'])) {
                                        if ($Nombre_Usuario->updateUsuario()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Correo incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'delete':
                if ($_POST['id_usuario'] != $_SESSION['idUsuario']) {
                    if ($Nombre_Usuario->setId($_POST['id_usuario'])) {
                        if ($Nombre_Usuario->getUsuario()) {
                            if ($Nombre_Usuario->deleteUsuario()) {
                                $result['status'] = 1;
                            } else {
                                $result['exception'] = 'Operación fallida';
                            }
                        } else {
                            $result['exception'] = 'Usuario inexistente';
                        }
                    } else {
                        $result['exception'] = 'Usuario incorrecto';
                    }
                } else {
                    $result['exception'] = 'No se puede eliminar a sí mismo';
                }
                break;
            default:
                exit('Acción no disponible');
        }
    } else if ($_GET['site'] == 'private') {
        switch ($_GET['action']) {
            case 'read':
                if ($Nombre_Usuario->readUsuarios()) {
                    $result['status'] = 1;
                    $result['exception'] = 'Existe al menos un usuario registrado';
                } else {
                    $result['status'] = 2;
                    $result['exception'] = 'No existen usuarios registrados';
                }
                break;
            case 'register':
                $_POST = $Nombre_Usuario->validateForm($_POST);
                if ($Nombre_Usuario->setNombres($_POST['nombres'])) {
                    if ($Nombre_Usuario->setApellidos($_POST['apellidos'])) {
                        if ($Nombre_Usuario->setCorreo($_POST['correo'])) {
                            if ($Nombre_Usuario->setAlias($_POST['alias'])) {
                                if ($_POST['clave1'] == $_POST['clave2']) {
                                    if ($Nombre_Usuario->setClave($_POST['clave1'])) {
                                        if ($Nombre_Usuario->createUsuario()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves diferentes';
                                }
                            } else {
                                $result['exception'] = 'Alias incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Correo incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'login':
                $_POST = $Nombre_Usuario->validateForm($_POST);
                if ($Nombre_Usuario->setNombre_Usuario($_POST['Usuario'])) {
                    if ($Nombre_Usuario->checkNombre_Usuario()) {
                        if ($Nombre_Usuario->setClave($_POST['Clave'])) {
                            if ($Nombre_Usuario->checkPassword()) {
                                $_SESSION['id_usuario'] = $Nombre_Usuario->getId();
                                $_SESSION['Nombre_Usuario'] = $Nombre_Usuario->getNombre_Usuario();
                                $result['status'] = 1;
                            } else {
                                $result['exception'] = 'Clave inexistente';
                            }
                        } else {
                            $result['exception'] = 'Clave menor a 6 caracteres';
                        }
                    } else {
                        $result['exception'] = 'Alias inexistente';
                    }
                } else {
                    $result['exception'] = 'Alias incorrecto';
                }
                break;
            default:
                exit('Acción no disponible');
        }
    } else {
        exit('Acceso no disponible');
    }
	print(json_encode($result));
} else {
	exit('Recurso denegado');
}
?>