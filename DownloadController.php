<?php
  header('Content-Type: application/download'); /*Nos cabeçalhos contem toda a descrição do arquivo(Tipo, Disposição, e tamanho)*/
  header('Content-Disposition: attachment; filename="Jogo.zip"');
  header("Content-Length: " . filesize("Jogo.zip")); 
  $fp = fopen("Jogo.zip", "r"); /*Abre o arquivo*/
  fpassthru($fp);/*Se ocorrer um erro, fpassthru () retorna FALSE.
  Caso contrário, fpassthru () retorna o número de caracteres lidos do manipulador e passados ​​para a saída.*/
  fclose($fp);/* Fecha o ponteiro do arquivo aberto*/
?>