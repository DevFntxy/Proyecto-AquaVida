let currentIndex = 0;
function cambiarImagen(direction) {
  const images = document.querySelectorAll('.imagenes img');
  images[currentIndex].classList.remove('active');
  currentIndex += direction;
  if (currentIndex < 0) {
    currentIndex = images.length - 1;
  } else if (currentIndex >= images.length) {
    currentIndex = 0;
  }
  images[currentIndex].classList.add('active');
}
// Inicializar la primera imagen como activa
document.addEventListener('DOMContentLoaded', () => {
  const images = document.querySelectorAll('.imagenes img');
  if (images.length > 0) {
    images[0].classList.add('active');
  }
});
