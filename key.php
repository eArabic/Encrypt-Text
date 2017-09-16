<ul>
  <li><a href="index.php">الرئيسية</a></li>

</ul>


<style>
       input{
    font-size: larger;
} 
    
    fieldset {
     margin: 0;
height: auto;
    width: auto;
    font-size: 1.2em;
    direction: rtl;
	}
	
	textarea {
margin: 0;
    height: auto;
    width:auto;
    font-size: 2.0em;
    text-align: justify;
    direction: rtl;
    line-height: normal;
    font-family: segoeui;

}
.message {
  height: auto;
    width: auto;
 
    font-size: 1.2em;
    text-align: justify;
    direction: rtl;
    line-height: normal;
}


div.message{
    text-align: justify;
    direction: rtl;
    font-size: larger;
    line-height: 1.7;
    padding: 15px;
    background: rgba(236, 202, 26, 0.5);
    font-family: segoeui;

}

@font-face {
  font-family: "segoeui";
  src: url("segoeui.woff2") format("woff2"),
       url("segoeui.woff") format("woff"),
       url("segoeui.ttf") format("truetype"),
       url("segoeui.eot") format("embedded-opentype"),
       url("segoeui.svg") format("svg");
  font-weight: normal;
  font-style: normal;
}

</style>


<?php
	require_once('./includes/functions.php'); 
		
	$meess = new Meess();
	$meess->init($db = new Database());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>فك تشفير الرسائل</title>
	<link rel="stylesheet" href="css/style1.css" type="text/css" /> 
</head>
<body>     
	<div class="content">
	
		<?php
			if (isset($_POST['message']) && !empty($_POST['message'])) {  
				 $meess->insert_message($_POST['message']); 
			} else if (isset($_POST['key']))  { 
				echo $meess->tryget_message($_POST['key']);
				 
			} else {	
		?>
 
		 
		<div id="errorMsg"></div> 	
		<br />
		
		<fieldset>
		  <legend>معرفة نص الرسالة</legend>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="keyForm" >
			<h4><input type="text" name="key" id="keyField" cols="60" rows="10" style="resize: none;" value=""></h4>
			<input type="submit" name="submit" value="فك التشفير" class="submit" />
						<a href="index.php" style="text-decoration: none;"><input type="button" value="الرئيسية" /></a>
			</form>
		</fieldset>	 
		<div id="errorKey"></div> 	
		
		<?php } 
		?>
		
	</div>
	<script src="js/validate.js" ></script> 
</body> 
</html>    




<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
        font-size: x-large;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>