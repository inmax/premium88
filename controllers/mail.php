<?php
		 $para = 'crls.barronn@gmail.com';
		 $telefono = $_POST['telefono'];
		 $nombre = $_POST['name'];
		 $email = $_POST['email'];
		 $consulta = $_POST['message'];
		 $titulo = 'Consulta Premium88';
		 $mensaje = $consulta;
		 $cabeceras = 'From:'.$email. "\r\n" .
		     'Reply-To:' . "\r\n" .
		     'X-Mailer: PHP/' . phpversion();
		 mail($para, $titulo, $mensaje, $cabeceras);
?>
<script>
	location.href="../index.php";
</script>