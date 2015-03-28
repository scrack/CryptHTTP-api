<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About us</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<span style="padding-left:50px">
<center><h1>About us...</h1></center><br /><br />
<span style="padding-left:50px">

<div id="container">


    <div id="sidebar1">
    	<h1>The api</h1>
        <p>
         <b>how to use this</b><br /><br />
in order to start using this service, all you need to know is how to use simple GET and POST methods with your
program.<br /> <br />
<ul>
<li>to Add a new post, simply POST method on /add.php with the following variables:id,text,key. make sure each of them is filled , otherwise errors may occur.</li><br />
<li>to get a text from a post, use GET method on /get.php , with the 'id' as the only variable. (ex. /get.php?id=hello)</li><br />
<li>incase you want to decrypt, you can go to /decrypt.php and use GET method with the variables text & key
to let us decrypt it for you! please be aware you might have to use url encoding in order for this to work better and with less errors.
of course you can decrypt it on your own, simply base64_decode it and then use your aes key to decrypt it.</li> <br />
 </ul> </p>
    </div>
    <!-- end #sidebar1 -->
    <!-- begin #mainContent -->
    <div id="mainContent">
    	<h2>About</h2>
        <p>
        	<b>What is this site</b><br /><br />
This site was made to allow simple high-secuirty without any need of dedicated server built up ,it is built in a way 
that programmers could simply extract data and interact with the server, through the web protocol.<br /><br />
all of the posts are encrypted with AES encryption and then base64. <br />
the server DOES NOT save the key <br />although,regardless we reccomend you will use your own extra encryption if the information requires another layer of secuirty.


        </p>
    </div>

</div>
</center>
</body>
</html>
