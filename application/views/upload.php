<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('insert/kamera_post');?>

<input type="text" name="ksens" size="20" />
<input type="file" name="citra" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>