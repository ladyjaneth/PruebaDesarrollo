$('#guardar_empleado').submit(function(event){
    event.preventDefault();
    const formEmpleado = document.getElementById('#guardar_empleado');

    $.ajax({
        url: formEmpleado?.action,
        type:'post',
        data: new FormData(formEmpleado),
        processData: false,
        contentType: false,

        success:function(response){
            Swal.fire('Exitoso', response.msg, "success");
            formEmpleado.reset();
        },
        error:function(jqXHR,textStatus){
        Swal.fire('error', textStatus,"error");
        }

    });


});
