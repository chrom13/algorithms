<?php
function bubbleSort($arr)
{
    $aux=null;
    for($i=0;$i<count($arr)-1;$i++)
    {
        for($j=0;$j<count($arr)-$i-1;$j++)
        {
            if($arr[$j+1]<$arr[$j])
            {
                $aux=$arr[$j+1];
                $arr[$j+1]=$arr[$j];
                $arr[$j]=$aux;
            }
        }
    }
    return $arr;
}


print_r(bubbleSort(array(5,23,43,1,2,67,7,8,4,5,23)));