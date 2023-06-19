<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--
			Cliente: Doraly Móveis
			Site desenvolvido por; Pedro de Carvalho Junior & Olivino Henrique Messias
		-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Produtos | Doraly Móveis </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="//db.onlinewebfonts.com/c/a4f6ea3c821d0ee0d7ceaf58004371ea?family=Orator+Std+Medium" rel="stylesheet" type="text/css"/>
    <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/jPages.js"></script>
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28718218-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

  <script>
  /* when document is ready */
  $(function(){
    /* iniciate jPages without setting any css animation
     * and setting the fallback fadeIn speed to 500
     */
     $("div.holder").jPages({
        containerID : "itemContainer",
        fallback    : 1000
    });
     /* on select change */
     $("select").change(function(){
        /* get new fadeIn speed */
      var newFallbackSpeed = parseInt( $(this).val() );
      /* destroy jPages and initiate plugin again */
      $("div.holder").jPages("destroy").jPages({
            containerID : "itemContainer",
            animation   : false,
            fallback    : newFallbackSpeed
        });
    });
});
  </script>    
    <link href="css/breadcrumb.css" rel="stylesheet" type="text/css" />
    <link href="css/produtos.css" rel="stylesheet" type="text/css"/>
    <link href="css/cabecalho.css" rel="stylesheet" type="text/css" />
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
        
        
             <!--TITULO PRODUTOS-->   
       <div class="container paineis ">
    	<div class="painel  menu-navegacao">
        <section class="  ">
           <div class="col-md-3">
                <div class="panel-default">
                    <section class="menu-servicos">
                        <a href="produtos.php.php"><h1>CATEGORIAS</h1></a>
                        <nav>
                            <ul>                
                                <li><a href="moveis.php"><h3 id="principal">Móveis</h3></a>
                                    <a href="#" id="MostrarLista" style="display:none"><span class="glyphicon glyphicon-plus costume"></span></a>
                                    <a href="#" id="EsconderLista"><span class="custom glyphicon glyphicon-minus"></span></a>
                                    <ul id="lista">
                                        <li><a href="sofas.php"><h3>Sofás</h3></a></li>
                                        <li><a href="poltronas.php"><h3>Poltronas</h3></a></li>
                                        <li><a href="mesas.php"><h3>Mesas</h3></a></li>
                                        <li><a href="cadeiras.php"><h3>Cadeiras</h3></a></li>
                                        <li><a href="puff.php"><h3>Puff</h3></a></li>
                                        <li><a href="aparadores.php"><h3>Aparadores</h3></a></li>
                                    </ul>
                                </li>
                                <li><a href="planejados.php"><h3 id="principal">Planejados</h3></a>
                                    <a href="#" id="MostrarLista1" style="display:none"><span class="glyphicon glyphicon-plus costume"></span></a>
                                    <a href="#" id="EsconderLista1"><span class="custom glyphicon glyphicon-minus"></span></a>
                                    <ul id="lista1">
                                        <li><a href="homes.php"><h3>Homes</h3></a></li>
                                        <li><a href="cozinhas.php"><h3>Cozinhas</h3></a></li>
                                        <li><a href="banheiros.php"><h3>Banheiros</h3></a></li>
                                        <li><a href="quartos.php"><h3>Quartos</h3></a></li>
                                    </ul>
                                </li>
                                <li><a ref="principal.php"><h3 id="principal">Locações</h3></a></li>
								<li><a ref="linha-pet.php"><h3 id="principal">Linha Pet</h3></a></li>
                            </ul>
                        </nav>
                    </section><!-- fim .menu-servicos -->
                </div><!-- fim .panel-body -->
            </div><!-- fim .col-md-3 -->
        </section>
        </div>
        
        <div class="painel galeria menu-navegacao">
            <!-- navigation holder -->
            <div class="holder holder2"></div>
            <div id="content" class="defaults">
                <!-- item container -->
                <ul id="itemContainer">
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco1</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco2</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco3</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco4</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco5</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco6</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco7</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco8</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco9</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco10</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco11</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco12</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco13</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco15</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco16</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco17</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco18</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco19</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco20</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco21</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco22</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco23</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco24</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <li class="thumbnail">
                            <a class="thumb" href="#" name="SOFA-FEIJAO" title="SOFÁ FEIJÃO">
                                <img  class="img-responsive" src="img/sofa/SOFA_FEIJAO_s-id1.jpg" alt="SOFA FEIJÃO" />
                                <span>Sofá Feijão Branco25</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
            <!-- navigation holder -->
            <div class="holder holder2"></div>
        </div> <!--! end of #content -->
    </div> <!--! end of #container -->
        
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/esconder-lista.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
</html>