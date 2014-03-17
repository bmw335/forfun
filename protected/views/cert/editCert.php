<?php
$this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fileupload.css">
<!-- our css -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/our/editCert.css">

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fileupload.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/our/cert.js"></script>

<form id="frm" method=post action="" name="frm" class="form-inline">
	<input type="hidden" name="cert_id" value="<?php echo $certificate->id;?>">
	<img class="img-thumbnail" id="uploadedImage" src="<?php if(!empty($certificate->photo_path)){?><?php echo Yii::app()->request->baseUrl;?>/index.php/cert/getImage?download=1&file=<?php echo $certificate->photo_path;?><?php }?>" style="max-width:600px;height:auto;">
	<input type="hidden" id="uploadedImageName" name="uploadedImageName" value="<?php if(!empty($certificate->photo_path)){?><?php echo $certificate->photo_path;?><?php }?>">
	<br/>
	<span class="btn btn-success fileinput-button">
		<i class="glyphicon glyphicon-plus"></i>
		<span>Select files...</span>
		<!-- The file input field used as target for the file upload widget -->
		<input id="fileupload" type="file" name="files[]" multiple>
	</span>
	<br/><br/><br/>
	<fieldset>
	    <legend class="scheduler-border"><strong>你的信息</strong></legend>
		<div class="form-group col-xs-3">
		    <label for="lover_1_name">名字*</label>
		    <input class="form-control" type="text" name="lover_1_name" id="lover_1_name" placeholder="名字" value="<?php echo $certificate->lover_1_name;?>" maxlength=10/>
		</div>
		<div class="form-group col-xs-3">
		    <label for="lover_1_province">省份*</label>
		    <input type="text" class="form-control" name="lover_1_province" id="lover_1_province" placeholder="省份" value="<?php echo $certificate->lover_1_province;?>" maxlength=10/>
		</div>
		<div class="form-group col-xs-3">
		    <label for="lover_1_city">城市*</label>
			<input type="text" class="form-control" name="lover_1_city" id="lover_1_city" placeholder="城市" value="<?php echo $certificate->lover_1_city;?>" maxlength=10/>
		</div>
		<div class="form-group col-xs-3">
		    <label for="lover_1_id_number">身份证</label>
		    <input type="text" class="form-control" name="lover_1_id_number" id="lover_1_id_number" placeholder="身份证" value="<?php echo $certificate->lover_1_id_number;?>" maxlength=20/>
		</div>
	</fieldset>
	<br/><br/>
	<fieldset>
	    <legend class="scheduler-border"><strong>TA的信息</strong></legend>
		<div class="form-group col-xs-3">
		    <label for="lover_2_name">名字*</label>
		    <input class="form-control" type="text" name="lover_2_name" id="lover_2_name" placeholder="名字" value="<?php echo $certificate->lover_2_name;?>" maxlength=10/>
		</div>
		<div class="form-group col-xs-3">
		    <label for="lover_2_province">省份*</label>
		    <input type="text" class="form-control" name="lover_2_province" id="lover_2_province" placeholder="省份" value="<?php echo $certificate->lover_2_province;?>" maxlength=10/>
		</div>
		<div class="form-group col-xs-3">
		    <label for="lover_2_city">城市*</label>
			<input type="text" class="form-control" name="lover_2_city" id="lover_2_city" placeholder="城市" value="<?php echo $certificate->lover_2_city;?>" maxlength=10/>
		</div>
		<div class="form-group col-xs-3">
		    <label for="lover_2_id_number">身份证</label>
		    <input type="text" class="form-control" name="lover_2_id_number" id="lover_2_id_number" placeholder="身份证" value="<?php echo $certificate->lover_2_id_number;?>" maxlength=20/>
		</div>
	</fieldset>
	<br/><br/>
	<fieldset>
	    <legend class="scheduler-border"><strong>爱情宣言*</strong></legend>
		<div class="form-group col-xs-12">
			<textarea class="form-control" name="love_oath" id="love_oath" rows="3" placeholder="爱情宣言"><?php echo $certificate->love_oath;?></textarea>
		</div>
	</fieldset>
	<br/><br/>
	<fieldset>
	    <legend class="scheduler-border"><strong>倒计时公开期限(月)*</strong></legend>
		<div class="form-group col-xs-2">
		    <input type="text" class="form-control" name="count_down_month" id="count_down_month"  value="<?php echo $certificate->count_down_month;?>" maxlength=3/>
			<!-- <span class="help-inline">月后公开</span> -->
		</div>
	</fieldset>
	<br/><br/>
	<button type="button" class="btn btn-default" onclick="saveDraftCert()">保存草稿</button>
	<button type="button" class="btn btn-primary" onclick="validateAndSubmit()">登记</button>
</form>


