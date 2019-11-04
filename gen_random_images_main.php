<?php
##Helpful shell script to remove a string for when people inevitably mess up the naming.
#for file in *; do mv "${file}" "${file/b1/}"; done
#for file in *; do mv "${file}" "${file/b2/}"; done
$files = scandir('Stimuli');

$done = 0;
while($done == 0){
  $publisher = array("usatoday_", "fox_", "denverpost_", "vox_", "sacbee_", "daytonabeach_", "atlantic_", "cnn_");
  shuffle($publisher);
  $article = array("usatoday_", "fox_", "denverpost_", "vox_", "sacbee_", "daytonabeach_", "atlantic_", "cnn_");
  shuffle($article);
  $adtype = array("na", "na", "hq", "lq", "hqpol", "lqpol");
  shuffle($adtype);

  $done = 1;
  $image_names = array();
  for($i=0; $i<count($article); $i++){
    $image_name = $publisher[$i] . $article[$i] . $adtype[$i] . '.png';
    $image_names['image'. $i] = $image_name;
          #  print_r($image_name);
    if(!in_array($image_name, $files,true)){
           # echo 'missing';
            $done = 0;

    }
    #echo $exists == 0;
   # if($exists==0){
   #     $done = 0;
   # }
  }
}



$returnarray = array();
for($i=0; $i<count($article_drawn); $i++){
    $returnarray['image' . $i] =  '<img src="http://zmarko.scripts.mit.edu/Stimuli/' . $image_names['image' . $i] . '>';
}

print  json_encode($returnarray);
?>

~
~
~
~
~
