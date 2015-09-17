<?php

$json = '{"dma_code":"0","ip":"157.166.226.26","asn":"AS5662","city":"Atlanta","latitude":33.749,"country_code":"US","offset":"-4","country":"United States","region_code":"GA","isp":"Turner Broadcasting","timezone":"America\/New_York","area_code":"0","continent_code":"NA","longitude":-84.388,"region":"Georgia","postal_code":"30348","country_code3":"USA"}';

print $json;

$data = json_decode($json);




print_r($data);



print $data[0]->phoneNumber[0]->number ."\r\n";

foreach($data as $person){
  foreach($person->phoneNumber as $phoneStuff){

    if ($phoneStuff->type == "fax"){
        print $person->firstName. "'s fax number is "
        . $phoneStuff->number. "\r\n";
    }
  }


}






 ?>
