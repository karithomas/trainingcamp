<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php 
$title = 'Contact';
include 'templates/h_open.php'; 
include 'templates/h_close.php';
?>
<body>
    <h2>Contact Me</h2>
    <div class="container">
    </div>
    <div class="column">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="firstname" placeholder="First Name">
        <br>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="lastname" placeholder="Last Name">
        <br>
        <label for="e-mail">E-mail Address</label>
        <input type="text" id="email" name="email" placeholder="Email Address">
        <br>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Comments or feedback to make us better..." style="height:170px"></textarea>
        <br>
        <label for="Country">Country</label>
        <br>
        <input type="radio" id="usa" name="country" value="usa">
        <label for="usa">USA</label><br>
        <input type="radio" id="other" name="country" value="other">
        <label for="other">Other</label><br>
        <p>Select your favorite sports:</p>

        <div>
            <input type="checkbox" id="baseball" name="baseball">
            <label for="baseball">Baseball</label>
        </div>
        <div>
            <input type="checkbox" id="football" name="football">
            <label for="football">Football</label>
        </div>
        <div>
            <input type="checkbox" id="basketball" name="basketball">
            <label for="basketball">Basketball</label>
        </div>
        <div>
            <input type="checkbox" id="hockey" name="hockey">
            <label for="hockey">Hockey</label>
        </div>
        <div>
            <input type="checkbox" id="golf" name="golf">
            <label for="golf">Golf</label>
        </div>
        <label for="cars">Select which type of car you're driving to the game:</label>

        <select name="cars" id="cars">
            <option value="jeep">Jeep</option>
            <option value="chevrolet">Chevrolet</option>
            <option value="toyota">Toyota</option>
            <option value="dodge">Dodge</option>
            <option value="nissan">Nissan</option>
            <option value="maserati">Maserati</option>
        </select>
        <br>
        <button type="submit" value="Submit">Submit</button>
        <button type="cancel" value="Cancel">Cancel</button>
    </div>

<?php include 'templates/aside.php'; ?>
<?php include 'templates/f_open.php'; ?>
<?php include 'templates/f_close.php'; ?>