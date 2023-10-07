<?php ?>
<br>
<center>
<div style="text-align: center;">
   <h1>HASIL DIAGNOSA</h1><br>
</div>
<div class="container col-6">
   <div class="input-group mb-3">
      <div class="input-group-prepend">
         <span class="input-group-text">
            <h5>PENYAKIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
         </span>
      </div>
      <textarea class="form-control" rows="1" readonly><?php echo "$penyakit"; ?></textarea>
   </div>
   <div class="input-group mb-3">
      <div class="input-group-prepend">
         <span class="input-group-text">
            <h5>SOLUSI PENYAKIT</h5>
         </span>
      </div>
      <textarea class="form-control" rows="6" readonly><?php echo "$solusi"; ?> </textarea>
   </div>
   <h2> <a href="./konsultasi.php">Cek Lagi Disini</a> </h2>
</div>
<br>
<?php  ?>
</center>