<?php




class person{
    public $name;
    private $age;



    public function Set_name($name){

        echo 'name :'. $name;



    }
    
        
    

}


$ali=new person();
echo $ali->name;
echo $ali->age;