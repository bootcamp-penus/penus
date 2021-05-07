<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        $passwordasli = "12345";
        $passwordinput = "12345";
        $cocok = strcmp($passwordasli, $passwordinput);
        if ($cocok != 0)
        {
            echo "Password anda salah!";
        }
        else
        {
            echo "Password anda benar!";
        }

        echo"<br>";
        $statement = "ini gak marah, cuman caps";
  
        // menampilkan INI GAK MARAH, CUMAN CAPS
        echo strtoupper($statement);

        echo"<br>";
        $marah = "INI MARAH";
  
        // menampilkan ini marah
        echo strtolower($marah);

        echo"<br>";
        $kalimat = "Saya sedang belajar PHP";
        $katayangdicari = "PHP";
        $posisi = strpos($kalimat, $katayangdicari);
        echo $posisi;

        echo"<br>";
        $string = "Saya suka PHP";

        // akan menampilkan suka PHP
        echo substr($string, 5, 8);

        // akan menampilkan PH
        echo substr($string, -3, 2); 

        echo"<br>";
        $nama = array("regi", "bobby", "ahmad");
        print_r($nama);
        //menampilkan bobby
        echo"<br>";
        echo $nama[1];
        $nama2 = ["abduh", "aghnat", "yoga"];
        print_r($nama);
        //menampilkan abduh
        echo"<br>";
        echo $nama2[0]
        ?>
      

