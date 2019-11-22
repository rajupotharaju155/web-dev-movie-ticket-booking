<?php
include("connection.php");
mysqli_select_db($con, 'movie');

$sql="select sid from avengers where status=1";
$result=mysqli_query($con,$sql);
$i=0;
	while ($row=mysqli_fetch_row($result))
    	{
		$arr[$i]=$row[0];
		$i=$i+1;
    	}
$c=count($arr);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/seat_select.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <style>
        .abc{
            border: 0px solid white;
            height:600px;
        }
    .abc li{
        padding: 14px 0px;
        color: white;
    }
    .abc ul{
        list-style-type: none;
    }
    .num{
        font-weight: bold;
        top: 12%;
        position: absolute;
        left: 32.5%;
        border: 0px solid white;
        width: 500px;
    }
    .num li{
        display:inline-block;
        padding-left: 40px;
        color: white;
    }

    .btn{
        position:absolute;
        left:50%;top:110%;
        transform:translate(-50%,-50%);
    }

    .btn input:hover{
        color: red;
    }
    </style>
</head>

<body> <div class="abc" style="width:60px;left:30%;top:13%;  position:absolute;"  > <ul style="margin-top:50%; text-decoration:none;" ><li>A</li><li>B</li><li>C</li><li>D  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  </li><li>   E</li><li>F</li><li>G</li><li>H</li></ul></div>
<div  class="num"><ul><li>1</li><li>2</li><li>3</li><li>   4   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    </li><li>5</li><li>6</li><li>7</li><li>8</li></ul></div>
<div style="position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);">
<form name="selection" method="post" action="avenger_process.php">
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="A8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="B8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="C8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="D8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E1">
        <i class="fa fa-ticket" style="margin-top: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="E8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="F8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="G8">
        <i class="fa fa-ticket"></i>
    </label>
<br>
<label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H1">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H2">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H3">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H4">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H5">
        <i class="fa fa-ticket" style="margin-left: 50px;"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H6">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H7">
        <i class="fa fa-ticket"></i>
    </label>
    <label class="toggle-button">
        <input type="checkbox" name="seat[]" value="H8">
        <i class="fa fa-ticket"></i>
    </label>
	<br>
        	<div class="btn">
	        <input type="submit" name="submit" id="checkBtn"  value="BLOCK MY SEAT"  style="background-color: black !important; color:white;"  >
	        </div>
	</form>
</div>
<br>
	<script>
var seats = <?php echo json_encode($arr); ?>;
var count = <?php echo $c; ?>;
for(i=0;i<count;i++)
{
var f=seats[i];
var shahid=document.getElementsByName("seat[]")[f-1];
var att = document.createAttribute("disabled");
shahid.setAttributeNode(att);
}





$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});





</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>