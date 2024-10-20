<?php 

// define('NAMA', "Annisa");
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Nisa';
// }

// echo Coba::NAMA;


// echo __LINE__;
// echo __FILE__;
// echo __DIR__;
// __TRAIT__
// __METHOD__
// __NAMESPACE__

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


