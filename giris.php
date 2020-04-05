<?php
session_start();
ob_start();
!defined('ucbeyi') ? header('Location:index.php?sayfa=anasayfa'): null;
include 'ayarlar.php';

if ($_POST['girisFormu']) {

	(!$_POST['ePosta'] || !$_POST['parola']) ? $giris_mesaji="E-Posta ve ya Parola alanını boş bırakamazsınız." : header("Location: giris.php");

	$kontrol = $db->prepare("SELECT * FROM uyeler WHERE ePosta=:ePosta AND parola=:parola");

	$kontrol->bindParam(':ePosta', $_POST['ePosta']);
	$kontrol->bindParam(':parola', $_POST['parola']);

	$kontrol->execute();


	if($row = $kontrol->fetch()){
		$_SESSION['adSoy'] = $row['adSoy'];
		$_SESSION['id']    = $row['id'];
		header("Location: index.php");
	}
}
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-4 offset-md-4 my-3">
			<div class="card">
				<div class="card-header text-center kalin maviGri-5 maviGri-0t"> ÜYE GİRİŞİ </div>
				<div class="card-body maviGri-0">
					<form method="post">
						<div class="form-group">
							<label for="ePosta">E-Posta</label>
							<input type="email" class="form-control" id="ePosta" name="ePosta" required aria-describedby="emailHelp">
							<small id="emailHelp" class="form-text text-muted">E-postanızı asla başkasıyla paylaşmayacağız.</small>
						</div>
						<div class="form-group">
							<label for="parola">Parola</label>
							<input type="password" class="form-control" id="parola" name="parola" required>
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="beniHatirla">
							<label class="form-check-label" for="beniHatirla">Beni hatırla</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block" name="girisFormu" value="giris">Giriş</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>