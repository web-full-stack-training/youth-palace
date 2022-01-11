window.addEventListener('DOMContentLoaded', function () {
    let app = window.location.href.split('/').pop();
    const footer = document.querySelector('.active-footer');
    const sendButton = document.querySelector('.send-contact-form-button');

    sendButton.addEventListener('click', function () {
        const userName = document.querySelector('#fname');
        const email = document.querySelector('#email');
        const message = document.querySelector('#form-message');

        clearErrorMessages([userName, email, message]);
        if (!validateContactForm([userName, email, message])) return false;

        showLoading(true);

        const data = {
            user_name: userName.value,
            email: email.value,
            message: message.value
        }

        api('send-message', 'post', data).then((res) => {
            showLoading(false);
            showModal(true, res.message, res.status);
            userName.value = '';
            email.value = '';
            message.value = '';
        })
    });

    function validateContactForm(formElements) {
        for (let i = 0; i < formElements.length; i++) {
            if (!formElements[i].value.trim()) {
                console.log(formElements[i].nextElementSibling);
                formElements[i].nextElementSibling.style.display = 'block';
                return false;
            }
        }

        return true;
    }

    function clearErrorMessages(formElements) {
        formElements.forEach(element => {
            element.addEventListener('input', function (e) {
                if (e.target.value.trim()) {
                    e.target.nextElementSibling.removeAttribute('style');
                }
            })
        });
    }

    if (app === 'contact') footer.style.display = 'none';
})

