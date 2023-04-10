<?php
class A  

{

    public function disp(){
    echo " Inside the final function";

}
}

class B extends A {

    final public function disp(){
    echo "Inside the final function";
}
}

$obj=new B();

$obj->disp();

?>