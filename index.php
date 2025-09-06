<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOGO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <h1 class="mb-4">PEDRA, PAPEL E TESOURA</h1>

        <div class="col text-center">
            <form method="get">
                <button type="submit" name="escolha" value="pedra" class="btn btn-primary m-2">PEDRA</button>
                <button type="submit" name="escolha" value="papel" class="btn btn-success m-2">PAPEL</button>
                <button type="submit" name="escolha" value="tesoura" class="btn btn-danger m-2">TESOURA</button>
            </form>

            <div class="mt-4">

                <?php
                if (isset($_GET['escolha'])) {
                    $escolha = $_GET['escolha'];
                    $opcoes = array('pedra', 'papel', 'tesoura');
                    $oponente = $opcoes[rand(0, 2)];

                    echo "<p><strong>SUA ESCOLHA:</strong> $escolha</p>";
                    echo "<p><strong>SEU OPONENTE:</strong> $oponente</p>";

                    if ($escolha == $oponente) {
                        echo "<h3 class='text-warning'>EMPATE</h3>";
                    } elseif (
                        ($escolha == 'pedra' && $oponente == 'tesoura') ||
                        ($escolha == 'papel' && $oponente == 'pedra') ||
                        ($escolha == 'tesoura' && $oponente == 'papel')
                    ) {
                        echo "<h3 class='text-success'>VOCÊ VENCEU!</h3>";
                    } else {
                        echo "<h3 class='text-danger'>VOCÊ PERDEU!</h3>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
