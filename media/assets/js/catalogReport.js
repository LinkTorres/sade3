 'use strict';
var InitTable = function(nombre_tabla, nombre_reporte, orientacion , columnas)
{

 $('#'+nombre_tabla+' thead th').each(function() {
        var title = $('#'+nombre_tabla+' thead th').eq($(this).index()).text();
        if(title != 'Editar' && title != 'Eliminar'){
          $(this).html('<input type="text" class="form-control" placeholder="' + title + '" /><center>'+title+'</center>');
        }
      });

       var d = new Date();
       var strDate = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear() ;

       //var columnas = [0, 1 , 2];

       var table5 = $("#"+nombre_tabla).DataTable( {
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
        "sDom": '<"pull-right"T>lfrtip',
        dom: 'Bfrtip',
         "oLanguage": {
          "sSearch": "Filtrar registros:",
          "sZeroRecords": "No se encontraron registros",
           "sLengthMenu": "Ver _MENU_ registros",
           "sInfoEmpty": "No se encontraron registros",
           "sInfo": "Total de registros:  _TOTAL_ ",
           "sEmptyTable": "La tabla esta vacia",
           "oPaginate": {
              "sPrevious": "Anterior",
              "sNext": "Siguiente",
              "sLast": "Última",
               "sFirst": "Primera"
            },
            "sInfoFiltered": " ---->  (_TOTAL_ de  _MAX_ registros)"

        },
        "ordering": false,
        "oTableTools": {
           "sSwfPath": "http://masosports.hol.es/dromos/media/swf/copy_csv_xls_pdf.swf",
            "aButtons": [
                {
                    "sExtends": "copy",
                    "sButtonText": "Copiar",
                    "mColumns": columnas,
                    "oSelectorOpts": {
                          page: 'current'
                      }
                },
                {
                    "sExtends": "print",
                    "sButtonText": "Maximizar",
                    "sInfo": "Presione Esc para salir",
                    "mColumns": columnas,
                    "oSelectorOpts": {
                        page: 'current'
                    }
                },
                {
                    "sExtends":    "collection",
                    "sButtonText": "Exportar",
                    "aButtons":    [  {
                    "sExtends": "csv",
                    "sButtonText": "Excel",
                    "mColumns": columnas,
                    "oSelectorOpts": {
                          page: 'current'
                      }
                },
                 {
                    "sExtends": "pdf",
                    "sButtonText": "PDF",
                    "mColumns": columnas,
                    "oSelectorOpts": {
                          page: 'current'
                      },
                    "sTitle": nombre_reporte,
                    "sFileName": "*.pdf",
                    "sPdfMessage": "Reporte obtenido el: " + strDate,
                    "sToolTip": "Guardar como pdf",
                    "sPdfOrientation": orientacion
                }
                ]
                }

            ]
        }
    } );


 // Apply the search
      table5.columns().eq(0).each(function(colIdx) {
        $('input', table5.column(colIdx).header()).on('keyup change', function() {
          table5
            .column(colIdx)
            .search(this.value)
            .draw();
        });
      });


};
