<?php
//  fonction qui calculera et retournera le factoriel du nombre d'entrée.
function factorielle($nbr)

  {

    if($nbr === 0)
        return 1;
    else
    
    return $nbr*factorielle($nbr-1);
}
echo factorielle(2) .'<br>';


//  fonction qui calculera et retournera le factoriel du nombre d'entrée.

// fonction qui retournera la somme des nombres d'entrée (un nombre variable de paramètres)


function soumme(...$nbr){

    return array_sum($nbr);

}
$addition=soumme(2,2,96);

echo $addition.'<br>';

// fonction qui retournera la somme des nombres d'entrée (un nombre variable de paramètres)


// qui doit être un nombre entier et qui retournera si 

function calc($number){
    for($i=2;$i<$number;$i++){
        if ($number % $i==0){
            $calc=1;
        }
    }if(isset($calc)){
        echo"$number n est pas une nombre premier";

    }else{
        echo"$number nombre premier";
    }
}



// qui doit être un nombre entier et qui retournera si 


call_user_func('calc',7) .'<br>';
call_user_func('factorielle',2) .'<br>';
call_user_func('soumme',2,2,96) .'<br>';



    
?>
