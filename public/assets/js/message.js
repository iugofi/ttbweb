function showError(field,messages) {
    if(!messages){
        $("#"+field)
        .addClass("is-valid")
        .removeClass("is-invalid")
        .siblings(".invalid-feedback")
        .text("");
    } else {
        $("#"+field)
        .addClass("is-invalid")
        .removeClass("is-valid")
        .siblings(".invalid-feedback")
        .addClass("text-danger") // Invalid message in red
        .removeClass("text-success") // Remove green class if present
        .text(messages);
    }
}

function removeValidationClass(form){
    $(form).each(function(){
        $(form).find(':input').removeClass("is-valid is-invalid");
    });
}

function showMessage(type, messages) {
    return '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
        '<strong>' + messages + '</strong>' +
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
    '</div>';
}

function togglePasswordVisibility(inputId) {
    var input = $("#" + inputId);
    var button = input.siblings('button');
    if (input.attr('type') === 'password') {
        input.attr('type', 'text');
        button.html('<i class="ri-eye-line align-middle"></i>');
    } else {
        input.attr('type', 'password');
        button.html('<i class="ri-eye-off-line align-middle"></i>');
    }
}