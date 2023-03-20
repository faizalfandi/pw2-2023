<?php 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;

            public function __construct($panjang, $lebar, $tinggi) {
                $this->panjang = $panjang;
                $this->lebar = $lebar;
                $this->tinggi = $tinggi;
            }

            public function getLuas() {
                $luas = 2 * ($this->panjang * $this->lebar + $this->tinggi * $this->lebar + $this->panjang * $this->tinggi);
                return $luas;
            }

            public function getKeliling() {
                $keliling = 4 * ($this->panjang + $this->lebar + $this->tinggi);
                return $keliling;
            }

            public function getVolume() {
                $volume = $this->panjang * $this->lebar * $this->tinggi;
                return $volume;
            }
    }
?>