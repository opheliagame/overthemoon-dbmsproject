<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="transc">
      FOOD

      <input id="food1" type="radio" name="" value="">
      <?php
      $sql="SELECT * FROM FOOD WHERE THEMEID=1;";
      $result=mysqli_query($con,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck > 0)
      {
        while($row=mysqli_fetch_assoc($result))
        echo $row['THEMEID']."<br>";
      }
      ?>

      <input id="food2" type="radio" name="" value="">
      <input id="food3" type="radio" name="" value=""><br>
    VENUE
    <input id="venue1" type="radio" name="" value="">
    <input id="venue2" type="radio" name="" value="">
    <input id="venue3" type="radio" name="" value=""><br>
    DECORATIONS
    <input id="deco1" type="radio" name="" value="">
    <input id="deco2" type="radio" name="" value="">
    <input id="deco3" type="radio" name="" value=""><br>
    ENTERTAINMENT
    <input id="entn1" type="radio" name="" value="">
    <input id="entn2" type="radio" name="" value="">
    <input id="entn3" type="radio" name="" value=""><br>
    </div>
  </body>
</html>
