<?php
$start_time = microtime(true) * 1000;

$set_numbers = array(1,2,3,4,5,6,7,8,9,24,20,-5,-8,-10,35,45,-20);
$target = 25 ; 
// find terget geter then number
//$count_array = sizeof($set_numbers);
$gaterthen_number = [];
$lessthen_number = [];
$nagative_number = [];
$ultimate_numbers = [];
$stor_numbers = [];
foreach($set_numbers as $val)
{   
    if($target < $val)
    {
        array_push($gaterthen_number,$val);
    }elseif($target > $val && $val > 0)
    {
        array_push($lessthen_number,$val);

    }elseif($target > $val && $val < 0)
    {
        array_push($nagative_number,$val);
    }
}
$gaterthen_array_size = sizeof($gaterthen_number);
$lessthen_array_size = sizeof($lessthen_number);
$nagative_array_size = sizeof($nagative_number);
// echo "gaterthen :";
// print_r($gaterthen_number);
// echo "<br>";

// echo "lessthen :";
// print_r($lessthen_number);
// echo "<br>";

// echo "nagative :";
// print_r($nagative_number);
// echo "<br>";

if(!empty($gaterthen_number) && !empty($nagative_number))
{
    
    for($i=0;$i<$gaterthen_array_size;$i++)
    {
        for($j=0;$j<$nagative_array_size;$j++)
        {           
            $sumOfGatNag = $gaterthen_number[$i] + $nagative_number[$j];
            if($target == $sumOfGatNag)
            {
                $pair = "(".$gaterthen_number[$i].",".$nagative_number[$j].")";
                //array_push($ultimate_numbers,$gaterthen_number[$i], $nagative_number[$j]);
                array_push($ultimate_numbers,$pair);
            }
        }
    }        
}

if(!empty($lessthen_number))
{
    for($i=0;$i<$lessthen_array_size;$i++)
    {       
        if(in_array(($target - $lessthen_number[$i]),$lessthen_number))
        {
            //echo $target - $lessthen_number[$i];
                        
            
            if(!in_array($lessthen_number[$i],$stor_numbers))
            {
                array_push($stor_numbers,($target - $lessthen_number[$i]));                

                array_push($stor_numbers,$lessthen_number[$i]);

                $pair2 = "(".$lessthen_number[$i].",".($target - $lessthen_number[$i]).")";
                array_push($ultimate_numbers,$pair2);
            }
            
        }
    }
}

print_r($ultimate_numbers);

$end_time =microtime(true) * 1000;
// echo '<br>';
// echo "Executing Time in Micro : ";
// print_r($end_time - $start_time);
 
?>