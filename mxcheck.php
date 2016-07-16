<?php
$email = $_REQUEST['email'];
function domain_exists($email, $record = 'MX'){
	list($user, $domain) = split('@', $email);
	return checkdnsrr($domain, $record);
}

if(domain_exists($email)) {
	echo('This MX records exists; I will accept this email as valid.');
}
else {
	echo('No MX record exists;  Invalid email.');
}
?>
