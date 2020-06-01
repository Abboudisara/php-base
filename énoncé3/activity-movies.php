<?php

$list=[
    'fatima bobakdi'  =>  ['dwiba','hdidan','romana','autre','autre'],

    'jilali farhati'  =>  ['karoum','sayidati','autre','autre','autre'],

    'fatima chiboub'  =>   ['salh','cha9ri','mona','autre','autre'],

    'farid rgragi'    =>   ['pour mon pére','baydae','wahid wahdin','autre','autre'],

    'kamal kamal'     =>['ayed lghaba','rgragi','nadiran','autre','autre'],
];

$Réa=array_rand($list,5);

$nbr=array_rand($Réa,5);

foreach ($Réa as $cle => $i)
{
  echo 'film de ' .$i.':<br>';


  foreach ($nbr as $sy)
{
    echo $list[$i][ $sy] . '<br />'; 
}
echo '<br />';
};

?>

    






