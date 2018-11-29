<?php
include_once'head.php'; 
?>
<?php 
include_once'header-p.php'?>
<body>

<div class="container">	
<h1 style="text-align: center; margin-top: 50px;">Bem vindo prestador</h1>	
<a href="cadastrar.php" style="text-align: center; margin-left: 33%;">Não é prestador?</a>
<div class="row">	
<form method="POST" action="cadastro-prestador.php">
<div class="col-md-8" style="padding-right: 50px; padding-top: 80px; margin-left: 260px;">
	<h2>Cadastre-se</h2>
	<div class="form-group"> <!-- Name field -->
		<label class="control-label requiredField" for="name">Nome</label>
		<input class="form-control" required="" id="Name" name="Name" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email</label>
		<input class="form-control" required="" id="Email" name="Email" type="email"/>
	</div>
	
	<div class="form-group"> <!-- CPF field -->
		<label class="control-label requiredField" for="subject">CPF</label>
		<input class="form-control" required="" id="Cpf" name="Cpf" type="text"/>
	</div>

	<div class="form-group"> <!-- DateOfBirth field -->
		<label class="control-label requiredField" for="subject">Data de nascimento</label>
		<input class="form-control" required="" id="DateOfBirth" name="DateOfBirth" type="date"/>
	</div>

	<div class="form-group"> <!-- Adress field -->
		<label class="control-label requiredField" for="subject">Endereço</label>
		<input class="form-control" required="" id="Adress" name="Adress" type="text"/>
	</div>

	<div class="form-group"> <!-- Phone field -->
		<label class="control-label requiredField" for="subject">Telefone</label>
		<input class="form-control" required="" id="Phone" name="Phone" type="text"/>
	</div>

	<div class="form-group"> <!-- Cellphone field -->
		<label class="control-label requiredField" for="subject">Celular</label>
		<input class="form-control" required="" id="Cellphone" name="Cellphone" type="text"/>
	</div>

	<div class="form-group"> <!-- FantasyName field -->
		<label class="control-label requiredField" for="subject">Nome Fantasia (Nome de divulgação)</label>
		<input class="form-control" required="" id="FantasyName" name="FantasyName" type="text"/>
	</div>

	<div class="form-group"> <!-- FantasyName field -->
		<label class="control-label requiredField" for="subject">Categoria</label>
		<select class="form-control" required="" id="Category" name="Category" type="text">
			<option>Selecione</option>
			<option value="Jardinagem" id="Category" name="Category">Jardinagem</option>
			<option value="Reformas Gerais" id="Category" name="Category">Reformas Gerais</option>
			<option value="Eletricista" id="Category" name="Category">Eletricista</option>
			<option value="Encanador" id="Category" name="Category">Encanador</option>
			<option value="Pedreiro" id="Category" name="Category">Pedreiro</option>
			<option value="Pintura" id="Category" name="Category">Pintura</option>
		</select>
	</div>

	<div class="form-group"> <!-- Senha field -->
		<label class="control-label requiredField" for="subject">Senha</label>
		<input class="form-control" required="" id="Password" name="Password" type="password"/>
	</div>

	
	<div class="form-group">
		<button class="btn btn-primary " name="submit" type="submit">Cadastrar</button>
	</div>
</div>	
</form>	


<form method="POST" action="login-p.php">
<div style="padding-left: 50px; padding-top: 80px;">
<h2>Entrar</h2>
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email</label>
		<input class="form-control" id="Email" name="Email" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label " for="subject">Senha</label>
		<input class="form-control" id="Password" name="Password" type="password"/>
	</div>
		
	<div class="form-group">
		<button class="btn btn-primary " name="entrar" id="entrar" type="submit">Login</button>
	</div>
</div>	
</form>										
</div>
</div>
</body>
<footer></footer>
</html>