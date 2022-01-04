<?php
$n=rand(1,10);
$m=rand(10,100);
echo("4 вариант");
print('<br>');
print("n=" . $n);
print('<br>');
print("m=" . $m);
print('<br>');
$k=0;
for($i=$n;$i<$m;$i++){
  $a=$i;
  $s=0;
   while($a>0){
   $s=$s+($a%10);
   $a=$a/10;
  }
 if($i%$s==0){
   $k=1;
    echo $i;
    print('<br>');
  }
 }
?>