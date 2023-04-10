<?php

    class Kendaraan {
        protected $jenis;
        protected $bahanBakar;

        protected function __construct($jenis, $bahanBakar)
        {
            echo $this->jenis = $jenis;
            echo $this->bahanBakar= $bahanBakar;
        }

            protected function getInfo() {
                echo "Jenis Kendaraan: " . $this->jenis . "<br>";
                echo "Bahan Bakar:" . $this->bahanBakar . "<br>";
        }
    }

        class Motor extends Kendaraan {
            public $roda;

            public function __construct($jenis,$bahanBakar,$roda)
            {
                parent::__construct($jenis,$bahanBakar);
                $this->roda = $roda;
            }

            public function getInfo() {
                parent::getInfo();
                echo "Jumlah Roda: " . $this->roda . "<br>";
            }
        }


        class submarine extends Kendaraan {
            public $maks_kedalaman;

            public function __construct($jenis,$bahanBakar,$max_depth)
            {
                parent::__construct($jenis,$bahanBakar);
                $this->maks_kedalaman = $max_depth;

            }

            public function getInfo() {
                parent::getInfo();
                echo "kedalaman: " . $this->maks_kedalaman . "<br>";
            }

        }

?>