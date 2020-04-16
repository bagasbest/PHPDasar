<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1; $i<=5; $i++) : ?>
                <?php for($j=1; $j<=5; $j++){?>
                    <?php $a = $i+$j;?>
                    <?php if($a%2 == 0 ) : ?>
                        <td class="warna-baris"> <?= "$i , $j"; ?></td>
                    <?php else:?>
                        <td> <?= "$i , $j"; ?></td>
                     <?php endif; ?>       
                <?php } ?>
            </tr>
        <?php   endfor; ?>
        
    </table>
</body>
</html>