$(document).ready(function () {

    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

    var filas = $("tr #trRemove1").length;
        console.log(filas)

    $('#btn-buscar').on('click', function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        //  e.preventDefault();
        //Validando que los campos no estén vacios.
        if($("input[name=apellidos]").val() == "" && $("input[name=certificacion]").val()== ""){

            swal("¡Campos Vacios!", "Debe llenar por lo menos un campo", "error");
            return false;
        }
        //Validando tipo de consulta.
        if($("input[name=apellidos]").val() != "" && $("input[name=certificacion]").val() == ""){
            var consulta = 1;
        }
        
        else if($("input[name=apellidos]").val() == "" && $("input[name=certificacion]").val() != ""){
            var consulta = 2;
        }
        
        else if($("input[name=apellidos]").val() != "" && $("input[name=certificacion]").val() != ""){
            var consulta = 3;
        }

        var apellidos     = $("input[name=apellidos]").val();
        var certificacion = $("input[name=certificacion]").val();

         $.ajax({
            type:'POST',
            url:'/personal/buscar',
            data: {
                apellidos: apellidos,
                certificacion:certificacion,
                tipoConsulta: consulta
            },
            success:function(data){
                $('.inicial').hide();
                $('div .personalizada').removeClass("personalizada");
                $('div .BusquedaPersonalizada table tbody tr').remove();
                
                 $.each(data, function () {
                    $('div .BusquedaPersonalizada table tbody').append('<tr id="trRemove" scope="row">'+
                                                                            '<td> <strong>'+this.id_personal+'</strong></td>'+
                                                                            '<td>'+this.nombre+'</td>'+
                                                                            '<td>'+this.apellidos+'</td>'+
                                                                            '<td>'+this.id_certificacion+'</td>'+
                                                                            '<td>'+this.desc_certificaciones+'</td>'+  
                                                                        '</tr>');
                   
                });

            }
         });

    })
});