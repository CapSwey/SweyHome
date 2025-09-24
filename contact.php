<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width">
<title>e-mail Swey</title>
<link href="css/fontface.css" rel="stylesheet" type="text/css">
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/michelono.css" rel="stylesheet" type="text/css">
<link href="css/mQuery.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="/assets/swey.ico" /><style type="text/css">

a.Anone {
	text-decoration:none; 
	border: none;
	color:inherit;
}
.contentForm {
	width: 330px;
	background-image:url(../images/content_0.40_black.png);
	border-radius: 1em;
	padding-top: 1em;
	margin: 0 auto 2.5em auto;
	padding-bottom: 1em;

}
.formMichelono {
	font-family: 'Ubuntu Condensed', Arial Narrow, "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: white;
	font-size: .9em;
	line-height: 1.5em;
	padding: 0px 30px 15px 30px;
}
.formPadding {
	padding-left: .2em;
}
.formrule {
	clear: both;
}
#name {
	width: 260px;
	height: 20px;
	border: 1px solid white;
	border-radius: .3em;
}

#email {
	width: 260px;
	height: 20px;
	border: 1px solid white;
	border-radius: .3em;
}

#message {
	width: 260px;
	border: 1px solid white;
	border-radius: .3em;
}
.ResetButton {
	font-family: 'Ubuntu Condensed', Arial Narrow, "Helvetica Neue", Helvetica, Arial, sans-serif;
	height: 28px;
	width: 128px;
	color: white;
	font-weight:500;
	border: 1px solid rgba(255,255,255,0);
	border-radius: .3em;
	background: white;
	color: #999;
}
.SendButton {
	font-family: 'Ubuntu Condensed', Arial Narrow, "Helvetica Neue", Helvetica, Arial, sans-serif;
	width: 128px;
	height: 28px;
	font-weight:500;
	float: right;
	border: 1px solid rgba(255,255,255,0);
	border-radius: .3em;
	background: white;
	color: #999;
}

.SendButton:hover, .SendButton:focus, .ResetButton:hover, .ResetButton:focus {
	color: rgba(255,255,255,0.90);
	background: rgba(255,255,255,0.40);
}
#name:focus, #email:focus, #message:focus {background: rgba(255,255,255,0.50);}
.content {padding-bottom: 1em;}

</style>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CSS ENDS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ JS FORM STARTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<script type="text/javascript">

function checkForm(form) {						// Valideer het formulier
	var formOk = true;
	
	if (form.name.value == "") {
		alert("Please leave your name");
		var obj = document.getElementById("name")
		obj.style.backgroundColor = "#81F781";
		formOk = false;		
	}
	else if (form.email.value == "") {
		alert("Please enter a valid email address");
		var obj = document.getElementById("email")
		obj.style.backgroundColor = "#81F781";
		formOk = false;		
	}
	else if (form.message.value == "") {
		alert("You didn't leave a message");
		var obj = document.getElementById("message")
		obj.style.backgroundColor = "#81F781";
		formOk = false;		
	}
	return formOk;
}
</script>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ JS FORM END ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ JS RESPONSIVE STARTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<script src="script/respond.min.js"></script>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ JS RESPONSIVE END ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
</head>

<body>
<div class="content">
  <h1><a class="Anone" href="http://swey.nl/index.php" title="swey.nl">Swey<span class="black">.mail</span></a></h1>
</div>
  <div class="contentForm">
    <form name="eForm" method="post" onsubmit="return checkForm(this)" action="post.php">
      <!-- + + + + + + + + + + begin formrule naam  + + + + + + + + + +  -->
      <div class="formrule">
        <div class="formMichelono"><span class="formPadding">Name</span><br>
          <input name="name" id="name" type="text" size="32" maxlength="128" style="padding-left: 6px" />
        </div>
      </div>
      <!-- + + + + + + + + + + eind formrule naam + + + + + + + + + + +  --> 

		<!-- + + + + + + + + + + begin formrule mail  + + + + + + + + + +  -->
      <div class="formrule">
        <div class="formMichelono"><span class="formPadding">Mail</span><br>
          <input name="email" id="email" type="text" size="32" maxlength="128" style="padding-left: 6px" />
        </div>
      </div>
      <!-- + + + + + + + + + + eind formrule mail + + + + + + + + + + +  --> 

      <!-- + + + + + + + + + + begin formrule bericht + + + + + + + + +  -->
      <div class="formrule">
        <div class="formMichelono"><span class="formPadding">Message</span><br>
          <textarea name="message" id="message" rows="7" cols="32" style="padding: 4px 0 0 6px"></textarea>
        </div>
      </div>
      <!-- + + + + + + + + + + eind formrule bericht  + + + + + + + + +  --> 

		<!-- + + + + + + + + + + begin formrule submit  + + + + + + + + +  -->
      <div class="formrule"> &nbsp;
        <div class="formMichelono">
          <input name="Erase" class="ResetButton" type="reset" value="Clear" />
          <input name="Submit" class="SendButton" type="submit" value="Send" >
        </div>
      </div>
      <!-- + + + + + + + + + + eind formrule submit + + + + + + + + + +  --> 
      <!-- + + + + + + + + + + begin formrule mail  + + + + + + + + + +  -->
      <div class="formrule"> </div>
      &nbsp; 
      <!-- + + + + + + + + + + eind formrule mail + + + + + + + + + + +  -->
    </form>
</div>
  <div id="footer">
    <nav>
      <ul>
        <li><a href="http://www.swey.nl/contact.php" class="email" title="Send me an e-mail"></a></li>
        <li><a href="https://www.facebook.com/mjlmeijer" target="_blank" class="facebook" title="Follow me on Facebook"></a></li>
        <li><a href="https://twitter.com/mjlmeijer" target="_blank" class="twitter" title="Follow me on Twitter"></a></li>
        <li><a href="http://nl.linkedin.com/pub/michel-meijer/56/675/835" target="_blank" class="linkedin" title="Follow me on LinkedIn"></a></li>
        <li><a href="https://nl.pinterest.com/mjlmeijer/" target="_blank" class="pinterest" title="Follow me on Pinterest"></a></li>
        <li><a href="https://www.instagram.com/michelono/" target="_blank" class="instagram" title="Follow me on Instagram"></a></li>       
        <li><a href="https://www.youtube.com/@capswey" target="_blank" class="youtube" title="Follow me on YouTube"></a></li> 
      </ul>
    </nav>
  </div>
</body>
</html>
