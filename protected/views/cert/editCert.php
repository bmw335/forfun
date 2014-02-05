<?php
$this->pageTitle=Yii::app()->name;
?>

<h1>（这是创建/修改证书页面）</h1>
<form method=post action="" name="frm">
	<input type="hidden" name="cert_id" value="<?php echo $lovecert->id;?>">
	<fieldset>
		<legend>GG</legend>
		<label for="lover_1_name">姓名</label>
		<input type="text" name="lover_1_name" id="lover_1_name" value="<?php echo $lovecert->lover_1_name;?>"/>
	</fieldset>
	<br/>
	<fieldset>
		<legend>MM</legend>
		<label for="lover_2_name">姓名</label>
		<input type="text" name="lover_2_name" id="lover_2_name" value="<?php echo $lovecert->lover_2_name;?>"/>
	</fieldset>
	<br/>
	<label for="promise">承诺</label>
	<input type="text" name="promise" id="promise"  value="<?php echo $lovecert->promise;?>"/>
	<br/>
	<label for="countDownYear">倒计时公开年限</label>
	<select name="countDownYear" id="countDownYear"  value="<?php echo $lovecert->countDownYear;?>">  
		<option value="0" <?php if($lovecert->countDownYear == 0){?>selected="selected"<?php }?>>立刻公开</option>
		<option value="1" <?php if($lovecert->countDownYear == 1){?>selected="selected"<?php }?>>1年后</option>
		<option value="2" <?php if($lovecert->countDownYear == 2){?>selected="selected"<?php }?>>2年后</option>
		<option value="3" <?php if($lovecert->countDownYear == 3){?>selected="selected"<?php }?>>3年后</option>
		<option value="4" <?php if($lovecert->countDownYear == 4){?>selected="selected"<?php }?>>4年后</option>
		<option value="5" <?php if($lovecert->countDownYear == 5){?>selected="selected"<?php }?>>5年后</option>
	</select>
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
