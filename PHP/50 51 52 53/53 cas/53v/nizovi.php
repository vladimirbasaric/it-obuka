<?php

function najveci($niz) {
  $max = $niz[0];
  foreach ($niz as $element) {
    if ($element > $max) {
      $max = $element;
    }
  }
  return $max;
}

function najmanji($niz) {
  $min = $niz[0];
  foreach ($niz as $element) {
    if ($element < $min) {
      $min = $element;
    }
  }
  return $min;
}

function prosecni($niz) {
  $suma = 0;
  $broj = 0;
  foreach ($niz as $element) {
    $suma += $element;
    $broj += 1;
  }
  return $suma / $broj;
}

?>