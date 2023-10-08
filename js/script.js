const password = document.getElementById('password');
const confirm = document.getElementById('confirm');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit',(e)=> {


    if(password.value != confirm.value){
        e.preventDefault();

        errorElement.innerText = 'Password do not match';
    }
})
