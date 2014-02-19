<?php
$this->pageTitle=Yii::app()->name;
?>

<h1>搜索证书</h1>
<form method=post action="" name="search_form">
	<fieldset>
		<label for="name">姓名</label>
		<input type="text" name="name" id="name" value="<?php if(array_key_exists('lover_name', $usedConditions)) {echo $allConditions['lover_name'];}?>"/>
	</fieldset>
	<br/>
	<fieldset>
		<label for="province">省份</label>
		<input type="text" name="province" id="province" value="<?php if(array_key_exists('lover_province', $usedConditions)) {echo $allConditions['lover_province'];}?>"/>
	</fieldset>
	<br/>
	<fieldset>
		<label for="city">城市</label>
		<input type="text" name="city" id="city" value="<?php if(array_key_exists('lover_city', $usedConditions)) {echo $allConditions['lover_city'];}?>"/>
	</fieldset>
	<input type="submit" value="搜索" onclick="search()"/>
</form>
<?php 
if(count($usedConditions) !== count($allConditions)) {
	echo $allConditions['lover_name'];
	echo ',';
	echo $allConditions['lover_province'];
	echo ',';
	echo $allConditions['lover_city'];
	echo '未找到。';
	if(count($certificates) > 0) {
		echo '为您找到';
		if(count($usedConditions) === 0){
			echo '全部';
		}
		if(array_key_exists('lover_name', $usedConditions)){
			echo $allConditions['lover_name'];
		}
		if(array_key_exists('lover_province', $usedConditions)){
			echo ',';
			echo $allConditions['lover_province'];
		}
		if(array_key_exists('lover_city', $usedConditions)){
			echo ',';
			echo $allConditions['lover_city'];
		}
		echo '的证书，想要新证书？来新建一个吧';
	}
}
else{
	if(count($certificates) > 0) {
		echo '为您找到';
		echo $allConditions['lover_name'];
		echo ',';
		echo $allConditions['lover_province'];
		echo ',';
		echo $allConditions['lover_city'];
		echo '的证书';
	}
	else {
		echo '还没有证书哦，来新建一个吧';
	}
}
?>

<div class='search_result_zone'>
<?php 
	for ($i = 0; $i < count($certificates); $i++){
		echo "<div class='search_result_item'>";
		echo '[';
		echo $certificates[$i]['id'];
		echo ']';
		echo $certificates[$i]['lover_1_name'];
		echo '&nbsp;&nbsp;LOVE&nbsp;&nbsp;';
		echo $certificates[$i]['lover_2_name'];
		echo '&nbsp;&nbsp;@&nbsp;&nbsp;';
		echo $certificates[$i]['submit_time'];
		echo ')<br/>';
		echo "</div>";
	}
?>
</div>

<script language="JavaScript">
function search(){
	search_form.action = "<?php echo Yii::app()->baseUrl; ?>/index.php/cert/searchCert";
}
</script>
