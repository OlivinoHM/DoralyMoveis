<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--
			Cliente: Rsfengenharia
			Site desenvolvido por; Olivino Henrique Messias
		-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Móveis em Guarulhos | Móveis Doraly</title>

		<link rel="stylesheet" href="css/reset.css" />
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/cabecalho.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/basic.css" type="text/css" />
		<link rel="stylesheet" href="css/galeria_produtos.css" type="text/css" />
		<link rel="stylesheet" href="css/breadcrumb.css" type="text/css" />
		<link href="css/servicos.css" rel="stylesheet" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
		<script type="text/javascript" src="js/galleri.js"></script>
		<link href="//db.onlinewebfonts.com/c/a4f6ea3c821d0ee0d7ceaf58004371ea?family=Orator+Std+Medium" rel="stylesheet" type="text/css"/>

		<!-- We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
	</head>
	<body id="servico">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<div class="container">
			<figure id="logodoraly" ><a href="index.php"><img  alt="Doraly Móveis" src="img/logodoraly.png"></a></figure>
		</div>
		
		<header>
				<nav class="menu nav">
					<ul>
						<div class="espaco-canto">
						<li><h3><a id="home" href="index.php">HOME</a></h3></li>
						<li><h3><a id="quem" href="quem-somos.php">QUEM SOMOS</a></h3></li>
						<li><h3><a id="ser" href="produtos.php">PRODUTOS</a></h3></li>
						<li><h3><a id="con" href="contato.php">CONTATO</a></h3></li>
							</div>
					</ul>
				</nav>
		</header>
		
		<div class="jumbotron container">
			<div class="col-xs-12">
				<div class="row">
		
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="produtos.php">Produtos</a></li>
						<li>Sofas</li>
					</ul>
			
					<div id="page">
						<div id="container">
							<!-- Start Advanced Gallery Html Containers -->
							<div id="gallery" class="content">
								<div class="slideshow-container">
									<div id="loading" class="loader"></div>
									<div id="slideshow" class="slideshow"></div>
								</div>
								<div id="caption" class="caption-container"></div>
							</div>
							<div id="thumbs" class="navigation"><!-- Start thumbs-->
								<ul class="thumbs noscript" style="text-align: center;">
<?php
$conexao = mysqli_connect("127.0.0.1", "root", "vertrigo", "Marcenaria");
$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE categoria = 'sofa' ORDER BY data DESC LIMIT 0, 12");
while ($produto = mysqli_fetch_array($dados)):
?>
									<li >
										<a class="thumb" name="<?= $produto['nome'] ?>" href="img/sofa/sofa<?=$produto['id'] ?>.jpg" title="<?= $produto['id'] ?>">
											<img src="img/sofa/sofa-s<?= $produto['id'] ?>.jpg" alt="<?= $produto['nome'] ?>" />
											<span class="titulo-img-esquerdo"><?= utf8_encode($produto['nome']) ?></span>
										</a>
										<div class="caption">
											<div class="image-title"><?= utf8_encode($produto['nome']) ?></div>
											<div class="image-desc"><?= utf8_encode($produto['descricao']) ?>.</div>
										</div>
									</li>
                                            <?php endwhile; ?>
									<!-- mais produtos-->						
								</ul>
							</div><!-- End thumbs-->
							<div style="clear: both;"></div>
						</div><!-- End container-->
					</div><!-- End page-->
				
				</div><!-- End row-->
			</div><!-- End col-->
		</div><!-- End jumbotron-->
	</body>
</html>