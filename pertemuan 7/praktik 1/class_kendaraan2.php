<?php


    class Kendaraan {
        protected $jenis;
        protected $bahanBakar;

        protected function __construct($jenis, $bahanBakar) {
            $this->jenis = $jenis;
            $this->bahanBakar = $bahanBakar;
        }

        protected function getInfo() {
            echo "Jenis Kendaraan: " . $this->jenis . "<br>";
            echo "Bahan Bakar: " . $this->ahanBakar . "<br>";
        }
    }

    class Motor extends Kendaraan {
        protected $jenis;
        protected $bahanBakar;

        protected function __construct($jenis, $bahanBakar)
        { 
            $this->jenis = $jenis;
            $this->bahanBakar = $bahanBakar;
        }

        protected function getInfo() {
            echo "jenis kendaraan:" . $this->jenis . "<br>";
            echo "Bahan Bakar:" . $this->bahanBakar . "<br>";

        }
    }

    class Motor extends Kendaraan {
        public $roda;

        public funtion __construct($jenis,$bahanBakar,$roda)
        { 
            parent::__construct($jenis,$bahanBakar);
            $this->roda = $roda;
        }
        public function getInfo(){
            parent::getInfo();
            echo "jumlah roda"
        }
    }
    

    class submarine extends kendaraan {
        public $max_kedalaman;

    }
?>  