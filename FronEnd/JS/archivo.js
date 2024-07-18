document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('leak-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const location = document.getElementById('location').value;
        const description = document.getElementById('description').value;

        if (name === '' || location === '' || description === '') {
            alert('Por favor, complete todos los campos.');
            return;
        }

        // Aquí podrías enviar los datos a un servidor o procesarlos de alguna forma
        console.log('Reporte enviado');
        console.log('Nombre:', name);
        console.log('Ubicación de la Fuga:', location);
        console.log('Descripción:', description);

        // Resetear el formulario después de enviarlo
        form.reset();
        alert('Reporte enviado con éxito');
    });
});
