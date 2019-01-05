<h2 style="margin-left:30px; margin-top:80px;">Jawaban Soal 5</h2>

<div class="panel panel-default">
<div class="panel-body">
    <div class="col-md-12">
    <form action="" method="post">
      <div class="form-group">
        <label for="">Masukkan Jumlah Orang</label>
          <input type="number" class="form-control" value="" name="jml_orang">
      </div>
      <div class="form-group">
        <input type="submit" name="hitung" class="btn btn-md pull-left btn-primary" value="Hitung">
      </div>
    </form>
    <br><br>
    <?php
     if (isset($_POST['hitung'])) {
        $jmlorang=$_POST['jml_orang'];
    
        return jabatTangan($jmlorang);
        
    }
    ?>
  </div>
</div>
</div>

<?php 

$array_bil=array();

function jabatTangan($value){

	$jumlah=0;
	for ($i=$value-1; $i >= 1; $i--) { 
			$jumlah += $i;
		}
		echo "Jumlah jabat tangan = $jumlah kali";
		
	}
    
 ?>
