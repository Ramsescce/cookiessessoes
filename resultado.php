<?php
$email2 = (isset($_POST['email'])) ? $_POST['email'] : '';
$senha2 = (isset($_POST['senha'])) ? $_POST['senha'] : '';
if(($email == $email2) and ($senha == $senha2 ))
{
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Login com Cookie</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
	fieldset{
		width: 300px;
		height: 250px;
		margin:10% auto;
	}
	</style>
</head>
<body>
	<fieldset>
		<legend><h1>Bem Vindo</h1></legend>
		<form method="" action="">
			<h3>Seus dados cadastrados são:</h3>
<?php   
    echo"nome: ". $_COOKIE["CookieNome"]."<br>";
	echo"E-mail: ".$_COOKIE["CookieEmail"]."<br>";
	echo"Usuario: ". $_COOKIE["CookieUsuario"]."<br>";
	echo"Senha :". $_COOKIE["CookieSenha"]."<br>";	 
?>   		     
	
		</form>
	</fieldset>
</body>
</html>

<?php
}