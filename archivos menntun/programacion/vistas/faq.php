<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../config/images/favicon.png">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="../config/images/letra-m.png">
    <link rel='stylesheet' href="../config/styles/faq.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="../config/js/cositas.js"></script>
    <title>Menntun</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: black;">
            <div class="container-fluid" style="max-width: 250px;">
                <div style="text-align: center;">
                    <img src="../config/images/logomenntunb.png" style="width: 40%;">
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row mt-5" style="margin-bottom: 48px;">
            <div class="col-12 mx-auto" style="max-width: 900px;">
                <div class="card" style="box-shadow: 5px 5px 40px; border-radius: 20px;border-radius: 20px;border-radius: 20px;">
                    <div class="card-body px-4">
                        <div class="row">
                            <!-- botón de regreso -->
                            <div class="col-2">
                                <a class="btn btn-lg btn btn-link" name="regresar" href="inicio.php" role="button"><i class="bx bx-left-arrow-alt bx-flashing bx-md" style='color:#2e4f4f;'></i></a>
                            </div>
                            <div class="col-8">
                                <h2 class="text-center mb-3" style="font-weight: bold; ">Preguntas Frecuentes</h2>
                            </div>
                        </div>
                        <!-- Ayuda General -->
                        <div class="accordion" style="background: #fff; " id="ayudaGeneral">
                            <div class="accordion-item">
                                <h3 class="accordion-header py-2 mb-0" style="text-align: center; font-style:italic; color:#2e4f4f; background: #CBE4DE">Ayuda General</h3>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag1">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseOne" aria-expanded="false" aria-controls="agcollapseOne">
                                        Menntun, ¿de qué trata?
                                    </button>
                                </h2>
                                <div id="agcollapseOne" class="accordion-collapse collapse" aria-labelledby="ag1" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f" style="border: solid; border-color:#2e4f4f">
                                        Menntun es una plataforma web que permite a los integrantes de una institución educativa gestionar procesos académicos.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag2">
                                    <button class="accordion-button collapsed fw-bold" style="text-align:left;" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseTwo" aria-expanded="false" aria-controls="agcollapseTwo">
                                        ¿Por qué no puedo realizar un registro de cuenta en la plataforma?
                                    </button>
                                </h2>
                                <div id="agcollapseTwo" class="accordion-collapse collapse" aria-labelledby="ag2" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        No se puede registrar ya que esta acción sólo puede realizarla el administrador de la institución. Si desea tener acceso a las herramientas de Menntun debe comunicarse con los encargados del manejo de la plataforma y pedir acceso a según su rol.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag3">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseThree" aria-expanded="false" aria-controls="agcollapseThree">
                                        Recibí un correo de Menntun solicitando mis datos de ingreso.
                                    </button>
                                </h2>
                                <div id="agcollapseThree" class="accordion-collapse collapse" aria-labelledby="ag3" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Menntun jámas le solicitara la información personal de su cuenta. En caso de que ocurra, no confie en absoluto en el emisor del mismo.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag4">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseFourth" aria-expanded="false" aria-controls="agcollapseFourth">
                                        ¿Cómo puedo actualizar mis datos?
                                    </button>
                                </h2>
                                <div id="agcollapseFourth" class="accordion-collapse collapse" aria-labelledby="ag4" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si desea cambiar sus datos, debera comunicarse con el administrador y solicitar la actualización de la información.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag5">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseFive" aria-expanded="false" aria-controls="agcollapseFive">
                                        ¿Por qué debería realizar informes?
                                    </button>
                                </h2>
                                <div id="agcollapseFive" class="accordion-collapse collapse" aria-labelledby="ag5" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Esta opción fue agregada ya que para los docentes es necesario presentar informes a la institución en la que labora. De igual manera los alumnos podran realizar dichos informes en caso de necesitarlo.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag6">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseSix" aria-expanded="false" aria-controls="agcollapseSix">
                                        ¿Cuál es el proceso para descargar un informe en Excel?
                                    </button>
                                </h2>
                                <div id="agcollapseSix" class="accordion-collapse collapse" aria-labelledby="ag6" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si desea descargar un informe, deberá hacer clic en el boton del tipo de documento en el que desea descargarlo, podra realizar esta acción en dos formatos, Exel y PDF. En otro caso tambien se podra imprimir.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag7">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseSeven" aria-expanded="false" aria-controls="agcollapseSeven">
                                        ¿Por qué no se actualizan las modificaciones que realice?
                                    </button>
                                </h2>
                                <div id="agcollapseSeven" class="accordion-collapse collapse" aria-labelledby="ag7" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En caso de que los cambios realizados no sean guardados, se debera a que falta alguna casilla por llenar o porque lo escrito no puede ir en el espacio indicado.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag8">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseEight" aria-expanded="false" aria-controls="agcollapseEight">
                                        ¿Por qué no me funciona el buscador?
                                    </button>
                                </h2>
                                <div id="agcollapseEight" class="accordion-collapse collapse" aria-labelledby="ag8" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si no funciona el buscador, se deberá a que la palabra, nombre o información no se encuentra registrada en el apartado, o en su defecto, lo que desea buscar está mal redactado.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag9">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseNine" aria-expanded="false" aria-controls="agcollapseNine">
                                        No recuerdo mi contraseña ¿Qué debería hacer?
                                    </button>
                                </h2>
                                <div id="agcollapseNine" class="accordion-collapse collapse" aria-labelledby="ag9" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En caso de no recordar la contraseña de su cuenta, debera hacer clic en recuperar contraseña, este apartado se encuentra en la parte inferior al momento de iniciar sesion. Despues le llegara un codigo a su correo, el cual debera ingresar para poder cambiar su contraseña.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag10">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseTen" aria-expanded="false" aria-controls="agcollapseTen">
                                        ¿Dónde puedo saber mas de menntun?
                                    </button>
                                </h2>
                                <div id="agcollapseTen" class="accordion-collapse collapse" aria-labelledby="ag10" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si desea saber mas de Menntun, podra visitar nuestras redes sociales, estas las encuentra en la parte inferio de los muros de cada rol o en el inicio de Menntun.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag11">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseEleven" aria-expanded="false" aria-controls="agcollapseEleven">
                                        ¿Por qué motivos podría ser desactivada una cuenta?
                                    </button>
                                </h2>
                                <div id="agcollapseEleven" class="accordion-collapse collapse" aria-labelledby="ag11" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Su cuenta puede ser desactiva en caso de ya no pertenecer a la institucion o finalizar su lapso escolar.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag11">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseEleven" aria-expanded="false" aria-controls="agcollapseEleven">
                                        ¿Cuánto tarda la descarga de un informe?
                                    </button>
                                </h2>
                                <div id="agcollapseEleven" class="accordion-collapse collapse" aria-labelledby="ag11" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Esto depende de su conexion a internet, pero generalmente tardo unos cuantos segundos.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ag = ayuda general -->
                                <h2 class="accordion-header" id="ag11">
                                    <button class="accordion-button collapsed fw-bold" style="text-align:left; text-align:left;border-radius: 0px 0px 20px 20px;"" type="button" data-bs-toggle="collapse" data-bs-target="#agcollapseEleven" aria-expanded="false" aria-controls="agcollapseEleven">
                                        ¿Qué facilidad me brinda Menntun a la hora de cambiar el formato convencional del colegio?
                                    </button>
                                </h2>
                                <div id="agcollapseEleven" class="accordion-collapse collapse" aria-labelledby="ag11" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Menntun facilita el manejo y visualización de notas para los diferentes roles de la plataforma, aparte de una gestion de horarios y asignaturas que facilitan el entendimiento del año escolar.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alumno -->

                        <div class="accordion mt-5" id="Alumno">
                            <div class="accordion-item">
                                <h3 class="py-2 mb-0" style="text-align: center; font-style:italic; color:#2e4f4f; background: #CBE4DE">Alumno</h3>
                            </div>

                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- com = Alumno -->
                                <h2 class="accordion-header" id="com1">
                                    <button class="accordion-button collapsed fw-bold" style="text-align: left;" type="button" data-bs-toggle="collapse" data-bs-target="#comcollapseOne" aria-expanded="false" aria-controls="comcollapseOne">
                                        Me aparece una asignatura que no hace parte de mis competencias académicas ¿Qué deberia hacer?
                                    </button>
                                </h2>
                                <div id="comcollapseOne" class="accordion-collapse collapse" aria-labelledby="com1" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si sucede que cuenta con una asignatura que no le pertenece, debera comunicarse con el administrador o en su defecto con la institución, para que el caso en cuestion sea revisado y arreglado si es necesario.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- com = Alumno -->
                                <h2 class="accordion-header" id="com2">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#comcollapseTwo" aria-expanded="false" aria-controls="comcollapseTwo">
                                        Tengo una calificación errónea en mi asignatura.
                                    </button>
                                </h2>
                                <div id="comcollapseTwo" class="accordion-collapse collapse" aria-labelledby="com2" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En caso de contar con una calificación con la que no esta de acuerdo o es errónea, debera comunicarse con el docente encargado para el cambio o arreglo de la/s nota/s.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- com = Alumno -->
                                <h2 class="accordion-header" id="com3">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#comcollapseThree" aria-expanded="false" aria-controls="comcollapseThree">
                                        ¿Cómo cambio mi foto de perfil?
                                    </button>
                                </h2>
                                <div id="comcollapseThree" class="accordion-collapse collapse" aria-labelledby="com3" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Debera solicitar el cambio de foto de perfil al administrador.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- com = Alumno -->
                                <h2 class="accordion-header" id="com4">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#comcollapseFour" aria-expanded="false" aria-controls="comcollapseFour">
                                        ¿Cómo saca el promedio de mis calificaciones Menntun?
                                    </button>
                                </h2>
                                <div id="comcollapseFour" class="accordion-collapse collapse" aria-labelledby="com4" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        La plataforma responde a su promedio de forma correcta, sumando las calificaciones y dividiendo por la cantidad de las mismas.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- com = Alumno -->
                                <h2 class="accordion-header" id="com5">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#comcollapseFive" aria-expanded="false" aria-controls="comcollapseFive">
                                        ¿Cómo sé evalúan mis calificaciones?
                                    </button>
                                </h2>
                                <div id="comcollapseFive" class="accordion-collapse collapse" aria-labelledby="com5" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Las calificaciones se evaluaran de la manera puesta por el docente a cargo.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- com = Alumno -->
                                <h2 class="accordion-header" id="com6">
                                    <button class="accordion-button collapsed fw-bold" style="text-align:left;border-radius: 0px 0px 20px 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#comcollapseSix" aria-expanded="false" aria-controls="comcollapseSix">
                                        ¿Cada cuánto sé realizaran cambios de mis calificaciones?
                                    </button>
                                </h2>
                                <div id="comcollapseSix" class="accordion-collapse collapse" aria-labelledby="com6" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Cada vez que se asigne una nueva actividad y sea necesario por parte del docente, actualizar dichas notas y/o actividades.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Alumno -->

                        <!-- Docente -->

                        <div class="accordion mt-5" id="Docente">
                            <div class="accordion-item">
                                <h3 class="py-2 mb-0" style="text-align: center; font-style:italic; color:#2e4f4f; background: #CBE4DE">Docente</h3>
                            </div>

                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven1">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseOne" aria-expanded="false" aria-controls="vencollapseOne">
                                        ¿Cómo puedo subir una calificación?
                                    </button>
                                </h2>
                                <div id="vencollapseOne" class="accordion-collapse collapse" aria-labelledby="ven1" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Para subir una calificación, debera hacer clic en el boton con un mas (+) y a continuacion, llenar la información de la calificación como la actividad a la que pertenece y demas.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven2">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseTwo" aria-expanded="false" aria-controls="vencollapseTwo">
                                        ¿Cómo puedo editar las calificaciones?
                                    </button>
                                </h2>
                                <div id="vencollapseTwo" class="accordion-collapse collapse" aria-labelledby="ven2" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Cuando desee actualizar las calificaciones, debera hacer clic en el boton con el lapiz, este lo llevara a un apartado donde podra cambiar diferentes ítems de la calificación seleccionada.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven3">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseThree" aria-expanded="false" aria-controls="vencollapseThree">
                                        ¿Por qué no tengo visualización de mi horario laboral?
                                    </button>
                                </h2>
                                <div id="vencollapseThree" class="accordion-collapse collapse" aria-labelledby="ven3" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En caso de no poder visualizar su horario, se debera a que no se le ha asignado alguno o estara en proceso de cambio y/o actualización.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven4">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseFour" aria-expanded="false" aria-controls="vencollapseFour">
                                        ¿Cómo cambio o edito mi horario?
                                    </button>
                                </h2>
                                <div id="vencollapseFour" class="accordion-collapse collapse" aria-labelledby="ven4" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En caso de tener alguna inconformidad con su horario laboral y desear cambiarlo o editarlo, debera contactar al administrador de la institución para que pueda analizar y arreglar en caso de que lo amerite.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven5">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseFive" aria-expanded="false" aria-controls="vencollapseFive">
                                        ¿Por qué cambió mi horario?
                                    </button>
                                </h2>
                                <div id="vencollapseFive" class="accordion-collapse collapse" aria-labelledby="ven5" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si ve algun cambio en sus horarios laborales, es porque la institución le asigno unos diferentes, si no esta de acuerdo, debera comunicarlo a la institución.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven6">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseSix" aria-expanded="false" aria-controls="vencollapseSix">
                                        Mi horario está mal ¿Como lo arreglo?
                                    </button>
                                </h2>
                                <div id="vencollapseSix" class="accordion-collapse collapse" aria-labelledby="ven6" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Comuníquese con la institucion para ver lo ocurrido con su horario laboral y en tal caso, arreglarlo.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- ven = Docente -->
                                <h2 class="accordion-header" id="ven7">
                                    <button class="accordion-button collapsed fw-bold" style="text-align:left;border-radius: 0px 0px 20px 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#vencollapseSeven" aria-expanded="false" aria-controls="vencollapseSeven">
                                        ¿Mi horario como docente es fijo o rotativo?
                                    </button>
                                </h2>
                                <div id="vencollapseSeven" class="accordion-collapse collapse" aria-labelledby="ven7" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Esto dependera de la institución, podra ser de una u otra forma, o variar.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Docente -->

                        <!-- Administrador -->
                        <div class="accordion mt-5" id="Administrador">
                            <div class="accordion-item">
                                <h3 class="py-2 mb-0" style="text-align: center; font-style:italic; color:#2e4f4f; background: #CBE4DE">Administrador</h3>
                            </div>

                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen1">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseOne" aria-expanded="false" aria-controls="cuencollapseOne">
                                        ¿Dónde puedo encontrar mi perfil de administrador?
                                    </button>
                                </h2>
                                <div id="cuencollapseOne" class="accordion-collapse collapse" aria-labelledby="cuen1" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        El apartado de administrador no cuenta con un perfil, esto debido a que no se sabe con certeza quien o quienes tendran el manejo de la plataforma.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen2">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseTwo" aria-expanded="false" aria-controls="cuencollapseTwo">
                                        No puedo ingresar a mi cuenta de Administrador.
                                    </button>
                                </h2>
                                <div id="cuencollapseTwo" class="accordion-collapse collapse" aria-labelledby="cuen2" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si no tiene acceso a la cuenta de administrador, debera verificar si las credenciales de acceso estan bien escritas. En caso de olvidar dichas credenciales, debera comunicarse con un desarrollador de Menntun para el cambio de la misma.
                                        <br></br>
                                        Cabe aclarar que si sucede esto, tendra un cobro extra especificado en el contrato, ya que una de las causulas dice que la institucion debera ser responsable de la cuenta de administrador y que Menntun no se hara responsable de ello.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen3">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseThree" aria-expanded="false" aria-controls="cuencollapseThree">
                                        ¿Qué ocurre si desactivo una cuenta?
                                    </button>
                                </h2>
                                <div id="cuencollapseThree" class="accordion-collapse collapse" aria-labelledby="cuen3" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Si usted desactiva una cuenta debe tener presente que esta acción evitará el ingreso y uso de la plataforma al usuario que se desactivo.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen4">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseFour" aria-expanded="false" aria-controls="cuencollapseFour">
                                        Quiero eliminar mi cuenta de Administrador.
                                    </button>
                                </h2>
                                <div id="cuencollapseFour" class="accordion-collapse collapse" aria-labelledby="cuen4" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Esta función no esta disponible con ninguna de las cuentas creadas y registradas.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen5">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseFive" aria-expanded="false" aria-controls="cuencollapseFive">
                                        ¿Cómo elimino cuentas o datos de la plataforma?
                                    </button>
                                </h2>
                                <div id="cuencollapseFive" class="accordion-collapse collapse" aria-labelledby="cuen5" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En el caso de las cuentas, estas no podrán ser eliminadas, solo desactivadas.
                                        <br></br>
                                        En caso de los datos pasa algo similar, solo con la diferencia de que estas no seran borradas sino actualizadas.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen6">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseSix" aria-expanded="false" aria-controls="cuencollapseSix">
                                        ¿Como asignó un horario correctamente?
                                    </button>
                                </h2>
                                <div id="cuencollapseSix" class="accordion-collapse collapse" aria-labelledby="cuen6" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Para asignar un horario debidamente, debera seleccionar una hora de inicio y una de final, la de final debera ser posterior a la inicial y la fecha tendra que ser una a futuro.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen7">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseSeven" aria-expanded="false" aria-controls="cuencollapseSeven">
                                        ¿Cómo puedo obtener soporte técnico?
                                    </button>
                                </h2>
                                <div id="cuencollapseSeven" class="accordion-collapse collapse" aria-labelledby="cuen7" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        En caso de necesitar soporte tecnico, debera solicitar a la institución el contactarse con menntun atravez de nuestro correo electronico menntun0@gmail.com.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen8">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseEigth" aria-expanded="false" aria-controls="cuencollapseEigth">
                                        Al momento de registrar ¿Como se que rol debo asignar al usuario?
                                    </button>
                                </h2>
                                <div id="cuencollapseEigth" class="accordion-collapse collapse" aria-labelledby="cuen8" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Para saber que rol debe asignar a un usuario, debera verificar la información del mismo con la institución.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen9">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseNine" aria-expanded="false" aria-controls="cuencollapseNine">
                                        ¿Puedo asignar más de un rol a un usuario?
                                    </button>
                                </h2>
                                <div id="cuencollapseNine" class="accordion-collapse collapse" aria-labelledby="cuen9" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        No, solo podra asignarse un rol por usuario.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen9">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseNine" aria-expanded="false" aria-controls="cuencollapseNine">
                                        ¿Que limitaciones me da la plataforma como administrador?
                                    </button>
                                </h2>
                                <div id="cuencollapseNine" class="accordion-collapse collapse" aria-labelledby="cuen9" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Menntun limita al administrador a poder editar y actualizar datos de los diferentes apartados de la plataforma, sin embargo no podra eliminar nada relacionado con los datos ingresados.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen10">
                                    <button class="accordion-button collapsed fw-bold" style="text-align: left;" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseTen" aria-expanded="false" aria-controls="cuencollapseTen">
                                        ¿Cómo se maneja la seguridad de la información general del colegio a la cual tiene acceso el administrador?
                                    </button>
                                </h2>
                                <div id="cuencollapseTen" class="accordion-collapse collapse" aria-labelledby="cuen10" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        La información brindada a Menntun es de uso exclusivo de la misma. La mayor parte de información sera dada al administrador, cuenta de la cual esta encargada la institución y por parte de Menntun, no sera dadá a terceros.
                                    </div>
                                </div>
                            </div>
                            <!-- Desplegable -->
                            <div class="accordion-item">
                                <!-- Pregunta -->
                                <!-- cuen = Administrador -->
                                <h2 class="accordion-header" id="cuen11">
                                    <button class="accordion-button collapsed fw-bold" style="text-align:left;border-radius: 0px 0px 20px 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#cuencollapseEleven" aria-expanded="false" aria-controls="cuencollapseEleven">
                                        ¿Qué funcionamientos y permisos tiene el administrador?
                                    </button>
                                </h2>
                                <div id="cuencollapseEleven" class="accordion-collapse collapse" aria-labelledby="cuen11" data-bs-parent="#accordionExample">
                                    <!-- Texto -->
                                    <div class="accordion-body text-justify" style="border: solid; border-color:#2e4f4f">
                                        Tiene funciones y permisos editar información de los apartados de otros roles, la activacion y desactivación de cuentas registradas en la plataforma.
                                    </div>
                                </div>
                            </div>
                            <!-- Administrador -->
                        </div>
                        <!-- Contacto -->
                        <div>
                            <h4 class="text-center mt-3">
                                ¿No encuentra solución a su pregunta?
                            </h4>
                            <p class="text-center"><span class="fw-bold">Contáctenos: </span><a href="mailto:menntun0@gmail.com">menntun0@gmail.com</a></p>
                        </div>
                        <!-- Contacto -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>