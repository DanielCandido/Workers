<?php 
	include_once 'head.php'
 ?>
<body>
	 <?php include_once 'header.php'?>
	 <div class="container">
	 	<h1 style="margin-top: 50px;">Meus Pedidos</h1>
	 <div class="row">
	 <?php 
	 	include_once ("conexao.php");
	 	$id = $_SESSION['id'];
	 	$query = "SELECT IdOrder, IdUser, IdProvider, DateOrder, Status FROM orderservice WHERE IdUser = '$id'";
	 	$dados = mysqli_query($conn,$query);
	 	$linha = mysqli_fetch_assoc($dados);
	 	$total = mysqli_num_rows($dados);

	 	if ($total > 0) {
	 		do {
	  ?>
	  <div class="col-sm-4" style="margin-top: 50px;">
	  	<div class="card" style="height:  310px;">
	  		<div class="card-body"> 
	  			<h5>ORDEM DE SERVIÇO</h5>
	  			<p class="card-text"><b>Nº Ordem: </b><?=$linha['IdOrder']?></p>
	  			<p class="card-text"><b>Nome Solicitante: </b><?=$linha['IdUser']?></p>
	  			<p class="card-text"><b>Nome Prestador: </b><?=$linha['IdProvider']?></p>
	  			<p class="card-text"><b>Data do pedido: </b><?=$linha['DateOrder']?></p>
	  			<p class="card-text"><b>Status: </b><?=$linha['Status']?></p>
	  			<?php
	  				if ($linha['Status'] == 'Aguardando aprovação') {
	  					echo "<button class='btn btn-danger' value='Cancelar'>Cancelar</button>";
	  				} else {
	  					echo "<div class='alert alert-warning' role='alert'>
 Solicitação ja em andamento
</div>";
	  				}
	  			?>
	  		</div>
	  	</div>	
	  </div>
	
	 <?php
	 	}while ($linha = mysqli_fetch_assoc($dados)); 
	 } else {
	 	echo "<div class='alert alert-warning' role='alert' style='margin-top: 50px;'>
			Você não possui pedidos 
			<a href='index.php' class='alert-link'>Voltar ao início</a>
		</div>";
	 }

	 ?> 
	  </div>
	 </div>	
</body>
</html>