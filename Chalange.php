<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FamilyGallery;
class Chalange extends Controller
{
    
    public function chalange3()
    {
        $mat = array
        (
        array(1,2,3,4),
        array(5,6,7,8),
        array(9,10,11,12),
        array(13,14,15,16)          
        );

        $mat_length = count($mat);

        for($x=0; $x < $mat_length/2 ; $x++)
        {
            for($y=$x; $y<$mat_length-$x-1; $y++)
            {               
                $temp = $mat[$x][$y];
                //$mat[][] = $mat[$x][$y-1];
                $mat[$x][$y] = $mat[$y][$mat_length-1-$x]; //right to top
                $mat[$y][$mat_length-1-$x] = $mat[$mat_length-1-$x][$mat_length-1-$y]; //bottom to right
                $mat[$mat_length-1-$x][$mat_length-1-$y] = $mat[$mat_length-1-$y][$x];//left to bottom
                $mat[$mat_length-1-$y][$x] = $temp; //temp to left
                //echo '<pre>';print_r($mat);
            }            
        }
            
       $this->displayMatrix($mat,$mat_length);
        
        
    }
    public function displayMatrix($mat,$mat_length)
    {
        for ($i = 0; $i < $mat_length; $i++) 
        { 
            for ($j = 0; $j < $mat_length; $j++) {
                echo $mat[$i][$j] . " ";        
            }
            echo "<br>";
                
        } 
        echo "<br>";
    }    
}
