const closeButton = document.querySelector('.closeButton');
const alertDiv = document.querySelector('.alert');


// Agrega un evento de clic al botón de cierre
closeButton.addEventListener('click', function() {
  // Oculta el div de alerta al hacer clic en el botón de cierre
  console.log("test");
  alertDiv.style.display = 'none';
});