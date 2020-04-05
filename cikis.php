<?php
session_start();
ob_start();
!defined('ucbeyi') ? header('Location:index.php?sayfa=anasayfa'): null;

cikis();
header("Location: index.php");

?>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-5">
			<form method="post">
				<div class="form-group">
					<label for="uye_eposta">E-Posta</label>
					<input type="email" class="form-control" id="uye_eposta" name="eposta" required aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">E-postanızı asla başkasıyla paylaşmayacağız.</small>
				</div>
				<div class="form-group">
					<label for="uye_parola">Parola</label>
					<input type="password" class="form-control" id="uye_parola" name="parola" required>
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Beni hatırla</label>
				</div>
				<button type="submit" class="btn btn-primary" name="girisFormu" value="giris">Giriş</button>
			</form>
		</div>
	</div>
</div>