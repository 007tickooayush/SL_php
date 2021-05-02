<?
class Animal{
    public $name;
    public function speak(){
        echo "Animal";
    }
}

class Dog extends Animal{

}
$d = new Dog();
$d->speak();