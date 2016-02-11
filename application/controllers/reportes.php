<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	public function puestos()
	{
		$data["content"] = "reportes/puestosReport";
		$data["posiciones_desocupadas"] = $this->Reportes_model->posiciones_desocupadas();
		$data["posiciones_ocupadas"] = $this->Reportes_model->posiciones_ocupadas();
		$data["posiciones_totales"] = $this->Reportes_model->posiciones_totales();
		$data["puestos"] = $this->Reportes_model->describe_puestos();
		$this->load->view("template", $data);

	}

	public function altas()
	{
		$data["content"] = "reportes/altasReport";
		$data["meses"] = get_meses();
		$this->load->view("template", $data);

	}

	public function transferencias()
	{
		$data["content"] = "reportes/transfeReport";
		$data["meses"] = get_meses();
		$this->load->view("template", $data);

	}

	public function bajas()
	{
		$data["content"] = "reportes/bajasReport";
		$data["meses"] = get_meses();
		$this->load->view("template", $data);

	}

	public function vacantes()
	{
		$data["content"] = "reportes/vacantesReport";
		$data["vacantes"] = $this->Reportes_model->describe_vacantes();
		$this->load->view("template", $data);

	}

	public function turnos()
	{
		$data["content"] = "reportes/turnosReport";
		$data["turnos"] = $this->Reportes_model->describe_turnos();
		$this->load->view("template", $data);

	}

	public function regimen()
	{
		$data["content"] = "reportes/regimenReport";
		$data["regimenes"] = $this->Reportes_model->describe_regimen();
		$this->load->view("template", $data);

	}

	public function plantillaGeneral()
	{
		$data["content"] = "reportes/plantillaGeneralReporte";
		$data["plantilla"] = $this->Reportes_model->describe_plantilla();
		$data["posDes"] = $this->Reportes_model->total_desocupadas();
		$data["posOcu"] = $this->Reportes_model->total_ocupadas();
		$data["posTot"] = $this->Reportes_model->total_posiciones();
		$this->load->view("template", $data);
	}

	public function filtroAltas(){
		$altas = $this->Reportes_model->describe_altas($this->input->post());
		echo json_encode($altas);

	}

	public function filtroBajas(){
		$bajas = $this->Reportes_model->describe_bajas($this->input->post());
		echo json_encode($bajas);

		}

	public function filtroTransfe(){
		$transfe = $this->Reportes_model->describe_transfe($this->input->post());
		echo json_encode($transfe);

		}



}
