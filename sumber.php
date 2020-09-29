<?php 
$tipe = $_POST['tipe'];

// cetak data corona
if($tipe=="dataindo"){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);   
    curl_close($ch);    
    // echo $output;

    $data = json_decode($output, TRUE);
    if($data == false){
        $gabung = "0+0+0+0+";
            echo $gabung;
    }else{
        foreach($data as $row){
            $positif = $row['positif'];
            $sembuh = $row['sembuh'];
            $meninggal = $row['meninggal'];
            $dirawat = $row['dirawat'];
            $gabung = $positif."+".$sembuh."+".$meninggal."+".$dirawat."+";
            echo $gabung;
        }
    }    
    
}

if($tipe=="dataprov"){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/provinsi/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);   
    curl_close($ch);    
    // echo $output;

    $data = json_decode($output, TRUE);
    $n=1;
    foreach($data as $row => $key){
        foreach($key as $cet);
        ?>
        <tr>
            <td>
                <?=$n++?>
            </td>
            <td>
                <?=$cet['Provinsi']?>
            </td>
            <td>
                <?=$cet['Kasus_Posi']?>
            </td>
            <td>
                <?=$cet['Kasus_Semb']?>
            </td>
            <td>
                <?=$cet['Kasus_Meni']?>
            </td>
        </tr>
        <?php
    }
}
?>

