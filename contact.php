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
  <div style="text-align:center">
  </div>
  <div class="row">
    </div>
    <div class="column">
      <form action="/action_page.php">
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

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php include 'templates/aside.php'; ?>
<?php include 'templates/f_open.php'; ?>
<?php include 'templates/f_close.php'; ?>