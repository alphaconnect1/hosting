<?php
include('../common.php');
header('Content-Type: text/html; charset=UTF-8');
if(isset($_SERVER['HTTP_HOST']) && preg_match('/danwin1210\.(i2p|me)$/', $_SERVER['HTTP_HOST'])){
	if(preg_match('/\.me$/', $_SERVER['HTTP_HOST'])){
		$host='https://danwin1210.me';
	}else{
		$host='http://danwin1210.i2p';
	}
}else{
	$host='http://tt3j2x4k5ycaa5zt.onion';
}
?>
<!DOCTYPE html><html><head>
<title>Daniel's Hosting - FAQ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head><body>
<h1>Hosting - Info</h1>
<p><a href="index.php">Info</a> | <a href="register.php">Register</a> | <a href="login.php">Login</a> | <a href="list.php">List of hosted sites</a> | FAQ</p>
<table border="1">
<tr><th>Question</th><th>Answer</th></tr>
<tr><td>Your rules are so strict. Can't you make an exception for my site?</td><td>No, I will not make exceptions for any site and neither am I corruptible by offering me money. Once I start making an exception for your site, I would have to for every other site as well which is the same as if the rules didn't exist.</td></tr>
<tr><td>I have an .htaccess file, but it doesn't work. How can I fix it?</td><td>.htaccess files are meant for Apache2 webservers. My server is based on NginX, which is much faster due to using static configuration files and not reading files like .htaccess at runtime. You can <a href="<?php echo "$host/contact.php"; ?>">contact me</a> and tell me your sites address where the .htaccess file is. I will then check your .htaccess and convert the rules to NginX rules and apply those.</td></tr>
<tr><td>I just uploaded my page, but it's broken. HELP!</td><td>Most likely your site makes use of rewriting rules, which are typically located in an .htaccess file or are mentioned in a README file. Just <a href="<?php echo "$host/contact.php"; ?>">contact me</a> in this case. Also see the previous question.</td></tr>
<tr><td>Can I host a porn site?</td><td>Yes as long as your content is legal you may upload adult content.</td></tr>
<tr><td>What is the directory structure for when I connect via (s)ftp?</td><td>There are several directories you on the server for your account:<br><b>Maildir</b> - used to store your mails in (don't touch it)<br><b>data</b> - You can store application data here that should not be accessible via your site. E.g. configuration or database files.<br><b>tmp</b> - anything saved here will automatically be deleted after about 24 hours<br><b>www</b> - this is where you upload your website which becomes then available under your domain.<br><b>logs</b> - you will find webserver logs here<br><b>.ssh</b> - by uploading your ssh public key as authorzed_keys in this folder, you can authenticate to sftp using your ssh key, without a password</td></tr>
<tr><td>My application is very ressource intensive or I want to host a different service e.g. my own tor relay. Can you get me a VPS?</td><td>Yes, if you have special requirements, want a dedicated VPS for your application or just want to anonymously support the TOR network (or other networks) without having to deal with server setup etc. I can offer you a managed VPS hosting. However this will not be for free. It depends on which server you want me to get. For details, <a href="<?php echo "$host/contact.php"; ?>">contact me</a></td></tr>
<tr><td>I want to also publish my site on clearnet. Can you offer a clearnet relay?</td><td>Yes, I can offer you a subdomain on my server, e.g. yoursite.danwin1210.me or if you have your own domain you can use that. Just <a href="<?php echo "$host/contact.php"; ?>">contact me</a> for setting up a clearnet gateway for your site.</td></tr>
<tr><td>Can you make my website also available via I2P?</td><td>Sure I can, just <a href="<?php echo "$host/contact.php"; ?>">contact me</a> to set it up for you.</td></tr>
</table>
</body></html>
