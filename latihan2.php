<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <h1 align ="center"></h1>
    <table cellspacing ="15" align ="center">
    <tr>
        <th></th>
        <th>No</th>
        <th>Daftar Program</th>
    </tr>
    <tr>
        <td></td>
        <td>1.</td>
        <td>SOAL 1</td>
    </tr>
    <tr>
        <td></td>
        <td>2.</td>
        <td>SOAL 2</td>
    </tr>
    <tr>
        <td></td>
        <td>3.</td>
        <td>SOAL 3</td>
    </tr>
        <tr>
            <td>Pilih</td>
            <td>:</td>
            <td><input type="number" name="pilih"></td>
        </tr>
        <tr>
            <td>Masukan jumlah Angka</td>
            <td>:</td>
            <td><input type="number" name="angka"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="OKE"></td>
        </tr>
    </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $pilih = $_POST['pilih'];
        $angka = $_POST['angka'];
        echo "<br>";
        if($pilih == 1){
            echo "<b>soal 1</b><br><hr>";
            echo "<br>";
            $x = 1;
            while($x <= $angka){
                $y = 1;
                while($y <= $x){
                   echo "$y ";
                   $y++;
                }
                echo "<br>";
                $x++;
            }
            }
        elseif ($pilih == 2) {
                echo "<b>soal 2</b><br><hr>";
                for ($i=$angka; $i >=1; $i--) { 
                    for ($c=$angka; $c >=$i ; $c--) { 
                        echo "&nbsp";
                    }
                    for ($q=1; $q <=$i ; $q++) { 
                        echo "$q";
                    }
                    echo "<br>";
                }
        }elseif($pilih == 3){
            echo "<b>soal 3</b><br><hr>";
            echo "<br>";
            for ($i= $angka; $i>=1; $i--){
                for ($j= $angka; $j>=$i; $j--){
                      echo $j;
                 }echo "<br>";
            }
        }
    }
    ?>
</body>
</html>