 <?php

    class Car {
        // hak akses = public, private, protected
        // property
        public $brand;
        public $color;

        // Method
        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->color;
        }

    } 
    // Object
    $tesla = new Car();    
    $supra = new Car();

    
    // set value / setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';


    $tesla->color = 'Silver';
    $supra->color = 'Merah';

    // echo
    echo $tesla->getBrand();
    
    echo $tesla->getColor();
    echo '<br>';
    echo $supra->getBrand();
    
    echo $supra->getColor();


?>