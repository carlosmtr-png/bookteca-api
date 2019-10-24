<?php
include_once('conexao.php');
include('livro.php');

$CONEXAO = new conexao();

$livroTemporario = new Livro();
$livroTemporario->id = $_GET["id"];
$resultado = $livroemporario->lerLivro();
$livroJson = "";
if($resultado){
  while($livroLaco = $resultado->fetch_assoc()){
    $livroObjeto->id = $livroTemporario->id;
    $livroObjeto->titulo = $livroLaco['titulo'];
    $livroObjeto->subtitulo = $livroLaco['subtitulo'];
    $livroObjeto->descricao = $livroLaco['descricao'];
    $livroJson = json_encode($livroObjeto);
  }
  include('cors.php');
  echo $livroJson;
} else {
  http_response_code(404);
}
 ?>
