<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully\n";
   
   // select a database
   $db = $m->viajanet;
   echo "Usando viajanet";

   $collection = $db->createCollection("clientes");
   echo "BD Clientes foi criado";
   
   $document = array( "name" => "Fulano","lastname" => "Silva","cpf"=> "30020010000");
             
   $collection->insert($document);
   
   }
?>
