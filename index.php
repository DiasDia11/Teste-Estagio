<?php

// Questão 1
$indice = 13;

$soma = 0;

$k = 0;

while ($k < $indice) {
    $k = $k +1;

    $soma = $soma + $k;
}

echo "$soma";

// Questão

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <form action="fibonacci.php" method="POST">
                <div>
                    <input type="text" name="numero" placeholder="Preencha seu nome">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
    </main>
</body>
</html>

<?php

// Terceira Questão
    // Segue na sequência dos impares
    // A = 1,3,5,7,9
    // Sempre multiplica por 2
    // B = 2,4,8,16,32,64,128
    // Sempre aumenta em impar 3-5-7-9-11-13
    // C = 0,1,4,9,16,25,36,49
    // Sempre aumenta 8 - 12 - 20 - 28 - 36
    // D = 4,16,36,64,100
    // Fibonacci
    // E = 1,1,2,3,5,8,13
    // PA = Progressão Aritmética constante 1
    // F =  2,10,12,16,17,18,19, 20



// Quarta Questão
    /* tanto o carro como o caminhão estarão a mesma distância de ribeirão preto  
        pois estarão no mesmo ponto */ 

        
// Quinta Questão

    $palavra = "eduardo";

    $primeira = $palavra[0];
    $segunda = $palavra[1];
    $terceira = $palavra[2];
    $quarta = $palavra[3];
    $quinta = $palavra[4];
    $sexta = $palavra[5];
    $setima = $palavra[6];

    echo $setima.$sexta.$quinta.$quarta.$terceira.$segunda.$primeira;
?>