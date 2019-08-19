<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<br></br>
<h4 align="center">รายงานการจ่ายงาน  Splice Lay รายเดือน  ปี 2019 (update daily)</h4>

<?php

$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("jobteam");
mysql_query( "SET NAMES UTF8" );

//มกราคม
$strSQL1 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='1' AND YEAR(date) = '2019'  AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus1 = $objResult[0];

$strSQL1 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='1'AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount1 = $objResult[0];

$strSQL1 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='1' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate1 = $objResult[0];

$strSQL1 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='1' AND YEAR(date) = '2019' AND status ='รอจ่ายงาน'";
$objQuery = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus1 = $objResult[0];

//กุมภาพันธ์
$strSQL2 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='2' AND YEAR(date) = '2019'  AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus2 = $objResult[0];

$strSQL2 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='2'AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount2 = $objResult[0];

$strSQL2 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='2' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate2 = $objResult[0];

$strSQL2 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='2' AND YEAR(date) = '2019' AND status ='รอจ่ายงาน'";
$objQuery = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus2 = $objResult[0];

//มีนาคม
$strSQL3 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='3' AND YEAR(date) = '2019'  AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus3 = $objResult[0];

$strSQL3 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='3'AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount3 = $objResult[0];

$strSQL3 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='3' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate3 = $objResult[0];

$strSQL3 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='3' AND YEAR(date) = '2019' AND status ='รอจ่ายงาน'";
$objQuery = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus3 = $objResult[0];

//เมษายน
$strSQL4 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='4' AND YEAR(date) = '2019'  AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus4 = $objResult[0];

$strSQL4 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='4'AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount4 = $objResult[0];

$strSQL4 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='4' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate4 = $objResult[0];

$strSQL4 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='4' AND YEAR(date) = '2019' AND status ='รอจ่ายงาน'";
$objQuery = mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus4 = $objResult[0];

//พฤษภาคม
$strSQL5 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='5' AND YEAR(date) = '2019'  AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL5) or die ("Error Query [".$strSQL5."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus5 = $objResult[0];

$strSQL5 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='5'AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL5) or die ("Error Query [".$strSQL5."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount5 = $objResult[0];

$strSQL5 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='5' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL5) or die ("Error Query [".$strSQL5."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate5 = $objResult[0];

$strSQL5 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='5' AND YEAR(date) = '2019' AND status ='รอจ่ายงาน'";
$objQuery = mysql_query($strSQL5) or die ("Error Query [".$strSQL5."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus5 = $objResult[0];

//มิถุนายน
$strSQL6 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='6' AND YEAR(date) = '2019'  AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL6) or die ("Error Query [".$strSQL6."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus6 = $objResult[0];

$strSQL6 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='6'AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL6) or die ("Error Query [".$strSQL6."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount6 = $objResult[0];

$strSQL6 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='6' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL6) or die ("Error Query [".$strSQL6."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate6 = $objResult[0];

$strSQL6 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='6' AND YEAR(date) = '2019' AND status ='รอจ่ายงาน'";
$objQuery = mysql_query($strSQL6) or die ("Error Query [".$strSQL6."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus6 = $objResult[0];


//กรกฎาคม
$strSQL7 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='7' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย'";
$objQuery = mysql_query($strSQL7) or die ("Error Query [".$strSQL7."]");
$objResult = mysql_fetch_array($objQuery);
$countstatus7 = $objResult[0];

$strSQL7 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='7' AND YEAR(date) = '2019'";
$objQuery = mysql_query($strSQL7) or die ("Error Query [".$strSQL7."]");
$objResult = mysql_fetch_array($objQuery);
$countjobmount7 = $objResult[0];

$strSQL7 = "SELECT  count(DISTINCT work) FROM work WHERE MONTH(date)='7' AND YEAR(date) = '2019' AND status ='ดำเนินการเรียบร้อย' AND sentdate ='0000-00-00'";
$objQuery = mysql_query($strSQL7) or die ("Error Query [".$strSQL7."]");
$objResult = mysql_fetch_array($objQuery);
$countsentdate7 = $objResult[0];

$strSQL7 = "SELECT COUNT(DISTINCT work) FROM work WHERE MONTH(date)='7' AND YEAR(date) = '2019' AND status ='จ่านงานเเล้ว'OR'รอจ่ายงาน'";
$objQuery = mysql_query($strSQL7) or die ("Error Query [".$strSQL7."]");
$objResult = mysql_fetch_array($objQuery);
$countwaitstatus7 = $objResult[0];

$countjobmounttotal=$countjobmount1+$countjobmount2+$countjobmount3+$countjobmount4+$countjobmount5+$countjobmount6+$countjobmount7  ;
$countwaitstatustotal=$countwaitstatus1+$countwaitstatus2+$countwaitstatus3+$countwaitstatus4+$countwaitstatus5+$countwaitstatus6+$countwaitstatus7;
$countstatustotal=$countstatus1+$countstatus2+$countstatus3+$countstatus4+$countstatus5+$countstatus6+$countstatus7;
$countsentdatetotal=$countsentdate1+$countsentdate2+$countsentdate3+$countsentdate4+$countsentdate5+$countsentdate7;
?>
<table class="w3-table-all" align="center">
 <thead>
  <tr class="w3-red">
	<th width="100"> <div align="center">เดือน</div></th>
    <th width="100"> <div align="center">จำนวนงาน</div></th>
    <th width="100"> <div align="center">รอดำเนินการ</div></th>
    <th width="150"> <div align="center">ดำเนินการเรียบร้อย</div></th>
    <th width="100"> <div align="center">รอคืนเอกสาร</div></th>
  </tr>
  </thead>
<?php


?>
	<tr>
	<td>มกราคม</td>
	<td><div align="center"><?=$countjobmount1;?></div></td>
	<td><div align="center"><?=$countwaitstatus1;?></div></td>
	<td><div align="center"><?=$countstatus1;?></div></td>
	<td><div align="center"><?=$countsentdate1;?></div></td>
	</tr>
	<tr>
	<td>กุมภาพันธ์</td>
	<td><div align="center"><?=$countjobmount2;?></div></td>
	<td><div align="center"><?=$countwaitstatus2;?></div></td>
	<td><div align="center"><?=$countstatus2;?></div></td>
	<td><div align="center"><?=$countsentdate2;?></div></td>
	</tr>
	<tr>
	<td>มีนาคม</td>
	<td><div align="center"><?=$countjobmount3;?></div></td>
	<td><div align="center"><?=$countwaitstatus3;?></div></td>
	<td><div align="center"><?=$countstatus3;?></div></td>
	<td><div align="center"><?=$countsentdate3;?></div></td>
	</tr>
	<tr>
	<td>เมษายน</td>
	<td><div align="center"><?=$countjobmount4;?></div></td>
	<td><div align="center"><?=$countwaitstatus4;?></div></td>
	<td><div align="center"><?=$countstatus4;?></div></td>
	<td><div align="center"><?=$countsentdate4;?></div></td>
	</tr>
	<tr>
	<td>พฤษภาคม</td>
	<td><div align="center"><?=$countjobmount5;?></div></td>
	<td><div align="center"><?=$countwaitstatus5;?></div></td>
	<td><div align="center"><?=$countstatus5;?></div></td>
	<td><div align="center"><?=$countsentdate5;?></div></td>
	</tr>
	<tr>
	<td>มิถุนายน</td>
	<td><div align="center"><?=$countjobmount6;?></div></td>
	<td><div align="center"><?=$countwaitstatus6;?></div></td>
	<td><div align="center"><?=$countstatus6;?></div></td>
	<td><div align="center"><?=$countsentdate6;?></div></td>
	</tr>
	<tr>
	<td>กรกฏาคม</td>
	<td><div align="center"><?=$countjobmount7;?></div></td>
	<td><div align="center"><?=$countwaitstatus7;?></div></td>
	<td><div align="center"><?=$countstatus7;?></div></td>
	<td><div align="center"><?=$countsentdate7;?></div></td>
	</tr>

	<tr>
	<td><B>total</B></td>
	<td><B><div align="center"><?=$countjobmounttotal;?></B></div></td>
	<td><B><div align="center"><?=$countwaitstatustotal;?></B></div></td>
	<td><B><div align="center"><?=$countstatustotal;?></B></div></td>
	<td><B><div align="center"><?=$countsentdatetotal;?></B></div></td>
	</tr>
	

	</table>
<?php


mysql_close($objConnect);
?>


<?php
///table job




$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("jobteam");
mysql_query( "SET NAMES UTF8" );
//*** Add Condition ***//
if($_POST["hdnCmd"] == "Add")
{
 $strSQL = "INSERT INTO work";
 $strSQL .="(date,owner,work,type,worktype,remark,total,team,workdate,status,sentdate) ";
 $strSQL .="VALUES ";
 $strSQL .="('".$_POST["txtadddate"]."','".$_POST["txtaddowner"]."' ";
 $strSQL .=",'".$_POST["txtaddwork"]."' ";
 $strSQL .=",'".$_POST["txtaddtype"]."','".$_POST["txtaddworktype"]."' ";
 $strSQL .=",'".$_POST["txtaddremark"]."' ";
 $strSQL .=",'".$_POST["txtaddtotal"]."' ";
 $strSQL .=",'".$_POST["txtaddteam"]."','".$_POST["txtaddworkdate"]."' ";
 $strSQL .=",'".$_POST["txtaddstatus"]."' ";
 $strSQL .=",'".$_POST["txtaddsentdate"]."') ";
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
 $strSQL .=" ,date = '".$_POST["txteditdate"]."' ";
 $strSQL .=" ,owner = '".$_POST["txteditowner"]."' ";
 $strSQL .=" ,work = '".$_POST["txteditwork"]."' ";
 $strSQL .=" ,type = '".$_POST["txtedittype"]."' ";
 $strSQL .=" ,worktype = '".$_POST["txteditworktype"]."' ";
 $strSQL .=" ,remark = '".$_POST["txteditremark"]."' ";
 $strSQL .=" ,total = '".$_POST["txtedittotal"]."' ";
 $strSQL .=" ,team = '".$_POST["txteditteam"]."' ";
 $strSQL .=" ,workdate = '".$_POST["txteditworkdate"]."' ";
 $strSQL .=" ,status = '".$_POST["txteditstatus"]."' ";
 $strSQL .=" ,sentdate = '".$_POST["txteditsentdate"]."' ";
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
 $strSQL = "DELETE FROM work ";
 $strSQL .="WHERE no = '".$_GET["no"]."' ";
 $objQuery = mysql_query($strSQL);
 if(!$objQuery)
 {
  echo "Error Delete [".mysql_error()."]";
 }
 //header("location:$_SERVER[PHP_SELF]");
 //exit();
}


$strSQL = "SELECT * FROM work";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>

<form name="frmMain" method="post" action="<?=$_SERVER["PHP_SELF"];?>">
<br></br>
<center><h4>Job Detail List</h4></center>
<input type="hidden" name="hdnCmd" value="">
<table  class="w3-table-all" align="center" border="1">
 <thead>
  <tr class="w3-red">
    <th width="50"> <div align="center">NO.</div></th>
    <th width="100"> <div align="center">งานเข้าระบบ </div></th>
    <th width="100"> <div align="center">ผู้จ่ายงาน </div></th>
    <th width="220"> <div align="center">MCCBB Work</div></th>
    <th width="100"> <div align="center">ประเภทงาน </div></th>
	<th width="100"> <div align="center">Group</div></th>
    <th width="250"> <div align="center">รายละเอียด</div></th>
	<th width="80"> <div align="center">work cost</div></th>
	<th width="100"> <div align="center">ผู้รับงาน</div></th>
	<th width="100"> <div align="center">วันที่จ่ายงาน</div></th>
	<th width="160"> <div align="center">สถานะ</div></th>
	<th width="100"> <div align="center">วันที่คืนงาน</div></th>
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
    <td><input type="text" name="txteditdate" size="20" value="<?=$objResult["date"];?>"></td>
    <td><input type="text" name="txteditowner" size="20" value="<?=$objResult["owner"];?>"></td>
    <td><input type="text" name="txteditwork" size="20" value="<?=$objResult["work"];?>"></td>
	<td><input type="text" name="txtedittype" size="20" value="<?=$objResult["type"];?>"></td>
	<td><input type="text" name="txteditworktype" size="20" value="<?=$objResult["worktype"];?>"></td>
	<td><input type="text" name="txteditremark" size="20" value="<?=$objResult["remark"];?>"></td>
	<td><input type="text" name="txtedittotal" size="20" value="<?=$objResult["total"];?>"></td>
	<td><input type="text" name="txteditteam" size="20" value="<?=$objResult["team"];?>"></td>
	<td><input type="text" name="txteditworkdate" size="20" value="<?=$objResult["workdate"];?>"></td>
	<td><input type="text" name="txteditstatus" size="20" value="<?=$objResult["status"];?>"></td>
	<td><input type="text" name="txteditsentdate" size="20" value="<?=$objResult["sentdate"];?>"></td>
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
    <td><div align="center"><?=$objResult["date"];?></div></td>
    <td><div align="center"><?=$objResult["owner"];?></div></td>
    <td><div align="center"><?=$objResult["work"];?></div></td>
    <td><div align="center"><?=$objResult["type"];?></div></td>
    <td><div align="center"><?=$objResult["worktype"];?></div></td>
    <td><div align="left"><?=$objResult["remark"];?></div></td>
    <td><div align="center"><?=$objResult["total"];?></div></td>
    <td><div align="center"><?=$objResult["team"];?></div></td>
    <td><div align="center"><?=$objResult["workdate"];?></div></td>
    <td><div align="center"><?=$objResult["status"];?></div></td>
	<td><div align="center"><?=$objResult["sentdate"];?></div></td>

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
$objDB = mysql_select_db("jobteam");
mysql_query( "SET NAMES UTF8" );
?>
<form name="frmMain2" method="post" action="<?=$_SERVER["PHP_SELF"];?>">
<h2>add ตาราง</h2>
<input type="hidden" name="hdnCmd" value="">
<table  border="1">
  <tr>
    <th width="50"> <div align="center">NO.</div></th>
    <th width="100"> <div align="center">งานเข้าระบบ </div></th>
    <th width="100"> <div align="center">ผู้จ่ายงาน </div></th>
    <th width="220"> <div align="center">MCCBB Work</div></th>
    <th width="100"> <div align="center">ประเภทงาน </div></th>
	<th width="100"> <div align="center">Group</div></th>
    <th width="250"> <div align="center">รายละเอียด</div></th>
	<th width="80"> <div align="center">work cost</div></th>
	<th width="100"> <div align="center">ผู้รับงาน</div></th>
	<th width="100"> <div align="center">วันที่จ่ายงาน</div></th>
	<th width="160"> <div align="center">สถานะ</div></th>
  </tr>

 <tr>
    <td></td>
    <td><input type="text" name="txtadddate" size="20"></td>
    <td><input type="text" name="txtaddowner" size="20"></td>
    <td><input type="text" name="txtaddwork" size="20"></td>
    <td><input type="text" name="txtaddtype" size="20"></td>
    <td><input type="text" name="txtaddworktype" size="20"></td>
	<td><input type="text" name="txtaddremark" size="20"></td>
	<td><input type="text" name="txtaddtotal" size="20"></td>
	<td><input type="text" name="txtaddteam" size="20"></td>
	<td><input type="text" name="txtaddworkdate" size="20"></td>
	<td><input type="text" name="txtaddstatus" size="20"></td>
  </tr>

  </table>
<input name="btnAdd" type="button" id="btnAdd" value="Add" OnClick="frmMain2.hdnCmd.value='Add';frmMain2.submit();">
</form>
<?php
mysql_close($objConnect);
?>



</body>
</html>