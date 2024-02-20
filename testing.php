<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP dan HTML</title>
</head>
<body>
	<br> ini adalah bahagian HTML</br>
	<?php echo "ini adalah bahagian PHP"; ?>

</body>


 <?php 

    $nama = "Ali";
    $umur = " 12";
    echo "<br>";
    echo "nama saya ialah ";
    echo $nama;
    echo " dan saya berumur";
    echo $umur;

    

    $panjang =10;
    $lebar = 5;

    define('pi', 3.141592654);

   
    echo "<br>";
    echo "luas bulatan:";
    echo pi*$panjang*$lebar;
    echo "<br>";  

    $num1 = 12;
    $num2 = 6;
    $num3 =5.3;

    echo "Hasil operasi $num1 + num2 =  ";
    echo $num1 + $num2;
    echo "<br>";
        echo "Hasil operasi $num1 - num2 =  ";
    echo $num1 - $num2;
    echo "<br>";
        echo "Hasil operasi $num1 * num2 =  ";
    echo $num1 * $num2;
    echo "<br>";
        echo "Hasil operasi $num1 / num2 =  ";
    echo $num1 / $num2;
    echo "<br>";
        echo "Hasil operasi $num1 + num3 =  ";
    echo $num1 + $num3;
    echo "<br>";
        echo "Hasil operasi $num1 - num3 =  ";
    echo $num1 - $num3;
    echo "<br>";    echo "Hasil operasi $num1 * num3 =  ";
    echo $num1 * $num3;
    echo "<br>";    echo "Hasil operasi $num1 / num3 =  ";
    echo $num1 / $num3; 
    echo "<br>";

    #Soalan 1
	echo "Soalan 1";
	echo "<br>";
	echo "<br>";
	echo "Aturcara Pertama";
	echo "<br><br><br>";

#Soalan 2
	echo "Soalan 2";
	echo "<br>";
    $panjang =10;
	$lebar = 5;

	echo "<br>";
	echo "Luas segiempat :";
	echo "$panjang * $lebar = ";
	echo $panjang*$lebar;

	$jejari =6;
	define ('Pi', 3.14159265359);

	echo "<br>";
	echo "Luas bulatan :";
	echo "Pi * $jejari = ";
	echo Pi*$jejari;






?>
</html>