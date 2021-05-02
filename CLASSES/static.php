<?php
class myClass {
   static $myStaticProperty = 42;
   static function myMethod() {
    echo self::$myProperty;
}
}

echo myClass::$myStaticProperty;
myClass::myMethod();
?>