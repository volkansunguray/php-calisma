<?php
    include("header.php");
?>



<?php

    // 1. Soru cevabı    

    $yil = $_POST("yil");
    $yas = 2022 - $yil;
    
    if ($yas < 18 ) { 
    echo "Yaşınız Ehliyet Almaya Yetmiyor: $yas";
    }
    elseif ($yas >= 18) {  
    echo "Yaşınız Ehliyet Almaya Yetiyor: $yas";
    }

    // 2. Soru cevabı

    try {
		$db = new PDO("mysql:host=localhost;dbname=veresiye;charset=UTF8", "root", "123");
		echo "</br></br>Bağlantı Başarılı...";
    }
    catch(PDOException $e){
        print $e->getMessage();
    }

    // 3.Soru cevabı

    // 1-3 ve 35-37. satırlar

?>
    
<?php
    include("foother.php");
?>