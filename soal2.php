<h2 style="margin-left:30px; margin-top:80px;">Jawaban Soal 2</h2>

<div class="panel panel-default">
  <div class="panel-body">
  
  <div class="col-md-12">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <p><b>PERHATIAN !</b><br>
      Harus terdapat sebuah huruf kecil, sebuah huruf besar, sebuah angka dan sebuah karakter spesial<br>Contoh valid password adalah
        <li>123Qwer_</li>
        <li>ssdga_A7</li>
        <li>SUper&&4</li></p>
    </div>
  </div>

  <div class="col-md-12">
    <form action="" onsubmit="return validatePassword(this)" method="post">
      <div class="form-group">
        <label for="">Masukkan Password</label>
          <input type="text" class="form-control" value="" id="password" name="password">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-md pull-left btn-primary" value="LOGIN">
      </div>
    </form>
  </div>
  
  </div>
</div>

<script>
  function validatePassword(form) {
		var password = document.getElementById("password").value;
		if (form.password.value != "") {
      if (form.password.value.length != 8) {
        alert('Anda harus mengisi password dengan 8 karakter !');
      }
      else {
        pregMatch =/^.*(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[\'^£$%&*()}{@#~?><>,|=_+¬-])/; 
        if (!pregMatch.test(form.password.value)) {
          alert('Anda harus mengisi password dengan huruf kecil, sebuah huruf besar, sebuah angka dan sebuah karakter spesial!');
          form.password.focus();
          return false;
        } else {
          alert('Anda Berhasil Input!');
          return true;
        }
        return true;
      }
			return true;
		}else{
			alert('Anda harus mengisi password!');
		}
	}
</script>