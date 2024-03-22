<?php

    class Alquran {
        protected $nama_surat;
        protected $Ayat;
        

        protected function __construct($nama_surat, $Ayat){
            $this->nama_surat = $nama_surat;
            $this->Ayat = $Ayat;
           

        }

        protected function getinfo(){
            echo 'Nama Surat : ' . $this->nama_surat . '<br>';
            echo 'Ayat: ' . $this->Ayat . '<br>';
            

        }
        
    }

    class Almaun extends Alquran {
        public $halaman;


        public function __construct($nama_surat, $Ayat, $halaman){
            parent ::__construct($nama_surat, $Ayat);
            $this->halaman = $halaman;
        }

        public function getInfoAlmaun(){
            parent::getInfo(); 
            echo ' Berada di halaman : ' . $this->halaman . '<br>';
        }
    }
        class Albaqarah extends Alquran {
            public $halaman ;
            
            public function __construct($nama_surat , $Ayat , $halaman){
                parent::__construct($nama_surat, $Ayat);
                $this->halaman = $halaman;
            }

            public function getInfoAlbaqarah() {
                parent::getInfo();
                echo'Berada di halaman: '. $this->halaman . '<br>';
            }
    }

        class Aliimran extends Alquran {
            public $halaman ;
            
            public function __construct($nama_surat , $Ayat , $halaman){
                parent::__construct($nama_surat, $Ayat);
                $this->halaman = $halaman;
            }

            public function getInfoAliimran() {
                parent::getInfo();
                echo'Berada di halaman: '. $this->halaman . '<br>';
            }
    }


?>