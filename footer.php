<footer>
    <div class="footer">
        <div class="ui container">
        <div class="ui grid">
             <div class="eight wide column">
    <form name="contato" action="" method="post">
    
        <?php
					if(isset($_POST['envia']) && $_POST['envia'] == 'Enviar'):
                	$nome				= addslashes($_POST['nome']);
					$email 				= addslashes($_POST['email']);
					$mensagem			= addslashes($_POST['mensagem']);
					$dataenvio			= date('Y-m-d H:i:s');
					$emaildestinatario  = 'vitapelli@vitapelli.com.br';
					$dataenvio			= date('Y-m-d H:i:s');
                    $assunto = 'Fale Conosco';
					
					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						echo '<script>
                                alert("Preencha com um email válido");
                              </script>';
					}else{
						/* Montando a mensagem a ser enviada no corpo do e-mail. */
						$mensagemHTML = '<p>Fale Conosco: '.$assunto.' | Site: <strong>www.vitapelli.com.br</strong></p>
						<p><b>Nome:</b> '.$nome.'
						<p><b>E-Mail:</b> '.$email.'
						<p><b>Assunto:</b> '.$assunto.'
						<p><b>Mensagem:</b> '.$mensagem.'</p>
						<p><b>Mensagem:</b> '.date('d/m/Y H:i:s').'</p>
						<hr>';
						
						$headers = "MIME-Version: 1.1\r\n";
						$headers .= "Content-type: text/html; charset=utf-8\r\n";
						$headers .= "From: $nome<$email>\r\n"; // remetente
						$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
						$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
						
						$cadastra = mysql_query ("insert into tb_contato (nome, email, mensagem, data) values ('$nome', '$email', '$mensagem', '$dataenvio')") or die(mysql_error());
						
					if($envio)
						echo '<script>
                                alert("Sua mensagem foi enviada com sucesso");
                              </script>';
					else	
						echo '<script>
                                alert("Erro ao enviar mensagem, tente novamente");
                              </script>';
					}
					endif;
				?>
        
     <div class="ui form">
      <div class="field">
        <div class="ui left icon input">
          <input type="text" required name="nome" placeholder="Nome">
          <i class="user icon"></i>
        </div>
      </div>
        <div class="field">
        <div class="ui left icon input">
          <input type="email" required name="email" placeholder="Email">
          <i class="mail icon"></i>
        </div>
      </div>
        <div class="field">
        <div class="ui left icon input">
          <textarea type="text" name="mensagem" placeholder="Mensagem"></textarea>
        </div>
      </div>
      <input type="submit" class="ui black button" name="envia" value="Enviar">
    </div>
        </form>
  </div>
            <div class="eight wide column">
                <div class="adress">
                <h3>Rod.Comendador Alberto Bonfiglioli, 8000</h3>
                    <h3>CEP: 19020-970 Presidente Prudente - SP</h3>
                    <h3>Caixa Postal: 4413 | Email: vitapelli@vitapelli.com.br</h3>
                    <h3>Fone: +55 18 2101-7500</h3>
                    <h3>Fax: +55 18 2101-7510</h3>
                    <a href="https://www.facebook.com/vitapelli" target="_blank">
                       <button class="ui facebook button">
                     <i class="facebook icon"></i>
                      Facebook
                     </button></a>
                </div>
            </div>
        </div>
            <hr/>
            <h4>COPYRIGHT 2016 - Vitapelli - Todos os direitos reservados</h4>
            <p>Desenvolvido por Ativa on | off</p>
    </div>
    </div>
    <script src="<?=$base;?>js/swiper.js" type="text/javascript"></script>
     <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    </script>
</footer>
  </body>
</html>