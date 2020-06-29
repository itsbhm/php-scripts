<!doctype>
<html>
<head>
<title>Multiline Printing</title>
</head>
<body>

<?php
 print <<<SOMETHING
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
SOMETHING;
?>

<br><br><br>
<details>
<summary>Info:</summary>
<br>
<ol>
<li>Should be three less than sign <code>(<<<)</code> otherwise it will Show Error.</li>
<li>After three less than sign <code>(<<<)</code> there is a starting point or a ending point; starting point(SOMETHING) or ending point(SOMETHING) name Should be same.</li>
<ol>
</details>
</body>
</html>