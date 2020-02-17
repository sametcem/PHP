<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script>
		function showSuggestion(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else {
				// AJAX REQUEST
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);  // send query string
				xmlhttp.send();
			}
		}
	</script>

</head>
<body>
	<div class="container">
	    <h1>Search Users</h1>
	    <form> 
	    	Search User: <input type="text" class="form-control" 
			onkeyup="showSuggestion(this.value)">
	    </form>
	    <p>Suggestions: <span id="output" 
		style="font-weight:bold"></span></p>
</div>
</body>
</html>