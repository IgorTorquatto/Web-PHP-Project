//Esse script faz a validação do formulário no front-end

const form = document.getElementById('form');

//Adicionei um listener ao evento de submissão do formulário, é nele que será feita toda a validação

form.addEventListener('submit',(event)=>{
    event.preventDefault();

    //variável que controla se o formulário é válido ou não (inicialmente é válido)
    let isValid = true;

    //validação do input-email
    const inputEmail = document.getElementById('inputEmail');
    const inputEmailError = inputEmail.nextElementSibling;
    if( !inputEmail.value || !inputEmail.value.includes('@')){
        inputEmailError.classList.remove('d-none');
        isValid = false;
    }else{
        inputEmailError.classList.add('d-none');
    }

    //validação do input senha
    const inputPassword = document.getElementById('inputPassword');
    const inputPasswordError = inputPassword.nextElementSibling;
    if( !inputPassword.value || inputPassword.value.length < 6 ){
        inputPasswordError.classList.remove('d-none');
        isValid = false;
    }else{
        inputPasswordError.classList.add('d-none');
    }

    //validação do input assunto
    const inputSubject = document.getElementById('inputAssunto');
    const inputSubjectError = inputSubject.nextElementSibling;
    if(!inputSubject.value.trim()){
        inputSubjectError.classList.remove('d-none');
        isValid = false;
    }else{
        inputSubjectError.classList.add('d-none');
    }

    //validação mensagem
    const inputMessage = document.getElementById('inputMessage');
    const inputMessageError = inputMessage.nextElementSibling;
    if(!inputMessage.value.trim()){
        inputMessageError.classList.remove('d-none');
        isValid = false;
    }else{
        inputMessageError.classList.add('d-none');
    }

    if(isValid){
        form.submit();
    }
});