<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo "text from php"?>
    <?php echo "<h3>this is a paragraph</h3>"?>


    <?php
    $someText = "some text";
    echo $someText;
    $myDate = date("d-m-y h:i:s"); 
                     
    $myDate = date("d-m-y h:i:s"); 
                     
    
    ?>



    <h1>Forms</h1>

    <?php echo "text from php"?>
    
    <form 
    action="/post/1" method="get">
    <label for="title">Title</label>
    <input required type="text" id ="title"  name = "title" placeholder="Enter Text">
    <input type="submit" value="send">

    <br>


    <label for="content"></label>
    <textarea  name="content" id="content" ></textarea>
    <br>
    <input type="submit" value="send">
    <br>

    <input type="radio" name="fav_language" id="radio" value = "lol">
    <label for="sfcs">Rsa</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label>

    <br>
    <hr>
<form action="/action_page.php">
    <label for="cars">Choose a car:</label>
    <select name="cars" id="cars">
      <optgroup label="Swedish Cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
      </optgroup>
      <optgroup label="German Cars">
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </optgroup>
    </select>
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <div>data-color = "red"</div>
   
</form>
</body>
</html>