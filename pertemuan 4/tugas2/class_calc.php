<?php
    class Calculator {

        public $bil1;
        public $bil2;
        
        //method

        function __construct($bil1, $bil2) {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2;
        }
    
        function tambah() {
            return $this->bil1 + $this->bil2;
        }
    
        function kurang() {
            return $this->bil1 - $this->bil2;
        }
    
        function bagi() {
            
            return $this->bil1 / $this->bil2;
        }
    
        function kali() {
            return $this->bil1 * $this->bil2;
        }
    }
        //object
        $calculator = new Calculator(10,8);
        $calculator = new Calculator(11,9);
        $calculator = new Calculator(12,8);
        $calculator = new Calculator(18,9);


        echo "Pertambahan: " . $calculator->tambah() . "<br>";
        echo "Pengurangan: " . $calculator->kurang() . "<br>";
        echo "Pembagian: "   . $calculator->bagi() . "<br>";
        echo "Perkalian: "   . $calculator->kali() . "<br>";
     
?>