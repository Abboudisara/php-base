<?php
$list=[
    'fatima bobakdi'  =>  ['dwiba','hdidan','romana','autre','autre'],

    'jilali farhati'  =>  ['karoum','sayidati','autre','autre','autre'],

    'fatima chiboub'  =>   ['salh','cha9ri','mona','autre','autre'],

    'farid rgragi'    =>   ['pour mon pére','baydae','wahid wahdin','autre','autre'],

    'kamal kamal'     =>['ayed lghaba','rgragi','nadiran','autre','autre'],
];
 
function répition($a=5,$b=5){
 global $list;

  $Réa=array_rand($list,$a);

  $nbr=array_rand($Réa,$b);
  
  foreach ($Réa as $cle => $i)
  {
    echo 'film de ' .$i.':<br>';
  
  
    foreach ($nbr as $sy)
  {
      echo $list[$i][ $sy] . '<br />'; 
  }
  echo '<br />';
  } ;
} répition(3,3)


?>

    






