<?php

include_once("config.php");
$txt = "23:02";

$txt='2012-11-02'.' '.$txt;
$txt3=(strtotime($txt));
echo $txt3.'<br />';
echo date('Y-m-d H:i:s', $txt3);

?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>
<body>
	<form class="form-material m-t-40" action="upload_try_code.php" method="POST">
								<div class="form-group">
                                    <label>Upload Car Images</label>
                                    <input type="file" name= "upload[]" multiple="multiple" class="form-control" id="upload"  aria-describedby="fileHelp">
                                </div>
                                <div>
                                    <button type="button" id="closeButton" class="btn btn-default waves-effect " >Close</button>
                                    <button type="submit" id="saveButton" class="btn btn-danger waves-effect waves-light">Save</button>
                                </div>
	</form>
	<ul id="fileList" >
	</ul>
<script>
//get the input and UL list
function makeList(){
var input = document.getElementById('upload');
var list = document.getElementById('fileList');

//empty list for now...
while (list.hasChildNodes()) {
	list.removeChild(ul.firstChild);
}

//for every file...
for (var x = 0; x < input.files.length; x++) {
	//add to list
	var li = document.createElement('li');
	li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
	list.append(li);
}
}
</script>
</body>
</html>