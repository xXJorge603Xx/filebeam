<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
	<title>FILES (DEV)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/index.css">
	<meta property="og:title" content="FILES (BETA)">
    <meta property="og:description" content="Comparte archivos rapidamente mediante enlaces directos">
    <meta property="og:url" content="files.jorge603.xyz">
    <meta property="og:type" content="website">
</head>

<body>
	<img src="assets/favicon.ico">
	<h1>Subir un archivo (DEV)</h1>
	<?php
    $queryString = isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    ?>

	<form class="fileForm" method="POST" action="<?php echo 'submit.php' . $queryString; ?>"
		enctype="multipart/form-data">

		<div id="dragDropArea">
			<svg class="upload-icon secondary" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
				<path
					d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
			</svg>
			<svg class="file-icon secondary hidden" xmlns="http://www.w3.org/2000/svg" height="1em"
				viewBox="0 0 384 512">
				<path
					d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
			</svg>
			<span class="secondary">Arrastre y suelte un archivo aquí o haga clic para seleccionar</span>
			<span class="secondary"><strong>Tamaño maximo permitido: 100MB</strong></span>
			<input type="file" id="fileInput" name="uploadedFile" />
		</div>
		<?php
        if (isset($_SESSION['message']) && $_SESSION['message']) {
            printf('<b id="output">%s</b>', $_SESSION['message']);
            unset($_SESSION['message']);
        }
        ?>
		<button disabled id="uploadBtn" type="submit" name="uploadBtn" value="Subir">
			<span class="nf-icon">󰅧</span> Subir
		</button>
		<button class="hidden" id="gdpsBtn" name="gdpsBtn">
			<span class="nf-icon">󰌹</span> Copiar y subir al GDPS
		</button>
	</form>
	<div class="disclaimer">
		<p class="secondary">Version de pruebas. Esto no representa el resultado final de FILES</p>
		<p class="secondary">Al usar este sitio web, aceptas haber leido el <a href="disclaimer.html">disclaimer</a></p>
		<p class="secondary">FILES (BETA) v0.2.0</p>
	</div>
	<script src="index.js"></script>
</body>

</html>