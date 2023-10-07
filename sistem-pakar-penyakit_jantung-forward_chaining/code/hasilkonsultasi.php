<?php
include './admin/koneksi.php';
if(isset($_POST['submit'])){
	$qry='select id from rule where ';
	array_pop($_POST);
	$rule_input=array();
	foreach ($_POST as $where) {
		$qry.=$where."=1 and ";
		array_push($rule_input,$where);
	}
	$qry.="1=1";
	$data=mysqli_query($koneksi,$qry);
	$id='';
	$rule=array(
      array("P001","P002","P003","P004","P005","P006","P007","P023"),
		array("P004","P007","P008","P009","P010","P011"),
		array("P012","P013","P014","P022"),
		array("P004","P015","P016"),
      array("P008","P011","P017","P018"),
      array("P001","P004","P009","P010","P011","P019"),
      array("P001","P007","P020","P021"));
		
	$status=false;
	for ($i=0; $i <1 ; $i++) {
		$result=($rule_input==$rule[$i]);
		if ($result) {
			$status=true;
		}
	}
	
	if($status==true){
		while ($d=mysqli_fetch_array($data)) {
			$id=$d['id'];
		}
		$cari_penyakit="select * from penyakit where id=$id";
		$db=mysqli_query($koneksi,$cari_penyakit);
		while ($d=mysqli_fetch_array($db)) {
			$penyakit=$d['namaPenyakit'];
			$solusi=$d['solusi'];
			include 'sukses.php';
         break;
		}

	}else{
				include 'gagal.php';
	}
}
?>
