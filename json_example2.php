<?php

$json = '[
          {
         "firstName": "John",
         "lastName": "Smith",
         "age": 25,
         "address":
         {
             "streetAddress": "21 2nd Street",
             "city": "New York",
             "state": "NY",
             "postalCode": "10021"
         },
         "phoneNumber":
         [
             {
               "type": "home",
               "number": "212 555-1234"
             },
             {
               "type": "fax",
               "number": "646 555-4567"
             }
         ]
        },



        {
       "firstName": "Bob",
       "lastName": "Smitherthson",
       "age": 257,
       "address":
       {
           "streetAddress": "211 2nd Street",
           "city": "New Yorky",
           "state": "NY",
           "postalCode": "1021"
       },
       "phoneNumber":
       [
           {
             "type": "home",
             "number": "222 555-1234"
           },
           {
             "type": "fax",
             "number": "646 555-4567"
           }
       ]
   }

   ]';

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
