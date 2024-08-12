//FUNCION PARA EL CARRUCEL
let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-slide img');
const totalSlides = slides.length;
function showNextSlide() {
    currentIndex++;
    document.querySelector('.carousel-slide').style.transition = 'transform 1s ease'; 
    if (currentIndex >= totalSlides) {
        setTimeout(() => {
            document.querySelector('.carousel-slide').style.transition = 'none';
            currentIndex = 0;
            document.querySelector('.carousel-slide').style.transform = `translateX(0)`;
        }, 1000); 
    } else {
        document.querySelector('.carousel-slide').style.transform = `translateX(-${currentIndex * 100}%)`;
    }
}
setInterval(showNextSlide, 3000); 

