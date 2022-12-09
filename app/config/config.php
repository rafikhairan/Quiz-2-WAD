<?php

define('BASEURL', 'http://localhost:8080/tugas/quiz2/public');
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "quiz_2");

function rupiah($angka) {
  $harga = 'Rp' . number_format($angka, 0, ',', '.');
  return $harga;
}