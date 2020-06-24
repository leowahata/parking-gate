<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <table>
        <tr>
            <th>Masukan Lama Durasi Parkir</th>
        </tr>
        <tr>
            <td>masuk</td>
        </tr>
        <tr>
            <td><input type="time" name="masuk"></input></td>
        </tr>
        <tr>
            <td>keluar</td>
        </tr>
        <tr>
            <td><input type="time" name="keluar"></input></td>
        </tr>
        <tr>
            <td><input type="submit"></input></td>
            
        </tr>
        
        
        </table>
    </form>
<?php
    $mulai=$_GET["masuk"];
    $selesai=$_GET["keluar"];
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    list($jam,$menit)=explode(':',$mulai);
    $buatWaktuMulai=mktime($jam,$menit,1,1);
        list($jam,$menit)=explode(':',$selesai);
    $buatWaktuSelesai=mktime($jam,$menit,1,1);
    $selisihDetik=$buatWaktuSelesai-$buatWaktuMulai;
        //echo" Mulai : $mulai";
        //echo"| Selesai  $selesai";
        //echo"| Durasi $selisihDetik detik";

    if ($selesai>1800){
        $b1=2000;
    }else{
        $b1=1500;
    }
    

    if($selisihDetik <= 3600){
        echo("biaya parkir anda :Rp 3500");
    }elseif ($selisihDetik > 3600) {
        $a1=$selisihDetik/60/60;
        $a2=$a1-2;
        $a3=$a2*$b1;
        $a4=$a3+3500;
        echo("Biaya Parkir anda :Rp ".$a4);
    }else{
        echo("masukan Durasi parkir");
    }
?>

</body>
</html>