<script>
function validaSenha() {
    NovaSenha = document.getElementById('senha').value;
    CNovaSenha = document.getElementById('confirmar_senha').value;
    if (NovaSenha !== CNovaSenha) {
        alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS");
        return false; // Impede o envio do formulário
    }
    return true; // Permite o envio do formulário
}

function formatarTelefone() {
    var telefone = document.getElementById('telefone');
    var valor = telefone.value;

    // Remove todos os caracteres não numéricos
    valor = valor.replace(/\D/g, '');

    // Verifica se o número possui 11 dígitos (com DDD)
    if (valor.length === 11) {
        valor = valor.replace(/^(\d{2})(\d{1})(\d{4})(\d{4})$/, '($1) $2 $3-$4');
    }
    // Verifica se o número possui 10 dígitos (sem DDD)
    else if (valor.length === 10) {
        valor = valor.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
    }

    telefone.value = valor;
    }

function formatarCPF() {
    var cpf = document.getElementById('cpf');
    var valor = cpf.value;

    // Remove todos os caracteres não numéricos
    valor = valor.replace(/\D/g, '');

    // Verifica se o número possui 11 dígitos
    if (valor.length === 11) {
        valor = valor.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, '$1.$2.$3-$4');
    }


    cpf.value = valor;
    }
    
function togglePasswordVisibility() {
    var senhaInput = document.getElementById("senha");
    var iconeSenha = document.getElementById("icone-senha");
    
    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        iconeSenha.classList.remove("fa-eye");
        iconeSenha.classList.add("fa-eye-slash");
    } else {
        senhaInput.type = "password";
        iconeSenha.classList.remove("fa-eye-slash");
        iconeSenha.classList.add("fa-eye");
    }
}

function togglePasswordVisibility2() {
    var senhaInput = document.getElementById("confirmar_senha");
    var iconeSenha = document.getElementById("icone-confirmar-senha");
    
    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        iconeSenha.classList.remove("fa-eye");
        iconeSenha.classList.add("fa-eye-slash");
    } else {
        senhaInput.type = "password";
        iconeSenha.classList.remove("fa-eye-slash");
        iconeSenha.classList.add("fa-eye");
    }
}

    </script> 