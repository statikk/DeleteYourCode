<!DOCTYPE HTML>
<html> 
<body>


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
            <input type="text" name="address" placeholder="johndoe@example.com" class="italic" style="width:500px;" />
        </div>            
        <div>
            <label>Telephone: </label>
<input type="text" name="telephone" style="width:500px;" />
        </div>
        <div>
             <label>Enquiry: </label>
            <select style="width:500px;" name="enquiry" />
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

</body>
</html>