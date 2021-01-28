
<head>
<style>
	.must_read{
		font-family: 'Trebuchet MS', sans-serif;
		font-size: 16px;
		line-height: 22px;
		padding: 20px 0px 0px 10px;
		text-align: center;
	}
	.button {
		background-color: #ffffff;
		padding: 20px;
	}
	.btn {
		background-color: powderblue;
		padding: 10px;
		width: 200px;
		border-radius: 25px;
	}
	.btn {
		cursor: pointer;
	}

	.btn:active {
	  background-color: #powderblue;
	  box-shadow: 0 5px #666;
	  transform: translateY(2px);
	}
	.banner {
	min-height: 129px;
	color: white;
	background-image: url('books.jpg');
	background-repeat: repeat-x;
	margin: auto;
}

</style>
<script>
function showBook(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<title>Books</title>
<div class="banner"></div>
 <div class="must_read">
  <?php echo "Not sure what to read?" ."<br />" ."Click the button below to receive a random book recommendation";?>
   <div class="button" >
	<button type="button" class="btn" onclick="showBook()" >Click Here</button>
   </div>
    <div id="txtHint"></div>
 </div>
<div>



