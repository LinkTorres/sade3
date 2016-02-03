<?php
class Reportes_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        #$db_debug = $this->db->db_debug; // Desactivamos el debug de la base de datos
        #$this->db->db_debug = FALSE; 
    }





// **********************************  REPORTE DE PUESTOS *************************************************
    public function posiciones_desocupadas(){
        $sql="select Puesto_clave, count(Puesto_clave) AS Libres from posicion P where P.Colaborador_numEmpleado1 is NULL group by Puesto_clave;";
		$query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function posiciones_ocupadas(){
        $sql="select Puesto_clave, count(Puesto_clave) AS Ocupados from posicion P where P.Colaborador_numEmpleado1 is not NULL group by Puesto_clave;";
		$query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    } 

    public function posiciones_totales(){
        $sql="select Puesto_clave, count(Puesto_clave) AS Totales from posicion P group by Puesto_clave ;";
		$query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function describe_puestos(){
        $sql="select Puesto_clave, PU.nombre AS NombrePuesto, DIR.Nombre AS Direccion, A.Nombre AS Area, DPTO.Nombre AS Departamento
			from posicion POS join puesto PU on POS.Puesto_clave=PU.clave 
			join departamento DPTO on POS.Departamento_idDepartamento = DPTO.idDepartamento
			join area A on A.idArea = DPTO.Area_idArea join direccion DIR on A.Direccion_idDireccion = DIR.idDireccion
			group by Puesto_clave;";

		$query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    } 

// **********************************  REPORTE DE ALTAS *************************************************
     public function describe_altas($datos){
     	 $sql="select A.regimen, A.turno, A.ubicacion, A.clavePosicion, A.fechaAlta , A.puesto_nombre , A.Colaborador_numEmpleado , A.sueldoMensual from altas A ";

                if(isset($datos['anio']) and $datos['anio'] != ""){
                    $sql .= " WHERE YEAR(fechaalta) = '".$datos['anio']."'";
                }
                if(isset($datos['mes']) and $datos['mes'] != "" ){
                    if(isset($datos['anio']) and $datos['anio'] != "" ){
                        $sql .= " and MONTH(fechaalta) = '".$datos['mes']."'";
                    }else{
                        $sql .= " WHERE MONTH(fechaalta) = '".$datos['mes']."'";
                    }
                }
            
			$query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
 	} 
    // **********************************  REPORTE DE BAJAS *************************************************


    public function describe_bajas($datos){
         $sql="select * from bajas B ";

                if(isset($datos['anio']) and $datos['anio'] != ""){
                    $sql .= " WHERE YEAR(fechaBaja) = '".$datos['anio']."'";
                }
                if(isset($datos['mes']) and $datos['mes'] != "" ){
                    if(isset($datos['anio']) and $datos['anio'] != "" ){
                        $sql .= " and MONTH(fechaBaja) = '".$datos['mes']."'";
                    }else{
                        $sql .= " WHERE MONTH(fechaBaja) = '".$datos['mes']."'";
                    }
                }
            
            $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    } 

    // **********************************  REPORTE DE TRANSFERENCIAS *************************************************


    public function describe_transfe($datos){
        $sql="select T.Colaborador_numEmpleado As colaborador_num , C.nombre, 
        T.fecha, T.puestoNuevo, T.puestoAnterior from transferencias T join colaborador C on 
        T.Colaborador_numEmpleado = C.numEmpleado ";

                if(isset($datos['anio']) and $datos['anio'] != ""){
                    $sql .= " WHERE YEAR(fecha) = '".$datos['anio']."'";
                }
                if(isset($datos['mes']) and $datos['mes'] != "" ){
                    if(isset($datos['anio']) and $datos['anio'] != "" ){
                        $sql .= " and MONTH(fecha) = '".$datos['mes']."'";
                    }else{
                        $sql .= " WHERE MONTH(fecha) = '".$datos['mes']."'";
                    }
                }
            
            $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    // **********************************  REPORTE DE VACANTES *************************************************
    public function describe_vacantes(){
         $sql="select PU.nombre as puesto, P.idPosicion as posicion,  U.Nombre as ubicacion,  T.Nombre as turno, 
                P.clave_posicion, D.Nombre as departamento, A.Nombre as area, DIR.Nombre as direccion
                from posicion P 
                left join puesto PU on P.Puesto_clave = PU.clave
                left join ubicacion U on P.Ubicacion_idUbicacion = U.idUbicacion
                left join turno T on P.Turno_idTurno = T.idTurno
                left join departamento D on D.idDepartamento = P.Departamento_idDepartamento
                left join area A on A.idArea = D.Area_idArea 
                left join direccion DIR on DIR.idDireccion = A.Direccion_idDireccion
                where P.Colaborador_numEmpleado1 is NULL ;";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function describe_turnos(){
        $sql="select 
                C.numEmpleado, 
                C.nombre as colaborador, 
                PU.nombre as puesto,  
                U.Nombre as ubicacion,  
                T.Nombre as turno, 
                P.clave_posicion,
                REG.Nombre as regimen
                from posicion P 
                left join puesto PU on P.Puesto_clave = PU.clave
                join colaborador C on P.Colaborador_numEmpleado1 = C.numEmpleado
                left join ubicacion U on P.Ubicacion_idUbicacion = U.idUbicacion
                left join turno T on P.Turno_idTurno = T.idTurno 
                left join regimen REG on REG.idRegimen  = P.Regimen_idRegimen ; ";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function describe_regimen(){
        $sql="  select 
                DIR.Nombre as direccion, 
                A.Nombre as area, 
                D.Nombre as departamento, 
                     PU.nombre as puesto,
                     PU.clave as clave_puesto,
                     REG.Nombre as regimen, 
                     count(P.idPosicion) as total
                from posicion P 
                left join puesto PU on P.Puesto_clave = PU.clave
                left join colaborador C on P.Colaborador_numEmpleado1 = C.numEmpleado
                left join departamento D on D.idDepartamento = P.Departamento_idDepartamento
                left join area A on A.idArea = D.Area_idArea 
                left join direccion DIR on DIR.idDireccion = A.Direccion_idDireccion
                left join regimen REG on REG.idRegimen  = P.Regimen_idRegimen 
                     where P.Colaborador_numEmpleado1 is not NULL group by REG.Nombre;";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }



}