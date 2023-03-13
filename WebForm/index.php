<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 4 Assignment</title>
    <link rel="stylesheet" href="./main.css" />
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h1>INFO SESSION WITH OBJECTIVITY</h1>
    <hr>
    <p>
        OJEVTIVITY IS PARTNERING WITH UNILAK TO HIRE THE GRADUATES FROM THE 
        CAMPUS OF KIGALI PLEASE FILL THIS FORM FOR YYOU TO BE CONSIDERED
    </p>
<form action="connect.php" method="POST" enctype="multipart/form-data">
    <fieldset>
    <legend>FORM</legend>
                    <fieldset>
                        <legend>PERSONAL INFORMATION</legend>
                        <label>FIRST NAME</label><br>
                        <input id="firstName" type="text" name="firstName" size="100" required><br> <br>
                        <p id="val_firstName">Please enter a valid first name</p>


                        <label>LAST NAME</label><br>
                        <input id="lastName" type="text" name="lastName" size="100" required><br> <br>
                        <p id="val_lastName">Please enter a valid last name</p>

                        <label>EMAIL</label><br>
                        <input id="email" type="email" name="email" size="100" required><br> <br>
                        <p id="val_email">Please enter a valid email</p>

                        <label>PASSWORD</label><br>
                        <input id="password" type="password" name="password" size="100" required><br> <br>
                        <p id="val_password">Please enter a valid password (7 to 14 characters)</p>

                        <label>DATE</label><br>
                        <input type="date" size="100" name="date" required><br><br>

                        <label>YOUR GENDER</label><br><br>
                        <input type="radio" id="male" name="gender" value="MALE">
                        <label for="male">MALE</label>
                        <input type="radio" id="female" name="gender" value="FEMALE">
                        <label for="female">FEMALE</label>

                    </fieldset>
                <br>

                    <fieldset>
                        <legend>PERSONAL INFORMATION</legend><br>
                        <label>COUNTRY</label><br>
                        <input list="countries" name="countries">
                        <datalist id="countries">
                            <option value="RWANDA">
                            <option value="UGANDA">
                            <option value="KENYA">
                            <option value="LIBERIA">
                            <option value="GHANA">
                        </datalist><br><br>

                        <label>DISTRICT</label><br>
                        <input list="districts" name="districts">
                        <datalist id="districts">
                            <option value="KICUKIRO">
                            <option value="GASABO">
                            <option value="NYARUGENGE">
                        </datalist>
                    </fieldset>
                <br><br>

                    <fieldset>
                        <legend>QUALIFICATION </legend><br><br>
                        <label for="quailfication">PLEASE SELECT MAXIMUM THREE LANGUAGES YOU MASTER</label><br>
                        <select id="qualification" name="qualification[]" size="6" multiple>
                            <option name="qualification[]" value="JAVA">JAVA</option>
                            <option name="qualification[]" value="PHP">PHP</option>
                            <option name="qualification[]" value="PYTHON">PYTHON</option>
                            <option name="qualification[]" value="SWIFT">SWIFT</option>
                            <option name="qualification[]" value="JAVASCRIPT">JAVASCRIPT</option>
                            <option name="qualification[]" value="JAVA">JAVA</option>
                            <option name="qualification[]" value="PHP">PHP</option>
                            <option name="qualification[]" value="PYTHON">PYTHON</option>
                            <option name="qualification[]" value="SWIFT">SWIFT</option>
                            <option name="qualification[]" value="JAVASCRIPT">JAVASCRIPT</option>
                        </select><br><br>
                        <label>UPLOAD YOUR CV</label><br><br>
                        <input type="file" name="file"><br><br>

                        <label>EDUCATION LEVEL</label><br>
                        <input list="educationlevel" name="educationlevel">
                        <datalist id="educationlevel">
                            <option value="BACHELOR">
                            <option value="MASTER">
                            <option value="PHD">
                            </datalist><br><br>

                            <label>WHICH WAS YOUR GRADUATION DATE</label><br><br>
                            <input type="month" name="months"><br><br>

                            <label>WHICH LANGUAGES YOU WANT TO MASTER IN THE NEXT FUTURE</label><br>
                            <input type="checkbox" name="future[]" value=".net"> .NET<br>
                            <input type="checkbox" name="future[]" value="java"> JAVA<br>
                            <input type="checkbox" name="future[]" value="python"> PYTHON<br>
                            <input type="checkbox" name="future[]" value="flutter"> FLUTTER<br>
                            <input type="checkbox" name="future[]" value="swift"> SWIFT<br>
                    </fieldset>
                <br>

                    <fieldset>
                        <legend>CONTACT US</legend><br><br>
                        <textarea  id="contactUs" name="contactUs" rows="20" cols="150"></textarea>
                    </fieldset>
                <br><br>
    <button name="submit">Submit</button>
</fieldset>

</form>
    <script src="./index.js"></script>
</body>
</html>