<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;

    // Construtor para inicializar os atributos
    public function __construct($nome, $descricao, $valor, $imagem) {
	$this->nome = $nome;
	$this->descricao = $descricao;
	$valor = (float) $valor; // "5.3" -> 5.3
	$this->valor = $valor;
	$this->imagem = $imagem;
    }
    public function exibirInformacoes() {
       echo '<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSpIaBf4ceOFBvTwfhn0Yy8-JCN6xcB8tDzpaUKm7P1watYeSpj" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">coisa ruim</h5>
    <p class="card-text">budega</p>
    <a href="#" class="btn btn-primary">vai pro krlh</a>
  </div>
</div>';
        }
}

?>
</body>
</html>