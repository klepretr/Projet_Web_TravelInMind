<?php

$data=array(
  array("ID"=>1,"Depart"=>"Bourges","Arrive"=>"Nancy","Heure"=>"18H36","Duree"=>"4h00","Changement"=>1),
  array("ID"=>2,"Depart"=>"Nice","Arrive"=>"Paris","Heure"=>"13H40","Duree"=>"7h00","Changement"=>2),
  array("ID"=>3,"Depart"=>"Paris","Arrive"=>"Lyon","Heure"=>"10h10","Duree"=>"5h00","Changement"=>0),
  array("ID"=>4,"Depart"=>"Orleans","Arrive"=>"Lorient","Heure"=>"15h00","Duree"=>"6h00","Changement"=>1),
  array("ID"=>5,"Depart"=>"Nancy","Arrive"=>"Rennes","Heure"=>"9h00","Duree"=>"5h30","Changement"=>1)
);

echo json_encode($data);
?>
