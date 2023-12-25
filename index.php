<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<!-- localhost/SE_CAMP/index.php -->
<?php $multi_x = 2; ?>

    <center>
        <table>
            <div class="b">
                <tbody >
                <tr>
                <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
                <?php
                    $b = 7;
                    for( $i = 1 ; $i <= 24 ; $i++ ) {
                    echo "{$b} x {$i} = ".($b * $i)."<br/>";
                    }
                ?>
                </tr>
                </tbody>
            </div>
        </table>
    </center>
    <style>
        table {
            width: 1500px;
            height: 265px;
        }
        .b{
            /* background-image: url('C:..\xampp\htdocs\SE_CAMP\images\jell55556.jpg'); */
            
        }

    </style>
</body>
</html>

