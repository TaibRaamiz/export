<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kira berat</title>
</head>
<body>
    <center>
        <form method="post">
            <label>masukkan berat anda <input type="text" name="berat"></label>
            <br><br>
            <button type="submit" name="submit">Kira</button>
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $berat = $_POST['berat'];
                echo "<br>";
                if ($berat >= 80) {
                    echo "Anda berat";
                } else {
                    echo "Berat anda normal";
                }
            }
        ?>
    </center>
</body>
</html>
