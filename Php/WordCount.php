<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <textarea name="text" id="text" name="text" rows="5" cols="10"></textarea>
    <input type="submit" value="Count Words">
  </form>
  <?php
    if(isset($_POST['text'])){
      $text= $_POST['text'];
      $Word_Count= str_word_count($text);
      echo "<p>Number of words in '$text' are: $Word_Count</p>";
    }
  ?>
</body>
</html>