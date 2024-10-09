<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Piesakies webināram!</h1> 
   <form action="/confirmation.php" method="post">
    <label for="first_name">Vārds</label>
    <input type="text" name="first_name" id="first_name">
    <label for="user_email">Ēpasts</label>
    <input type="email" name="user_email" id="user_email">
    <br>
    <p>kursa līmenis</p>
    <select name="level" id="">
        <option value="beginer"></option>
        <option value="Intermediate"></option>
        <option value="Advanced"></option>
    </select>
    <br>
    <div>
        <input type="radio" name="kursa_līmenis" id="choice1" value="Beginner">
        <label for="choice1">Beginner</label>
        <input type="radio" name="kursa_līmenis" id="choice2" value="Intermediate">
        <label for="choice2">Intermediate</label>
        <input type="radio" name="kursa_līmenis" id="choice3" value="Advanced">
        <label for="choice3">Advanced</label>
    </div>
    <br>
    <select name="" id="">
        <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</p>
        <br>
        <input type="radio" name="radio2" id="yes">
        <label for="yes">Yes</label>
        <input type="radio" name="radio2" id="no">
        <label for="no">No</label>
    </select>
    <br>
    <input type="submit" value="">
    
   </form>
   <h3>Jau reģistrējušies</h3>
   
   <a href="blog.php">Uz blogu</a>
   <br>
   <script src="Javascript/app.js"></script>
</body>
<?php
    $names =[
        ["name"=>"Janis","email"=>"janis@gmail.com","level"=>"beginer"],
        ["name"=>"Juris","email"=>"jurs@gmail.com","level"=>"beginer"],
        ["name"=>"Jojs","email"=>"jojs@gmail.com","level"=>"beginer"],
    ];
    foreach($names as $name){
        echo "Vārds:" . $name["name"] . ", E-pasts: " . $name["email"] . "level: " . $name["level"] . "<br>";
        
        
    }
?>
</html>