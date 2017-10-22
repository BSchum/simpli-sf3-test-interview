<?php

namespace AppBundle\Services;

class DataService
{
    public function OrganizeData(array $inputData){
        $organizedData =  array();
        $isOdd = 1;
        foreach ($inputData as $data){
            if(($data[0]+$data[1])%2 ==0)
                $isOdd = 1;//paire
            else
                $isOdd = 0;//impaire
            array_push($organizedData,array($data[0],$data[1],$data[0]+$data[1],$isOdd));

        }
        return $organizedData;
    }
}