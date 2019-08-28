<?php
class Kalkulator
{

  public function Faktorial ($vstup)
  {
    if(!ctype_digit($vstup))
    {
      throw new InvalidArgumentException('Vstupem není celé číslo !');


    }

    if($vstup<0)
    throw new InvalidArgumentException('Záporný vstup !');
$vysledek=1;
  for($vstup;$vstup>=2;$vstup--)
  {
$vysledek*=$vstup;


  }
  return $vysledek;


  }

  public function Fibonacci($vstup)
  {
    if(!ctype_digit($vstup))
    {
      throw new InvalidArgumentException('Vstupem není celé číslo !');


    }

    if ($vstup<1)
    throw new InvalidArgumentException('Špatný vstup, vstup musí být v rozmezí 1 - n !');
  $predminula=0 ;
    $minula=1;

    if($vstup==1)
    $aktualni=$predminula;

    if($vstup==2)
    $aktualni=$minula;

    for($i=3;$i<=$vstup;$i++)
    {
    $aktualni=$predminula+$minula;
    $predminula=$minula;
    $minula=$aktualni;
}
  return $aktualni;


  }



}
?>
