/* 
 * Responsável pela busca AJAX de apenas uma noticia
 */

var id = 0;

$('document').ready(function () {

    $('#noticias button').click(function () {
        //botão clicado
        if ($.isNumeric($(this).attr('id'))) {
        id = $(this).attr('id');
                console.log(id);
                //Reconstrução do indentificador da noticia
                noticiaID = '#noticia' + id;
                console.log(noticiaID);
                //AJAX método GET
                $.ajax({
                url:"noticiaBD.php",
                        type:'GET'
                        data: 'id=' + id,
                        success: function (retorno) {
                            $(noticiaID).html(retorno);
                            }
                });
        }
    });
});
    