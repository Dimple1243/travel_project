<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel_Page</title>
</head>

    <body bgcolor="white" text="black" link="black" >


    <script>
            
                function validateForm(){
                    var text = document.getElementById("pass").value;
                    var regx = /[A-Z]{1}[0-9]{7}/ ;
                    if(regx.test(text)){
                    }
                    select = document.getElementById('country'); 
                    if (select.value) {
                    return true;
                    }
                    return false;
                   
                }
              
                                           
    </script>
   
    <style>
        body{
            background-color: rgb(125, 210, 225);
        }



    div{
        margin:0px auto;
        width: 30%;
        padding: 30px;
        font-size: 20px;
        background-color: rgb(8, 203, 216);
    }
    input[type=text],select{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }
    input[type=number]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }
    input[type=tel]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }
    input[type=Date]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }
    input[type=submit]{
        width: 100%;
        background-color:white;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type=submit]{
        background-color: hsl(187, 65%, 73%);
    }
    h1{
        color: rgb(21, 1, 3);
        text-align: center;
    }
    div label{
        color: white;
    }
    .hidden {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        box-sizing: border-box;
        font-size: 14px;
    }
    
    </style>



    </head>
    <body>
    <h1>!!!Welcome To Your Travel Request Form !!!</h1>
    <div>
    
    <form name="validform" action="connection.php" method="post" id="form" onsubmit="return validateForm()">
    <label for="username">Name as per Passport </label><br/>
    <input type="text" id="username" name="username" placeholder="Enter your Name "><br/>

    <label for="username">Email </label><br/>
    <input type="text" name="email" placeholder="Enter your Email ">

    <label for="phone">Contact No. </label><br/>
    <input type="number" placeholder="Enter your Emergency Contact No." name="phone" id="phone" onKeyPress="if(this.value.length==10) return false;" /><br>

    <label for="country">Destination Country</label>
    <select name="country" id="country" required>
    <option value="Nigeria">Nigeria</option>
    <option value="South Africa">South Africa</option>
    <option value="Egypt">Egypt</option>
    <option value="Ghana">Ghana</option>
    <option value="Ivory Coast">Ivory Coast</option>
    <option value="Kenya">Kenya</option>
    <option value="Singapore">Singapore</option>
    </select>

    <label for="date of birth">Date of Birth</label><br/>
    <input type="date" id="Date of birth" name="dob" placeholder="Enter your Date of Birth"><br/> 


    <label for="date of leaving india">Date of leaving india</label><br/>
    <input type="date" id="demo" name="dol" min="2023-02-28"> 

    <label for="date of Reaching india">Date of Reaching india</label><br/>
    <input type="date" id="demo" name="dor" min="2023-02-28;"> 

    <label for="phone">Passport No.</label><br/>
    <input id="pass" placeholder="Enter your Passport No."name="passport" type="tel" maxlength="8" > <br/>


    <label>Any preexisting Diease</label><br>
    <input type="radio" name="radio" value="yes"> Yes <input type="radio" name="radio" value="no"> No<br><br>
    <label for="Details">if yes,fill your details here</label><br />
    <input type="text" id="Details" name="Details"placeholder="If yes,fill your details here" ><br />
    <label for="Nominee Name">Nominee Name</label><br />
    <input type="text" id="Nominee Name" name="NomineeName"placeholder="Enter your Nominee Name here" ><br />

    <label for="Nominee Name">Relationship with Nominee Name</label><br />
    <input type="text" id="Relationship with Nominee Name" name="RelationNominee"placeholder="Enter your Relationship with Nominee Name here"><br />

    <label for="phone">Emergency Contact No. </label><br />
    <input type="number" placeholder="Enter your Emergency Contact No."id="contact" name="contact" onKeyPress="if(this.value.length==10) return false;" /><br>
    <label for="Emergency details">Emergency Contact Details </label><br />
    <input type="text" placeholder="Enter your Emergency Contact Details" id="conde" name="Edetails"><br>

    <input type="submit"  class="form-control btn btn-primary" value="submit" name = "submit"  />


</form>
</div>
</body>
</html>



