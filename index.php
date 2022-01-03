<p> Дата и время;
<p>
<?php
    mysql_query('SET NAMES UTF-8');
    $d=date("d.m.Y H:i");
    echo($d);
    echo "<p><a href='lab-1-1.php'>Типы переменных</a></p>";
    echo "<p><a href='lab-1-2.php'>Арифметические операции</a></p>"; 
    echo "<p><a href='lab-1-3.php'>Константа</a></p>";
    
  
?>