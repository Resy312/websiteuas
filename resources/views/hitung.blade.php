<?php

class bmr
{
    public $gender,
    $usia,
    $tinggi,
    $berat,
    $hasil,
    $aktivitas;

    public function __construct($gender, $usia, $tinggi, $berat,  $aktivitas)
    {

        $this->gender = $gender;
        $this->usia = $usia;
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->aktivitas = $aktivitas;
    }


    public function hitungBmr ()
    {
        $hasil ='';
        if ($this->gender == "Pria")  {
            switch ($this->aktivitas) {

                case 'Ta':
                    $bmr = 66 + (13.7 * $this->berat) + (5 * $this->tinggi ) - (6.8 * $this->usia);
                    $hasil = $bmr * 1.2;
                    break;

                case 'Ta':
                $bmr = 66 + (13.7 * $this->berat) + (5 * $this->tinggi ) - (6.8 * $this->usia);
                $hasil = $bmr * 1.2;
                 nm,kilo9o0o'break;
                
                default:
                    # code...
                    break;
            }
        }
    }
}