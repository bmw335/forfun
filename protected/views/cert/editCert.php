<?php
$this->pageTitle=Yii::app()->name;
?>

<h1>（这是创建/修改证书页面）</h1>
<form method=post action="" name="frm">
	<input type="hidden" name="cert_id" value="<?php echo $certificate->id;?>">
	<fieldset>
		<legend>GG</legend>
		<label for="lover_1_name">姓名</label>
		<input type="text" name="lover_1_name" id="lover_1_name" value="<?php echo $certificate->lover_1_name;?>"/>
	</fieldset>
	<br/>
	<fieldset>
		<legend>MM</legend>
		<label for="lover_2_name">姓名</label>
		<input type="text" name="lover_2_name" id="lover_2_name" value="<?php echo $certificate->lover_2_name;?>"/>
	</fieldset>
	<br/>
	<label for="love_oath">承诺</label>
	<input type="text" name="love_oath" id="love_oath"  value="<?php echo $certificate->love_oath;?>"/>
	<br/><br/>
	<label for="count_down_month">倒计时公开时限</label>
	<br/>
	<input type="text" name="count_down_month" id="count_down_month"  value="<?php echo $certificate->count_down_month;?>"/>月后公开
	<br/>
	<input type="submit" value="保存草稿" onclick="submit1()"/>
	<input type="submit" value="登记" onclick="submit2()"/>
</form>

<script language="JavaScript">
function submit1(){
	frm.action = "<?php echo Yii::app()->baseUrl; ?>/index.php/cert/saveCert";
}
function submit2() {
	frm.action = "<?php echo Yii::app()->baseUrl; ?>/index.php/cert/submitCert";
}
</script>
