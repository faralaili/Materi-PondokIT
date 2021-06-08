    <?php
    echo "Inputkan Suhu Celsius : ";
    $celsius = trim(fgets(STDIN));

    echo "1. Kelvin \n2. Farenhet \n3. Reamur \n";
    echo "Pilih NO suhu = ";
    $pilih = trim(fgets(STDIN));
    switch($pilih){
        case 1 : 
            $hasil = $celsius+273;
            echo " Celsius = ".$celsius." ke Kelvin = ".$hasil."\n"; 
            break;
        case 2 : 
            $hasil = ((9/5)*$celsius)+32; 
            echo " Celsius = ".$celsius." ke Farenhet = ".$hasil."\n";
            break;
        case 3 : 
            $hasil = (4/5)*$celsius;
            echo " Celsius = ".$celsius." ke Reamur = ".$hasil."\n"; 
            break;
    }

    