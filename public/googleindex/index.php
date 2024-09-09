<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="row" style="padding-top:100px;">
<div class="col-md-3"></div>
<div class="col-md-6">
<form method="POST" id="form" >
<h3>Instant Indexing</h3>
<label>URLs(one per line)</label>
<textarea required class="form-control" name="urls" style="height:150px;">
</textarea>
<br>
<center>
<input type="radio" required name="action" value="URL_UPDATED"> Update Url 
<input type="radio" required name="action" value="GET_STATUS"> Get Status 
<input type="radio" required name="action" value="URL_DELETED"> Delete Url 
<br>
<button class="btn btn-danger" id="submit" name="btnsubmit">Submit</button>

</center>
</form>
</div>
<div class="col-md-3"></div>
</div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10" id="response"></div>
<div class="col-md-1"></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function (e) {
$('#form').submit(function(e) {
e.preventDefault();
$('#submit').text('Please wait...');
var formData = new FormData(this);
$.ajax({
type:'POST',
url: "googleindex1234.php",
data: formData,
cache:false,
contentType: false,
processData: false,
success: (data1) => {
//this.reset();
//alert(data1);
$("#response").html(data1);
$('#submit').text('Submit');
console.log(data1);
},
error: function(data1){
	alert('something wrong')
	//$('#importing').text('Import');
console.log(data1);
}
});
});
});
</script>
</body>
</html>