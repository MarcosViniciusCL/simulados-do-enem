<?php header("Content-type: text/html; charset=utf-8");
require_once( "../_model/Questao.php" );
require_once( "../_model/Prova.php" );
require_once( "../_controller/solicitarProva.php" );
//include_once( "../_model/seguranca.php" );
//include_once( "../_controller/controllerdados.php" );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Simulado</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../_css/estilo_simulado.css">
	<link rel="stylesheet" type="text/css" href="../_css/canal-enem.css">
	<link rel="stylesheet" type="text/css" href="../_css/ig-canais.css">
	<link rel="stylesheet" href="../_css/font-awesome.min.css">

	<script type="text/javascript" src="../_js/jquery.min.js"></script>
	<script src="../_css/bootstrap/js/bootstrap.js"></script>
	<link href="../_css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="../_js/cronometro.js"></script>
	<script>
		window.onload = inicio;
	</script>
	<script type="text/javascript">
		function anteriorQuestao(){
			<?php $prova->anteriorQuestao();?>
			atualiza();
		}
		function atualiza(){
			/*
			document.getElementById("enunciado").innerHTML = <?php echo $prova->getQuestaoAtual()->getEnunciado();?>;
			document.getElementById("respa").innerHTML = <?php echo $prova->getQuestaoAtual()->getRespostaA();?>;
			document.getElementById("respb").innerHTML = <?php echo $prova->getQuestaoAtual()->getRespostaB();?>;
			document.getElementById("respc").innerHTML = <?php echo $prova->getQuestaoAtual()->getRespostaC();?>;
			document.getElementById("respd").innerHTML = <?php echo $prova->getQuestaoAtual()->getRespostaD();?>;
			document.getElementById("respe").innerHTML = <?php echo $prova->getQuestaoAtual()->getRespostaE();?>;
			*/
		}
		function proximaQuestao(){
			<?php $prova->proximaQuestao();?>
			atualiza();
		}
	</script>

	<script type="text/javascript">
		function selectIndex(str) {
			document.getElementById(str).className = "item active";
			for (var i = 1; i <= 90; i++) {
				strin = str.substring(0, 5) + i;
				if (strin !== str) {
					if (document.getElementById(strin).className === "item active") {
						document.getElementById(strin).className = "item";
						return;
					}
				}
			}
		}
	</script>

</head>
<body>

	<nav class="navbar navbar-default">
		 <div class="container-fluid">
			 <div class="navbar-header">
				 <a class="navbar-brand" href="../index.html">SOS ENEM</a>
			 </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a style="font-size: 16px" href="../painel-do-usuario.php">Minha conta</a></li>
				<li><a style="font-size: 16px" href="#">Ajuda</a></li>
				<li><a style="font-size: 16px" href="../_controller/logout.php">Sair</a></li>
			</ul>

		 </div>
	</nav>

	<div role="main" class="col-md-9" style="height: 100px; margin-left: 35px">


		<div class="panel panel-info"  style="font-size: 16px">
			<div class="panel-body tituloQuestao"> <div id="enunciado"><?php echo $prova->getQuestaoAtual()->getEnunciado();?></div></div>

			<div style="height: 100px">

			</div>

			<!-- Selecionar respostas-->
			<div class="radio">
				<label><input type="radio" name="optradio" id="respa"><?php echo $prova->getQuestaoAtual()->getRespostaA();?></label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" id="respb"> <?php echo $prova->getQuestaoAtual()->getRespostaB();?></label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" id="respc"> <?php echo $prova->getQuestaoAtual()->getRespostaC();?></label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" id="respd"> <?php echo $prova->getQuestaoAtual()->getRespostaD();?></label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" id="respe"> <?php echo $prova->getQuestaoAtual()->getRespostaE();?></label>
			</div> 

		</div>

		<!-- Botões proximo e anterior 
		<div class="pull-right">
			<a role="button" class="btn btn-info"><- Anterior</a>
			<a role="button" class="btn btn-info">Pr�xima -></a>
		</div> -->

		<nav aria-label="..." class="previous">
			<ul class="pager">
			<li><a href="#" style="font-size: 14px" onclick="anteriorQuestao()">Anterior</a></li>
				<li><a href="#" style="font-size: 14px" onclick="proximaQuestao()">Próximo</a></li>
			</ul>
		</nav>

		<footer class="simulado-indicators" style="margin-top: 70px">
			<nav>
				<ol class="indice">
					<li class="item active" id="index1" onclick="selectIndex(this.id)">01</li>
					
					<li class="item" id="index2" onclick="selectIndex(this.id)">02</li>
					<li class="item" id="index3" onclick="selectIndex(this.id)">03</li>
					<li class="item" id="index4" onclick="selectIndex(this.id)">04</li>
					<li class="item" id="index5" onclick="selectIndex(this.id)">05</li>
					<li class="item" id="index6" onclick="selectIndex(this.id)">06</li>
					<li class="item" id="index7" onclick="selectIndex(this.id)">07</li>
					<li class="item" id="index8" onclick="selectIndex(this.id)">08</li>
					<li class="item" id="index9" onclick="selectIndex(this.id)">09</li>
					<li class="item" id="index10" onclick="selectIndex(this.id)">10</li>
					<li class="item" id="index11" onclick="selectIndex(this.id)">11</li>
					<li class="item" id="index12" onclick="selectIndex(this.id)">12</li>
					<li class="item" id="index13" onclick="selectIndex(this.id)">13</li>
					<li class="item" id="index14" onclick="selectIndex(this.id)">14</li>
					<li class="item" id="index15" onclick="selectIndex(this.id)">15</li>
					<li class="item" id="index16" onclick="selectIndex(this.id)">16</li>
					<li class="item" id="index17" onclick="selectIndex(this.id)">17</li>
					<li class="item" id="index18" onclick="selectIndex(this.id)">18</li>
					<li class="item" id="index19" onclick="selectIndex(this.id)">19</li>
					<li class="item" id="index20" onclick="selectIndex(this.id)">20</li>
					<li class="item" id="index21" onclick="selectIndex(this.id)">21</li>
					<li class="item" id="index22" onclick="selectIndex(this.id)">22</li>
					<li class="item" id="index23" onclick="selectIndex(this.id)">23</li>
					<li class="item" id="index24" onclick="selectIndex(this.id)">24</li>
					<li class="item" id="index25" onclick="selectIndex(this.id)">25</li>
					<li class="item" id="index26" onclick="selectIndex(this.id)">26</li>
					<li class="item" id="index27" onclick="selectIndex(this.id)">27</li>
					<li class="item" id="index28" onclick="selectIndex(this.id)">28</li>
					<li class="item" id="index29" onclick="selectIndex(this.id)">29</li>
					<li class="item" id="index30" onclick="selectIndex(this.id)">30</li>
					<li class="item" id="index31" onclick="selectIndex(this.id)">31</li>
					<li class="item" id="index32" onclick="selectIndex(this.id)">32</li>
					<li class="item" id="index33" onclick="selectIndex(this.id)">33</li>
					<li class="item" id="index34" onclick="selectIndex(this.id)">34</li>
					<li class="item" id="index35" onclick="selectIndex(this.id)">35</li>
					<li class="item" id="index36" onclick="selectIndex(this.id)">36</li>
					<li class="item" id="index37" onclick="selectIndex(this.id)">37</li>
					<li class="item" id="index38" onclick="selectIndex(this.id)">38</li>
					<li class="item" id="index39" onclick="selectIndex(this.id)">39</li>
					<li class="item" id="index40" onclick="selectIndex(this.id)">40</li>
					<li class="item" id="index41" onclick="selectIndex(this.id)">41</li>
					<li class="item" id="index42" onclick="selectIndex(this.id)">42</li>
					<li class="item" id="index43" onclick="selectIndex(this.id)">43</li>
					<li class="item" id="index44" onclick="selectIndex(this.id)">44</li>
					<li class="item" id="index45" onclick="selectIndex(this.id)">45</li>
					<li class="item" id="index46" onclick="selectIndex(this.id)">46</li>
					<li class="item" id="index47" onclick="selectIndex(this.id)">47</li>
					<li class="item" id="index48" onclick="selectIndex(this.id)">48</li>
					<li class="item" id="index49" onclick="selectIndex(this.id)">49</li>
					<li class="item" id="index50" onclick="selectIndex(this.id)">50</li>
					<li class="item" id="index51" onclick="selectIndex(this.id)">51</li>
					<li class="item" id="index52" onclick="selectIndex(this.id)">52</li>
					<li class="item" id="index53" onclick="selectIndex(this.id)">53</li>
					<li class="item" id="index54" onclick="selectIndex(this.id)">54</li>
					<li class="item" id="index55" onclick="selectIndex(this.id)">55</li>
					<li class="item" id="index56" onclick="selectIndex(this.id)">56</li>
					<li class="item" id="index57" onclick="selectIndex(this.id)">57</li>
					<li class="item" id="index58" onclick="selectIndex(this.id)">58</li>
					<li class="item" id="index59" onclick="selectIndex(this.id)">59</li>
					<li class="item" id="index60" onclick="selectIndex(this.id)">60</li>
					<li class="item" id="index61" onclick="selectIndex(this.id)">61</li>
					<li class="item" id="index62" onclick="selectIndex(this.id)">62</li>
					<li class="item" id="index63" onclick="selectIndex(this.id)">63</li>
					<li class="item" id="index64" onclick="selectIndex(this.id)">64</li>
					<li class="item" id="index65" onclick="selectIndex(this.id)">65</li>
					<li class="item" id="index66" onclick="selectIndex(this.id)">66</li>
					<li class="item" id="index67" onclick="selectIndex(this.id)">67</li>
					<li class="item" id="index68" onclick="selectIndex(this.id)">68</li>
					<li class="item" id="index69" onclick="selectIndex(this.id)">69</li>
					<li class="item" id="index70" onclick="selectIndex(this.id)">70</li>
					<li class="item" id="index71" onclick="selectIndex(this.id)">71</li>
					<li class="item" id="index72" onclick="selectIndex(this.id)">72</li>
					<li class="item" id="index73" onclick="selectIndex(this.id)">73</li>
					<li class="item" id="index74" onclick="selectIndex(this.id)">74</li>
					<li class="item" id="index75" onclick="selectIndex(this.id)">75</li>
					<li class="item" id="index76" onclick="selectIndex(this.id)">76</li>
					<li class="item" id="index77" onclick="selectIndex(this.id)">77</li>
					<li class="item" id="index78" onclick="selectIndex(this.id)">78</li>
					<li class="item" id="index79" onclick="selectIndex(this.id)">79</li>
					<li class="item" id="index80" onclick="selectIndex(this.id)">80</li>
					<li class="item" id="index81" onclick="selectIndex(this.id)">81</li>
					<li class="item" id="index82" onclick="selectIndex(this.id)">82</li>
					<li class="item" id="index83" onclick="selectIndex(this.id)">83</li>
					<li class="item" id="index84" onclick="selectIndex(this.id)">84</li>
					<li class="item" id="index85" onclick="selectIndex(this.id)">85</li>
					<li class="item" id="index86" onclick="selectIndex(this.id)">86</li>
					<li class="item" id="index87" onclick="selectIndex(this.id)">87</li>
					<li class="item" id="index88" onclick="selectIndex(this.id)">88</li>
					<li class="item" id="index89" onclick="selectIndex(this.id)">89</li>
					<li class="item" id="index90" onclick="selectIndex(this.id)">90</li>
				</ol>
			</nav>
		</footer>
	</div>

	<aside role="complementary" class="col-md-2">
		<div class="panel panel-primary">
			<div class="panel-heading" style="font-size: 16px">Cronômetro</div>
			<div class="panel-body">
				<div id="contenedor">
					<div class="reloj" id="horas" >00</div>
					<div class="reloj" id="minutos">:00</div>
					<div class="reloj" id="segundos">:00</div>
				</div>
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading" style="font-size: 16px">Achou algo errado?</div>
			<div class="panel-body">
				<a href="#" style="margin-bottom: 15px" class="btn btn-danger botao" role="button">Denunciar</a>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading" style="font-size: 16px">Avalie essa questão</div>
			<div class="panel-body">
				<div class="estrelas ">
					<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
					<label for="cm_star-1"><i class="fa"></i></label>
					<input type="radio" id="cm_star-1" name="fb" value="1"/>
					<label for="cm_star-2"><i class="fa"></i></label>
					<input type="radio" id="cm_star-2" name="fb" value="2"/>
					<label for="cm_star-3"><i class="fa"></i></label>
					<input type="radio" id="cm_star-3" name="fb" value="3"/>
					<label for="cm_star-4"><i class="fa"></i></label>
					<input type="radio" id="cm_star-4" name="fb" value="4"/>
					<label for="cm_star-5"><i class="fa"></i></label>
					<input type="radio" id="cm_star-5" name="fb" value="5"/>
				</div>
			</div>
		</div>
		<a href="#" role="button" style="margin-bottom: 15px" class="btn btn-success botaoFinaliza">Finalizar prova</a>


	</aside>
	<footer>

	</footer>

</body>
</html>
