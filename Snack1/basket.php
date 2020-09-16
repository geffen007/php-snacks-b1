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
        <title></title>
    </head>
    <body>
        <h2>Giornata 17</h2>
        <?php for($i = 0; $i < count($partite); $i++){ ?>
            <div class="partita<?php echo $i ?>">
                <div class="casa"><?php echo $partite[$i]['casa'] ?></div>
                <div class="ospite"><?php echo $partite[$i]['ospite'] ?></div>
                <div class="pticasa"><?php echo $partite[$i]['pticasa'] ?></div>
                <div class="ptiospite"><?php echo $partite[$i]['ptiospite'] ?></div>

            </div>
        <?php } ?>
    </body>
</html>
