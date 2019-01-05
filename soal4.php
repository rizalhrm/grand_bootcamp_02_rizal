<h2 style="margin-left:30px; margin-top:80px;">Jawaban Soal 4</h2>

<div class="panel panel-default">
<div class="panel-body">
    <form action="" class="form-group text-center" method="POST">
        <div class="col-md-12">
            <input type="number" min="0" name="total_belanja" class="form-control" placeholder="Total Belanja" autofocus>
            <br>
            <input type="number" min="0" name="dibayar" class="form-control" placeholder="Uang yang dibayar">
            <br>
            <button type="submit" name="hitung" class="btn btn-success btn-lg pull-left">HITUNG</button>
        </div>
    </form>
    <?php
if(isset($_POST['hitung']))
{
    $total = $_POST['total_belanja'];
    $bayar = $_POST['dibayar'];
?>
<div class="col-md-12">
<h2>HASIL</h2>
<p>
        <b>Keterangan : </b>
        <br>
        <?php if($bayar == $total){ ?>
            <h3>Tidak Ada Uang kembali</h3>
        <?php } elseif($bayar < $total){ ?>
            <h3>Uang dibayarkan Anda Kurang!</h3>
        <?php } else { 
                $jumlah = $bayar - $total;

                $Pecahan1=$jumlah/50000;
                $Sisa1=$jumlah%50000;

                $Pecahan2=$Sisa1/20000;
                $Sisa2=$Sisa1%20000;

                $Pecahan3=$Sisa2/10000;
                $Sisa3=$Sisa2%10000;

                $Pecahan4=$Sisa3/5000;
                $Sisa4=$Sisa3%5000;

                $Pecahan5=$Sisa4/2000;
                $Sisa5=$Sisa4%2000;

                $Pecahan6=$Sisa5/1000;
                $Sisa6=$Sisa5%1000;

                $Pecahan7=$Sisa6/500;
                $Sisa7=$Sisa6%500;

                echo 'Jumlah Uang kembalian:Rp.'.number_format($jumlah),'<br/>';
                echo '<br/>';
                echo 'Anda akan menerima uang dengan sebagai berikut :<br/>';
                echo '<br/>';
                echo 'Uang Rp.50000 = '.(int) $Pecahan1.' Lembar';
                echo '<br/>';
                echo 'Uang Rp.20000 = '.(int) $Pecahan2.' Lembar';
                echo '<br/>';
                echo 'Uang Rp.10000 = '.(int) $Pecahan3.' Lembar';
                echo '<br/>';
                echo 'Pecahan Rp.5000 = '.(int) $Pecahan4.' Lembar';
                echo '<br/>';
                echo 'Pecahan Rp.2000 = '.(int) $Pecahan5.' Lembar';
                echo '<br/>';
                echo 'Pecahan Rp.1000 = '.(int) $Pecahan6.' Lembar';
                echo '<br/>';
                echo 'Pecahan Rp.500 = '.(int) $Pecahan7.' Koin';
                echo '<br/>';

            }
            ?>
    </p>
</div>
<?php } ?>
</div>
</div>