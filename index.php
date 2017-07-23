<html> 

<?php

	if(isset($_GET['page'])){
		$name = $_GET['page'];
	
		$len = strlen($name);
		$mid = $len/2;
		$index=0;
		for($i = 0; $i<$len; $i++){
	        if($i<$mid)
				$index+=ord(substr($name,$i, $len));
	        else
				$index-=ord(substr($name,$i, $len));
		}
	
		if($index<0)
		{
			$index*=$index;
			$index=sqrt($index);
			
		}
		
		while($index>9){
			$index=sqrt($index);
		}
		$index=floor($index);

		$housename;
		switch($index){
			case 0 : 
				$housename = "House Arryn";
				break;
			case 1 : 
				$housename = "House Mormont";
				break;
			case 2 : 
				$housename = "House Greyjoy";
				break;
			case 3 : 
				$housename = "House Clegane";
				break;
			case 4 : 
				$housename = "House Lannister";
				break;
			case 5 : 
				$housename = "House Tully";
				break;
			case 6 : 
				$housename = "House Tyrell";
				break;
			case 7 : 
				$housename = "House Arryn";
				break;
			case 8 : 
				$housename = "House Baratheon";
				break;
			case 9 : 
				$housename = "House Stark";
				break;
				
		}
		$houseimage='http://mygothouse.tk/images/houses/'.$index.".jpg";

	}
	else{
		$index=-1;
		$houseimage="http://mygothouse.tk/images/houses/10.jpg";
	}

?>	
<head>
	<meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1"> 
	<meta name="twitter:card" value="summary"> 
	<meta property="og:description" content="Go to mygothouse.tk/YourName to know your GOT House. Click here for more Information."/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<meta property="og:title" content=" <?php if(isset($_GET['page'])) echo $_GET['page'].' belongs to '.$housename; else echo 'Know your GOT House'; ?>"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="/" />
    <meta property="og:image" content="<?php echo $houseimage; ?>" />
	<meta property="og:type" content="article" />
    <meta property="og:url" content="/" />
	<meta property="og:image:type" content="image/jpg" /> 
	<meta property="og:image:width" content="200" /> 
	<meta property="og:image:height" content="300" /> 
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<title>My GOT House</title> 


<center><h1><u>Which house do you belong?</u></h1>

<?php

	if(isset($_GET['page'])){
		echo '<h2>'.$_GET['page'].' belongs to '.$housename.'</h2>';
		echo'</br><img src="'.$houseimage.'" alt="house">';
	}else{
		echo'<img src="'.$houseimage.'" alt="house" style="width:50vw;">';
	}

?>

<style>
.w3-btn {margin-bottom:10px;}

body{
  background-image: url(images/bg.jpg);
  background-size: cover;
  color: white;
}
</style>
<body>

<div class="w3-container">

  <!-- AddToAny BEGIN -->
<center><div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_copy_link"></a>
<a class="a2a_button_facebook_messenger"></a>
</div></center>
<script async src="./helper/page.js"></script>
<!-- AddToAny END -->
</div></center>

             
	</head> 
	<body> 
	
	<div style="text-align: center;font-size:2em;font-family:Consolas, Andale Mono, Lucida Console, Lucida Sans Typewriter, Monaco, Courier New, monospace">FunApp By <a href="https://facebook.com/geekdevang">Devang Chhajed</a></div> 
	</body> 
	<center>
	<div id="sfcy8y2tm9m6332fc9ppelj69cdy6bh8wyg"></div>
<script type="text/javascript" src="https://counter6.freecounter.ovh/private/counter.js?c=y8y2tm9m6332fc9ppelj69cdy6bh8wyg&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="website counter free"><img src="https://counter6.freecounter.ovh/private/freecounterstat.php?c=y8y2tm9m6332fc9ppelj69cdy6bh8wyg" border="0" title="website counter free" alt="website counter free"></a></noscript>


</center>
	
</html>