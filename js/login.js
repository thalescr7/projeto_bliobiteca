const formulario = document.getElementById('loginForm')
formulario.addEventListener('submit', function (event) {
    event.preventDefault()
    let cpf = document.getElementById('cpf').value;
    let senha = document.getElementById('password').value;
    
    

})
document.getElementById('togglePassword').addEventListener('click', function () {
    var passwordInput = document.getElementById('password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});
function showCard() {
    document.getElementById('card').style.display = 'flex';
}

function hideCard() {
    document.getElementById('card').style.display = 'none';
}