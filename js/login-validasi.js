function cekLogin(){
   username = document.getElementById('username');
   password = document.getElementById('password');

   if (username.value == ''){
      alert('Username harus diisi!');
      username.focus();
      return false;
   } else if (password.value == ''){
      alert('Password harus diisi');
      password.focus();
      return false;
   }
}