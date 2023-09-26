<?php




class person{
    public $name;
    private $age;

    public function Set_name( string $name){



        echo 'name :'. $name;



    }
    
        
    

}


$ali=new person();
echo $ali->name;
$ali->Set_name('ali');