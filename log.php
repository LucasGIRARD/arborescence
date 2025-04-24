<?php

session_start() ;
if ( isset($_POST['utilisateur']) && !empty($_POST['utilisateur']) )
     {
         $_SESSION['utilisateur'] = $_POST['utilisateur'];
         header("Location: arbo.php");
     }
 
if (isset ($_POST['deco']))
{
	session_unset();
	session_destroy();

	echo "<meta http-equiv='Refresh' content='2;URL=index.php'>";

	echo "d&eacute;connecte avec succ&eacute;s!";
}

if (!isset($_SESSION['utilisateur']))
{

}
if(isset($_SESSION['utilisateur']))
{
?>
	<center>
            <table>
		<tr>
			<td vertical-align="middle">
			<?php echo "utilisateur loggu&eacute; ".$_SESSION['utilisateur']." !"; ?>
			</td>
			<td>
				<form method="post" action="index.php">
					<input type="hidden" name="deco" value="1" />
					<input type="submit" value="deconnection" />
				</form>
			</td>
		</tr>
	</table>
        </center>
<?php
}
?>
<hr />

