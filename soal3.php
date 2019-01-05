<h2 style="margin-left:30px; margin-top:80px;">Jawaban Soal 3</h2>

<div class="panel panel-default">
<div class="panel-body">
<?php
  function garisBintangMiring() {
  for ($i=1; $i <=8 ; $i++) {
    echo "*";
    for ($j=1; $j <= $i ; $j=$j+$i) { 
      echo "<br>";
      echo "<br>";
      for ($a=1; $a <= $i ; $a++) { 
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
      }
    }
  }
  }
  garisBintangMiring();
?>
</div>
</div>

