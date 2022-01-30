<?php
function selectionSort($arr)
{
    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$j]<$arr[$i])
            {
                $aux=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$aux;
            }
        }
    }
    return $arr;
}


print_r(selectionSort(array(5,23,43,1,2,67,7,8,4,5)));