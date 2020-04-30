<html>
<title>New user</title>

<style type="text/css">
table {
  font: 25px "Times New Roman";  
}
</style>

<body bgcolor="#D7BDE2">
<form name="form1" method="POST" action="<?php echo base_url(); ?>home/insert">
<center><h1><font color="#273746">New donor's Signup</font></h1></center>
<table align="center" cellspacing="30" bgcolor="#7D3C98">
<tr><td>New Login Id :</td><td><input type="text" name="n1"></td></tr>
<tr><td>Password :</td><td><input type="password" name="n2"></tr>
<tr><td>Confirm Password :</td><td><input type="password" name="n3"></tr>
<tr><td>Name :</td><td><input type="text" name="n4"></tr>
<tr><td>Blood group: </td><td><input type="text" name="n5"></tr>
<tr><td>Age :</td><td><input type="text" name="n6"></tr>
<tr><td>Mobile.no :</td><td><input type="text" name="n7"></tr>
<tr><td>Email ID :</td><td><input type="text" name="n8"></tr>
<tr><td align="right">
<input type="submit" name="add" value="add Donor"  style="font-size:15pt;background-color:white;font-family:Times New Roman"></td>
<td><input type="Reset" name="Reset" value="Reset" style="font-size:15pt;background-color:white;font-family:Times New Roman"></td></tr>
</table>
</form>
 </body>
 </html>