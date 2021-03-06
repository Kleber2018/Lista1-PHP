
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        // Crie um arquivo PHP chamado functions.php​, que deve conter uma biblioteca de funções para realizar
        // operações sobre arrays. Você deve criar funções para encontrar: o maior valor, menor valor, número de
        // valores do array, média, ordenação e busca de um valor (retorna true ou false). Em seu arquivo index.php
        // você deve importar esta biblioteca de funções e fazer testes nas funções com valores estáticos.
        echo '<h3>Exercício 1: </h3></br>';
        require('functions.php');

        for($i = 0; $i < 5; $i++){
            $vetor[$i] = rand(2,20);
            echo "$vetor[$i]; ";
        }

        echo maiorValor($vetor);

        echo menorValor($vetor);

        echo tamanhoArray($vetor);

        $ordenado = ordenacao($vetor);
        foreach($ordenado as $chave => $valor){ //como se fosse um for percorrendo o vetor inteiro
        echo "<strong>${chave}</strong> - ${valor}; ";
        }

        if (busca($vetor, 3)){
            echo 'true';
        }else{
            echo 'false';
        }
    ?>
    <?php
    // 2    Faça um script PHP para ajudar Adão e Eva a saber quantas vitórias cada um obteve nos seus jogos de truco
    // durante o semestre. As vitórias e derrotas de cada jogo são representadas por um array de números do tipo
    // inteiro (0 representa vitórias da Eva e 1 representa as vitórias de Adão). Seu script PHP deve chamar a
    // função checaResultado​, passando o array e qual número deve ser contado como parâmetros e deve
    // receber como retorno o número de vitórias (ocorrências) do valor no array. Exemplo:
        echo '</br></br><h3>Exercício 2: </h3></br>';
        $adao = checaResultado([1, 0, 0, 0, 0, 1], 1);
        echo "Adão ganhou ${adao} vezes";
    ?>
    <!-- 3) Faça um script PHP que processa uma string no formato "Stark#Bran, Arya, Tony#Wolf" e gera um
   array associativo a partir desta string. O array com o resultado do processamento deve conter o seguinte
    formato ['family' => Stark, 'names' => ['Bran', 'Arya', 'Tony'], 'pet' => 'Wolf']​. Ao final você deve
     renderizar esse array associativo no HTML com o seguinte formato:
     Family Stark
     Pet​: Wolf
     Members​:
     1. Bran
     2. Arya
     3. Tony -->

    <?php
        echo "</br> </br><h3>Exercício 3</h3>";
        $texto = "Stark#Bran, Arya, Tony#Wolf";
        $arrayassociativo = separa($texto);
    ?>

    <h3> <?php print_r($arrayassociativo['family']); ?></h3>
    <p><b>Pet: </b><?php print_r($arrayassociativo['pet']); ?></p>
    <p><b>Members:</b></p>
    <ol>
        <li><?php echo $arrayassociativo['names'][0];?></li> 
        <li><?php echo $arrayassociativo['names'][1];?></li> 
        <li><?php echo $arrayassociativo['names'][2];?></li> 
    </ol>

<!-- //    4 ) Faça um script PHP que defina uma matriz, imprima em uma página HTML no formato de table e, então,
//     defina e use uma função para também mostrar no HTML esta matriz de forma transposta, ou seja, imprimir
//     a matriz com linhas e colunas invertidas. Exemplo:
//     1 2 3       1 4 7
//     4 5 6       2 5 8
//     7 8 9       3 6 9 -->
    
    <!-- <?php
        echo "</br> Exercício 4";
        $soma = 0;
        for($i = 0; $i < 3; $i++){
            for($j = 0; $j <3; $j++){
                $m[$i][$j] = $soma;
                $soma = $soma + 1;
           }
        }
    ?>
    <?php
        echo "<table style=width:6%>";
    		for($i = 0; $i < 3; $i++){
                echo "<tr>";
                for($j = 0; $j <3; $j++){
                    echo "<td>".$m[$i][$j]."</td>"; 
                }
                echo "</tr>";
            }
        echo "</table>\n";
        echo "<br>";

        echo "<table style=width:6%>";
    		for($i = 0; $i < 3; $i++){
                echo "<tr>";
                for($j = 2; $j >=0; $j--){
                    echo "<td>".$m[$i][$j]."</td>";
                }
                echo "</tr>";
            }
        echo "</table>\n";
    ?> -->

<!-- // 5 Faça um script PHP que processa as vendas do mês de 5 vendedores de uma loja (em reais), armazenadas em
// uma matriz (ou seja, um array de 5 vendedores x 4 semanas do mês). Seu script deve calcular e mostrar no
// HTML: a) total de vendas do mês de cada vendedor; b) total de vendas de cada semana (todos os vendedores
// juntos) no formato de um ​table​; c) total de vendas do mês da empresa. -->

 <?php
    echo "</br><h3>Exercício 5</h3>";
    $vendas = array([111.41, 100.51, 354.52, 213.85], [222.49, 200.20, 214.60, 877.72], [323.42, 350.55, 364.65, 23.73], [444.10, 410.50, 234.65, 253.74], [555.44, 510.50, 534.64, 253.11]);
    echo "<h4>Total por semana para cara vendedor</h4>";
    echo "<table style=width:25%>";
        echo "<tr>";
            echo "<th>".'Semana '.': '."</th>";
            for($j = 0; $j < 4; $j++){
                echo "<th>".($j+1)."</th>";
            }
        echo "</tr>";
        for($i = 0; $i < 5; $i++){
            echo "<tr>";
            echo "<td>".'Vendedor '.($i+1).': '."</td>";
            for($j = 0; $j < 4; $j++){
                echo "<td>".'R$ '.$vendas[$i][$j]."</td>";
            }
            echo "</tr>";
        }
    echo "</table>";

    echo "<br>";
    echo "<h4>Total do mês para cara vendedor</h4>";
    $vendames = 0;
    echo "<table style=width:20%>";
        for($i = 0; $i < 5; $i++){
            echo "<tr>";
            echo "<td>".'Vendedor '.($i+1).': '."</td>";
            for($j = 0; $j < 4; $j++){
               $vendames = $vendames + $vendas[$i][$j];
            }
            echo "<td>".'R$ '.$vendames."</td>";
            $vendames = 0;
            echo "</tr>";
        }
    echo "</table>";

    echo "<h4>Total </h4>";
    echo "<table style=width:10%>";
        echo "<td>".'Total '.': '."</td>";
        echo "<td>".'R$ '.somavendas($vendas).' reais'."</td>";
    echo "</table>";
?>

<!-- 6 Brasileirão. Crie um script PHP que imprima na tela a tabela do brasileirão. Para isso, você deve incluir a
biblioteca chamada ​tabela.php(disponível no Moodle). Esta biblioteca irá fornecer duas variáveis dotipo
array: ​$equipese ​$classificacao​. Você deve explorar o conteúdodestesarraysusando​var_dumpeentão deve montar 
atabeladeclassificaçãodinamicamentecomPHP,iterandosobreessesdoisarrays,conformea imagem a seguir:   -->
    <?php
    echo '<br><h3>Exercício 6</h3>';
        require('tabela.php');
        echo "<table style=width:30%>";
            echo "<td>Posição</td> <td> </td> <td>Time</td> <td>Pontos</td> <td>Jogos</td> <td>Vitorias</td> <td>Derrotas</td> <td>Empates</td>";
            foreach($classificacao as $linhaarray){
                echo "<tr>";
                    echo "<td>".$linhaarray['posicao']."</td>";
                    foreach($equipes as $linhaarrayequipe){
                        if ($linhaarray['time_id'] == $linhaarrayequipe['id']){
                            echo "<td>"."<img src=".$linhaarrayequipe['brasao']."/>"."</td>";
                            echo "<td>".$linhaarrayequipe['nome-comum']."</td>";
                        }
                    }
                    echo "<td><b>".$linhaarray['pontos']."</b></td>";
                    echo "<td>".$linhaarray['jogos']."</td>";
                    echo "<td>".$linhaarray['vitorias']."</td>";
                    echo "<td>".$linhaarray['derrotas']."</td>";
                    echo "<td>".$linhaarray['empates']."</td>";
                echo "</tr>";
            }
        echo "</table>";

    ?>
</body>
</html>
