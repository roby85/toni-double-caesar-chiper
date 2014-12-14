<!DOCTYPE html>
<html>
<head>
	<title>Toni Double Caesar Chiper</title>
</head>
<body>
	<center>
		<h1>Double Caesar Chiper</h1>
		<hr/>
		<br/>
		<h3>Input for Encrypt/Decrypt</h3>
		<form method="POST" action="">	
			<input type="text" name="plaintext" placeholder="plain text" required>
			<input type="number" max="10" name="n1" placeholder="jumlah pertama" required>
			<input type="number" max="10" name="n2" placeholder="jumlah kedua" required>
			<input type="submit" name="btn_encrypt" value="encrypt">
			<input type="submit" name="btn_decrypt" value="decrypt">
		</form>
		<br/>
		<h3>Encrypt/Decrypt Result</h3>
	</body>
	</html>
	<?php
if(!empty($_POST)){ //if do action
	$plus = $_POST['n1']+1+$_POST['n2'];
	$string = $_POST['plaintext'];
	$newstring = $_POST['plaintext'];
	if(isset($_POST['btn_encrypt'])) {//jika melakukan encrypt
		for ($i=0;$i<strlen($string);$i++) {
			$ascii = ord($string[$i]);
			$ascii = $ascii + $plus;
	    if($ascii == 90) { //uppercase bound
	        $ascii = 65; //reset back to 'A' 
	    } 
	    else if($ascii == 122) { //lowercase bound
	        $ascii = 97; //reset back to 'a' 
	    } 
	    else {
	    	$ascii++;
	    }
	    $newstring[$i] = chr($ascii);
		} 
	}else if(isset($_POST['btn_decrypt'])) { //jika melakukan decrypt

		for ($i=0;$i<strlen($string);$i++) {
			$ascii = ord($string[$i]);
			$ascii = $ascii - ($plus+2);
	    if($ascii == 90) { //uppercase bound
	        $ascii = 65; //reset back to 'A' 
	    } 
	    else if($ascii == 122) { //lowercase bound
	        $ascii = 97; //reset back to 'a' 
	    } 
	    else {
	    	$ascii++;
	    }
	    $newstring[$i] = chr($ascii);
		} 
	}	
echo '<div style="border:1px solid gray">';
echo '<p><strong>Plaintext : </strong>'.$_POST['plaintext'].'</p>';
echo '<p><strong>angka pertama : </strong>'.$_POST['n1'].'</p>';
echo '<p><strong>angka kedua : </strong>'.$_POST['n2'].'</p>';
echo '</div><br/>';
?>
<span style="font-size:40px;padding:5px;background-color:#F4F4F4"><?php echo $newstring;?></span>
<?php
}

?>
<br/>
<br/>
<small style="color:gray">copyright &copy; 2015 ToniStark</small>
</center>