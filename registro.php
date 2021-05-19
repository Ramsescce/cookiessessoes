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
		<legend><h1>Cadastro</h1></legend>
		<form method="post" action="login.php">
			<input type="text" name="nome" placeholder="digite seu Nome aqui"><br>
    		<input type="e-mail" name="email" placeholder="Digite seu e-mail"><br>
    		<input type="text" name="usuario" placeholder="Digite seu usuário"><br>
    		<input type="number" name="senha" placeholder="Digite sua senha"><br>Confirme o cadastro:
    		<input type="checkbox" name="confirmar" value="SIM" id="confirma"> <br>		
		    <button type="submit" class="btn btn-primary" id='botao'>Entrar</button>	
			 </div>
		</form>
	</fieldset>
</body>
</html>