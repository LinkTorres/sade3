<?php
class Dromos_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        #$db_debug = $this->db->db_debug; // Desactivamos el debug de la base de datos
        #$this->db->db_debug = FALSE;
    }


    //  Funcion login
    public function valida_usuario($datos)
    {
        $array = array("nombreUsuario" => $datos["nombreUsuario"], "contrasena" => $datos["contrasena"]);
        $query = $this->db->where($array)->get("usuario");
        $str = $this->db->last_query();
        if($query->num_rows() == 1) return $query->row();
        return FALSE;
    }

// **********************************  DIRECCION *************************************************

    public function get_direcciones(){
        $query = $this->db->get("direccion");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_direccion($idDireccion){
    	$query = $this->db->where("idDireccion",$idDireccion)->get("direccion");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaDireccion($data){
    	 $array =array("Nombre" => $data["nombre"]);
        if($array){
            $this->db->where('idDireccion', $data["idDireccion"]);
            $this->db->update('direccion', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaDireccion($id){
    	$this->db->where('idDireccion', $id);
        $insert = $this->db->delete('direccion');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

    public function agregarDireccion($datos){
        $array = array(
            "Nombre" => $datos["nombre"]
        );

        $this->db->insert('direccion', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }


    // **********************************  Área *************************************************

    public function get_Areas(){
        $query = $this->db->get("area");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_area($idArea){
    	$query = $this->db->where("idArea",$idArea)->get("area");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaArea($data){
    	 $array =array("Nombre" => $data["nombre"] , "Direccion_idDireccion" => $data["Direccion_idDireccion"] );
        if($array){
            $this->db->where('idArea', $data["idArea"]);
            $this->db->update('area', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaArea($id){
    	$this->db->where('idArea', $id);
        $insert = $this->db->delete('area');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

    public function agregarArea($datos){
        $array = array(
            "Nombre" => $datos["nombre"],
            "Direccion_idDireccion" => $datos["Direccion_idDireccion"]
        );

        $this->db->insert('area', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }


     // **********************************  Departamentos *************************************************

    public function get_Departamentos(){
        $query = $this->db->get("departamento");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_departamento($idDepartamento){
    	$query = $this->db->where("idDepartamento",$idDepartamento)->get("departamento");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaDepartamento($data){
    	 $array =array("Nombre" => $data["nombre"] , "Area_idArea" => $data["Area_idArea"] );
        if($array){
            $this->db->where('idDepartamento', $data["idDepartamento"]);
            $this->db->update('departamento', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaDepartamento($id){
    	$this->db->where('idDepartamento', $id);
        $insert = $this->db->delete('departamento');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

    public function agregarDepartamento($datos){
        $array = array(
            "Nombre" => $datos["nombre"],
            "Area_idArea" => $datos["Area_idArea"]
        );

        $this->db->insert('departamento', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }

    // **********************************  Puestos *************************************************
    public function get_Puestos(){
        $query = $this->db->get("puesto");
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_puesto($clave){
        $query = $this->db->where("clave",$clave)->get("puesto");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaPuesto($data){
         $array =array("Nombre" => $data["nombre"]);
        if($array){
            $this->db->where('clave', $data["clave"]);
            $this->db->update('puesto', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaPuesto($id){
        $this->db->where('clave', $id);
        $insert = $this->db->delete('puesto');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

    public function clavePuesto($id){
        $sql="select
                    count(PU.nombre) AS NPuesto
               from
                    posicion POS LEFT JOIN puesto PU on POS.Puesto_clave = PU.clave
              where PU.clave='".$id."';";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }

    }

    public function agregarPuesto($datos){
        $array = array(
            "Nombre" => $datos["nombre"],
            "clave" => $datos["clave"]
        );

        $this->db->insert('puesto', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }

    public function existePuesto($clave){
        $this->db->where("clave",$clave);
        $query = $this->db->get("puesto");
        $str = $this->db->last_query();
        if($query->num_rows() > 0) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // **********************************  Ubicaciones *************************************************
    public function get_Ubicaciones(){
        $query = $this->db->get("ubicacion");
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_ubicacion($idUbicacion){
        $query = $this->db->where("idUbicacion",$idUbicacion)->get("ubicacion");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaUbicacion($data){
         $array =array("Nombre" => $data["nombre"]);
        if($array){
            $this->db->where('idUbicacion', $data["idUbicacion"]);
            $this->db->update('ubicacion', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaUbicacion($id){
        $this->db->where('idUbicacion', $id);
        $insert = $this->db->delete('ubicacion');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

     public function agregarUbicacion($datos){
        $array = array(
            "Nombre" => $datos["nombre"]
                    );

        $this->db->insert('ubicacion', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }

     // **********************************  Posiciones *************************************************
    public function get_Posiciones_detalle(){
        $sql="select POS.* , PU.nombre AS NPuesto, D.Nombre AS NDepartamento, T.Nombre AS NTurno,
                R.Nombre AS NRegimen, U.Nombre AS NUbicacion, C.nombre AS NColaborador
                from posicion POS LEFT JOIN puesto PU on POS.Puesto_clave = PU.clave
                LEFT JOIN departamento D on POS.Departamento_idDepartamento = D.idDepartamento
                LEFT JOIN turno T on POS.Turno_idTurno = T.idTurno
                LEFT JOIN regimen R on POS.Regimen_idRegimen = R.idRegimen
                LEFT JOIN ubicacion U on POS.Ubicacion_idUbicacion = U.idUbicacion
                LEFT JOIN colaborador C on POS.Colaborador_numEmpleado1 = C.numEmpleado; ";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function obtenerPosicion_transferencia($idPosicion){
        $sql="select PU.nombre AS puesto, P.sueldoMensual AS sueldo
                from posicion P JOIN puesto PU on P.Puesto_clave = PU.clave
                where P.clave_posicion = '".$idPosicion."';  ";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function obtenerPosicion_Alta($idPosicion){
        $sql="select PU.nombre AS puesto, P.sueldoMensual AS sueldo,
                U.Nombre as ubicacion, R.Nombre as regimen, T.Nombre as turno, P.clave_posicion
                from posicion P LEFT JOIN puesto PU on P.Puesto_clave = PU.clave
                LEFT join ubicacion U on U.idUbicacion = P.Ubicacion_idUbicacion
                LEFT join regimen R on R.idRegimen = P.Regimen_idRegimen
                LEFT join turno T on T.idTurno = P.Turno_idTurno
                where P.clave_posicion = '".$idPosicion."';  ";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function liberar_posicion($idPosicion){
         $array =array("Colaborador_numEmpleado1" => NULL);
        if($array){
            $this->db->where('clave_posicion', $idPosicion);
            $this->db->update('posicion', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function asignar_posicion($idPosicion, $colaborador ){
        $array =array("Colaborador_numEmpleado1" => $colaborador);
        if($array){
            $this->db->where('clave_posicion', $idPosicion);
            $this->db->update('posicion', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function get_posicion($idPosicion){
        $query = $this->db->where("idPosicion",$idPosicion)->get("posicion");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function get_Pos_disponibles(){
        $sql="select POS.* , PU.nombre AS NPuesto
                from posicion POS LEFT JOIN puesto PU on POS.Puesto_clave = PU.clave
                where POS.Colaborador_numEmpleado1 is null;";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }



    public function actualizaPosicion($data){

                $array =array(
            "clave_posicion" => $data["clave_posicion"] ,
            "Colaborador_numEmpleado" => $data["Colaborador_numEmpleado"],
            "sueldoDiario" => $data["sueldoDiario"],
            "sueldoMensual" => $data["sueldoMensual"]
            );

    if($data["Puesto_clave"] != ""){
       $array["Puesto_clave"] = $data["Puesto_clave"];
    }else{
         $array["Puesto_clave"] = NULL;
    }
    if($data["Departamento_idDepartamento"] != ""){
         $array["Departamento_idDepartamento"] = $data["Departamento_idDepartamento"];
    }else{
         $array["Departamento_idDepartamento"] = NULL;
    }

    if($data["Turno_idTurno"] != ""){
         $array["Turno_idTurno"] = $data["Turno_idTurno"];
    }else{
         $array["Turno_idTurno"] = NULL;
    }

    if($data["Regimen_idRegimen"] != ""){
         $array["Regimen_idRegimen"] = $data["Regimen_idRegimen"];
    }else{
         $array["Regimen_idRegimen"] = NULL;
    }

    if($data["Ubicacion_idUbicacion"] != ""){
         $array["Ubicacion_idUbicacion"] = $data["Ubicacion_idUbicacion"];
    }else{
         $array["Ubicacion_idUbicacion"] = NULL;
    }

    if($data["Colaborador_numEmpleado1"] != ""){
         $array["Colaborador_numEmpleado1"] = $data["Colaborador_numEmpleado1"];
    }else{
         $array["Colaborador_numEmpleado1"] = NULL;
    }

        if($array){
            $this->db->where('idPosicion', $data["idPosicion"]);
            $this->db->update('posicion', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

     public function eliminaPosicion($id){
        $this->db->where('idPosicion', $id);
        $insert = $this->db->delete('posicion');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }


    public function agregarPosicion($data){

        $array =array(
            "clave_posicion" => $data["clave_posicion"] ,
            "Colaborador_numEmpleado" => $data["Colaborador_numEmpleado"],
            "sueldoDiario" => $data["sueldoDiario"],
            "sueldoMensual" => $data["sueldoMensual"]
            );

    if($data["Puesto_clave"] != ""){
       $array["Puesto_clave"] = $data["Puesto_clave"];
    }else{
         $array["Puesto_clave"] = NULL;
    }
    if($data["Departamento_idDepartamento"] != ""){
         $array["Departamento_idDepartamento"] = $data["Departamento_idDepartamento"];
    }else{
         $array["Departamento_idDepartamento"] = NULL;
    }

    if($data["Turno_idTurno"] != ""){
         $array["Turno_idTurno"] = $data["Turno_idTurno"];
    }else{
         $array["Turno_idTurno"] = NULL;
    }

    if($data["Regimen_idRegimen"] != ""){
         $array["Regimen_idRegimen"] = $data["Regimen_idRegimen"];
    }else{
         $array["Regimen_idRegimen"] = NULL;
    }

    if($data["Ubicacion_idUbicacion"] != ""){
         $array["Ubicacion_idUbicacion"] = $data["Ubicacion_idUbicacion"];
    }else{
         $array["Ubicacion_idUbicacion"] = NULL;
    }

    if($data["Colaborador_numEmpleado1"] != ""){
         $array["Colaborador_numEmpleado1"] = $data["Colaborador_numEmpleado1"];
    }else{
         $array["Colaborador_numEmpleado1"] = NULL;
    }

        $this->db->insert('posicion', $array);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }


    // **********************************  REGIMEN *************************************************

    public function get_regimenes(){
        $query = $this->db->get("regimen");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_regimen($idRegimen){
        $query = $this->db->where("idRegimen",$idRegimen)->get("regimen");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaRegimen($data){
         $array =array("Nombre" => $data["nombre"]);
        if($array){
            $this->db->where('idRegimen', $data["idRegimen"]);
            $this->db->update('regimen', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaRegimen($id){
        $this->db->where('idRegimen', $id);
        $insert = $this->db->delete('regimen');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

    public function agregarRegimen($datos){
        $array = array(
            "Nombre" => $datos["nombre"]
                    );

        $this->db->insert('regimen', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }


    // **********************************  TURNO *************************************************

    public function get_turnos(){
        $query = $this->db->get("turno");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_turno($idTurno){
        $query = $this->db->where("idTurno",$idTurno)->get("turno");
        if($query->num_rows() > 0) return $query->result();
        return FALSE;
    }

    public function actualizaTurno($data){
         $array =array("Nombre" => $data["nombre"]);
        if($array){
            $this->db->where('idTurno', $data["idTurno"]);
            $this->db->update('turno', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaTurno($id){
        $this->db->where('idTurno', $id);
        $insert = $this->db->delete('turno');
        //$str = $this->db->last_query();
        if(!$insert)
            return FALSE;
        else return TRUE;
    }

     public function agregarTurno($datos){
        $array = array(
            "Nombre" => $datos["nombre"]
                    );

        $this->db->insert('turno', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }



    // **********************************  COLABORADORES *************************************************

    public function get_colaboradores(){
        $this->db->where('estatus', "1");
        $query = $this->db->get("colaborador");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function get_free_colaboradores(){

        $sql="select C.* from colaborador C
            where C.numEmpleado not in (
                SELECT Colaborador_numEmpleado1 as numEmpleado
                FROM posicion POS
                WHERE POS.Colaborador_numEmpleado1 IS NOT NULL
                ) ;";
        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }

    }

    //Con campos a detalle de cada una de las llaves foraneas
     public function get_ColaboradoresDetalle(){
        $sql="select COLA.* , ES.descripcion AS DesEscola, PO.clave_posicion , DPTO.Nombre AS departamento
                , AR.Nombre AS area , DIRE.Nombre AS direccion , UB.Nombre AS DesUbicacion, PO.sueldoMensual AS sueldo, PU.nombre AS NPuesto
                from colaborador COLA LEFT JOIN escolaridad ES on COLA.Escolaridad_idEscolaridad = ES.idEscolaridad
                LEFT JOIN posicion PO on PO.Colaborador_numEmpleado1 = COLA.numEmpleado
                LEFT JOIN puesto PU on PU.clave = PO.Puesto_clave
                LEFT JOIN departamento DPTO on PO.Departamento_idDepartamento = DPTO.idDepartamento
                LEFT JOIN area AR on DPTO.Area_idArea = AR.idArea
                LEFT JOIN direccion DIRE on AR.Direccion_idDireccion = DIRE.idDireccion
                LEFT JOIN ubicacion UB on PO.Ubicacion_idUbicacion = UB.idUbicacion  where estatus='1' group by COLA.numEmpleado;  ";

        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

     public function get_colaborador($numEmpleado){

        $sql="select COLA.* ,  PO.clave_posicion , PU.nombre AS puesto
                from colaborador COLA LEFT JOIN posicion PO on PO.Colaborador_numEmpleado1 = COLA.numEmpleado
                LEFT JOIN puesto PU on PO.Puesto_clave = PU.clave
                where estatus='1' and numEmpleado = '".$numEmpleado."'";

        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }

    public function actualizaColaborador($data){
         $array =array(
            "jefeNumEmpleado" => $data["jefeNumEmpleado"],
            "estatus" => $data["estatus"],
            "nombre" => $data["nombre"],
            "apellidoPaterno" => $data["apellidoPaterno"],
            "apellidoMaterno" => $data["apellidoMaterno"],
            "sexo" => $data["sexo"],
            "curp" => $data["curp"],
            "rfc" => $data["rfc"],
            "NSS" => $data["NSS"],
            "Direccion" => $data["Direccion"],
            "Colonia" => $data["Colonia"],
            "CP" => $data["CP"],
            "Municipio_idMunicipio" => $data["Municipio_idMunicipio"],
            "fechaNac" => $data["fechaNac"],
            "TelCasa" => $data["TelCasa"],
            "TelCelular" => $data["TelCelular"],
            "Escolaridad_idEscolaridad" => $data["Escolaridad_idEscolaridad"]
            );
        if($array){
            $this->db->where('numEmpleado', $data["numEmpleado"]);
            $this->db->update('colaborador', $array);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminaColaborador($numEmpleado){
        $array =array(
            "estatus" => "0"
            );
        $this->db->where('numEmpleado', $numEmpleado);
        $this->db->update('colaborador', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }

    public function agregarColaborador($data , $posicion){

        $array =array(
            "numEmpleado" => $data["numEmpleado"],
            "estatus" => $data["estatus"],
            "nombre" => $data["nombre"] . $data["apellidoPaterno"] . $data["apellidoMaterno"],
            "apellidoPaterno" => $data["apellidoPaterno"],
            "apellidoMaterno" => $data["apellidoMaterno"],
            "sexo" => $data["sexo"],
            "curp" => $data["curp"],
            "rfc" => $data["rfc"],
            "NSS" => $data["NSS"],
            "Direccion" => $data["Direccion"],
            "Colonia" => $data["Colonia"],
            "CP" => $data["CP"],
            "fechaNac" => $data["fechaNac"],
            "TelCasa" => $data["TelCasa"],
            "TelCelular" => $data["TelCelular"],
            "contrasena" => $data["contrasena"]
            );
    if($data["jefeNumEmpleado"] != ""){
       $array["jefeNumEmpleado"] = $data["jefeNumEmpleado"];
    }else{
         $array["jefeNumEmpleado"] = NULL;
    }
    if($data["Escolaridad_idEscolaridad"] != ""){
         $array["Escolaridad_idEscolaridad"] = $data["Escolaridad_idEscolaridad"];
    }else{
         $array["Escolaridad_idEscolaridad"] = NULL;
    }

    if($data["Municipio_idMunicipio"] != ""){
         $array["Municipio_idMunicipio"] = $data["Municipio_idMunicipio"];
    }else{
         $array["Municipio_idMunicipio"] = NULL;
    }

        $this->db->insert('colaborador', $array);

        if($this->db->affected_rows() > 0){
            //Ingresamos el alta correspondiente al colaborador
            $idColaborador = $this->db->insert_id();
            $array =array(
            "puesto_nombre" => $posicion->puesto,
            "sueldoMensual" => $posicion->sueldo,
            "ubicacion" => $posicion->ubicacion,
            "regimen" => $posicion->regimen,
            //"turno" => $posicion->turno,
            "clavePosicion" => $posicion->clave_posicion,
            "Colaborador_numEmpleado" => $idColaborador
            );

            $this->db->set('fechaAlta', 'NOW()', FALSE);
            $this->db->insert('altas', $array);
            if($this->db->affected_rows() > 0){
                return TRUE;
            }
            else {
              return FALSE;
            }
            return true;

        }
        else {
          return FALSE;
        }
    }

     public function existeColaborador($numEmpleado){
        $this->db->where("numEmpleado",$numEmpleado);
        $query = $this->db->get("colaborador");
        $str = $this->db->last_query();
        if($query->num_rows() > 0) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

     // **********************************  ESCOLARIDADES *************************************************

    public function get_Escolaridades(){
        $query = $this->db->get("escolaridad");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

     // **********************************  MUNICIPIOS *************************************************

    public function get_Municipios(){
        $query = $this->db->get("municipio");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

     // **********************************  MOTIVOS *************************************************

    public function get_motivos(){
        $query = $this->db->get("motivos");
        //$str = $this->db->last_query();
        if($query->num_rows() > 0) {
           return $query->result();
        }else{
            return FALSE;
        }
    }

    public function agregarBaja($posicion, $datos){
        $array = array(
            "Colaborador_numEmpleado" => $datos["Colaborador_numEmpleado"],
            "Motivos_idMotivos" => $datos["Motivos_idMotivos"],
            "comentario" => $datos["comentario"],
            "fechaBaja2" => $datos["fechaBaja2"],
            "puesto_nombre" => $posicion->puesto,
            "sueldoMensual" => $posicion->sueldo,
            "ubicacion" => $posicion->ubicacion,
            "regimen" => $posicion->regimen,
            "turno" => $posicion->turno,
            "clavePosicion" => $posicion->clave_posicion
        );
        $this->db->set('fechaBaja', 'NOW()', FALSE);
        $this->db->insert('bajas', $array);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        else {
          return FALSE;
        }
    }
     // **********************************  INGRESAR TRANSFERENCIA  *************************************************
    public function ingresarTransferencia($numEmpleado , $posicionAnterior , $nuevaPosicion) {
        $array = array(
                    "puestoAnterior" => $posicionAnterior->puesto,
                    "sueldoAnterior" => $posicionAnterior->sueldo,
                    "puestoNuevo" => $nuevaPosicion ->puesto,
                    "sueldoNuevo" => $nuevaPosicion ->sueldo,
                    "Colaborador_numEmpleado" =>  $numEmpleado
                );
                $this->db->set('fecha', 'NOW()', FALSE);
                $this->db->insert('transferencias', $array);
                $str = $this->db->last_query();
                return $str;
                if($this->db->affected_rows() > 0){
                    return TRUE;
                }
                else {
                  return FALSE;
                }
    }

    public function obtener_id_posicion($idColaborador){
        $sql="select clave_posicion
                from posicion P JOIN colaborador C on P.Colaborador_numEmpleado1 = C.numEmpleado
                where numEmpleado = '".$idColaborador."' limit 1";

        $query= $this->db->query($sql);
            if($query->num_rows() > 0) {
               return $query->result();
            }else{
                return FALSE;
            }
    }



}
