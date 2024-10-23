<!-- navar.php -->
<link rel="stylesheet" href="./componentes/CSS/navar.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- LOGO -->
    <a class="navbar-brand" href="index.php">
      <img src="./componentes/IMG/logo.png" alt="Logo"> 
    </a>
    <!-- BOTON PARA VERSIÓN MÓVIL -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- BARRA DE NAVEGACION -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Menú principal de la barra de navegación -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=evento">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=atencion">Atención al Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=pedidos">Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=vender">Vender con Ticket X Press</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=faq">FAQ</a>
        </li>
      </ul>

      <!-- BOTÓN DE ACCESO CON ÍCONO DE USUARIO -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=log">
            <i class="fas fa-user"></i> ACCEDER
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

