<?php

function format_rupiah($angka)
{

  $hasil_rupiah = "Rp. " . number_format($angka, 2, ',', '.');
  return $hasil_rupiah;
}

function printr_pretty($value)
{
  echo "<pre>";
  print_r($value);
  echo "</pre>";
  // die;
}
