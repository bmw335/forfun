<?php
$this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fileupload.css">

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fileupload.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/our/cert.js"></script>

<h1>（这是创建/修改证书页面）</h1>
<form id="frm" method=post action="" name="frm">
	<input type="hidden" name="cert_id" value="<?php echo $certificate->id;?>">
	<img id="uploadedImage" src="<?php if(!empty($certificate->photo_path)){?><?php echo Yii::app()->request->baseUrl;?>/index.php/cert/getImage?download=1&file=<?php echo $certificate->photo_path;?><?php }?>" style="max-width:600px;height:auto;">
	<input type="hidden" id="uploadedImageName" name="uploadedImageName" value="<?php if(!empty($certificate->photo_path)){?><?php echo $certificate->photo_path;?><?php }?>">
	<br/>
	<span class="btn btn-success fileinput-button">
		<i class="glyphicon glyphicon-plus"></i>
		<span>Select files...</span>
		<!-- The file input field used as target for the file upload widget -->
		<input id="fileupload" type="file" name="files[]" multiple>
	</span>
	<fieldset>
		<legend>你的</legend>
		<label for="lover_1_name">姓名*</label>
		<input type="text" name="lover_1_name" id="lover_1_name" value="<?php echo $certificate->lover_1_name;?>"/>
		<label for="lover_1_province">省份*</label>
		<input type="text" name="lover_1_province" id="lover_1_province" value="<?php echo $certificate->lover_1_province;?>"/>
		<label for="lover_1_city">城市*</label>
		<input type="text" name="lover_1_city" id="lover_1_city" value="<?php echo $certificate->lover_1_city;?>"/>
		<label for="lover_1_id_number">身份证</label>
		<input type="text" name="lover_1_id_number" id="lover_1_id_number" value="<?php echo $certificate->lover_1_id_number;?>"/>
	</fieldset>
	<br/>
	<fieldset>
		<legend>TA的</legend>
		<label for="lover_2_name">姓名*</label>
		<input type="text" name="lover_2_name" id="lover_2_name" value="<?php echo $certificate->lover_2_name;?>"/>
		<label for="lover_2_province">省份*</label>
		<input type="text" name="lover_2_province" id="lover_2_province" value="<?php echo $certificate->lover_2_province;?>"/>
		<label for="lover_2_city">城市*</label>
		<input type="text" name="lover_2_city" id="lover_2_city" value="<?php echo $certificate->lover_2_city;?>"/>
		<label for="lover_2_id_number">身份证</label>
		<input type="text" name="lover_2_id_number" id="lover_2_id_number" value="<?php echo $certificate->lover_2_id_number;?>"/>
	</fieldset>
	<br/>
	<br/>
	<label for="love_oath">爱的宣言*</label>
	<br/>
	<textarea name="love_oath" id="love_oath" rows="5" cols="110"/><?php echo $certificate->love_oath;?></textarea>
	<br/><br/>
	<label for="count_down_month">倒计时公开期限*</label>
	<br/>
	<input type="text" name="count_down_month" id="count_down_month"  value="<?php echo $certificate->count_down_month;?>"/>月后公开
	<br/>
	<input type="submit" value="保存草稿" onclick="saveDraftCert()"/>
	<input type="button" value="登记" onclick="validateAndSubmit();"/>
</form>


