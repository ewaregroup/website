// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();


// JavaScript to update the label text when a file is selected
$(document).ready(function() {
    $('#logo').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).siblings('.input-group-text').text(fileName ? fileName : 'Aucun fichier choisi');
    });
});


$(document).ready(function() {
    $("#countrySelect").countrySelect({
        defaultCountry: "tg",
        // Vous pouvez ajouter d'autres options ici
    });
});
