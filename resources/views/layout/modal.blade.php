<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
<div id="response-message-modal">
    <img
        src="{{ asset('images/icons/close-modal.png') }}"
        class="close-modal"
        alt="Close Modal"
        width="30"
        height="30"
    >
    <h3 class="modal-title"></h3>
    <img
        src="{{ asset('images/icons/failed-icon.svg') }}"
        alt="Failed"
        class="failed-icon"
        width="55"
        height="55"
    >
    <img
        src="{{ asset('images/icons/success-icon.png') }}"
        alt="Success"
        class="success-icon"
        width="55"
        height="55"
    >
    <p class="modal-text"></p>
</div>
<div id="layer"></div>
