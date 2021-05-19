<!DOCTYPE html>
<html>
<head>
	<title>Login com Cookie</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
	fieldset{
		width: 300px;
		height: 250px;
		margin: 10%auto;
	}
	</style>
</head>
<body>
	<fieldset>
		<legend><h1>Login/Cadastro</h1></legend>
		<form method="post" action="login.php">
			<div class="form-group">
		      <label for="email">E-mail</label>
		      <input type="text" class="form-control" id="email" name="email" placeholder="Infome o E-mail">
			</div>
			<div class="form-group">
		      <label for="senha">Senha</label>
		      <input type="password" class="form-control" id="senha" name="senha" placeholder="Infome a Senha">
              <button type="submit" class="btn btn-primary" id='botao'>Entrar</button>
             <label for="senha">Cadastre -se agora :</label><br>
              <button type="submit" class="btn btn-primary" value="SIM" id='entrarCadastro'>Cadastrar</button>	
			</div>
		
		</form>
	</fieldset>
</body>
</html>