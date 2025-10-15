<?php
// footer.php

// Nota: Incluye aquí también los scripts de JavaScript
// que van justo antes del cierre de </body>,
// como el código para los modales que te mostré antes.
?>

<footer id="footer" class="dark">
  <div class="container">

    <div class="row text-center text-md-start align-items-center py-4">
      <div class="col-md-8 mb-3 mb-md-0">
        <p class="mb-1">
          <i class="bi bi-geo-alt-fill me-2"></i>
          Ctra de Ronda, Polígono Industrial La Quinta, Naves 4 y 5 - 29670 San Pedro de Alcántara - Málaga
        </p>
        <p class="mb-1"><i class="bi bi-telephone me-2"></i> (+34) 952 78 19 97</p>
        <p class="mb-0"><i class="bi bi-envelope me-2"></i> info@tallereslopezfuertes.com</p>
      </div>

      <div class="col-md-4 text-center text-md-end">
        <a href="https://www.facebook.com/tallereslopezfuertes1974/" target="_blank" class="social-icon"><i
            class="fa-brands fa-facebook-f"></i></a>
        <a href="https://twitter.com/TalleresLopezF" target="_blank" class="social-icon"><i
            class="fa-brands fa-twitter"></i></a>
        <a href="https://www.instagram.com/tallereslopezfuertes/?hl=es" target="_blank" class="social-icon"><i
            class="fa-brands fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCEp-tXYXiqZGpNqEjumlTHQ" target="_blank" class="social-icon"><i
            class="fa-brands fa-youtube"></i></a>
      </div>
    </div>

  </div>

  <div id="copyrights">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center">
      <div class="mb-2 mb-md-0">
        © 2023 Talleres López Fuertes - Todos los derechos reservados
      </div>
      <div>
        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-terminos">Términos</a> |
        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-privacidad">Política de Privacidad</a>
      </div>
    </div>
  </div>
</footer>

<div id="gotoTop" class="uil uil-angle-up"></div>

<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>

<?php include 'modals.php'; ?>
<script>
  // Función para cargar el contenido de un archivo HTML en un elemento específico
  function cargarContenidoEnModal(url, elementoDestinoId) {
    fetch(url)
      .then(response => {
        if (!response.ok) {
          throw new Error('Error al cargar el archivo: ' + response.statusText);
        }
        return response.text();
      })
      .then(data => {
        document.getElementById(elementoDestinoId).innerHTML = data;
      })
      .catch(error => {
        console.error('Fetch error:', error);
        document.getElementById(elementoDestinoId).innerHTML = '<p class="text-danger">No se pudo cargar el contenido.</p>';
      });
  }

  // Detecta cuando los modales se están mostrando para cargar el contenido
  const modalTerminos = document.getElementById('modal-terminos');
  if (modalTerminos) {
    modalTerminos.addEventListener('show.bs.modal', function () {
      cargarContenidoEnModal('terminos.html', 'contenido-terminos');
    });
  }

  const modalPrivacidad = document.getElementById('modal-privacidad');
  if (modalPrivacidad) {
    modalPrivacidad.addEventListener('show.bs.modal', function () {
      cargarContenidoEnModal('privacidad.html', 'contenido-privacidad');
    });
  }
</script>

</body>

</html>