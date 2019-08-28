<?php
include "Kalkulator.php";
if($_POST)
{
$novej=new Kalkulator();
//-----------------------------------------------
if(isset($_POST['fakt']))
{

try
{
$prom=$novej->Faktorial($_POST["vstup"]);
echo "Faktoriál čísla ".$_POST["vstup"]." je: ".$prom."<br>";
}
catch(Exception $e)
{
echo('Došlo k chybě: ' . $e->getMessage());
echo"<br>";
}

}
//------------------------------------------------

if(isset($_POST['fibb']))
{
  try
  {
$vysledek=$novej->Fibonacci($_POST["vstup"]);

echo "Na ".$_POST["vstup"].". pozici Fibonacciho posloupnosti je číslo: ".$vysledek."<br>";
}
catch(Exception $e)
{
  echo('Došlo k chybě: ' . $e->getMessage());
echo"<br>";

}
}
//--------------------------------------------------------

echo"<br>";
}
 ?>

 <form action="index.php" method="post">
   <input type="number" name="vstup" min=0 placeholder="Zadej vstupni cislo"><br><br>

   <input type="submit" value="Fibonacci" name="fibb" >
   <input type="submit" value="Faktorial" name="fakt" >
