$("#newsletter").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // Formulário inválido
        formError();
        submitMSG(false, "Por favor preencha corretamente o formulário.");
    } else {
        // Tudo azul!
        event.preventDefault();
        submitForm();
    }
})


function submitForm() {
    // Inicializa variáveis com o conteúdo do formulário
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    console.log("name=" + name + "&email=" + email + "&message=" + message);

    $.ajax({
        type: "POST",
        url: "formnewsletter.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                console.log("formSuccess");
                formSuccess();
            } else {
                console.log("formSuccess FALHOU. Texto: " + text);
            }
        }
    });
}
function formSuccess() {
    //Limpa o formulário
    $("#newsletter")[0].reset();
    //Envia mensagem de sucesso!
    submitMSG(true, "Mensagem enviada!")
    header('Location: ../index.php');
}

function submitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center rubberBand animated text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

