const workingProcessAccordion = document.querySelectorAll(
    '#working-process .accordion-header'
);
workingProcessAccordion.forEach((el) => {
    el.addEventListener('click', () => {
        const accordionItem = el.parentElement;
        const accordionButton = accordionItem.querySelector('.accordion-button');
        if (accordionButton.attributes['aria-expanded'].value === 'true') {
            accordionItem.classList.add('u-bg-green');
        } else {
            accordionItem.classList.remove('u-bg-green');
        }
    });
});

$(document).ready(function () {
    $('#email-form').on('submit', function (e) {
        e.preventDefault();
        let email = $('#email').val();
        let data = {
            email: email,
        };
        let token = $('#email-form input[name="_token"]').val();
        $.ajax({
            type: 'POST',
            url: '/send',
            data: data,
            headers: {
                'X-CSRF-TOKEN': token,
            },
            success: function (response) {
                $('#email-form').prepend(`<div class="alert alert-success" role="alert">
  ${response.message}
</div>`)
            },
            error: function (res) {
                let err = res.responseJSON.errors
                let emailField = $('#email-form input[name="email"]')
                err.email.forEach((err) => {
                    console.log(err)
                    emailField.after(`<div class="invalid-feedback">
                     ${err}
      </div>`)
                })
            },
        });
    })
})
