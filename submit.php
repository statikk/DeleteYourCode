<!DOCTYPE HTML>
<html>
<style>
.red{color:red;}

.italic {font-style:italic}

body div{width: 510px;
    margin:15px;}

.button {
    background-color: #808080;
color: #FFFFFF;
    float: right;
    border-radius: 10px;
width: 70px;
height: 30px;
}

.border{
    border-style:solid;
    border-width:2px;
}
div {
    background-color:#b0c4de;
    border-radius:25px;
}
</style>

<body>


<div style="width:550px" class="border">
<div>
<h1> GET IN TOUCH!</h1>
</div>
<div class="italic">
<label>Fill out our super swanky HTML5 contact form below to get in touch with us!</label>
<label>Please provide as much information as possible for us to help you with your enquiry :)</label>
</div>
<form action="submit.php" method="post">
<div>
Name: <?php echo $_POST["name"]; ?><br>
</div>
<div>
Email Address: <?php echo $_POST["address"]; ?><br>
</div>
<div>
Telephone: <?php echo $_POST["telephone"]; ?><br>
</div>
<div>
Enquiry: <?php echo $_POST["enquiry"]; ?><br></div>
<div>
Message: <?php echo $_POST["message"]; ?><br>
</div>
<div>
<button>Close</button>
</div>
<div style="float:bottom;width:10px;height:10px;"></div>

</form>
</div>
</body>
</html>

