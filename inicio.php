<?php include("layouts/header.php"); 

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

$sql = "SELECT * FROM faq ORDER BY id_faq DESC";
$result = mysqli_query($conn, $sql); //pesquisa pra ser usado na conta das rows
$total_pesquisa = mysqli_num_rows($result); //conta o total de rows

$quantidade = 10; //quantidade de rows
$num_pagina = ceil($total_pesquisa/$quantidade);
$inicio = ($quantidade*$pagina)-$quantidade;

$sql = "SELECT * FROM faq ORDER BY id_faq DESC LIMIT $inicio, $quantidade ";
$result2 = mysqli_query($conn, $sql); //pesquisa limitada com paginação

$pagina_anterior = $pagina - 1; //paginação
$pagina_posterior = $pagina + 1;

?>

<div class="navimg">
  <div class="container">
    <div class="justify-content-center conteudo_navimg ">
      <h1>Bem vindo a <br>Auto Escola Arco Íris</h1>
      <p>
      - Anos de experiencia de mercado <br>
      - Qualidade e comprometimento no ensino
      </p>
    </div>
  </div>
</div>
<div class="divisor">
	<hr style="border: 2px solid Black">
	<div class="text-center">
		<h2>Perguntas e Repostas Frequentes</h2>
	</div>
	<hr style="border: 2px solid Black">
</div>
<section class="accordion-section clearfix mt-5" aria-label="Question Accordions">
  <div class="container">
	<div class="panel-group mt-4" id="accordion" role="tablist" aria-multiselectable="true">
		<?php while($rows = mysqli_fetch_assoc($result2)){ ?>
			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="<?php echo $rows['id_faq'];?>">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
						<?php echo $rows['pergunta_faq'];?>
					</a>
				</h3>
				</div>
				<div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo $rows['id_faq'];?>">
					<div class="panel-body px-3 mb-4">
						<?php echo $rows['resposta_faq'];?>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading1">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
				Duvidas sobre as formas de pagamento.
				</a>
			</h3>
			</div>
			<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
			<div class="panel-body px-3 mb-4">
				<p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will be able to have a site up and running in no time.</p>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading2">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
				Como funciona a renovação de carta?
				</a>
			</h3>
			</div>
			<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
			<div class="panel-body px-3 mb-4">
				<p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading3">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
				Como é o processo de quem esta tirando a primeira carta?
				</a>
			</h3>
			</div>
			<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
			<div class="panel-body px-3 mb-4">
				<p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading4">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
				Quanto tempo em media demora pra tirar a CNH de carro e moto?
				</a>
			</h3>
			</div>
			<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
			<div class="panel-body px-3 mb-4">
				<p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
			</div>
			</div>
		</div>
	</div>
  </div>
</section>
<!-- preços -->
<div class="divisor" style="margin-top:60px;">
	<hr style="border: 2px solid Black">
	<div class="text-center">
		<h2>Preços das Aulas</h2>
	</div>
	<hr style="border: 2px solid Black">
</div>
<div class="container img-cover">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <img src="img/a.jpg">
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Categoria A</a></h3>
                    <div class="price">
                        R$700,00
                    </div>
                    <a class="add-to-cart" href="categoria_A">Ver Detalhes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid4" style="padding-top:30px">
                <div class="product-image4">
                    <img src="img/b.jpg">
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Categoria B</a></h3>
                    <div class="price">
                        R$950,00
                    </div>
                    <a class="add-to-cart" href="">Ver Detalhes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid4" style="padding-top:80px">
                <div class="product-image4">
                    <img src="img/ab.jpg">
                    <span class="product-discount-label">-18%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Categorias AB</a></h3>
                    <div class="price">
                        R$1350,00
                        <span>R$1650,00</span>
                    </div>
                    <a class="add-to-cart" href="">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("layouts/footer.php"); ?>