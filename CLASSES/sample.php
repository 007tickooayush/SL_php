<?
class Person{
    public $age;
    public $name;
    public function __construct($age,$name){
        $this->age = $age;
        $this->name =$name;
    }

    public function __destruct(){
        echo 'Object Destroyed';
        //use destructor or unset($obj);
    }

    public function greet(){
        echo "hi". '\n';
        echo $this->age;
    }
    
}
$hellsent = new Person();
$hellsent->age = 23;
$hellsent->speak();

?>