<?php 
$conn=new Mysqli('localhost','root','','db_work')or die("not connected".mysqli_error($conn));
if(isset($_GET['id'])){
	$qry=$conn->query("SELECT * FROM language where id=".$_GET['id']);
	foreach ($qry->fetch_array(result) as $k => $val) {
		$$k=$val;
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Translate language</title>
<meta charset="utf-8">
<meta content="width=device-width" name="text">
<script type="text/javascript" src="js/a.js"></script>
<script type="text/javascript" src=""></script>
<style type="text/css">

	body{ background: rosybrown;
	}
button{
	padding: 30px;

    	margin-left: 80px;
    	margin-top: 100px;
    	border-radius: 80px;
    	background: green;
    	font-size: large;
    	
}
.btn{
	margin-left: 50px;
	
}
	</style>
     </head>
	<body>
		<?php $aa=$conn->query("SELECT * FROM language");
		while ($row=$aa->fetch_assoc()):
		    $a=$row['id']; 
			$b=$row['variable'];
			$c=$row['kinyarwanda'];
			$d=$row['english'];
			$e=$row['francais'];
			$f=$row['kiswahili'];
		
		?>
	<div >
		<form method="POST">
		<input type="text" name="variable" placeholder="Enter V_Gura to Translate!!!" style="font-size: 30px; color: black;">
		<button class="btn btn-saccess" id="kiny" name="kinyarwanda" >KINYARWANDA</button><button class="btn btn-saccess" id="eng" name="english">ENGLISH</button>	<button class="btn btn-saccess" name="francais" id="fr">FRENCH</button>	<button class="btn btn-saccess" id="kiswahili" name="kiswahili">KISWHALI</button>
	</div>
</form>
	<br><br><br><br>
<div class="btn"><?php
if(isset($_POST['kinyarwanda'])) {
	echo $c;
	
}
elseif (isset($_POST['english'])) {

	echo $d;
}
elseif(isset($_POST['francais'])){
	echo $e;
}
elseif (isset($_POST['kiswahili'])) {
	echo $f;
}




		?>
	<?php endwhile; ?>
	</div>
	</body>

</html>