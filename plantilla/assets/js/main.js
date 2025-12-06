// assets/js/main.js
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('btnTogglePassword');
  const pwd = document.getElementById('password');

  if (btn && pwd) {
    btn.addEventListener('click', function () {
      if (pwd.type === 'password') {
        pwd.type = 'text';
        btn.innerHTML = '<i class="fa fa-eye-slash"></i>';
      } else {
        pwd.type = 'password';
        btn.innerHTML = '<i class="fa fa-eye"></i>';
      }
    });
  }

  // Validación simple al submit
  const form = document.getElementById('loginForm');
  if (form) {
    form.addEventListener('submit', function (e) {
      const user = document.getElementById('username').value.trim();
      const pass = document.getElementById('password').value.trim();
      if (!user || !pass) {
        e.preventDefault();
        alert('Completa usuario y contraseña');
        document.getElementById('username').focus();
      }
    });
  }
});

// toggle sidebar mobile
document.addEventListener('DOMContentLoaded', function(){
  const btn = document.getElementById('btnToggleSidebar');
  const sidebar = document.getElementById('appSidebar');
  if(btn && sidebar){
    btn.addEventListener('click', function(){
      sidebar.classList.toggle('open');
    });
  }
});