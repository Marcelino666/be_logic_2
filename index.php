<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE Logic 2</title>
</head>
<body>
    <h1>BE Logic 2</h1>

    <form method="post">
        Masukkan Nilai :
        <input type="number" min="0" name="nilai">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if( isset($_POST["submit"])) : ?>

        <h2>N = <?= $_POST["nilai"]; ?></h2>

        <!-- ------SCRIPT PHP CETAK POLA----- -->
        <?php
            $n = $_POST["nilai"];

            for ($row = 0; $row < $n; $row++)
            {
                $temp = $n;

                for($column=0; $column < $n; $column++)
                {
                    if(($column == 0) || ($column == $n-1) || ($row == 0) || ($row == $n-1) || ($column == $row) || ($row+1 == $temp))
                    {
                        echo "#";
                    }
                    else
                    {
                        echo "_";
                    }

                    $temp--;
                }
                echo "</br>";
            }
        ?>

    <?php endif; ?>

</body>
</html>