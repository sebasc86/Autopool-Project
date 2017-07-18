contarUsuarios();

setInterval(contarUsuarios, 3000);
function contarUsuarios() {
    var ajax_url = 'js/usuariosJSON.php';

    var req = new XMLHTTPRequest();


    req.onreadystatechange = function() {
        if (req.readyState === 4) {
            if (req.status === 200) {
                var elemento = document.querySelector('.cant_usuarios p');
                var cant = JSON.parse(req.responseText).count;

                if (cant == 0) {
                    elemento.innerText = '';
                }
                else if (cant == 1) {
                    elemento.innerText = 'Ya somos ' + cant + ' usuario!';
                }
                else {
                    elemento.innerText = 'Ya somos ' + cant + ' usuarios!';
                }
            }
        }
    }
    req.open('GET', ajax_url);
    req.send();
}
