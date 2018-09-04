<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php #4

// Create one array:
$states = [
	'1' => 'Alabama',
	'2' => 'Florida',
	'3' => 'Georgia',
	'4' => 'Mississippi',
	'5'	=> 'South Carolina'];

$sstate = $_POST['state'];

// Print the submitted information:
  if ( !empty($_POST['lName']) && !empty($_POST['fName']) && !empty($_POST['comments']) && !empty($_POST['email']) ) 
	{
		echo "<p>Thank you, <strong>{$_POST['fName']}</strong>, for the following comments:</p>
		<pre>{$_POST['comments']}</pre>
		<p>How is the weather in $states[$sstate] ?</p>
		<p>We will reply to you at <em>{$_POST['email']}</em>.</p>\n";
	}
	else 
	{ // Missing form value.
		echo '<p>Please go back and fill out the form again.</p>';
		#echo '<p>How is the weather in </p>'. $states[3] . '<p>?</p>'
}
?>
</body>
</html>