<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <form action="PHP/contact-form-handler.php" method="post">
    <label for="name">Your Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email"  name="email" placeholder="Your email..">
   
    <label for="message">Message</label>
    <textarea  name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</body>
</html>