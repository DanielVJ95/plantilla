<?php
session_start();
// Redirigir si ya está autenticado
if (!empty($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>MAYABIO</title>

  <!-- Bootstrap (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="login-bg">

  <!-- Top bar con logos -->
  <header class="topbar d-flex justify-content-between align-items-center px-3">
    <img src="img/logoMaya.jpg" alt="Logo izquierda" class="site-logo">
    <img src="img/logoMaya.jpg" alt="Logo derecha" class="site-logo">
  </header>

  <!-- Contenido principal -->
  <main class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="login-wrapper row gx-0 w-100 justify-content-center">

      <!-- Lado izquierdo: título -->
      <div class="col-lg-6 d-none d-lg-block left-panel">
        <div class="left-inner">
          <h1 class="brand-title">Norma NACDMX-002-RNAT-2019</h1>
          <p class="lead text-white small">
            Esta Norma Ambiental establece las condiciones para la implementación de prácticas agroecológicas 
            en el suelo de conservación de la Ciudad de México, con lo que se fomenta la protección, preservación 
            y conservación de la biodiversidad y los servicios ecosistémicos que provee 
            (incluyendo los recursos naturales), el patrimonio biocultural, así como el desarrollo rural sustentable, 
            y que están en concordancia con principios agroecológicos.
          </p>
        </div>
      </div>

      <!-- Lado derecho: tarjeta -->
      <div class="col-lg-4 col-md-8">
        <div class="card login-card shadow">
          <div class="card-body">
            <h4 class="mb-3">Acceso</h4>

            <p class="text-white small mb-3">
              ¿Usted es colaborador de <strong>MAYABIO</strong>?<br>
              Inicie sesión en nuestra plataforma <strong>SiCert-LPO</strong>
            </p>

            <!-- Mensaje de error si el auth redirige con ?error= -->
            <?php if (!empty($_GET['error'])): ?>
              <div class="alert alert-danger small"><?= htmlspecialchars($_GET['error']) ?></div>
            <?php endif; ?>

            <form action="auth.php" method="post" id="loginForm" autocomplete="on" novalidate>
              <div class="mb-3">
                <label for="username" class="form-label small fw-bold"><i class="fa fa-user me-2"></i>USUARIO</label>
                <input name="username" id="username" class="form-control form-control-lg" placeholder="Ingrese su nombre de usuario"
                       required autocomplete="username" autofocus aria-label="Usuario">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label small fw-bold"><i class="fa fa-lock me-2"></i>PASSWORD</label>
                <div class="input-group">
                  <input name="password" id="password" type="password" class="form-control form-control-lg"
                         placeholder="Ingrese su contraseña" required autocomplete="current-password" aria-label="Contraseña">
                  <button class="btn btn-outline-secondary" type="button" id="btnTogglePassword" title="Mostrar / ocultar contraseña" aria-label="Mostrar contraseña">
                    <i class="fa fa-eye"></i>
                  </button>
                </div>
              </div>

              <div class="d-grid mt-3">
                <button class="btn btn-success btn-lg" type="submit">Ingresar</button>
              </div>

              <p class="text-white small text-center mt-3">
                ¿No cuenta con un usuario y contraseña?<br>
                Comuníquese al <strong>951 522 96 67</strong>
              </p>
            </form>
          </div>
        </div>
      </div>

    </div>
  </main>

  <footer class="footer-login small d-flex justify-content-between px-3">
    <span>Copyright 2025 - Calidad y honestidad certificada</span>
    <span>MAYABIO - Certificación Agroecológica</span>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js" defer></script>
</body>
</html>