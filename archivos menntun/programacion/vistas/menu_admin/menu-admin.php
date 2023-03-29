  <header class="header" id="header">
    <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i> 
  </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo">
          <i class='bx bxl-medium nav_logo-icon'></i>
          <span class="nav_logo-name">Menntun</span> </a>
        <div class="nav_list">
          <a href="bienve_admin.php" class="nav_link">
            <i class='bx bx-grid-alt nav_icon'></i>
            <span class="nav_name">Dashboard</span>
          </a>
          <a href="alumno.php" class="nav_link ac">
            <i class='bx bx-user-circle bx-sm nav-icon'></i>
            <span class="nav_name">Alumnos</span>
          </a>
          <a href="docente.php" class="nav_link">
            <i class='bx bxs-briefcase-alt-2 bx-sm nav-icon'></i>
            <span class="nav_name">Docentes</span>
          </a>
          <a href="cursos.php" class="nav_link">
            <i class='bx bxs-user-account bx-sm nav-icon'></i>
            <span class="nav_name">Cursos</span>
          </a>
          <a href="grados.php" class="nav_link">
            <i class='bx bxs-graduation bx-sm nav-icon'></i>
            <span class="nav_name">Grados</span>
          </a>
          <a href="asignatura.php" class="nav_link">
            <i class='bx bxs-flask bx-sm nav-icon'></i>
            <span class="nav_name">Asignaturas</span>
          </a>
          <a href="periodo.php" class="nav_link">
            <i class='bx bx-calendar-edit bx-sm nav-icon'></i>
            <span class="nav_name">Periodos</span>
          </a>
          <a href="horarios.php" class="nav_link">
            <i class='bx bx-time bx-sm nav-icon'></i>
            <span class="nav_name">Horarios</span>
          </a>
          <a href="tipo_documento.php" class="nav_link">
            <i class='bx bx-credit-card-front bx-sm nav-icon'></i>
            <span class="nav_name">Tipo documento</span>
          </a>
        </div>
      </div>
      <a href="../controlador/fun_logout/logout_admin.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesión</span> </a>
    </nav>
  </div>
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript'>
    document.addEventListener("DOMContentLoaded", function(event) {

      const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId),
          bodypd = document.getElementById(bodyId),
          headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
          toggle.addEventListener('click', () => {
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
          })
        }
      }

      showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

      /*===== LINK ACTIVE =====*/
      const linkColor = document.querySelectorAll('.nav_link')

      function colorLink() {
        if (linkColor) {
          linkColor.forEach(l => l.classList.remove('active'))
          this.classList.add('active')
        }
      }
      linkColor.forEach(l => l.addEventListener('click', colorLink))
    });
  </script>
  <script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
    });
  </script>