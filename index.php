<ul>
  <li><a href="index.php">الرئيسية</a></li>
    <li><a href="key.php">فك التشفير</a></li>

</ul>

<?php
	require_once('./includes/functions.php'); 
		
	$meess = new Meess();
	$meess->init($db = new Database());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>تشفير الرسائل</title>
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
		<fieldset>
		  <legend>إرسال رسالة </legend>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="msgForm" >
			<h4><textarea placeholder='Auto-Expanding Textarea' id="msgField" name="message"   class="textarea" >أدخل نص الرسالة هنا ...</textarea></h4>
			<input type="submit" name="submit" id="submitMsg" value="إرسال" class="submit" />
			
			<a href="key.php" style="text-decoration: none;"><input type="button" value="صفحة فك التشفير" /></a>

			</form>
		</fieldset>
		<div id="errorMsg"></div> 	
		<br />
		
 
		<div id="errorKey"></div> 	
		
		<?php } 
		?>
		
	</div>
	<script src="js/validate.js" ></script> 
</body> 
</html>    
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
    width: 98%;
    font-size: 2.0em;
    text-align: justify;
    direction: rtl;
    line-height: normal;
      height: 565px;
     resize: vertical; 


}
.message {
  
    margin: 0;
    height: auto;
    width: auto;
    font-size: 2.0em;
    text-align: justify;
    direction: rtl;
    line-height: normal;
}
@media (min-width: 640px) {  } 
@media (min-width:960px) {   } 
@media (min-width:1100px) {   }




@media (min-width: 481px) and (max-width: 768px) {
    fieldset {
     margin: 0;
height: auto;
    width: auto;
    font-size: 1.2em;
    zoom: 3;
	} 
		div.content {
 
    zoom: 3;
    
	} 
}
 
@media (min-width: 321px) and (max-width: 480px) {
     fieldset {
     margin: 0;
height: auto;
    width: auto;
    font-size: 1.2em;
    zoom: 3;
    
	} 
	
	
	div.content {
 
    zoom: 3;
    
	} 
}
 
@media (max-width: 320px) {
   fieldset {
     margin: 0;
height: auto;
    width: auto;
    font-size: 1.2em;
    zoom: 3;
	} 
		div.content {
 
    zoom: 3;
    
	} 
	
	
	
	
}

</style>



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

	.animated {
    			-webkit-transition: height 0.2s;
				-moz-transition: height 0.2s;
				transition: height 0.2s;
			}
			
			
			
			
			
			
			
			
			
 
			
			
			
			
</style>


<script>
    		$(function(){
				$('.normal').autosize();
				$('.animated').autosize({append: "\n"});
			});
		</script>
		
