<h3>About this Application</h3>

<?php 
if (isset($client_id) ) {
?>

<table border="1" cellspacing="2" cellpadding="5" width='75%'>
	<tr><th>Instagram Client ID</th><th>Instagram Client Secret</th></tr>
	<tr><td><?=$client_id;?></td><td><?=$client_secret;?>&nbsp;&nbsp;(<a href="<?=$edit_secret;?>" title='Edit Secret'>edit secret</a>)</td></tr>
</table>
<br>
<p><a href="<?=$delete_method;?>" class='submit'>Remove this application and all it's users.</a></p>

<?php
}
else
{
// There is no app defined, so tell the user that.
?>
<p>There is currently no Instagram app defined within <?=$moduleShortTitle;?>.</p>	
<?php	
}


?>