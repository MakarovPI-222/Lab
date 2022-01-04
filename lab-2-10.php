<?php
$a=1;
for ($i=1; $i<=10;++$i){
 for ($j=1; $j<=10;++$j){
      if ($a % 2 ==0){
      print("<span style='color:red'> $a </span>". ' ');
      ++$a;
      }
      else {
            print($a . ' ');
         ++$a;
       }
  }
print('<br>');
}
?>