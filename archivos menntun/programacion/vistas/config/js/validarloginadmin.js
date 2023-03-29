//alerta login admin

function validar_login_admin(form){

    if(form.administrador.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.administrador.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.password.focus();
        return(false);
    }

}

//alerta login alumno

function validar_login_usuario(form){

    if(form.usuario.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.usuario.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.password.focus();
        return(false);
    }

}

//alerta login docente 

function validar_login_doc(form){

    if(form.docente.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.docente.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.password.focus();
        return(false);
    }
       
}

// alerta registro alumno 

function validar_regi_alum(form){

    if(form.primer_nombre_doc.value.length==0){
        swal.fire('Digite su primer nombre ','','error')
        form.primer_nombre_doc.focus();
        return(false);
    }
    
    if(form.primer_apellido_doc.value.length==0){
        swal.fire('Digite su primer apellido','','error')
        form.primer_apellido_doc.focus();
        return(false);
    }
    
    if(form.cod_t_d_.value.length==0){
        swal.fire('Digite su tipo documento ','','error')
        form.cod_t_d_.focus();
        return(false);
    }
    if(form.cod_asignatura.value.length==0){
        swal.fire('Digite su asignatura ','','error')
        form.cod_asignatura.focus();
        return(false);
    }
    if(form.email.value.length==0){
        swal.fire('Digite su correo ','','error')
        form.email.focus();
        return(false);
    }
    if(form.segundo_nombre_doc.value.length==0){
        swal.fire('Digite su segundo nombre','','error')
        form.segundo_nombre_doc.focus();
        return(false);
    }
    if(form.segundo_apellido_doc.value.length==0){
        swal.fire('Digite su segundo apellido ','','error')
        form.segundo_nombre_doc.focus();
        return(false);
    }
    
    if(form.id_documento_doc.value.length==0){
        swal.fire('Digite su documento  ','','error')
        form.id_documento_doc.focus();
        return(false);
    }
    
        var letra="1234567890";
        var cadena=form.id_documento_doc.value;
        var valida=true;

        for(i=0;i<cadena.length;i++)
            {
                ch=cadena.charAt(i);
                for(j=0; j<letra.length; j++)
                if(ch==letra.charAt(j))
                break;
                if(j==letra.length)
                {
                    valida = false;
                    break;
                    break;
                }
            }
        if(!valida)
            {
                swal.fire('Digite solo numeros en el campo','','error')
                form.id_documento_doc.focus();
                return(false);
            }
    if(form.cod_rol.value.length==0){
        swal.fire('Digite su rol ','','error')
        form.cod_rol.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.password.focus();
        return(false);
    }

    var confirmar=confirm("Desea registrarse [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);


}


//alerta registro docente 

function validar_regi_doc(form){

    if(form.primer_nombre_doc.value.length==0){
        swal.fire('Digite su primer nombre ','','error')
        form.primer_nombre_doc.focus();
        return(false);
    }
    
    if(form.primer_apellido_doc.value.length==0){
        swal.fire('Digite su primer apellido','','error')
        form.primer_apellido_doc.focus();
        return(false);
    }
    
    if(form.cod_t_d_.value.length==0){
        swal.fire('Digite su tipo documento ','','error')
        form.cod_t_d_.focus();
        return(false);
    }
    if(form.cod_asignatura.value.length==0){
        swal.fire('Digite su asignatura ','','error')
        form.cod_asignatura.focus();
        return(false);
    }
    if(form.email.value.length==0){
        swal.fire('Digite su correo ','','error')
        form.email.focus();
        return(false);
    }
    // if(form.segundo_nombre_doc.value.length==0){
    //     swal.fire('Digite su segundo nombre','','error')
    //     form.segundo_nombre_doc.focus();
    //     return(false);
    // }
    // if(form.segundo_apellido_doc.value.length==0){
    //     swal.fire('Digite su segundo apellido ','','error')
    //     form.segundo_nombre_doc.focus();
    //     return(false);
    // }
    
    if(form.id_documento_doc.value.length==0){
        swal.fire('Digite su documento  ','','error')
        form.id_documento_doc.focus();
        return(false);
    }
    
        var letra="1234567890";
        var cadena=form.id_documento_doc.value;
        var valida=true;

        for(i=0;i<cadena.length;i++)
            {
                ch=cadena.charAt(i);
                for(j=0; j<letra.length; j++)
                if(ch==letra.charAt(j))
                break;
                if(j==letra.length)
                {
                    valida = false;
                    break;
                    break;
                }
            }
        if(!valida)
            {
                swal.fire('Digite solo numeros en el campo','','error')
                form.id_documento_doc.focus();
                return(false);
            }
    if(form.cod_rol.value.length==0){
        swal.fire('Digite su rol ','','error')
        form.cod_rol.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.password.focus();
        return(false);
    }

    var confirmar=confirm("Desea registrarse [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);


}





//alerta registro administrador

function validar_regi_admin(form){

    if(form.email.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.email.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su informacion completa','','error')
        form.password.focus();
        return(false);
    }

}

//alerta agregar documento 

function validar_agreg_docu(form){

    if(form.tipo_documento.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.tipo_documento.focus();
        return(false);
    }
   
    var confirmar=confirm("Desea agregar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta modificar documento

function validar_modif_docu(form){

    if(form.tipo_documento.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.tipo_documento.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

// alerta modificar horario 

function validar_modif_horario(form){

    if(form.horario_inicial.value.length==0){
        swal.fire('Digite su horario inicial','','error')
        form.horario_inicial.focus();
        return(false);
    }
    
    if(form.horario_final.value.length==0){
        swal.fire('Digite su horario final ','','error')
        form.horario_final.focus();
        return(false);
    }
    
    if(form.fecha.value.length==0){
        swal.fire('Digite su fecha','','error')
        form.fecha.focus();
        return(false);
    }
    if(form.aula.value.length==0){
        swal.fire('Digite su aula','','error')
        form.aula.focus();
        return(false);
    }
    if(form.cod_cursos.value.length==0){
        swal.fire('Digite su correo ','','error')
        form.cod_cursos.focus();
        return(false);
    }
    if(form.id_documento_doc.value.length==0){
        swal.fire('Digite su documento','','error')
        form.id_documento_doc.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);


}


// alerta agregar horario

function validar_agreg_horario(form){

    if(form.horario_inicial.value.length==0){
        swal.fire('Digite su horario inicial','','error')
        form.horario_inicial.focus();
        return(false);
    }
    
    if(form.horario_final.value.length==0){
        swal.fire('Digite su horario final ','','error')
        form.horario_final.focus();
        return(false);
    }
    
    if(form.fecha.value.length==0){
        swal.fire('Digite su fecha','','error')
        form.fecha.focus();
        return(false);
    }
    if(form.aula.value.length==0){
        swal.fire('Digite su aula','','error')
        form.aula.focus();
        return(false);
    }
    if(form.cod_cursos.value.length==0){
        swal.fire('Digite su correo ','','error')
        form.cod_cursos.focus();
        return(false);
    }
    if(form.id_documento_doc.value.length==0){
        swal.fire('Digite su documento','','error')
        form.id_documento_doc.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea registrar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);


}


//alerta agregar periodo


function validar_agreg_peri(form){

    if(form.periodo.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.periodo.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su informacion completa','','error')
        form.password.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta modificar periodo

function validar_modif_peri(form){

    if(form.periodo.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.periodo.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta agregar asignatura

function validar_agreg_asig(form){

    if(form.asignatura.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.asignatura.focus();
        return(false);
    }
    
    if(form.password.value.length==0){
        swal.fire('Digite su informacion completa','','error')
        form.password.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea agregar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta modificar asignatura

function validar_modif_asig(form){

    if(form.cod_asignatura.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.cod_asignatura.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta agreagr curso

function validar_agreg_curso(form){

    if(form.curso.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.curso.focus();
        return(false);
    }

    if(form.cod_grado.value.length==0){
        swal.fire('Digite su grado ','','error')
        form.cod_grado.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea agregar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta agregar nota docente

function validar_agreg_nota(form){

    if(form.actividad.value.length==0){
        swal.fire('Digite su actividad ','','error')
        form.actividad.focus();
        return(false);
    }
    
    if(form.id_documento.value.length==0){
        swal.fire('Digite su documento','','error')
        form.id_documento.focus();
        return(false);
    }
    if(form.cod_nota.value.length==0){
        swal.fire('Digite la nota','','error')
        form.cod_nota.focus();
        return(false);
    }
    if(form.cod_periodo.value.length==0){
        swal.fire('Digite el periodo ','','error')
        form.cod_periodo.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea agregar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta modificar nota docente

function validar_edit_notas (form){

    if(form.cod_actividad.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.cod_actividad.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}



// alerta modificar docente

function validar_modif_docente(form){

    if(form.primer_nombre_doc.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.primer_nombre_doc.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta modificar alumno 

function  validar_modif_alumno(form){

    if(form.primer_apellido.value.length==0){
        swal.fire('Digite su informacion ','','error')
        form.primer_apellido.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea modificar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta cambiar contra alumno 


function validar_cambiar_contralumno (form){

    if(form.correo.value.length==0){
        swal.fire('Digite su correo ','','error')
        form.correo.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea enviar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//alerta cambiar contra docente

function validar_cambiar_contradoc (form){

    if(form.correo_doc.value.length==0){
        swal.fire('Digite su correo ','','error')
        form.correo_doc.focus();
        return(false);
    }
    
    
    var confirmar=confirm("Desea enviar la informacion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
