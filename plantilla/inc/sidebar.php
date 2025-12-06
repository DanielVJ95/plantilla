<?php
// sidebar simple; para ajustar links
$active = basename($_SERVER['PHP_SELF']);
?>
<aside id="appSidebar" class="app-sidebar">
  <div class="sidebar-user text-center py-3">
    <img src="/plantilla/img/user_default.png" alt="user" class="user-avatar">
    <div class="mt-2 small text-white"><?= htmlspecialchars($user['username'] ?? 'Usuario') ?></div>
    <div class="text-success small">● En línea</div>
  </div>

  <nav class="sidebar-nav">
    <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link <?= $active==='dashboard.php' ? 'active' : '' ?>" href="/plantilla/dashboard.php"><i class="fa fa-home me-2"></i>Inicio</a></li>

      <li class="nav-item"><a class="nav-link <?= $active==='clientes.php' ? 'active' : '' ?>" href="/plantilla/clientes.php"><i class="fa fa-users me-2"></i>Clientes</a></li>

      <li class="nav-item"><a class="nav-link <?= $active==='solicitudes.php' ? 'active' : '' ?>" href="/plantilla/solicitudes.php"><i class="fa fa-file-alt me-2"></i>Solicitud</a></li>

      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-file-invoice-dollar me-2"></i>Cotizaciones</a></li>

      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-search me-2"></i>Inspección</a></li>

      <li class="nav-item mt-3"><a class="nav-link text-danger" href="/plantilla/logout.php"><i class="fa fa-sign-out-alt me-2"></i>Cerrar sesión</a></li>
    </ul>
  </nav>
</aside>
