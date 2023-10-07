<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hapus Data</title>
</head>
<body>
<?php
require "../koneksi.php";
$id = null;
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
if ($id == null) {
	header("location: gejala.php");
}
if (!empty($_POST)) {
	$id = $_POST['id'];
	$sql = "delete from gejala where idGejala ='$id'";

//queri ke MySQL
	$result = mysqli_query($koneksi, $sql);

	header("location: gejala.php");
}
?>
<form method="POST" action="hapusgejala.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<P>APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?</P>
	<div>
		<button type="submit">Ya</button>
		<a href="gejala.php"> Tidak </a>
	</div>
</body>
</html>