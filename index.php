<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>فرم ارتباط با ما</title>
<!--

	released by Hossein dehbashi (mypress.ir,script4u.ir)
	in persianscript.ir the best persian scripts website

-->
<style>
	.tbl{
	direction:rtl;
	font-family:Tahoma;
	font-size:12px
}
	table{
	border:1px black solid;
	

}
	.right{
	background-color:#F2F8FF;
	width:150px;
	line-height:25px;
	font-size:12px;
	color:#003D59
}
input,select,option,textarea{
	font-family:Tahoma;
	font-size:11px;
	
}
#sent{
	display:block;
	background-color:#EEFBEE;
	border:1px green dashed;
	font-family:Tahoma;
	width:580px;
	margin:20px auto 20px auto;
	font-size:12px;
	text-align:center;
	padding:10px;
	box-shadow: -10px -10px 0px yellow;
	border-radius: 5px;
}
#err{
	display:block;
	background-color:#FFF8F4;
	border:1px maroon dashed;
	font-family:Tahoma;
	width:580px;
	margin:20px auto 20px auto;
	font-size:12px;
	text-align:center;
	padding:10px
}
</style>
</head>

<body>
<form method="post" action="?send">
	<table width="600" align="center" class="tbl" >
		<tr>
			<td class="right">نام و نام خانوادگی :</td>
			<td class="left"><input type="text" name="data[نام و نام خانوادگی]"/></td>
		</tr>
		<tr>
			<td class="right">نام کاربری در سایت/انجمن : </td>
			<td class="left"><input type="text" name="data[نام کاربری]"/></td>
		</tr>
		<tr>
			<td class="right">ایمیل: </td>
			<td class="left"><input type="text" name="data[ایمیل]"/></td>
		</tr>
		<tr>
			<td class="right">شماره تماس : </td>
			<td class="left"><input type="text" name="data[شماره تماس]"/></td>
		</tr>
		<tr>
			<td class="right">آدرس سایت :</td>
			<td class="left"><input type="text" name="data[آدرس سایت]"/></td>
		</tr>
		<tr>
			<td class="right">میزان اشتراک :</td>
			<td class="left">
				<select name="data[میزان اشتراک]">
					<option>یک ماهه</option>
					<option>دو ماهه</option>
					<option>سه ماهه</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="right">مبلغ واریزی :</td>
			<td class="left"><input type="text" name="data[مبلغ واریزی]"/> تومان</td>
		</tr>
		<tr>
			<td class="right">نام بانک :</td>
			<td class="left">
				<select name="data[نام بانک]">
					<option>سامان</option>
					<option>پارسیان</option>
					<option>اقتصاد نوین</option>
					<option>ملت</option>
					<option>ملی</option>
					<option>صادرات</option>
					<option>تجارت</option>
				</select>
			</td>
		</tr>

		<tr>
			<td class="right">شماره فیش / پیگیری/ سند :</td>
			<td class="left"><input type="text" name="data[کد پیگیری]"/></td>
		</tr>

		<tr>
			<td class="right">عنوان پیغام:</td>
			<td class="left"><input type="text" name="data[عنوان پیغام]"/></td>
		</tr>
		<tr>
			<td class="right" style="width: 150px" valign="top">پیغام :</td>
			<td class="left">
			<textarea name="data[متن پیغام]" style="width: 254px; height: 117px"></textarea></td>
		</tr>
		<tr>
			<td class="right" style="width: 150px" valign="top"></td>
			<td class="left"><input type="submit" value="ارسال فرم" /><input type="reset" value="نگارش از نو" /></td>
		</tr>
	</table>
</form>
<?php
if(isset($_GET[send])){
	extract($_POST);
	$to = "hosseind600@gmail.com";
	$subject = "ثبت فیش پرداختی";
    $from = "noreply@script4u.ir";

    //begin of HTML message
    $message = '
<html>
<body>
	<table width="600" align="center" class="tbl" >
	' ;
foreach ($data as $key=>$val)	{
	
	$message .= '	
		<tr>
			<td style="font-family:tahoma;width:200px">'.$key.'</td>
			<td style="font-family:tahoma;font-weight:bold">'.$val.'</td>
		</tr> ';
	}
	$message .= '
		<tr>
			<td style="font-family:tahoma;width:200px">کپی رایت</td>
			<td style="font-family:tahoma;color:green">این اسکریپت توسط script4u.ir طراحی و برنامه نویسی و در سایت persianscript.ir منتشر شده است .</td>
		</tr>
	</table>

  </body>
</html>
' ;
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= 'Content-type: text/html; charset="utf-8"\r\n';

    
    // now lets send the email.
    if(mail($to, $subject, $message, $headers)){
    ?>
    
<span id="sent">پیغام شما با موفقیت ارسال گردید</span>
    
    <?php
    
    } else {
    ?>
    
<span id="err">در ارسال پیغام مشکلی وجود دارد</span>
    
    <?php
    
    
    
    }

}	

?>
</body>

</html>
