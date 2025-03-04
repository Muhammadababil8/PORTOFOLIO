function signIn(){
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    if (username === 'example' && password === 'password'){
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('new-page').style.display = 'block';
    }else {
        alert('login failed. please check your username and password');
    }
}
