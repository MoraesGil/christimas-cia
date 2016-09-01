<div class="page">
<div class="art"><img src="images/art_pages"></div>
<?php
	$pagina = strip_tags($_GET['p']);
	if($pagina == 'empresa'): ?>
	  	<div class="container">
            <ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Qualidade">Qualidade</a></li>
            </ul>


            <div class="page-content" id="place">
            	<h2 class="title-art">Missão e Visão</h2>
            	<?php
					$pageIn = mysql_query("select pagina, conteudo from tb_pages where pagina = 'missao'") or die(mysql_error());
					if(mysql_num_rows($pageIn)<=0):
						echo '<h3>Nenhum conteúdo registrado</h3>';
					else:
						$ln = mysql_fetch_assoc($pageIn);
					endif;
					echo $ln['conteudo'];
				?>
            </div>
        </div>

		<?php elseif($pagina == 'diferenciais'): ?>
    <div class="container">
		   <ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Qualidade">Qualidade</a></li>
            </ul>

			<div class="page-content" id="place">
            	<h2 class="title-art">Diferenciais</h2>
            	<?php
					$pageIn = mysql_query("select pagina, conteudo from tb_pages where pagina = 'diferenciais'") or die(mysql_error());
					if(mysql_num_rows($pageIn)<=0):
						echo '<h3>Nenhum conteúdo registrado</h3>';
					else:
						$ln = mysql_fetch_assoc($pageIn);
					endif;
					echo $ln['conteudo'];
				?>
            </div>
    </div>
           <!-- <ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Qualidade">Qualidade</a></li>
            </ul>-->

		<?php elseif($pagina == 'historia'): ?>
    <div class="container">
        <ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Qualidade">Qualidade</a></li>
            </ul>

        <div class="page-content" id="place">
            	<h2 class="title-art">História</h2>
            	<?php
					$pageIn = mysql_query("select pagina, conteudo from tb_pages where pagina = 'historia'") or die(mysql_error());
					if(mysql_num_rows($pageIn)<=0):
						echo '<h3>Nenhum conteúdo registrado</h3>';
					else:
						$ln = mysql_fetch_assoc($pageIn);
					endif;
					echo $ln['conteudo'];
				?>

            </div>
    </div>
           <!-- <ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Qualidade">Qualidade</a></li>
            </ul>-->

       <?php elseif($pagina == 'qualidade'): ?>
    <div class="container">
        <ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Qualidade">Qualidade</a></li>
            </ul>

        <div class="page-content" id="place">
            	<h2 class="title-art">Qualidade</h2>

                <?php
					$pageIn = mysql_query("select pagina, conteudo from tb_pages where pagina = 'qualidade'") or die(mysql_error());
					if(mysql_num_rows($pageIn)<=0):
						echo '<h3>Nenhum conteúdo registrado</h3>';
					else:
						$ln = mysql_fetch_assoc($pageIn);
					endif;
					echo $ln['conteudo'];
				?>

            </div>
    </div>
            <!--<ul id="menu-institucional" class="container">
            	<li><a href="?p=historia" title="História">História</a></li>
               <li><a href="?p=empresa" title="Missão e Valores">Missão e Valores</a></li>
               <li><a href="?p=diferenciais" title="Diferenciais">Diferenciais</a></li>
               <li><a href="?p=qualidade" title="Missão e Valores">Qualidade</a></li>
            </ul>-->
       <?php elseif($pagina == 'contato'): ?>
       		<div class="page-download" id="place">
            <div class="banner_contato">
                <img src="images/banner_web_contato.jpg" alt="">
            </div>
                <div class="container">
                    <h3>Entre em contato</h3>
                    <div class="separador2"></div>
                    <form name="contato" method="post" action="">

                <?php
					if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar Mensagem'):
                	$nome				= addslashes($_POST['nomecompleto']);
					$ddd				= addslashes($_POST['ddd']);
					$telefone			= addslashes($_POST['telefone']);
					$email 				= addslashes($_POST['email']);
					$endereco			= addslashes($_POST['endereco']);
					$estado				= addslashes($_POST['estado']);
					$cidade				= addslashes($_POST['cidade']);
					$assunto			= 'Fale conosco';
					$mensagem			= addslashes($_POST['mensagem']);
					$dataenvio			= date('Y-m-d H:i:s');
					$emaildestinatario  = 'kenia.loisa@vivattiinc.com.br, p.bagnoli@vivattiincorporadora.com.br, glauce.santos@agenciaativa.com.br, mariana.moura@agenciaativa.com.br, marcelo@agenciaativa.com.br';
					$dataenvio			= date('Y-m-d H:i:s');

					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						echo '<div class="error" style="display:block;">Preencha com um email válido!</div>';
					}else{
						/* Montando a mensagem a ser enviada no corpo do e-mail. */
						$mensagemHTML = '<p>Fale Conosco: '.$assunto.' | Site: <strong>www.vivattiincorporadora.com.br</strong></p>
						<p><b>Nome:</b> '.$nome.'
						<p><b>Telefone:</b> ('.$ddd.') - '.$telefone.'
						<p><b>E-Mail:</b> '.$email.'
						<p><b>Endereço:</b> '.$endereco.'
						<p><b>Estado:</b> '.$estado.'
						<p><b>Cidade:</b> '.$cidade.'
						<p><b>Assunto:</b> '.$assunto.'
						<p><b>Mensagem:</b> '.$mensagem.'</p>
						<p><b>Mensagem:</b> '.date('d/m/Y H:i:s').'</p>
						<hr>';

						$headers = "MIME-Version: 1.1\r\n";
						$headers .= "Content-type: text/html; charset=utf-8\r\n";
						$headers .= "From: $nome<$email>\r\n"; // remetente
						$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
						$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

						$cadastra = mysql_query ("insert into tb_contato (nome, ddd, telefone, email, endereco, estado, cidade, mensagem, dataenvio) values ('$nome', '$ddd', '$telefone', '$email', '$endereco', '$estado', '$cidade', '$mensagem', '$dataenvio')") or die(mysql_error());

					if($envio)
						echo '<div class="success" style="display:block;">Sua mensagem foi enviada com sucesso</div>';
					else
						echo '<div class="error" style="display:block;">Erro ao enviar mensagem, tente novamente</div>';
					}
					endif;
				?>

                <div class="line">
                	 <label for="nomecompleto" id="labelcomplemento"> Nome completo:
                    <input type="text" name="nomecompleto" required>
                  </label>

                  <label for="ddd" id="labelddd"> DDD:
                    <input type="text" name="ddd" required>
                  </label>

                  <label for="fone" id="labelfone"> Telefone:
                    <input type="text" name="telefone" required>
                  </label>

                  <label for="email" id="labelemail"> E-mail:
                    <input type="text" name="email" required>
                  </label>
                  </div>
                  <label for="endereco" id="labelendereco"> Endereço:
                    <input type="text" name="endereco" required>
                  </label>

                  <label for="estado" id="labelestado"> Estado:
                    <select name="estado" id="estados" required>
                    </select>
                  </label>

                  <label for="cidade" id="labelcidade"> Cidade:
                    <select name="cidade" id="cidades" required>
                    		<option value="">Selecione</option>
                    </select>
                  </label>

                  <label for="proposta" id="labelproposta"> Mensagem
                    <textarea name="mensagem" required rows="4"></textarea>
                  </label>
                  <input type="submit" name="enviar" value="Enviar Mensagem">
                </form>
                </div>

           </div>
           <hr>

       <?php elseif($pagina == 'parceria-terreno'): ?>
       <style>.art{display:none;}</style>
    <div class="container">
       		<div class="page-content" id="place">
           	<h4>Negocie seu terreno</h4>
            	<p>A Vivatti está permanentemente em busca de novas áreas para aquisição e de novas oportunidades de negócios. Se você é proprietário de um terreno e deseja negociá-lo, ou se é um corretor e deseja nos oferecer uma área, por favor, preencha o cadastro abaixo e entraremos em contato.</p>
                <form name="contato" method="post" action="">

                <?php
					if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar Proposta'):
                	$cargo				= addslashes($_POST['cargo']);
					$empresa			= addslashes($_POST['empresa']);
					$nome				= addslashes($_POST['nomecomplemento']);
					$ddd				= addslashes($_POST['ddd']);
					$telefone			= addslashes($_POST['telefone']);
					$email 				= addslashes($_POST['email']);
					$endereco			= addslashes($_POST['endereco-complemento']);
					$estado				= addslashes($_POST['estado']);
					$cidade				= addslashes($_POST['cidade']);
					$iptu				= addslashes($_POST['iptu']);
					$terreno			= addslashes($_POST['terreno']);
					$preco				= addslashes($_POST['preco']);
					$assunto			= 'Negocie seu terreno';
					$proposta			= addslashes($_POST['proposta']);
					$dataenvio			= date('Y-m-d H:i:s');
					$emaildestinatario  = 'kenia.loisa@vivattiinc.com.br, p.bagnoli@vivattiincorporadora.com.br';
					$dataenvio			= date('Y-m-d H:i:s');

					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						echo '<div class="error" style="display:block;">Preencha com um email válido!</div>';
					}else{
						/* Montando a mensagem a ser enviada no corpo do e-mail. */
						$mensagemHTML = '<p>Fale Conosco: '.$assunto.' | Site: <strong>www.vivattiincorporadora.com.br</strong></p>
						<p><b>Nome:</b> '.$nome.'
						<p><b>Telefone:</b> ('.$ddd.') - '.$telefone.'
						<p><b>E-Mail:</b> '.$email.'
						<p><b>Endereço:</b> '.$endereco.'
						<p><b>Estado:</b> '.$estado.'
						<p><b>Cidade:</b> '.$cidade.'
						<p><b>Nº IPTU:</b> '.$iptu.'
						<p><b>Área Terreno:</b> '.$terreno.'
						<p><b>Preço:</b> '.$preco.'
						<p><b>Assunto:</b> '.$assunto.'
						<p><b>Mensagem:</b> '.$mensagem.'</p>
						<p><b>Mensagem:</b> '.date('d/m/Y H:i:s').'</p>
						<hr>';

						$headers = "MIME-Version: 1.1\r\n";
						$headers .= "Content-type: text/html; charset=utf-8\r\n";
						$headers .= "From: $cargo<$email>\r\n"; // remetente
						$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
						$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

						$cadastra = mysql_query ("insert into tb_terrenos (cargo, empresa, nome, ddd, telefone, email, endereco, estado, cidade, iptu, areaterreno, preco, proposta, dataenvio) values ('$cargo', '$empresa', '$nome', '$ddd', '$telefone', '$email', '$endereco', '$estado', '$cidade', '$iptu', '$terreno', '$preco', '$proposta', '$dataenvio')") or die(mysql_error());

					if($envio)
						echo '<div class="success" style="display:block;">Sua mensagem foi enviada com sucesso</div>';
					else
						echo '<div class="error" style="display:block;">Erro ao enviar mensagem, tente novamente</div>';
					}
					endif;
				?>


                <div class="line">
                	<label for="cargo" id="labelcargo">Você é:
                    <input type="radio" name="cargo" value="Proprietário" checked> Proprietário
                    <input type="radio" name="cargo" value="Corretor"> Corretor
                  </label>

                  <label for="empresa" id="labelempresa"> Empresa:
                    <input type="text" name="empresa" required>
                  </label>

                  <label for="nomecomplemento" id="labelcomplemento"> Nome complemento:
                    <input type="text" name="nomecomplemento" required>
                  </label>

                  <label for="ddd" id="labelddd"> DDD:
                    <input type="text" name="ddd" required>
                  </label>

                  <label for="fone" id="labelfone"> Telefone:
                    <input type="text" name="telefone" required>
                  </label>

                  <label for="email" id="labelemail"> E-mail:
                    <input type="text" name="email" required>
                  </label>
                  </div>
                  <label for="endereco-complemento" id="labelendereco"> Endereço complemento (TERRENO):
                    <input type="text" name="endereco-complemento" required>
                  </label>

                  <label for="estado" id="labelestado"> Estado:
                    <select name="estado" id="estados" required>
                    </select>
                  </label>

                  <label for="cidade" id="labelcidade"> Cidade:
                    <select name="cidade" id="cidades" required>
                    </select>
                  </label>

                  <label for="iptu" id="labeliptu"> Nº IPTU:
                    <input type="text" name="iptu" required>
                  </label>

                  <label for="terreno" id="labelterreno"> Área do Terreno:
                    <input type="text" name="terreno" required>
                  </label>

                  <label for="preco" id="labelpreco"> Preço
                    <input type="text" name="preco" required>
                  </label>

                  <label for="proposta" id="labelproposta"> Proposta
                    <textarea name="proposta" required rows="4"></textarea>
                  </label>
                  <input type="submit" name="enviar" value="Enviar Proposta">
                </form>
           </div>
    </div>
           <?php elseif($pagina == 'trabalhe-conosco'): ?>
       <style>.art{display:none;}</style>
    <div class="container">
       		<div class="page-content" id="place">
           	<h4>Trabalhe Conosco</h4>
            	<p>A Vivatti quer os melhores no seu time, será você um deles? Inscreva-se.</p>
                <form name="contato" method="post" action="" enctype="multipart/form-data">

                 <?php
				if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar Curriculum'){

					$nome				= addslashes($_POST['nomecompleto']);
					$ddd				= addslashes($_POST['ddd']);
					$telefone			= addslashes($_POST['telefone']);
					$email 				= addslashes($_POST['email']);
					$endereco			= addslashes($_POST['endereco']);
					$estado				= addslashes($_POST['estado']);
					$cidade				= addslashes($_POST['cidade']);
					$assunto			= 'Trabalhe conosco';
					$proposta			= addslashes($_POST['proposta']);
					$dataenvio			= date('Y-m-d H:i:s');

					$anexado = $_FILES['arquivo']['name'];
					@$extensao = strtolower(end(explode('.', $anexado)));
					$extensoes = array ('docx', 'doc', 'pdf'); // AKI VC PODE COLOCAR AS EXTENÇÕES QUE VC AEITARA NO UPLOAD
					$size = $_FILES['arquivo']['size'];
					$maxsize = 1024 * 1024 * 3; // AKI VC ESPECIFICA O TAMANHO DE ARQUIVOS ACEITOS, LEMBRANDO QUE A CONFIGURAÇÃO É LIVE

					if(empty($arquivo)): else:
					if(array_search($extensao, $extensoes) === false){
					 $retorno = '<div class="error" style="display:block;">Arquivo inválido!</div>';
					}elseif($size >= $maxsize){
					 $retorno = '<div class="error" style="display:block;">Arquivo só é permitido com menos de 3mb!</div>';
					} endif;
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
						 $retorno = '<div class="error" style="display:block;">Informe um email válido!</div>';
					}if (empty($retorno)) {

					//<input type="hidden" name="enviar" value="send" />

						$date = date("d/m/Y h:i");

						// ****** ATENÇÃO ********
						// ABAIXO ESTÁ A CONFIGURAÇÃO DO SEU FORMULÁRIO.
						// ****** ATENÇÃO ********

						//CABEÇALHO - ONFIGURAÇÕES SOBRE SEUS DADOS E SEU WEBSITE

						$destino = $_POST['destino'];

						$nome_do_site="Incorporadora Vivatti";
						$email_para_onde_vai_a_mensagem = "kenia.loisa@vivattiinc.com.br"; /*'administrativo@mampeifunada.com.br, comercial@mampeifunada.com.br, renato@funada.com.br'*/;
						$nome_de_quem_recebe_a_mensagem = $assunto;
						$exibir_apos_enviar='';

						//MAIS - CONFIGURAÇOES DA MENSAGEM ORIGINAL
						$cabecalho_da_mensagem_original="From: $email\n";
						$assunto_da_mensagem_original="$assunto";

						// FORMA COMO RECEBERÁ O E-MAIL (FORMULÁRIO)
						// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIÁVEL ABAIXO *************
						$configuracao_da_mensagem_original="

						<strong>ENVIADO POR:</strong><br /><br />
						<strong>Nome:</strong> $nome<br /><br />
						<strong>E-mail:</strong> $email<br /><br />
						<strong>Telefone:</strong> .'('.$ddd.') '.$telefone<br /><br />
						<strong>Endereço:</strong> $endereco<br /><br />
						<strong>Cidade:</strong> $cidade<br /><br />
						<strong>Estado:</strong> $estado<br /><br />
						<strong>Assunto:</strong> $assunto<br /><br />
						<strong>Mensagem:</strong> $proposta<br /><br /><br /><br /><br /><br /><br />

						ENVIADO EM: $date";

						//CONFIGURAÇÕES DA MENSAGEM DE RESPOSTA
						// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
						// "Re: $assunto"
						$assunto_da_mensagem_de_resposta = "Recebemos sua mensagem";
						$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
						$configuracao_da_mensagem_de_resposta="

						Obrigado por entrar em contato!<br />
						Estaremos respondendo em breve...<br />
						<strong>Atenciosamente $nome_do_site</strong><br /><br />
						Enviado em: $date";

						// ****** IMPORTANTE ********
						// A PARTIR DE AGORA RECOMENDA-SE QUE NÃO ALTERE O SCRIPT PARA QUE O  SISTEMA FINCIONE CORRETAMENTE
						// ****** IMPORTANTE ********

						//ESSA VARIAVEL DEFINE SE É O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO
						//POR VOCÊ CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME
						//'assunto' NO FORMULARIO DE ENVIO
						$assunto_digitado_pelo_usuario="s";

						//ENVIO DA MENSAGEM ORIGINAL

						$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;

						if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){

					 	 $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
						 $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
						 move_uploaded_file($_FILES["arquivo"]["tmp_name"], 'uploads/'.$arquivo["name"]);
						 $anexo = base64_encode($anexo);

						 fclose($fp);

						 $anexo = chunk_split($anexo);

						 $boundary = "XYZ-" . date("dmYis") . "-ZYX";

						 $mens = "--$boundary\n";
						 $mens .= "Content-Transfer-Encoding: 8bits\n";
						 $mens .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
						 $mens .= "$configuracao_da_mensagem_original\n";
					 	 $mens .= "--$boundary\n";
						 $mens .= "Content-Type: ".$arquivo["type"]."\n";
					 	 $mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
					 	 $mens .= "Content-Transfer-Encoding: base64\n\n";
						 $mens .= "$anexo\n";
						 $mens .= "--$boundary--\r\n";

						 $headers  = "MIME-Version: 1.0\n";
						 $headers .= "$cabecalho_da_mensagem_original";
						 $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
						 $headers .= "$boundary\n";
						 }else{

						 $mens = "$configuracao_da_mensagem_original\n";

						$headers  = "MIME-Version: 1.0\n";
						$headers .= "$cabecalho_da_mensagem_original";
						$headers .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
						}

						if ($assunto_digitado_pelo_usuario=="s")
						{
						$assunto = "$assunto_da_mensagem_original";
						};
						$seuemail = "$email_para_onde_vai_a_mensagem";
						$cadastra = mysql_query ("insert into tb_trabalho (anexo, nome, ddd, telefone, email, endereco, estado, cidade, mensagem, dataenvio) values ('".$arquivo['name']."', '$nome', '$ddd', '$telefone', '$email', '$endereco', '$estado', '$cidade', '$proposta', '$dataenvio')") or die(mysql_error());
						mail($seuemail,$assunto,$mens,$headers);

						//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA

						$headers = "$cabecalho_da_mensagem_de_resposta";
						$headers .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";

						if ($assunto_digitado_pelo_usuario=="s")
						{
						$assunto = "$assunto_da_mensagem_de_resposta";
						}
						else
						{
						$assunto = "Re: $assunto";
						};
						$mensagem = "$configuracao_da_mensagem_de_resposta";
						mail($email,$assunto,$mensagem,$headers);

						/*echo "<script>window.location='$exibir_apos_enviar'</script>";*/
						echo '<div class="success" style="display:block;">Mensagem enviada com sucesso</div>';
						unset($nome, $email, $assunto, $mensagem);
						} else {
						 echo "$retorno";
					 }
				}
			?>
                <div class="line">
                	<label for="arquivo" id="labelddd"> Anexar curriculum:
                    <input type="file" name="arquivo" required>
                  </label>

                  <label for="nomecompleto" id="labelcomplemento"> Nome completo:
                    <input type="text" name="nomecompleto" required>
                  </label>

                  <label for="ddd" id="labelddd"> DDD:
                    <input type="text" name="ddd" maxlength="3" required>
                  </label>

                  <label for="fone" id="labelfone"> Telefone:
                    <input type="text" name="telefone" required>
                  </label>

                  <label for="email" id="labelemail"> E-mail:
                    <input type="text" name="email" required>
                  </label>
                  </div>
                  <label for="endereco" id="labelendereco"> Endereço:
                    <input type="text" name="endereco" required>
                  </label>

                  <label for="estado" id="labelestado"> Estado:
                    <select name="estado" id="estados" required>
                    </select>
                  </label>

                  <label for="cidade" id="labelcidade"> Cidade:
                   	<select name="cidade" id="cidades" required>
                    </select>
                  </label>

                  <label for="proposta" id="labelproposta"> A Vivatti (Descreva o que você conhece à respeito de nossa empresa)
                    <textarea name="proposta" required rows="4"></textarea>
                  </label>
                  <input type="submit" name="enviar" value="Enviar Curriculum">
                </form>
           </div>
    </div>
       <?php elseif($pagina == 'fale-conosco'): ?>
       <style>.art{display:none;}</style>

       <div class="container">
       		<div class="page-content">
           	<h4>Fale Conosco</h4>
            	<p>Qualquer dúvida, sugestão ou informação, a Vivatti está sempre a disposição.</p>
                <form name="contato" method="post" action="">

                <?php
					if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar Mensagem'):
                	$nome				= addslashes($_POST['nomecompleto']);
					$ddd				= addslashes($_POST['ddd']);
					$telefone			= addslashes($_POST['telefone']);
					$email 				= addslashes($_POST['email']);
					$endereco			= addslashes($_POST['endereco']);
					$estado				= addslashes($_POST['estado']);
					$cidade				= addslashes($_POST['cidade']);
					$assunto			= 'Fale conosco';
					$mensagem			= addslashes($_POST['mensagem']);
					$dataenvio			= date('Y-m-d H:i:s');
					$emaildestinatario  = 'kenia.loisa@vivattiinc.com.br, p.bagnoli@vivattiincorporadora.com.br, glauce.santos@agenciaativa.com.br, mariana.moura@agenciaativa.com.br, marcelo@agenciaativa.com.br';
					$dataenvio			= date('Y-m-d H:i:s');

					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						echo '<div class="error" style="display:block;">Preencha com um email válido!</div>';
					}else{
						/* Montando a mensagem a ser enviada no corpo do e-mail. */
						$mensagemHTML = '<p>Fale Conosco: '.$assunto.' | Site: <strong>www.vivattiincorporadora.com.br</strong></p>
						<p><b>Nome:</b> '.$nome.'
						<p><b>Telefone:</b> ('.$ddd.') - '.$telefone.'
						<p><b>E-Mail:</b> '.$email.'
						<p><b>Endereço:</b> '.$endereco.'
						<p><b>Estado:</b> '.$estado.'
						<p><b>Cidade:</b> '.$cidade.'
						<p><b>Assunto:</b> '.$assunto.'
						<p><b>Mensagem:</b> '.$mensagem.'</p>
						<p><b>Mensagem:</b> '.date('d/m/Y H:i:s').'</p>
						<hr>';

						$headers = "MIME-Version: 1.1\r\n";
						$headers .= "Content-type: text/html; charset=utf-8\r\n";
						$headers .= "From: $nome<$email>\r\n"; // remetente
						$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
						$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

						$cadastra = mysql_query ("insert into tb_contato (nome, ddd, telefone, email, endereco, estado, cidade, mensagem, dataenvio) values ('$nome', '$ddd', '$telefone', '$email', '$endereco', '$estado', '$cidade', '$mensagem', '$dataenvio')") or die(mysql_error());

					if($envio)
						echo '<div class="success" style="display:block;">Sua mensagem foi enviada com sucesso</div>';
					else
						echo '<div class="error" style="display:block;">Erro ao enviar mensagem, tente novamente</div>';
					}
					endif;
				?>

                <div class="line">
                	 <label for="nomecompleto" id="labelcomplemento"> Nome completo:
                    <input type="text" name="nomecompleto" required>
                  </label>

                  <label for="ddd" id="labelddd"> DDD:
                    <input type="text" name="ddd" required>
                  </label>

                  <label for="fone" id="labelfone"> Telefone:
                    <input type="text" name="telefone" required>
                  </label>

                  <label for="email" id="labelemail"> E-mail:
                    <input type="text" name="email" required>
                  </label>
                  </div>
                  <label for="endereco" id="labelendereco"> Endereço:
                    <input type="text" name="endereco" required>
                  </label>

                  <label for="estado" id="labelestado"> Estado:
                    <select name="estado" id="estados" required>
                    </select>
                  </label>

                  <label for="cidade" id="labelcidade"> Cidade:
                    <select name="cidade" id="cidades" required>
                    		<option value="">Selecione</option>
                    </select>
                  </label>

                  <label for="proposta" id="labelproposta"> Mensagem
                    <textarea name="mensagem" required rows="4"></textarea>
                  </label>
                  <input type="submit" name="enviar" value="Enviar Mensagem">
                </form>
           </div>
        </div>
       <?php elseif($pagina == 'empreendimentos'): ?>
       <style>.art{display:none;}</style>
       <?php
	   		$codigo = $_GET['id'];
	   		if(empty($codigo)):
		?>
		<div class="container">
		<div class="empreendimentos content">
            <h2>Empreendimentos</h2>
            <ul id="filtro">
                <li><a href="?p=empreendimentos&etapa=brevelancamento" title="Breve Lançamento">Breve Lançamento</a></li>
                <li><a href="?p=empreendimentos&etapa=lancamento" title="Lançamento">Lançamento</a></li>
                <li><a href="?p=empreendimentos&etapa=entregue" title="Entregue">Entregue</a></li>
                <li><a href="?p=empreendimentos&etapa=construcao" title="Construção">Construção</a></li>
            </ul>
            <ul class="emp-item">
            	<?php
				$pag = $_GET['pag'];
				if($pag >= 1): $pag = $pag; else: $pag = 1;	endif;
				$maximo = 6; //RESULTADOS POR PÁGINA
				$inicio = ($pag * $maximo) - $maximo;

				if(isset($_GET['etapa']) && $_GET['etapa'] != ''):
					$pesquisa = $_GET['etapa'];

					$empreendimento = mysql_query("select id, banner, imagem, nome, cidade from tb_empreendimentos where conclusao = '$pesquisa' order by id desc") or die(mysql_error());
				else:
					$empreendimento = mysql_query("select id, banner, imagem, nome, cidade from tb_empreendimentos order by id desc LIMIT $inicio, $maximo") or die(mysql_error());
				endif;

				if(mysql_num_rows($empreendimento)<=0):
					echo
				'<p>Nenhum registro encontrado</p>';
				else:
				while($ln=mysql_fetch_assoc($empreendimento)):
			 ?>
            	<li><a href="?p=empreendimentos&id=<?=$ln['id'];?>" title=""><div class="crop"><img src="<?=$base;?>/tim.php?src=uploads/<?=$ln['imagem'];?>&w=500&h=500&q=100&c=1"></div><div class="mask"><span><?=$ln['cidade'];?></span> <p><?=$ln['nome'];?></p></div></a></li>
            <?php endwhile; endif; ?>
               <div class="clearfix"></div>
            </ul>

            <?php
				if(!isset($_GET['etapa']) && $_GET['etapa'] == ''):
			  ?>

        <nav>
              <ul class="pagination">
              <?php
				  //USE A MESMA SQL QUE QUE USOU PARA RECUPERAR OS RESULTADOS
					//SE TIVER A PROPRIEDADE WHERE USE A MESMA TAMBÉM
					$sql_res = mysql_query("select * from tb_empreendimentos order by id desc");

					$total = mysql_num_rows($sql_res);

					$paginas = ceil($total/$maximo);
					$links = '5'; //QUANTIDADE DE LINKS NO PAGINATOR

					echo '<li><a href="?p=empreendimentos" aria-label="Previous"><span aria-hidden="true">&laquo; Primeira</span></a></li>';
					for ($i = $pag-$links; $i <= $pag-1; $i++){
					if ($i <= 0){
					}else{
					echo"<li><a href=\"?p=empreendimentos&pag=$i\">$i</a></li>";
						}
					};
					echo"<li><a href=\"?p=empreendimentos&pag=$i\">$i</a></li>";
					for($i = $pag +1; $i <= $pag+$links; $i++){
					if($i > $paginas){
					}else{
					echo"<li><a href=\"?p=empreendimentos&pag=$i\">$i</a></li>";
						}
					}
					echo '<li><a href="?p=empreendimentos&pag='.$paginas.'" aria-label="Next"><span aria-hidden="true">&raquo; Última</span></a></li>';
               ?>

              </ul>
            </nav>



             <?php else: ?>
		<nav>
              <ul class="pagination">
              <?php
				  //USE A MESMA SQL QUE QUE USOU PARA RECUPERAR OS RESULTADOS
					//SE TIVER A PROPRIEDADE WHERE USE A MESMA TAMBÉM
					$sql_res = mysql_query("select * from tb_empreendimentos where conclusao = '".$_GET['etapa']."' order by id desc");

					$total = mysql_num_rows($sql_res);

					$paginas = ceil($total/$maximo);
					$links = '5'; //QUANTIDADE DE LINKS NO PAGINATOR

					echo '<li><a href="?d=empreendimentos&etapa='.$_GET['etapa'].'&pag=1" aria-label="Previous"><span aria-hidden="true">&laquo; Primeira</span></a></li>';
					for ($i = $pag-$links; $i <= $pag-1; $i++){
					if ($i <= 0){
					}else{
					echo"<li><a href=\"?d=empreendimentos&etapa=".$_GET['etapa']."&pag=$i\">$i</a></li>";
						}
					};
					echo"<li><a href=\"?d=empreendimentos&etapa=".$_GET['etapa']."&pag=$i\">$i</a></li>";
					for($i = $pag +1; $i <= $pag+$links; $i++){
					if($i > $paginas){
					}else{
					echo"<li><a href=\"?d=empreendimentos&etapa=".$_GET['etapa']."&pag=$i\">$i</a></li>";
						}
					}
					echo '<li><a href="?d=empreendimentos&etapa='.$_GET['etapa'].'&pag='.$paginas.'" aria-label="Next"><span aria-hidden="true">&raquo; Última</span></a></li>';
               ?>

              </ul>
            </nav>
    <?php endif; ?>
        </div>
    </div>
		<?php
			else:
	   ?>
    <?php
				$id = $_GET['id'];
				$searchemp = mysql_query("select * from tb_empreendimentos where id = '$id' order by id desc");
				if(mysql_num_rows($searchemp)<=0):
					echo '<script>window.location.href="index.php";</script>';
				else:
				$linha = mysql_fetch_assoc($searchemp);
				endif;
			 ?>
    <div class="staticBanner">
            <img src="images/<?php echo $linha['banner']; ?>" alt="<?php echo $linha['nome']; ?>" title="<?php echo $linha['nome']; ?>">
    </div>
    <div class="container">
       <div class="page-content space">



          <h1><?=$linha['nome'];?></h1>


            <span class="select-emp">Meus empreendimentos:
            <select name="empreendimento" class="opt">
            	<option value="">Selecione</option>
				<?php
					$sql_emp = mysql_query("select * from tb_empreendimentos order by id desc");
					while($res = mysql_fetch_assoc($sql_emp)):
				?>
                <option value="<?=$res['id'];?>"><?=$res['nome'];?></option>
              <?php endwhile; ?>
            </select>
            </span>
           <br/><br/>
           <h5>Galeria</h5>
           <div class="separador2"></div>
           <ul class="gallery-fixed">
                <?php
                    $id   = $_GET['id'];
                    $queryImage = mysql_query("select id, imagem, etapa from tb_gallery where empreendimento = '$id' and etapa != 'plantas'") or die(mysql_error());

                    if(mysql_num_rows($queryImage)<=0):
                        echo '<p>Nenhuma imagem encontrada</p>';
                    else:
                    while($res=mysql_fetch_assoc($queryImage)):
                ?>
                <li><a href="<?=$base;?>/uploads/<?=$res['imagem']?>" rel="shadowbox[vivatti]" title="<?=$linha['nome'];?>"><img src="<?=$base;?>/tim.php?src=uploads/<?=$res['imagem']?>&w=900&h=470&q=100" alt="<?=$linha['nome'];?>" title="<?=$linha['nome'];?>"></a></li>

				   <?php endwhile; endif; ?>
                <div class="clearfix"></div>
               </ul>
        <div class="clearfix"></div>
           <h5>Vídeos</h5>
                <div class="separador2"></div>

                <p>

                <?php
                        if(empty($linha['linkvideo'])): echo 'Nenhum vídeo disponível'; else:

                        $link = $linha['linkvideo'];
                        $aux = explode('=', $link);
                        $img = $aux[1];

                 ?>
                        <a href="https://www.youtube.com/embed/<?php echo $aux[1]; ?>" rel="shadowbox;width=520;height=340"><img src="http://i1.ytimg.com/vi/<?=$img;?>/default.jpg" width="200"></a>
                    </p>
                 <?php endif;?>
                </p>
        <div class="clearfix"></div>
            <div class="projeto">
            	<h5>Ficha Técnica</h5>
                <div class="separador2"></div>
               <div class="row">
                <div class="coluna-6">
               <div class="info-emp">
               	<table class="table" id="display">
                		<tr>
                     		<td>
                         		<p><?=$linha['nome'];?>
                             	<strong><?=$linha['endereco'];?></strong></p>
                         	</td>

                     		<td>
                         		<p>Quantidade:
                                 <strong><?=$linha['qtdcasas'];?></strong></p>
                        	 </td>

                         	<td>
                         		<p>Tipo:
                         	    <strong><?=$linha['tipocasa'];?></strong></p>
                       		</td>

                     		<td>
                         		<p>Projeto Arquitetônico
                            	 <strong><?=$linha['projarquitetonico'];?></strong></p>
                         	</td>

                    		<td>
                         		<p>Projeto de Decoração
                             	<strong><?=$linha['projdecoracao'];?></strong></p>
                         	</td>

                    		<td>
                         		<p>Área do Terreno
                             	<strong><?=$linha['areaterreno'];?></strong></p>
                         	</td>
                     		</tr>

                            <tr>
                            </tr>

                	</table>

               </div>
            </div>
            <div class="coluna-6">
               <div class="comodidade">
               	<h2>Comodidade</h2>
                	<p><?=$linha['comodidade'];?> </p>

                 <h2>Área de Lazer</h2>
               		<p><?=$linha['arealazer'];?></p>
                    <h2>Segurança</h2>
               <p><?=$linha['seguranca'];?></p>

                <div class="icone-planta">
                    <?php
	   		$id   = $_GET['id'];
			$queryImage = mysql_query("select * from tb_gallery where empreendimento = '$id' and etapa = 'plantas' limit 1") or die(mysql_error());

			if(mysql_num_rows($queryImage)<=0):
				echo '<p>Nenhuma imagem encontrada</p>';
			else:
			while($res=mysql_fetch_assoc($queryImage)):
		?>

<a href="<?=$base;?>/uploads/<?=$res['imagem']?>" rel="shadowbox[vivatti2]" rel="shadowbox[vivatti2]">
                    <img src="images/ico_planta.png" alt="">
                        </a>
            <?php endwhile; endif; ?>



                     <?php
	   		$id   = $_GET['id'];
			$queryImage = mysql_query("select * from tb_gallery where empreendimento = '$id' and etapa = 'plantas'") or die(mysql_error());

			if(mysql_num_rows($queryImage)<=0):
				echo '<p>Nenhuma imagem encontrada</p>';
			else:
			while($res=mysql_fetch_assoc($queryImage)):
		?>

<a href="<?=$base;?>/uploads/<?=$res['imagem']?>" rel="shadowbox[vivatti2]">
			<img class="imagem_su" src="<?=$base;?>/tim.php?src=uploads/<?=$res['imagem']?>&w=93&h=65&q=100&c=1" alt="<?=$linha['nome'];?>" title="<?=$linha['nome'];?>">
                    </a>
            <?php endwhile; endif; ?>

                </div>
                   <div class="icone-book">
                       <?php
                $pageIn = mysql_query("select d.id, e.id, d.arquivo, d.empreendimento, d.descricao, e.nome from tb_downloads d inner join tb_empreendimentos e on e.id = d.empreendimento limit 1") or die(mysql_error());
                if(mysql_num_rows($pageIn)<=0):
                    echo '<h3>Nenhum conteúdo registrado</h3>';
                else:
                    while($ln=mysql_fetch_assoc($pageIn)):
            ?>

            <?php
                if(empty($ln['arquivo'])):
                    $link = '#';
                else:
                    $link = $ln['arquivo'];
                endif;
            ?>
            <?php if ($link != '#'): ?>
              <a href="uploads/<?=$link;?>" title="<?=$ln['nome']?>" target="_blank"><img src="images/ico_folder.png" alt=""></a>
            <?php endif; ?>


            <?php
                    endwhile;
                endif;
            ?>

                </div>

               </div>
               </div>
               <?php
			   	if($linha['unidadeab'] == 0 && $linha['unidadec'] == 0 && $linha['unidaded'] == 0):
				else:
			   ?>
            	<h2>Produto Imobiliário</h2>
               <table class="table">
               	<tr>
                	  <td bgcolor="#f2f5f2" style="padding:10px !important; color:#333;">Tipo</td>
                      <td bgcolor="#f2f5f2" align="center" style="padding:10px !important; color:#333;">Unidades</td>
                      <td bgcolor="#f2f5f2" align="center" style="padding:10px !important; color:#333;">Área Privativa</td>
                      <td bgcolor="#f2f5f2" align="center" style="padding:10px !important; color:#333;">Descrição</td>
                      <td bgcolor="#f2f5f2" align="center" style="padding:10px !important; color:#333;">Vagas</td>
                	</tr>

                  <tr>
                	  <td bgcolor="#fbfbfb" style="padding:10px !important; color:#333;">Casa tipo A e B</td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['unidadeab'];?></td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['areaprivativaab'];?></td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['descricaoab'];?></td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['vagasab'];?></td>
                	</tr>

                  <tr>
                	  <td bgcolor="#f1f1f1" style="padding:10px !important; color:#333;">Casa tipo C</td>
                      <td bgcolor="#f1f1f1" align="center" style="padding:10px !important; color:#333;"><?=$linha['unidadec'];?></td>
                      <td bgcolor="#f1f1f1" align="center" style="padding:10px !important; color:#333;"><?=$linha['areaprivativac'];?></td>
                      <td bgcolor="#f1f1f1" align="center" style="padding:10px !important; color:#333;"><?=$linha['descricaoc'];?></td>
                      <td bgcolor="#f1f1f1" align="center" style="padding:10px !important; color:#333;"><?=$linha['vagasc'];?></td>
                	</tr>

                  <tr>
                	  <td bgcolor="#fbfbfb" style="padding:10px !important; color:#333;">Casa tipo D</td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['unidaded'];?></td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['areaprivativad'];?></td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['descricaod'];?></td>
                      <td bgcolor="#fbfbfb" align="center" style="padding:10px !important; color:#333;"><?=$linha['vagasd'];?></td>
                	</tr>
              </table>
               <?php endif; ?>

            </div>
       <div class="mapa">
       <h5>Localização</h5>
                <div class="separador2"></div>
               <p><?=html_entity_decode($linha['localizacao']);?></p>

            </div>
                 <h5>Entre em contato</h5>
                <div class="separador2"></div>
                <form name="contato" action="" method="post" enctype="multipart/form-data">
                <?php
				if(isset($_POST['envia']) && $_POST['envia'] == 'Enviar'){

					$nome  				= addslashes($_POST['nome']);
					$telefone			= addslashes($_POST['telefone']);
					$email 				= addslashes($_POST['email']);
					$assunto			= addslashes($_POST['assunto']);
					$arquivo			= addslashes($_POST['arquivo']);
					$msg   				= addslashes($_POST['msg']);

					$anexado = $_FILES['arquivo']['name'];
					$extensao = strtolower(end(explode('.', $anexado)));
					$extensoes = array ('txt', 'xlsx', 'xls', 'docx', 'doc', 'pdf', 'dwg'); // AKI VC PODE COLOCAR AS EXTENÇÕES QUE VC AEITARA NO UPLOAD
					$size = $_FILES['arquivo']['size'];
					$maxsize = 1024 * 1024 * 3; // AKI VC ESPECIFICA O TAMANHO DE ARQUIVOS ACEITOS, LEMBRANDO QUE A CONFIGURAÇÃO É LIVE

					if(empty($arquivo)): else:
					if(array_search($extensao, $extensoes) === false){
					 $retorno = '<div class="erro">Arquivo inválido!</div>';
					}elseif($size >= $maxsize){
					 $retorno = '<div class="erro">Arquivo só é permitido com menos de 3mb!</div>';
					} endif;
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
						 $retorno = '<div class="erro">Informe um email válido!</div>';
					}if (empty($retorno)) {

					//<input type="hidden" name="enviar" value="send" />

						$date = date("d/m/Y h:i");

						// ****** ATENÇÃO ********
						// ABAIXO ESTÁ A CONFIGURAÇÃO DO SEU FORMULÁRIO.
						// ****** ATENÇÃO ********

						//CABEÇALHO - ONFIGURAÇÕES SOBRE SEUS DADOS E SEU WEBSITE

						$destino = $_POST['destino'];

						$nome_do_site="Incorporadora Vivatti";
						$email_para_onde_vai_a_mensagem = /*"jean.dias@agenciaativa.com.br";// */'kenia.loisa@vivattiinc.com.br, p.bagnoli@vivattiincorporadora.com.br, glauce.santos@agenciaativa.com.br, mariana.moura@agenciaativa.com.br, marcelo@agenciaativa.com.br';
						$nome_de_quem_recebe_a_mensagem = $assunto;
						$exibir_apos_enviar='';

						//MAIS - CONFIGURAÇOES DA MENSAGEM ORIGINAL
						$cabecalho_da_mensagem_original="From: $email\n";
						$assunto_da_mensagem_original="$assunto";

						// FORMA COMO RECEBERÁ O E-MAIL (FORMULÁRIO)
						// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIÁVEL ABAIXO *************
						$configuracao_da_mensagem_original="

						<strong>ENVIADO POR:</strong><br /><br />
						<strong>Nome:</strong> $nome<br /><br />
						<strong>E-mail:</strong> $email<br /><br />
						<strong>Telefone:</strong> $telefone<br /><br />
						<strong>Assunto:</strong> $assunto<br /><br />
						<strong>Mensagem:</strong> $msg<br /><br /><br /><br /><br /><br /><br />

						ENVIADO EM: $date";

						//CONFIGURAÇÕES DA MENSAGEM DE RESPOSTA
						// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
						// "Re: $assunto"
						$assunto_da_mensagem_de_resposta = "Recebemos sua mensagem";
						$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
						$configuracao_da_mensagem_de_resposta="

						Obrigado por entrar em contato!<br />
						Estaremos respondendo em breve...<br />
						<strong>Atenciosamente $nome_do_site</strong><br /><br />
						Enviado em: $date";

						// ****** IMPORTANTE ********
						// A PARTIR DE AGORA RECOMENDA-SE QUE NÃO ALTERE O SCRIPT PARA QUE O  SISTEMA FINCIONE CORRETAMENTE
						// ****** IMPORTANTE ********

						//ESSA VARIAVEL DEFINE SE É O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO
						//POR VOCÊ CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME
						//'assunto' NO FORMULARIO DE ENVIO
						$assunto_digitado_pelo_usuario="s";

						//ENVIO DA MENSAGEM ORIGINAL

						$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;

						if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){

					 	 $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
						 $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
						 $anexo = base64_encode($anexo);

						 fclose($fp);

						 $anexo = chunk_split($anexo);

						 $boundary = "XYZ-" . date("dmYis") . "-ZYX";

						 $mens = "--$boundary\n";
						 $mens .= "Content-Transfer-Encoding: 8bits\n";
						 $mens .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
						 $mens .= "$configuracao_da_mensagem_original\n";
					 	 $mens .= "--$boundary\n";
						 $mens .= "Content-Type: ".$arquivo["type"]."\n";
					 	 $mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
					 	 $mens .= "Content-Transfer-Encoding: base64\n\n";
						 $mens .= "$anexo\n";
						 $mens .= "--$boundary--\r\n";

						 $headers  = "MIME-Version: 1.0\n";
						 $headers .= "$cabecalho_da_mensagem_original";
						 $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
						 $headers .= "$boundary\n";
						 }else{

						 $mens = "$configuracao_da_mensagem_original\n";

						$headers  = "MIME-Version: 1.0\n";
						$headers .= "$cabecalho_da_mensagem_original";
						$headers .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
						}

						if ($assunto_digitado_pelo_usuario=="s")
						{
						$assunto = "$assunto_da_mensagem_original";
						};
						$seuemail = "$email_para_onde_vai_a_mensagem";
						$datacad  = date('Y-m-d H:i:s');
						$cadastra = mysql_query ("insert into tb_contato (nome, telefone, email, assunto, mensagem, datacadastro) values ('$nome', '$telefone', '$email', '$assunto', '$msg', '$datacad')") or die(mysql_error());
						mail($seuemail,$assunto,$mens,$headers);

						//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA

						$headers = "$cabecalho_da_mensagem_de_resposta";
						$headers .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";

						if ($assunto_digitado_pelo_usuario=="s")
						{
						$assunto = "$assunto_da_mensagem_de_resposta";
						}
						else
						{
						$assunto = "Re: $assunto";
						};
						$mensagem = "$configuracao_da_mensagem_de_resposta";
						mail($email,$assunto,$mensagem,$headers);

						/*echo "<script>window.location='$exibir_apos_enviar'</script>";*/
						echo '<div class="ok">Mensagem enviada com sucesso</div>';
						unset($nome, $email, $assunto, $mensagem);
						} else {
						 echo "$retorno";
					 }
				}
			?>
                	<label>Nome</label>
                    <input type="text" name="nome" value="<?=$nome?>" required="required" />
                    <label>Telefone</label>
                    <input type="text" name="telefone" value="<?=$telefone?>" id="telcontato" required="required" />
                    <label>Email</label>
                    <input type="text" name="email" value="<?=$email?>" required="required" />
                    <label>Mensagem</label>
                    <textarea name="msg" required><?=$msg?></textarea>
                    <br/>
                    <input type="submit" name="envia" value="Enviar" />
                </form>
            <?php endif; ?>
       </div>
       </div>

       </div>
</div>
       <?php elseif($pagina == 'home'):
	   		echo '<script>window.location.href="index.php";</script>';
	   else:
			include('error.php');
		endif;
?>
</div><!-- final page -->
