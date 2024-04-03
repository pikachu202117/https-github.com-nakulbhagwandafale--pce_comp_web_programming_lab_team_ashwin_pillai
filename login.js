const container = document.querySelector('.container');
const loginlink = document.querySelector('.register-acc');
const registerbox = document.querySelector('.login-acc');

loginlink.addEventListener('click',()=> {
    container.classList.add('active');

});

registerbox.addEventListener('click',()=> {
    container.classList.remove('active');

});