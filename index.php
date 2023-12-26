<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Playfair+Display:ital,wght@1,400;1,600&family=Rubik+Bubbles&family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
<!-- localhost/SE_CAMP/index.php -->
<?php $multi_x = 7; ?>

    <form>
        <center>
            <table>
                 <tbody >
                    <tr>
                        <h1>ตารางสูตรคูณแม่  <?php echo $multi_x ?></h1>
                        <div>
                            <?php
                            $b = 7;
                            for($i = 1 ; $i <= 24 ; $i++ ) {                        
                                echo "{$b} x {$i} = ".($b * $i)."<br/>";
                            }
                            ?>
                        </div>                            
                    </tr>
                </tbody>
            </table>
        </center>
    </form>
</body>
</html>