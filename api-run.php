<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);

$file = "https://api.fcproperties.co/listings/feed/propertyfinder";
$xmlString = file_get_contents($file);
$products = new SimpleXMLElement($xmlString);
$xml = simplexml_load_file($file);
unset($xmlString, $file);



$sqldel = "DELETE FROM api_data";
if ($conn->query($sqldel) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


$sqlult = "ALTER TABLE api_data AUTO_INCREMENT = 1";
if ($conn->query($sqlult) === TRUE) {
    echo "updated";
} else {
    echo "Error deleting record: " . $conn->error;
}





echo 'Starting<br><br>';



$i = 0;
foreach ($xml as $prod ) {
    $str =$prod->description_en;
    $tit = mysqli_real_escape_string($conn,$prod->title_en);
    $dic = mysqli_real_escape_string($conn,$prod->description_en);
    $phase = explode('\nAt F',$dic);
    $str1 = $phase[0];
    $phase2 = explode('\nAT F',$str1);
    $str2 = $phase2[0];
    $phase3 = explode('\n\nAt F',$str2);
    $str3 = $phase3[0];
    $phase4 = explode('\n\nAT F',$str3);
    $str4 = $phase4[0];
    $phase5 = explode('\n AT F',$str4);
    $str5 = $phase5[0];
    $phase6 = explode('\n At F',$str5);
    $str6 = $phase6[0];
    echo $str6 ;


$agent = $prod->agent;


// Pic
    if($agent->id == "FC-PN")
        $agentImage ="profile/Parviz Nasimov.png";
    elseif ($agent->id == "FC-D")
        $agentImage ="profile/Diyor Kosimov.png";
    elseif ($agent->id == "FC-MY")
        $agentImage ="profile/Muattar Yuldasheva.png";
    elseif ($agent->id == "FC-SH")
        $agentImage ="profile/Shokhrukh Rakhimov.png";
    elseif ($agent->id == "FC-FB")
        $agentImage ="profile/Soumaya Afifa Benouhiba.png";
    elseif ($agent->id == "FC-AV")
        $agentImage ="profile/Avaz Imomov.png";
    elseif ($agent->id == "FC-AS")
        $agentImage ="profile/Abdulla Sultan Ahmed.png";
    elseif ($agent->id == "FC-AH")
        $agentImage ="profile/Abdul Laziz Hatim.png";
    elseif ($agent->id == "FC-CC")
        $agentImage ="profile/Chioma Chigbu.png";
    elseif ($agent->id == "FC-MH")
        $agentImage ="profile/Majdi Halabi.png";
    elseif ($agent->id == "FC-AL")
        $agentImage ="profile/Almaz Seidesimbaev.png";
    elseif ($agent->id == "FC-GM")
        $agentImage ="profile/Ghofrane Daoud.png";
    elseif ($agent->id == "FC-BA")
        $agentImage ="profile/Bekzod Abidov.png";
    elseif ($agent->id == "FC-SR")
        $agentImage ="profile/Sardor Rajavov.png";
    elseif ($agent->id == "FC-YR")
        $agentImage ="profile/Yuliia Roshkovych.png";
    elseif ($agent->id == "FC-MK")
        $agentImage ="profile/Mokhir Muminkhodjaev.png";
    elseif ($agent->id == "FC-AM")
        $agentImage ="profile/Almaz Marsbek.png";
    elseif ($agent->id == "FC-DK")
        $agentImage ="profile/Dilshod Kamolov.png";
    elseif ($agent->id == "FC-SZ")
        $agentImage ="profile/Shakhrukh Mirzayev.png";
    elseif ($agent->id == "FC-BB")
        $agentImage ="profile/Bharath Kumar.png";
    elseif ($agent->id == "FC-AT")
        $agentImage ="profile/Abror Tokhirov.png";
    elseif ($agent->id == "FC-MS")
        $agentImage ="profile/Marko Savic.png";
    elseif ($agent->id == "FC-PK")
        $agentImage ="profile/Pranali Hiwale.png";
    elseif ($agent->id == "FC-NH")
        $agentImage ="profile/Natasha.png";
    elseif ($agent->id == "FC-MT")
        $agentImage ="profile/Moustafa Meabed.png";
    elseif ($agent->id == "FC-MP")
        $agentImage ="profile/Marina.png";
    elseif ($agent->id == "FC-MW")
        $agentImage ="profile/Mahmoud Sedak.png";
    elseif ($agent->id == "FC-F")
        $agentImage ="profile/Farrukh.png";
    elseif ($agent->id == "FC-LA")
        $agentImage ="profile/Laziz.png";
    elseif ($agent->id == "FC-HH")
        $agentImage ="profile/Hanane Hamitou.png";
    elseif ($agent->id == "FC-FR")
        $agentImage ="profile/Farheen Baig.png";
    elseif ($agent->id == "FC-DI")
        $agentImage ="profile/David.png";
    elseif ($agent->id == "FC-AY")
        $agentImage ="profile/Ayman Hany Mamoud.png";
        elseif ($agent->id == "FC-WG")
        $agentImage ="profile/Walid.png";
        elseif ($agent->id == "FC-VC")
        $agentImage ="profile/vera.png";
        elseif ($agent->id == "FC-NA")
        $agentImage ="profile/Naim.png";
        elseif ($agent->id == "FC-BC")
        $agentImage ="profile/Barbra.png";

    else
        $agentImage ="";


$pic0= $prod->photo->url[0];
$pic1 = $prod->photo->url[1];
$pic2 = $prod->photo->url[2];
$pic3 = $prod->photo->url[3];
$pic4 = $prod->photo->url[4];
$pic5 = $prod->photo->url[5];
$pic6 = $prod->photo->url[6];
$pic7 = $prod->photo->url[7];
$pic8 = $prod->photo->url[8];
$pic9 = $prod->photo->url[9];

$location = $prod->geopoint;
    $coord = explode(',', $location);

    $long =  floatval($coord[0]);
    $lat = floatval($coord[1]);
    if ($prod->offering_type == 'RS' || $prod->offering_type == 'CS'){
        $sql = "INSERT INTO `api_data`(`property_id`,`reference_number`,`offering_type`,`property_type`,`price`,`price_on_application`,`service_charge`,
                       `cheques`,`city`,`community`,`sub_community`,`property_name`,`title_en`,`description`,`private_amenities`,`commercial_amenities`,
                       `property_view`,`plot_size`,`property_size`,`bedroom`,`bathroom`,`agent_id`,`agent_name`,`agent_email`,`agent_phone`,`agent_photo`,
                       `agent_info`,`developer`,`build_year`,`completion_status`,`floor`,`parking`,`furnished`,`view360`,`photo1`,`photo2`,`photo3`,`photo4`,
                       `photo5`,`photo6`,`photo7`,`photo8`,`photo9`,`photo10`,`lat`,`lng`,`permit_number`)VALUES(NULL,'$prod->reference_number',
                        '$prod->offering_type','$prod->property_type','$prod->price','$prod->price_on_application','$prod->service_charge',
                        '$prod->cheques','$prod->city','$prod->community','$prod->sub_community','$prod->property_name','$tit','$str6',
                        '$prod->private_amenities','$prod->commercial_amenities','$prod->view','$prod->plot_size','$prod->size','$prod->bedroom',
                        '$prod->bathroom','$agent->id','$agent->name','$agent->email','$agent->phone','$agentImage','$agent->info','$prod->developer',
                    '$prod->build_year','$prod->completion_status','$prod->floor','$prod->parking','$prod->furnished','$prod->view360',
                    '$pic0','$pic1','$pic2','$pic3','$pic4','$pic5','$pic6','$pic7','$pic8','$pic9','$lat','$long',
                    '$prod->permit_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "Finished";
    }
    elseif ($prod->offering_type == 'RR' || $prod->offering_type == 'CR'){
        $pri = $prod->price->yearly;
        $sql = "INSERT INTO `api_data`(`property_id`,`reference_number`,`offering_type`,`property_type`,`price`,`price_on_application`,`service_charge`,
                       `cheques`,`city`,`community`,`sub_community`,`property_name`,`title_en`,`description`,`private_amenities`,`commercial_amenities`,
                       `property_view`,`plot_size`,`property_size`,`bedroom`,`bathroom`,`agent_id`,`agent_name`,`agent_email`,`agent_phone`,`agent_photo`,
                       `agent_info`,`developer`,`build_year`,`completion_status`,`floor`,`parking`,`furnished`,`view360`,`photo1`,`photo2`,`photo3`,`photo4`,
                       `photo5`,`photo6`,`photo7`,`photo8`,`photo9`,`photo10`,`lat`,`lng`,`permit_number`)VALUES(NULL,'$prod->reference_number',
'$prod->offering_type','$prod->property_type','$pri','$prod->price_on_application','$prod->service_charge','$prod->cheques','$prod->city','$prod->community',
'$prod->sub_community','$prod->property_name','$tit','$str6','$prod->private_amenities','$prod->commercial_amenities','$prod->view','$prod->plot_size',
'$prod->size','$prod->bedroom','$prod->bathroom','$agent->id','$agent->name','$agent->email','$agent->phone','$agentImage','$agent->info','$prod->developer',
'$prod->build_year','$prod->completion_status','$prod->floor','$prod->parking','$prod->furnished','$prod->view360','$pic0','$pic1','$pic2',
'$pic3','$pic4','$pic5','$pic6','$pic7','$pic8','$pic9','$lat','$long','$prod->permit_number')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo "Finished";
    }
}
echo '<br>Finished';
?>