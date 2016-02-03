<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "index";
		$this->load->view("template", $data);

	}

	public function login()
	{
		if($this->session->userdata("user_logeado")) redirect("principal/");
		$data["content"] = "login";
		$this->load->view("login", $data);

	}


//**********************************************************************************************************

// ---------------------------------------SECCION DE CATALOGOS----------------------------------------------

//**********************************************************************************************************

	// ***********************************DIRECCION CATALOGO ***********************************************
	public function direcciones()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/direccion";
		$data["direcciones"] =  $this->Dromos_model->get_direcciones();
		$this->load->view("template", $data);
	}

	public function prueba()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/prueba";
		$data["direcciones"] =  $this->Dromos_model->get_direcciones();
		$this->load->view("catalogos/prueba", $data);
	}



	public function editarDireccion($idDireccion)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarDireccion";
		$data["direccion"] =  $this->Dromos_model->get_direccion($idDireccion);
		$data["direccion"] = $data["direccion"][0];
		$this->load->view("template", $data);
	}

	//Ajax para actualizar una direccion
	public function SEditDireccion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaDireccion($this->input->post());
		if($respuesta){
			echo  "DIRECCION ACTUALIZADA CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaDireccion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaDireccion($this->input->post('idDireccion'));
        if($estatus){
            echo "Dirección eliminada correctamente";
        }else{
            echo "Ocurrio un error al eliminar la dirección";
        }
	}

	public function nuevaDireccion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevaDireccion";
		$this->load->view("template", $data);
	}

	//Ajax para agregar una direccion
	public function SAddDireccion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->agregarDireccion($this->input->post());
		if($respuesta){
			echo  "direcciones";
		}else{
			echo FALSE;
		}
	}

	// ***********************************Área CATALOGO ***********************************************
	public function areas()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/area";
		$data["areas"] =  $this->Dromos_model->get_Areas();
		$data["direcciones"] =  $this->Dromos_model->get_direcciones();
		$this->load->view("template", $data);
	}

	public function editarArea($idArea)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarArea";
		$data["area"] =  $this->Dromos_model->get_area($idArea);
		$data["area"]= $data["area"][0];
		$data["direcciones"] =  $this->Dromos_model->get_direcciones();
		$this->load->view("template", $data);
	}

	//Ajax para actualizar una direccion
	public function SEditArea(){
	if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaArea($this->input->post());
		if($respuesta){
			echo  "ÁREA ACTUALIZADA CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaArea(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaArea($this->input->post('idArea'));
        if($estatus){
            echo "Área eliminada correctamente";
        }else{
            echo "Ocurrio un error al eliminar el área";
        }
	}

	public function nuevaArea(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevaArea";
		$data["direcciones"] =  $this->Dromos_model->get_direcciones();
		$this->load->view("template", $data);
	}

	//Ajax para agregar una area
	public function SAddArea(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->agregarArea($this->input->post());
		if($respuesta){
			echo  "areas";
		}else{
			echo FALSE;
		}
	}

	// ***********************************Departamento CATALOGO ***********************************************
	public function departamentos()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/departamento";
		$data["areas"] =  $this->Dromos_model->get_Areas();
		$data["departamentos"] =  $this->Dromos_model->get_Departamentos();
		$this->load->view("template", $data);
	}

	public function editarDepartamento($idDepartamento)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarDepto";
		$data["departamento"] =  $this->Dromos_model->get_departamento($idDepartamento);
		$data["departamento"] =$data["departamento"][0];
		$data["areas"] =  $this->Dromos_model->get_Areas();
		$this->load->view("template", $data);
	}

	//Ajax para actualizar un departamento
	public function SEditDepto(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaDepartamento($this->input->post());
		if($respuesta){
			echo  "DEPARTAMENTO ACTUALIZADO CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaDepartamento(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaDepartamento($this->input->post('idDepartamento'));
        if($estatus){
            echo "Departamento eliminado correctamente";
        }else{
            echo "Ocurrio un error al eliminar el Departamento";
        }
	}

	public function nuevoDepartamento(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevoDepartamento";
		$data["areas"] =  $this->Dromos_model->get_Areas();
		$this->load->view("template", $data);
	}

	//Ajax para agregar un Departamento
	public function SAddDepartamento(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->agregarDepartamento($this->input->post());
		if($respuesta){
			echo  "departamentos";
		}else{
			echo FALSE;
		}
	}

	// ***********************************Puestos CATALOGO ***********************************************
	public function puestos()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/puesto";
		$data["puestos"] =  $this->Dromos_model->get_Puestos();
		$this->load->view("template", $data);
	}

	public function editarPuesto($clave)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarPuesto";
		$data["puesto"] =  $this->Dromos_model->get_puesto($clave);
		$data["puesto"] = $data["puesto"][0];
		$this->load->view("template", $data);
	}

	//Ajax para actualizar un puesto
	public function SEditPuesto(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaPuesto($this->input->post());
		if($respuesta){
			echo  "PUESTO ACTUALIZADA CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaPuesto(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaPuesto($this->input->post('clave'));
        if($estatus){
            echo "Puesto eliminado correctamente";
        }else{
            echo "Ocurrio un error al eliminar el puesto";
        }
	}

	public function nuevoPuesto(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevoPuesto";
		$this->load->view("template", $data);
	}

	//Ajax para agregar un Departamento
	public function SAddPuesto(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$existe= $this->Dromos_model->existePuesto($this->input->post('clave'));
		if(!$existe){
			$respuesta= $this->Dromos_model->agregarPuesto($this->input->post());
			if($respuesta){
				echo  "puestos";
			}else{
				echo FALSE;
			}
		}else{
			echo "MSG:Ya existe un puesto con esta clave, ingresa una nueva";
		}

	}

	// ***********************************Ubicacion CATALOGO ***********************************************
	public function ubicaciones()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/ubicacion";
		$data["ubicaciones"] =  $this->Dromos_model->get_Ubicaciones();
		$this->load->view("template", $data);
	}

	public function editarUbicacion($idUbicacion)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarUbicacion";
		$data["ubicacion"] =  $this->Dromos_model->get_ubicacion($idUbicacion);
		$data["ubicacion"] = $data["ubicacion"][0];
		$this->load->view("template", $data);
	}

	//Ajax para actualizar una direccion
	public function SEditUbicacion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaUbicacion($this->input->post());
		if($respuesta){
			echo  "UBICACIÓN ACTUALIZADA CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaUbicacion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaUbicacion($this->input->post('idUbicacion'));
        if($estatus){
            echo "Ubicacion eliminada correctamente";
        }else{
            echo "Ocurrio un error al eliminar la ubicacion";
        }
	}

	public function nuevaUbicacion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevaUbicacion";
		$this->load->view("template", $data);
	}

	//Ajax para agregar un Departamento
	public function SAddUbicacion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->agregarUbicacion($this->input->post());
		if($respuesta){
			echo  "ubicaciones";
		}else{
			echo FALSE;
		}
	}


	// ***********************************Regimen CATALOGO ***********************************************
	public function regimenes()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/regimen";
		$data["regimenes"] =  $this->Dromos_model->get_Regimenes();
		$this->load->view("template", $data);
	}

	public function editarRegimen($idRegimen)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarRegimen";
		$data["regimen"] =  $this->Dromos_model->get_regimen($idRegimen);
		$data["regimen"]= $data["regimen"][0];
		$this->load->view("template", $data);
	}

	//Ajax para actualizar un Regimen
	public function SEditRegimen(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaRegimen($this->input->post());
		if($respuesta){
			echo  "RÉGIMEN ACTUALIZADO CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaRegimen(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaRegimen($this->input->post('idRegimen'));
        if($estatus){
            echo "Regimen eliminado correctamente";
        }else{
            echo "Ocurrio un error al eliminar el regimen";
        }
	}

	public function nuevoRegimen(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevoRegimen";
		$this->load->view("template", $data);
	}

	//Ajax para agregar un Regimen
	public function SAddRegimen(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->agregarRegimen($this->input->post());
		if($respuesta){
			echo  "regimenes";
		}else{
			echo FALSE;
		}
	}


	// ***********************************Turno CATALOGO ***********************************************
	public function turnos()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/turno";
		$data["turnos"] =  $this->Dromos_model->get_Turnos();
		$this->load->view("template", $data);
	}

	public function editarTurno($idTurno)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarTurno";
		$data["turno"] =  $this->Dromos_model->get_turno($idTurno);
		$data["turno"] = $data["turno"][0];
		$this->load->view("template", $data);
	}

	//Ajax para actualizar un Turno
	public function SEditTurno(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaTurno($this->input->post());
		if($respuesta){
			echo  "TURNO ACTUALIZADO CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaTurno(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaTurno($this->input->post('idTurno'));
        if($estatus){
            echo "Turno eliminado correctamente";
        }else{
            echo "Ocurrio un error al eliminar el turno";
        }
	}

	public function nuevoTurno(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevoTurno";
		$this->load->view("template", $data);
	}

	//Ajax para agregar un Turno
	public function SAddTurno(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->agregarTurno($this->input->post());
		if($respuesta){
			echo  "turnos";
		}else{
			echo FALSE;
		}
	}


	// ***********************************Posicion CATALOGO ***********************************************
	public function posiciones()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/posicion";
		$data["posiciones"] =  $this->Dromos_model->get_Posiciones_detalle();
		$this->load->view("template", $data);
	}

	public function editarPosicion($idPosicion)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarPosicion";
		$data["posicion"] =  $this->Dromos_model->get_posicion($idPosicion);
		$data["posicion"]  = $data["posicion"][0];
		//Todos los objetos que necesita para los select del formulario
		$data["colaboradores"] =  $this->Dromos_model->get_Colaboradores();
		$data["puestos"] =  $this->Dromos_model->get_Puestos();
		$data["departamentos"] =  $this->Dromos_model->get_Departamentos();
		$data["turnos"] =  $this->Dromos_model->get_Turnos();
		$data["regimenes"] =  $this->Dromos_model->get_Regimenes();
		$data["ubicaciones"] =  $this->Dromos_model->get_Ubicaciones();

		$this->load->view("template", $data);
	}

	//Ajax para actualizar una direccion
	public function SEditPosicion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$respuesta= $this->Dromos_model->actualizaPosicion($this->input->post());
		if($respuesta){
			echo  "POSICIÓN ACTUALIZADA CORRECTAMENTE";
		}else{
			echo FALSE;
		}
	}

	public function eliminaPosicion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaPosicion($this->input->post('idPosicion'));
        if($estatus){
            echo "Posición eliminada correctamente";
        }else{
            echo "Ocurrio un error al eliminar la posición";
        }
	}

	public function nuevaPosicion(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevaPosicion";
		//Todos los objetos que necesita para los select del formulario
		$data["colaboradores"] =  $this->Dromos_model->get_Colaboradores();
		$data["puestos"] =  $this->Dromos_model->get_Puestos();
		$data["departamentos"] =  $this->Dromos_model->get_Departamentos();
		$data["turnos"] =  $this->Dromos_model->get_Turnos();
		$data["regimenes"] =  $this->Dromos_model->get_Regimenes();
		$data["ubicaciones"] =  $this->Dromos_model->get_Ubicaciones();


		$this->load->view("template", $data);
	}

	//Ajax para agregar una Posicion
	public function SAddPosicion(){
			if(!$this->session->userdata("user_logeado")) redirect("principal/login");
			$respuesta= $this->Dromos_model->agregarPosicion($this->input->post());
			if($respuesta){
				echo  "posiciones";
			}else{
				echo FALSE;
			}

	}

	// ***********************************Colaborador CATALOGO ***********************************************
	public function colaboradores()
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/colaborador";
		$data["colaboradores"] =  $this->Dromos_model->get_ColaboradoresDetalle();
		//En caso de eliminar colaborador aparecen los motivos de la baja
		$data["motivos"] =  $this->Dromos_model->get_motivos();
		$this->load->view("template", $data);
	}

	public function editarColaborador($numEmpleado)
	{
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/editarColaborador";
		$data["colaborador"] =  $this->Dromos_model->get_colaborador($numEmpleado);
		$data["colaborador"] = $data["colaborador"][0];
		//Todos los objetos que necesita para los select del formulario
		$data["colaboradores"] =  $this->Dromos_model->get_ColaboradoresDetalle();
		$data["escolaridades"] = $this->Dromos_model->get_Escolaridades();
		$data["freePosiciones"] = $this->Dromos_model->get_Pos_disponibles();
		$this->load->view("template", $data);
	}

	//Ajax para actualizar un colaborador
	public function SEditColaborador(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$bandera=true;
		if($this->input->post('nuevaPosicion') != ""){
			$bandera=false;
			$posicionAnterior= $this->Dromos_model->obtenerPosicion_transferencia($this->input->post('posicionActual'));
			$posicionAnterior= $posicionAnterior[0];
			$nuevaPosicion= $this->Dromos_model->obtenerPosicion_transferencia($this->input->post('nuevaPosicion'));
			$nuevaPosicion= $nuevaPosicion[0];
			$respuesta= $this->Dromos_model->liberar_posicion($this->input->post('posicionActual'));
			if($respuesta != FALSE){$bandera=true;}else{$bandera=false;}
			$respuesta= $this->Dromos_model->asignar_posicion($this->input->post('nuevaPosicion') , $this->input->post('numEmpleado'));
			if($respuesta != FALSE){$bandera=true;}else{$bandera=false;}

			if($bandera){
				$respuesta= $this->Dromos_model->ingresarTransferencia($this->input->post('numEmpleado') , $posicionAnterior , $nuevaPosicion);
				if($respuesta != FALSE){$bandera=true;}
			}
		}
		if($bandera){
			$respuesta= $this->Dromos_model->actualizaColaborador($this->input->post());
			if($respuesta){
				echo  "COLABORADOR ACTUALIZADO CORRECTAMENTE";
			}else{
				echo FALSE;
			}
		}else{
			echo FALSE;
		}

	}

	public function eliminaColaborador(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$estatus = $this->Dromos_model->eliminaColaborador($this->input->post('numEmpleado'));
        if($estatus){
            echo "Colaborador eliminado correctamente";
        }else{
            echo "Ocurrio un error al eliminar al colaborador";
        }
	}

	public function nuevoColaborador(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$data["content"] = "catalogos/nuevoColaborador";
		//Todos los objetos que necesita para los select del formulario
		$data["colaboradores"] =  $this->Dromos_model->get_ColaboradoresDetalle();
		$data["escolaridades"] = $this->Dromos_model->get_Escolaridades();
		$data["freePosiciones"] = $this->Dromos_model->get_Pos_disponibles();
		$data["municipios"] = $this->Dromos_model->get_Municipios();

		$this->load->view("template", $data);
	}

	//Ajax para agregar un Colaborador
	public function SAddColaborador(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$existe= $this->Dromos_model->existeColaborador($this->input->post('numEmpleado'));
		if(!$existe){
			$nuevaPosicion= $this->Dromos_model->obtenerPosicion_Alta($this->input->post('nuevaPosicion'));
			$nuevaPosicion= $nuevaPosicion[0];
			$respuesta= $this->Dromos_model->agregarColaborador($this->input->post() , $nuevaPosicion);
			if($respuesta){
				$respuesta= $this->Dromos_model->asignar_posicion($this->input->post('nuevaPosicion') , $this->input->post('numEmpleado'));
				if($respuesta){
					echo  "colaboradores";
				}else{
					echo FALSE;
				}

			}else{
				echo FALSE;
			}
		}else{
			echo "MSG:Ya existe un colaborador con ese numero de empleado, ingresa uno nuevo";
		}

	}

	//Ajax para agregar los datos de la baja del colaborador
	public function SAddBaja(){
		if(!$this->session->userdata("user_logeado")) redirect("principal/login");
		$idPosicion= $this->Dromos_model->obtener_id_posicion($this->input->post('Colaborador_numEmpleado'));
		$idPosicion = $idPosicion[0];
		$posicion= $this->Dromos_model->obtenerPosicion_Alta($idPosicion->clave_posicion);
		$posicion = $posicion[0];
		$respuesta= $this->Dromos_model->agregarBaja($posicion, $this->input->post());
			if($respuesta){
				$liberar= $this->Dromos_model->liberar_posicion($idPosicion->clave_posicion);
				if($liberar){
					echo TRUE;
				}else{
					echo FALSE;
				}
			}else{
				echo FALSE;
			}
		}




		//************************************* Funciones de login **********************************************
		public function valida_usuario()
		{
			$usuario = $this->Dromos_model->valida_usuario($this->input->post());
			if($usuario == FALSE){
					echo "Usuario o contraseña incorrecta";
				}
			else{
					$this->session->set_userdata("user_logeado", TRUE);
					$this->session->set_userdata("user_perfil", $usuario);
					echo "BIEN";
				}
		}

		public function cerrarSesion(){
			$this->session->unset_userdata('user_logeado');
			$this->session->unset_userdata('user_perfil');
			redirect("principal");
		}



}
