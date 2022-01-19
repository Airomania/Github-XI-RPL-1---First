<?php 

echo "WHILE";
$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

echo "<hr>";
$x = 1; 
 
while($x <= 10) {
    echo "Angka $x <br>";
    $x++;
} 

echo "<hr>";

$i=100;
while ($i >= 0)
{
   echo "$i";
   echo "<br />";
   $i-=8;
}

echo "<hr>";

echo "DO WHILE";
echo "<br>";

$i=1;
do
{
  echo "$i";
  echo "<br />";
  $i=$i+1;
} while ($i <= 10);

echo "<hr>";

$x=1;
do{
 echo "Angka ke $x <br>";
 $x++;
}
while($x<=6);

echo "<hr>";
 
$i=1000;
do
{
  echo "$i";
  echo "Akan tampil di browser";
  $i=$i+1;
} while ($i <= 10);

?>
