$(document).ready(function() {
	var $baseURL = "http://localhost/dromos/";
	var prevent= true;

	var opcionesEditar = {
        success:       showRespoEditar,  // post-submit callback
        beforeSubmit:  beforeEditar  // pre-submit callback
    };

    var opcionesAgregar = {
        success:       showRespoAgregar,  // post-submit callback
        beforeSubmit:  beforeAgregar  // pre-submit callback
    };

    var opcionesMotivos = {
        success:       showRespoMotivos,  // post-submit callback
        beforeSubmit:  beforeMotivos  // pre-submit callback
    };

     var opcionesFiltro = {
        success:       showRespoFiltro,  // post-submit callback
        beforeSubmit:  beforeFiltro  // pre-submit callback
    };

    var opcionesFiltroBajas = {
        success:       showRespoFiltroBajas,  // post-submit callback
        beforeSubmit:  beforeFiltroBajas  // pre-submit callback
    };

    var opcionesFiltroTransfe = {
        success:       showRespoFiltroTrans,  // post-submit callback
        beforeSubmit:  beforeFiltroTrans  // pre-submit callback
    };

    var opcionesLogin = {
        success:       showRespoLogin,  // post-submit callback
        beforeSubmit:  beforeLogin  // pre-submit callback
    };




  // ajaxForm login
    $('#login-form').ajaxForm(opcionesLogin);

    // ajaxForm pantalla editar Catalogo
    $('#actualiza').ajaxForm(opcionesEditar);

    //Ajax form para el formulario de motivos de la baja
	$('#addMotivos').ajaxForm(opcionesMotivos);

    //Ajax form para el formulario de generacion de reporte de altas
    $('#filtroReporte').ajaxForm(opcionesFiltro);

    //Ajax form para el formulario de generacion de reporte de bajas
    $('#filtroBajas').ajaxForm(opcionesFiltroBajas);

    //Ajax form para el formulario de generacion de reporte de transferencias
    $('#filtroTransfe').ajaxForm(opcionesFiltroTransfe);

    // ajaxForm login pantalla agregarCatalogo
   // $('#agregarForm').ajaxForm(opcionesAgregar);


   $('#agregarForm').submit(function(e) {
   	if(prevent){
   		e.preventDefault();
        $(this).ajaxSubmit(opcionesAgregar);
         prevent = false;
         return false;
     }else{
     	return false;
     }

    });



// post-submit callback
	function showRespoLogin(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");
		if(statusText == 'success' && responseText == "BIEN" ){
			window.location.href = $baseURL;
		}else{
			$('#responseLogin').removeClass("alert-info");
			$('#responseLogin').addClass("alert-danger");
			$('#responseLogin').removeClass("hidden");
			$('#responseLogin').html("<strong>Usuario o contraseña incorrecta.</strong>");
		}
	}

	function beforeLogin(formData, jqForm, options) {
		$('#responseLogin').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
	}


    // post-submit callback
	function showRespoEditar(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");
		if(statusText == 'success' && responseText != false ){
			$('#responseEditar').removeClass("alert-danger");
			$('#responseEditar').addClass("alert-info");
			$('#responseEditar').removeClass("hidden");
			$('#responseEditar').html("<strong>"+responseText+"</strong>");
		}else{
			$('#responseEditar').removeClass("alert-info");
			$('#responseEditar').addClass("alert-danger");
			$('#responseEditar').removeClass("hidden");
			$('#responseEditar').html("<strong>Ocurrio un error, vuelve a intentarlo.</strong>");
		}
	}

	function beforeEditar(formData, jqForm, options) {
		$('#responseEditar').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
	}

	// post-submit callback
	function showRespoAgregar(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");


		if(statusText == 'success' && responseText != false ){
			if(responseText.split(":")[0] == "MSG"){
				$('#responseAgregar').removeClass("alert-info");
				$('#responseAgregar').addClass("alert-danger");
				$('#responseAgregar').removeClass("hidden");
				$('#responseAgregar').html("<strong>" + responseText.split(":")[1] + "</strong>");
				prevent = true;
			}else{
				window.location.href = $baseURL + "principal/"+responseText+ "?msg=1";
			}

		}else{
			$('#responseAgregar').removeClass("alert-info");
			$('#responseAgregar').addClass("alert-danger");
			$('#responseAgregar').removeClass("hidden");
			$('#responseAgregar').html("<strong>Ocurrio un error, vuelve a intentarlo.</strong>");
			prevent = true;
		}

	}


	function beforeAgregar(formData, jqForm, options) {
		$('#responseAgregar').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
		return true;
	}

	function beforeMotivos(formData, jqForm, options) {
		$('#responseMotivos').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
		return true;
	}

	// post-submit callback
	function showRespoMotivos(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");
		if(statusText == 'success' && responseText != false ){
				var magnificPopup = $.magnificPopup.instance;
				magnificPopup.close();
		}else{
			$('#responseMotivos').removeClass("alert-info");
			$('#responseMotivos').addClass("alert-danger");
			$('#responseMotivos').removeClass("hidden");
			$('#responseMotivos').html("<strong>Ocurrio un error, vuelve a intentarlo.</strong>");
		}

	}

	function beforeFiltro(formData, jqForm, options) {
		$('#responseReporte').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
		return true;
	}

	var banderaInicial=true;
	// post-submit callback
	function showRespoFiltro(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");
		if(statusText == 'success' ){
			if(responseText != false){
				$(".tbody tr").remove();
				 $('#tablaAltasReport').removeClass('hidden');
				var parsed = JSON.parse(responseText);
                        var arr = [];
                        for(var x in parsed){
                          arr.push(parsed[x]);
                }
                //console.log(arr);
                var arrayLength = arr.length;
                if(arrayLength == 0){
                	$('.dt-panelfooter').addClass("hidden");
                	$('#tablaAltasReport').addClass("hidden");
					$('#responseReporte').removeClass("alert-danger");
					$('#responseReporte').addClass("alert-info");
					$('#responseReporte').removeClass("hidden");
					$('#responseReporte').html("<strong>" + "Tu busqueda no obtuvo resultados" + "</strong>");
                }else{
                	//console.log(arr);
                	$('.dt-panelfooter').removeClass("hidden");
                	for (var i = 0; i < arrayLength; i++) {
					   $('#tablaAltasReport').find('.tbody').append( "<tr> \
						  <td>"+arr[i].Colaborador_numEmpleado+"</td> \
							<td>"+arr[i].nombre+"</td> \
					   	<td>"+arr[i].clavePosicion+"</td> \
					   	<td>"+arr[i].fechaAlta+"</td> \
					   	<td>"+arr[i].regimen+"</td> \
					   	<td>"+arr[i].turno+"</td>   \
					   	<td>"+arr[i].ubicacion+"</td> \
					   	<td>"+arr[i].puesto_nombre+"</td> \
					   	<td>"+arr[i].sueldoMensual+"</td> \
					   	</tr>" );
					}
					if(banderaInicial){
						 banderaInicial = false;
						 InitTable("tablaAltasReport","REPORTE DE ALTAS" , "landscape");
					}
                }
			}else{
				$('#tablaAltasReport').addClass("hidden");
				$('#responseReporte').removeClass("alert-danger");
				$('#responseReporte').addClass("alert-info");
				$('#responseReporte').removeClass("hidden");
				$('#responseReporte').html("<strong>" + "Tu busqueda no obtuvo resultados" + "</strong>");
			}
		}else{
			$('#responseReporte').removeClass("alert-info");
			$('#responseReporte').addClass("alert-danger");
			$('#responseReporte').removeClass("hidden");
			$('#responseReporte').html("<strong>Ocurrio un error, vuelve a intentarlo.</strong>");
		}

	}


	function beforeFiltroBajas(formData, jqForm, options) {
		$('#responseReporte').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
		return true;
	}

	var banderaInicial=true;
	// post-submit callback
	function showRespoFiltroBajas(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");
		if(statusText == 'success' ){
			if(responseText != false){
				$(".tbody tr").remove();
				 $('#tablaBajasReport').removeClass('hidden');
				var parsed = JSON.parse(responseText);
                        var arr = [];
                        for(var x in parsed){
                          arr.push(parsed[x]);
                }
                //console.log(arr);
                var arrayLength = arr.length;
                if(arrayLength == 0){
                	$('.dt-panelfooter').addClass("hidden");
                	$('#tablaBajasReport').addClass("hidden");
					$('#responseReporte').removeClass("alert-danger");
					$('#responseReporte').addClass("alert-info");
					$('#responseReporte').removeClass("hidden");
					$('#responseReporte').html("<strong>" + "Tu busqueda no obtuvo resultados" + "</strong>");
                }else{
                	$('.dt-panelfooter').removeClass("hidden");
                	//console.log(arr);
                	for (var i = 0; i < arrayLength; i++) {
					   $('#tablaBajasReport').find('.tbody').append( "<tr> \
             <td>"+arr[i].Colaborador_numEmpleado+"</td> \
             <td>"+arr[i].clavePosicion+"</td> \
             <td>"+arr[i].fechaBaja+"</td> \
					   	<td>"+arr[i].regimen+"</td> \
					   	<td>"+arr[i].turno+"</td>   \
					   	<td>"+arr[i].ubicacion+"</td> \
					   	<td>"+arr[i].puesto_nombre+"</td> \
					   	<td>"+arr[i].sueldoMensual+"</td> \
					   	</tr>" );
					}
					if(banderaInicial){
						 banderaInicial = false;
						  InitTable("tablaBajasReport","REPORTE DE BAJAS" , "landscape");
					}
                }
			}else{
				$('#tablaBajasReport').addClass("hidden");
				$('#responseReporte').removeClass("alert-danger");
				$('#responseReporte').addClass("alert-info");
				$('#responseReporte').removeClass("hidden");
				$('#responseReporte').html("<strong>" + "Tu busqueda no obtuvo resultados" + "</strong>");
			}
		}else{
			$('#responseReporte').removeClass("alert-info");
			$('#responseReporte').addClass("alert-danger");
			$('#responseReporte').removeClass("hidden");
			$('#responseReporte').html("<strong>Ocurrio un error, vuelve a intentarlo.</strong>");
		}

	}


	function beforeFiltroTrans(formData, jqForm, options) {
		$('#responseReporte').addClass("hidden");
		$('#buttonLoading').removeClass("hidden");
		return true;
	}

	var banderaInicial=true;
	// post-submit callback
	function showRespoFiltroTrans(responseText, statusText, xhr, $form)  {
		$('#buttonLoading').addClass("hidden");
		if(statusText == 'success' ){
			if(responseText != false){
				$(".tbody tr").remove();
				 $('#tablaTransfe').removeClass('hidden');
				var parsed = JSON.parse(responseText);
                        var arr = [];
                        for(var x in parsed){
                          arr.push(parsed[x]);
                }
                //console.log(arr);
                var arrayLength = arr.length;
                if(arrayLength == 0){
                	$('.dt-panelfooter').addClass("hidden");
                	$('#tablaTransfe').addClass("hidden");
					$('#responseReporte').removeClass("alert-danger");
					$('#responseReporte').addClass("alert-info");
					$('#responseReporte').removeClass("hidden");
					$('#responseReporte').html("<strong>" + "Tu busqueda no obtuvo resultados" + "</strong>");
                }else{
                	$('.dt-panelfooter').removeClass("hidden");
                	//console.log(arr);
                	for (var i = 0; i < arrayLength; i++) {
					   $('#tablaTransfe').find('.tbody').append( "<tr> \
					   	<td>"+arr[i].colaborador_num+"</td> \
					   	<td>"+arr[i].nombre+"</td>   \
					   	<td>"+arr[i].fecha+"</td> \
					   	<td>"+arr[i].puestoNuevo+"</td> \
					   	<td>"+arr[i].puestoAnterior+"</td> \
					   	</tr>" );
					}
					if(banderaInicial){
						 banderaInicial = false;
						 InitTable("tablaTransfe","REPORTE DE TRANSFERENCIAS" , "landscape");
					}
                }
			}else{
				$('#tablaTransfe').addClass("hidden");
				$('#responseReporte').removeClass("alert-danger");
				$('#responseReporte').addClass("alert-info");
				$('#responseReporte').removeClass("hidden");
				$('#responseReporte').html("<strong>" + "Tu busqueda no obtuvo resultados" + "</strong>");
			}
		}else{
			$('#responseReporte').removeClass("alert-info");
			$('#responseReporte').addClass("alert-danger");
			$('#responseReporte').removeClass("hidden");
			$('#responseReporte').html("<strong>Ocurrio un error, vuelve a intentarlo.</strong>");
		}

	}




});
