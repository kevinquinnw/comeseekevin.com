<html lang="en">
<head>
  <meta charset="utf-8">

  <title>hello</title>
  <meta name="description" content="Come See Kevin">
  <meta name="author" content="Kevin Quinn">
  <meta name=”viewport” content=”width=device-width, initial-scale= 1.0">

  <link rel="icon" href="../Assets/cskicon.svg" type="image/icon type">
  <link rel="stylesheet" type="text/css" href="hello.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">


</head>

<body>
    <a href="index.html"><img class="csk-icon" src="../Assets/cskicon.svg"></a>

    <div class="container">

        <form method="post" action="hello.php">
        
            <label>Name</label>
            <input name="name" placeholder="Type Here">
                    
            <label>Email</label>
            <input name="email" type="email" placeholder="Type Here">
                    
            <label>Message</label>
            <textarea name="message" placeholder="Type Here"></textarea>

            <label>*What is 3*3? (Anti-spam)</label>
            <input name="human" placeholder="Type Here">
                    
            <input id="submit" name="submit" type="submit" value="Submit">
                
        </form>

    </div>
</body>
</html>