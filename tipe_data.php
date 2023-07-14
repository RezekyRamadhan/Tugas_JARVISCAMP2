<?php

//Tipe Data integer

$umur = 20;

var_dump($umur);

//Tipe Data Float

$phi = 3.14;

var_dump($phi);

//string

$nama = "Rezeky";

var_dump($nama);

echo "<br>";

echo "Hello  $nama Umur saya $umur. Nilai 'phi' adalah $phi";

// boolean 

$isStudent = true;

echo "<br>";

var_dump($isStudent);

// array

$siswa = ["Rezeky", 17, true];

echo "Haloo Nama Saya $siswa[0],umur saya adalah $siswa[1] tahun.";

//array: asosiatif

$mahasiswa = ["nama" => "Rezeky Ramadhan S", "UMUR" => 17, "IPK" => 4.0];

echo "Hai saya $mahasiswa[nama], saya seorang mahasiswa dengan ipk $mahasiswa[ipk]";