 <?php if($_SESSION["autorized"] != true) { ?>
   <h2>����</h2>
   <form method="post">
   ������������: 
   <div align="right"><input name="login" type="text"></div>  
   ������: 
   <div align="right"><input name="pwd" type="password"></div>
   <div align="right"><input name="ok" type="submit" value="�����"></div>
   </form>
 <?php } 
   else {
?>
<h2>������������:</h2>
<p align = "center">
<?php echo $_SESSION["user"]; ?>
   </p>
   <p align = "center">
<?php echo $_SESSION["mail"]; ?>
</p>
<div align="center"><a href="index.php?action=exit">�����</a></div>
   <?php } ?>