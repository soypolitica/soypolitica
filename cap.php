<html>
	<head>
	<link rel="stylesheet" href="style.css">
	<link id = "styles" rel="stylesheet" href="style.css">
	<title>Soypolitica</title>
	<link rel="icon" type="image/x-icon" href="trump.png">
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src = "css.js"></script>
	</head>
	<body>
	        <select style = "position:absolute;right:1;" id="styletypes">
  <option value="Light">Lightmode</option>
  <option value="Dark">Darkmode</option>
</select>
	<div class="boardlist">
		<p><a href="index.html">Home</a> | <a href="structure.html">Soysphere Parliament</a> | <a href="party.html">Soyparty Parliament</a> | <a href="bills.html">Bills</a> | <a href="policies.html">Polices</a> | <a href="speech.html">Speeches</a></p>
	</div>
	<div class = "ban">
	    <h2>Capcode viewer</h2>
	    <b>Your capcode is:</b> <b style = "color:red" id = "cap"></b>
	</div>
	</body>
</html>
<?php
echo "<script>document.getElementById('cap').innerText ='" . substr(addslashes($_POST["faction"]) ,0, 50) . " ## " . substr(openssl_encrypt($_SERVER["REMOTE_ADDR"], "AES-128-CTR",
            "i8OOvQ5uOlJfDVC55LoxIupNY0n38seUcqVTSz58ALVSNynNxqPzs5ufn3Gjizox", 0, "0263891603582119"),0,7) . "';</script>";
?>