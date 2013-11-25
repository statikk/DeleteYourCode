<html>
 <head>
  	<title>PHP Test</title>
    <style type="text/css">
    html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption{ margin: 0; padding: 0; border: 0; outline: 0; font-style: inherit; font-size: 100%; font-family: inherit; vertical-align: baseline; background-color:transparent; list-style:none;}

.form{
    width:1000px;
    padding:15px;
    background:#F5F5F5;
}
.block1{
    width:1000px;
    font-family:arial;
    color: #666666;
    font-size:12px;
    margin-top:10px;
    border: 1px solid black;
}
.text {
    width:1000px;
    font-family:arial;
    color: 666666;
    font-size:16px;
    margin-top:0px;
    bor666der: 1px solid black;
}
.label{
    width:1000px;
    font-family:arial;
    color: #666666;
    font-size:12px;
    margin-top:10px;
    margin-bottom:0px;
    bor444der: 1px solid yellow;
}
.part{
    bor555der: 2px solid green;
    padding:10px;
    overflow:hidden;
}
.naamRight{
    width: 50%;
    float:left;
}
.naamLeft{
    float:left;
    width: 50%;
} 
.naamRight input {width:95%; border-radius: 3px;}
.naamLeft select {width:95%;}

.straatRight{
    float:left;
    width:50%;
}
.nummerMiddle{
    float:left;
    width:17%;
}
.busLeft{
    float:left;
    width:17%;
} 
.straatRight input {width:95%; border-radius: 3px;}
.nummerMiddle input {width:85%; border-radius: 3px;}
.busLeft input {width:95%; border-radius: 3px;}

.postcodeRight{
    float:left;
    width:17%;
}
.gemeeneMiddle{
    float:left;
    width:50%;
}
.landRight{
    float:left;
    width:33%;
} 
.postcodeRight input {width:85%; border-radius: 3px;}
.gemeeneMiddle input {width:95%; border-radius: 3px;}
.landRight select {width:95%;}

.paritaer{
    width: 33%;
    float:left;
}

.arbeidersRight{
    width: 33%;
    float:left;
}
.bediendenLeft{
    width: 33%;
    float:left;
}
.arbeidersRight select {width:95%;}
.bediendenLeft select {width:95%;}

.ondermemingsnummerRight{
    width: 33%;
    float:left;
}
.aantalLeft{
    float:left;
    width: 33%;
} 
.ondermemingsnummerRight input {width:95%; border-radius: 3px;}
.aantalLeft select {width:95%;}

.buttonRight{
    float:left;
    width: 50%;}
.buttonLeft{
    float:left;
    width: 50%;}
    </style>
 </head>
 <body>
 <form class="form">
<h4>1. Vul de gegevens van je bedrijf/organisatie in:</h4> 

<div class="block1">
        <div class="part" >
                <div class="naamRight">
                    <label>Naam*</label>
                    <input type="text" name="name"/>
                </div>    
                <div class="naamLeft">
                    <label>Naam*</label>
                        <select>
                        <option value="General">Maav uw keuze</option>
                        <option value="Item1">Item1</option>
                        <option value="Item2">Item2</option>
                        <option value="Item3">Item3</option>
                        </select>
                    </div>           
        </div>

        <div class="part">
                <div class="straatRight">
                    <label>Straat*</label>
                    <input type="text" name="name"/>
                </div>
                <div class="nummerMiddle">
                    <label>Nummer*</label>
                    <input type="text" name="name"/>
                </div>
                <div class="busLeft">
                    <label>Bus*</label>
                    <input type="text" name="name"/>
                 </div>
        </div>
    
        <div class="part">
                <div class="postcodeRight">
                    <label>Postcode*</label>
                    <input type="text" name="name" />
                </div>
                <div class="gemeeneMiddle">
                    <label>Gemeente*</label>
                    <input type="text"name="name"/>
                </div>
                <div class="landRight">
                    <label>Land*</label>
                    <select>
                        <option value="General">Maav uw keuze</option>
                        <option value="Item1">Item1</option>
                        <option value="Item2">Item2</option>
                        <option value="Item3">Item3</option>
                    </select>
                </div>
        </div>
</div>

<div class="block1">
        <div class="part">
                   <label class="paritaer">Paritaer Cornite nr.</label>
                   <label class="paritaer">Paritaer Cornite nr.</label>
        </div>  
    

        <div class="part">
            <div class="arbeidersRight">
                <label>Arbeiders*</label>
                <select>
                    <option value="General">Maav uw keuze</option>
                    <option value="Item1">Item1</option>
                    <option value="Item2">Item2</option>
                    <option value="Item3">Item3</option>
                </select>
            </div>
            <div class="bediendenLeft" >
                <label>Bedienden*</label>
                <select>
                    <option value="General">Maav uw keuze</option>
                    <option value="Item1">Item1</option>
                    <option value="Item2">Item2</option>
                    <option value="Item3">Item3</option>
                </select>
            </div>
        </div>

        <div class="part">
            <div class="ondermemingsnummerRight">
                <label>Ondermemings/BTW-nummer*</label>
                <input type="text" name="name" />
            </div>
            
            <div class="aantalLeft">
                <label>Aantal werknemers</label>
                <select>
                    <option value="General">Maav uw keuze</option>
                    <option value="Item1">Item1</option>
                    <option value="Item2">Item2</option>
                    <option value="Item3">Item3</option>
                </select>
            </div>
        </div>
</div>
        
    
    <div>
      <h4 style="padding-top:15px;">2.Facturatiegegevens:</h4> 
        <input type="checkbox" name="vehicle" value="Bike" />
        <label class="label">Bedridjfsgegevens zijn hetzelfde als facturatiegegevens</label>
    </div>

<div class="block1">
        <div class="part" >
            <div class="naamRight">
                <label>Naam*</label>
                <input type="text" name="name" />
            </div>    
            <div class="naamLeft">
                <label>Naam*</label>
                    <select class="selectNaam">
                    <option value="General">Maav uw keuze</option>
                    <option value="Item1">Item1</option>
                    <option value="Item2">Item2</option>
                    <option value="Item3">Item3</option>
                    </select>
            </div>
        </div>
            
        <div class="part">
            <div class="straatRight">
                <label>Straat*</label>
                <input type="text" name="name" />
            </div>
            <div class="nummerMiddle">
                <label>Nummer*</label>
                <input type="text" name="name"/>
            </div>
            <div class="busLeft">
                <label>Bus*</label>
                <input type="text"name="name"/>
            </div>

        </div>
            
        <div class="part">
            <div class="postcodeRight">
                <label class="lableInputStraat">Postcode*</label>
                <input type="text" name="name" />
            </div>
            <div class="gemeeneMiddle">
                <label>Gemeente*</label>
                <input type="text" name="name"/>
            </div>
            <div class="landRight">
                <label>Land*</label>
                <select>
                    <option value="General">Maav uw keuze</option>
                    <option value="Item1">Item1</option>
                    <option value="Item2">Item2</option>
                    <option value="Item3">Item3</option>
                </select>
            </div>
        </div>
    </div>

<div style="margin:15px;overflow:hidden;">
        <div class="buttonRight"><button type="button">PREVIUOS</button></div>
        <div class="buttonLeft" align="right"><button type="button">NEXT</button></div>
</div>
</form>

 </body>
</html>