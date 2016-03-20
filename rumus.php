<?php
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$operator = $_POST['operator'];
if ($operator == "tambah")
{
  $hasil = $nilai1 + $nilai2;
  $tanda = "+";
}
else if ($operator == "kurang")
{
  $hasil = $nilai1 - $nilai2;
  $tanda = "-";
}
else if ($operator == "kali")
{
  $hasil = $nilai1 * $nilai2;
  $tanda = "*";
}
else if ($operator == "bagi")
{
  $hasil = $nilai1 / $nilai2;
  $tanda = "/";
}
header ("location:index.php?bil3=$hasil");

?>
