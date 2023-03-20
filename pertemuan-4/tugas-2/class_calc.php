<?php
        /**
         * Task 1
         * Buatlah class Calculator 2 bilangan
         * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
         * Tampilkan masing-masing method dengan object
         */
            class Calculator {
                public $bilangan1;
                public $bilangan2;

                public function __construct($bil_pertama, $bil_kedua) {
                    // code..
                    $this->bilangan1 = $bil_pertama;
                    $this->bilangan2 = $bil_kedua;
                    echo "<h3><p>First number is <strong>{$this->bilangan1}</strong> and second number is <strong>{$this->bilangan2}</strong>.</p></h3>";
                }

                // Method lainnya
                public function Pertambahan() {
                    $tambah = $this->bilangan1 + $this->bilangan2;
                    return $tambah;
                }
                public function Pengurangan() {
                    $kurang = $this->bilangan1 - $this->bilangan2;
                    return $kurang;
                }
                public function Perkalian() {
                    $kali = $this->bilangan1 * $this->bilangan2;
                    return $kali;
                }
                public function Pembagian() {
                    $bagi = $this->bilangan1 / $this->bilangan2;
                    return $bagi;
                }
            }

            // Buat object dan tampilkan masing-masing method
            $calculator = new Calculator(28, 6);

            echo 'Addition Result (Pertambahan): '.$calculator->Pertambahan();
            echo '<br>Subtraction Result (Pengurangan): '.$calculator->Pengurangan();
            echo '<br>Multiplication Result (Perkalian): '.$calculator->Perkalian();
            echo '<br>Division Result (Pembagian): '.number_format($calculator->Pembagian(),2);
        ?>