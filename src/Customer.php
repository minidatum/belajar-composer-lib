<?php 

namespace minidatum\belajar;
// Test
class Customer{


    public function __construct(private string $name)
    {

    }

    function sayHalo(string $name)
    {
        echo "Halo $name, my name is $this->name";
    }
}


?>