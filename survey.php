<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<?php
///table job




$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("survey");
mysql_query( "SET NAMES UTF8" );
//*** Add Condition ***//
if($_POST["hdnCmd"] == "Add")
{
 $strSQL = "INSERT INTO surveyzonedata";
 $strSQL .="(no,location,odfname,lineorder,numofcore,typefig,typedw,linkname,note,distance) ";
 $strSQL .="VALUES ";
 $strSQL .="('".$_POST["txtaddlocation"]."','".$_POST["txtaddodfname"]."' ";
 $strSQL .=",'".$_POST["txtaddlineorder"]."' ";
 $strSQL .=",'".$_POST["txtaddnumofcore"]."','".$_POST["txtaddtypefig"]."' ";
 $strSQL .=",'".$_POST["txtaddtypedw"]."' ";
 $strSQL .=",'".$_POST["txtaddlinkname"]."' ";
 $strSQL .=",'".$_POST["txtaddnote"]."' ";
 $strSQL .=",'".$_POST["txtadddistance"]."') ";
 $objQuery = mysql_query($strSQL);
 if(!$objQuery)
 {
  echo "Error Save [".mysql_error()."]";
 }
 //header("location:$_SERVER[PHP_SELF]");
 //exit();
}
//*** Update Condition ***//
if($_POST["hdnCmd"] == "Update")
{
 $strSQL = "UPDATE work SET ";
 $strSQL .=" no = '".$_POST["txteditno"]."' ";
 $strSQL .=" ,location = '".$_POST["txteditlocation"]."' ";
 $strSQL .=" ,odfname = '".$_POST["txteditodfname"]."' ";
 $strSQL .=" ,lineorder = '".$_POST["txteditlineorder"]."' ";
 $strSQL .=" ,numofcore = '".$_POST["txteditnumofcore"]."' ";
 $strSQL .=" ,typefig = '".$_POST["txtedittypefig"]."' ";
 $strSQL .=" ,typedw = '".$_POST["txtedittypedw"]."' ";
 $strSQL .=" ,linkname = '".$_POST["txteditlinkname"]."' ";
 $strSQL .=" ,note = '".$_POST["txteditnote"]."' ";
 $strSQL .=" ,distance = '".$_POST["txteditdistance"]."' ";
 $strSQL .="WHERE no = '".$_POST["hdneditno"]."' ";
 $objQuery = mysql_query($strSQL);
 if(!$objQuery)
 {
  echo "Error Update [".mysql_error()."]";
 }
 //header("location:$_SERVER[PHP_SELF]");
 //exit();
}


//*** Delete Condition ***//
if($_GET["Action"] == "Del")
{
 $strSQL = "DELETE FROM surveyzonedata ";
 $strSQL .="WHERE no = '".$_GET["no"]."' ";
 $objQuery = mysql_query($strSQL);
 if(!$objQuery)
 {
  echo "Error Delete [".mysql_error()."]";
 }
 //header("location:$_SERVER[PHP_SELF]");
 //exit();
}


$strSQL = "SELECT * FROM surveyzonedata";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>

<form name="frmMain" method="post" action="<?=$_SERVER["PHP_SELF"];?>">
<br></br>
<center><h4></h4></center>
<input type="hidden" name="hdnCmd" value="">
<table  class="w3-table-all" align="center" border="1">
 <thead>
  <tr class="w3-red">
    <th width="50"> <div align="center">NO.</div></th>
    <th width="150"> <div align="center">Loacation </div></th>
    <th width="250"> <div align="center">ODF Name </div></th>
    <th width="70"> <div align="center">เส้นที่ </div></th>
    <th width="70"> <div align="center">จำนวน Core </div></th>
	<th width="60"> <div align="center">สายชนิด Fig(8)</div></th>
    <th width="60"> <div align="center">สายชนิด DW </div></th>
	<th width="300"> <div align="center">Link Name</div></th>
	<th width="270"> <div align="center">หมายเหตุ[ระบุ core ใช้งานด้วยก็ได้]</div></th>
	<th width="100"> <div align="center">ระยะทาง(เมตร)</div></th>
	<th width="50"> <div align="center">edit</div></th>
	<th width="50"> <div align="center">delete</div></th>
  </tr>
 </thead>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>

  <?php
  if($objResult["no"] == $_GET["no"] and $_GET["Action"] == "Edit")
 {
  ?>
  <tr>
    <td><div align="center">
  <input type="text" name="txteditno" size="5" value="<?=$objResult["no"];?>">
  <input type="hidden" name="hdneditno" size="5" value="<?=$objResult["no"];?>">
 </div></td>
    <td><input type="text" name="txteditlocation" size="20" value="<?=$objResult["location"];?>"></td>
    <td><input type="text" name="txteditodfname" size="20" value="<?=$objResult["odfname"];?>"></td>
    <td><input type="text" name="txteditlineorder" size="20" value="<?=$objResult["lineorder"];?>"></td>
	<td><input type="text" name="txteditnumofcore" size="20" value="<?=$objResult["numofcore"];?>"></td>
	<td><input type="text" name="txtedittypefig" size="20" value="<?=$objResult["typefig"];?>"></td>
	<td><input type="text" name="txtedittypedw" size="20" value="<?=$objResult["typedw"];?>"></td>
	<td><input type="text" name="txteditlinkname" size="20" value="<?=$objResult["linkname"];?>"></td>
	<td><input type="text" name="txteditnote" size="20" value="<?=$objResult["note"];?>"></td>
	<td><input type="text" name="txteditdistance" size="20" value="<?=$objResult["distance"];?>"></td>
	<td colspan="2" align="right"><div align="center">
      <input name="btnAdd" type="button" id="btnUpdate" value="Update" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();">
   <input name="btnAdd" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?=$_SERVER["PHP_SELF"];?>';">
    </div></td>
  </tr>
  <?php
 }
  else
 {
  ?>
<tr>
    <td><div align="center"><?=$objResult["no"];?></div></td>
    <td><div align="center"><?=$objResult["location"];?></div></td>
    <td><div align="center"><?=$objResult["odfname"];?></div></td>
    <td><div align="center"><?=$objResult["lineorder"];?></div></td>
    <td><div align="center"><?=$objResult["numofcore"];?></div></td>
    <td><div align="center"><?=$objResult["typefig"];?></div></td>
    <td><div align="center"><?=$objResult["typedw"];?></div></td>
    <td><div align="center"><?=$objResult["linkname"];?></div></td>
	<td><div align="center"><?=$objResult["note"];?></div></td>
	<td><div align="center"><?=$objResult["distance"];?></div></td>
   
 <td align="center"><a href="<?=$_SERVER["PHP_SELF"];?>?Action=Edit&no=<?=$objResult["no"];?>">Edit</a></td>
 <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Del&no=<?=$objResult["no"];?>';}">Delete</a></td>
  </tr>
  <?
 }
  ?>
<?
}
?>
  
</table>
</form>
<?php
mysql_close($objConnect);
?>

<?php

$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("survey");
mysql_query( "SET NAMES UTF8" );
?>
<form name="frmMain2" method="post" action="<?=$_SERVER["PHP_SELF"];?>">
<h2>Add Data</h2>
<input type="hidden" name="hdnCmd" value="">
<table  border="1">
  <tr>
	<th width="50"> <div align="center">NO.</div></th>
    <th width="150"> <div align="center">Loacation </div></th>
    <th width="250"> <div align="center">ODF Name </div></th>
    <th width="70"> <div align="center">เส้นที่ </div></th>
    <th width="70"> <div align="center">จำนวน Core </div></th>
	<th width="60"> <div align="center">สายชนิด Fig(8)</div></th>
    <th width="60"> <div align="center">สายชนิด DW </div></th>
	<th width="300"> <div align="center">Link Name</div></th>
	<th width="270"> <div align="center">หมายเหตุ[ระบุ core ใช้งานด้วยก็ได้]</div></th>
	<th width="270"> <div align="center">ระยะทาง</div></th>
	
  </tr>

 <tr>
    <td></td>
    <td><input type="text" name="txtaddlocation" size="20"></td>
    <td><input type="text" name="txtaddodfname" size="20"></td>
    <td><input type="text" name="txtaddlineorder" size="20"></td>
    <td><input type="text" name="txtaddnumofcore" size="20"></td>
    <td><input type="text" name="txtaddtypefig" size="20"></td>
	<td><input type="text" name="txtaddtypedw" size="20"></td>
	<td><input type="text" name="txtaddlinkname" size="20"></td>
	<td><input type="text" name="txtaddnote" size="20"></td>
	<td><input type="text" name="txtadddistance" size="20"></td>
	
  </tr>

  </table>
<input name="btnAdd" type="button" id="btnAdd" value="Add" OnClick="frmMain2.hdnCmd.value='Add';frmMain2.submit();">
</form>
<?php
mysql_close($objConnect);
?>



</body>
</html>