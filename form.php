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
<label>Name: <span class="red">*</span></label>
<input type="text" name="name" style="width:500px;" />
</div>
<div>
<label>Email Address: <span class="red">*</span></label>
<input type="text" name="address" placeholder="johndoe@example.com" style="width:500px;" />
</div>
<div>
<label>Telephone: </label>
<input type="text" name="telephone" style="width:500px;" />
</div>
<div>
<label>Enquiry: </label>
<select style="width:500px;" name="enquiry" >
<option value="General">General</option>
<option value="Item1">Item1</option>
<option value="Item2">Item2</option>
<option value="Item3">Item3</option>
</select>
</div>
<div>
<label>Message: <span class="red">*</span></label>
<textarea name="message" style="width:500px; height:200px" placeholder="Your message must be greater than 20 characters" class="italic"></textarea>
</div>
<div>
<label class="italic"><span class="red">*</span> indicates a required fields</label>
<button type="submit">Submit</button>
</div>
<div style="float:bottom;width:10px;height:10px;"></div>


</form>
</div>
</body>
</html>