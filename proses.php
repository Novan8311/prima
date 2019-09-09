<?php
$bilangan = $_POST["bil"];
$hasil = "";
echo "<h1>Hasil Program</h1>";

for($i=2; $i<=$bilangan; $i++){
    $p = 0;
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $p += 1; 
        }   
    }
    if($p <= 2){
        $hasil .= $i.", ";
    }
    echo $hasil."<br><br>";    
}



echo "<a href='prima.php'>Ulangi</a>";

?>