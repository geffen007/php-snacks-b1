<?php
    $partite = [
        [
            'casa' => 'Germani Basket Brescia',
            'ospite' => 'Umana Reyer Venezia',
            'pticasa' => 70,
            'ptiospite' => 64,
        ],
        [
            'casa' => 'OriOra Pistoia',
            'ospite' => 'Banco di Sardegna Sassari',
            'pticasa' => 70,
            'ptiospite' => 78,
        ],
        [
            'casa' => 'Vanoli Basket Cremona',
            'ospite' => 'Happy Casa Brindisi',
            'pticasa' => 93,
            'ptiospite' => 89,
        ],
        [
            'casa' => 'A|X Armani Exchange Milano',
            'ospite' => 'S.Bernardo-Cinelandia Cantù',
            'pticasa' => 83,
            'ptiospite' => 89,
        ],
        [
            'casa' => 'Dolomiti Energia Trentino',
            'ospite' => 'Segafredo Virtus Bologna',
            'pticasa' => 77,
            'ptiospite' => 83,
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Basket</title>
    </head>
    <body>
        <h2>Giornata 17</h2>
        <?php for($i = 0; $i < count($partite); $i++){ ?>
            <div class="partita<?php echo $i ?> partita">
                <div class="casa team"><?php echo $partite[$i]['casa'] ?></div>
                <div class="pticasa pti"><?php echo $partite[$i]['pticasa'] ?></div>
                <div class="ptiospite pti"><?php echo $partite[$i]['ptiospite'] ?></div>
                <div class="ospite team"><?php echo $partite[$i]['ospite'] ?></div>


            </div>
        <?php } ?>
    </body>
</html>
