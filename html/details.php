<?php

include_once '../php/func.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="transc">
      FOOD
      <br>
      <input id="food1" type="radio" name="food" value=""><br>
      <input id="food2" type="radio" name="food" value=""><br>
      <input id="food3" type="radio" name="food" value=""><br>


      <?php
      $sql="SELECT * FROM FOOD WHERE THEMEID=1;";
      $result=mysqli_query($con,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck > 0)
      {
        while($row=mysqli_fetch_assoc($result)){

          echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
        }
        
      }
      ?>

    VENUE<br>
    <input id="venue1" type="radio" name="venue" value=""><br>
    <input id="venue2" type="radio" name="venue" value=""><br>
    <input id="venue3" type="radio" name="venue" value=""><br>

    <?php
      $sql="SELECT * FROM VENUE WHERE THEMEID=1;";
      $result=mysqli_query($con,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck > 0)
      {
        while($row=mysqli_fetch_assoc($result)){

          echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
        }
        
      }
      ?>
    DECORATIONS
    <br>
    <input id="deco1" type="radio" name="decorations" value=""><br>
    <input id="deco2" type="radio" name="decorations" value=""><br>
    <input id="deco3" type="radio" name="decorations" value=""><br>

    <?php
      $sql="SELECT * FROM DECORATIONS WHERE THEMEID=1;";
      $result=mysqli_query($con,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck > 0)
      {
        while($row=mysqli_fetch_assoc($result)){

          echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
        }
        
      }
      ?>

    ENTERTAINMENT
    <br>
    <input id="entn1" type="radio" name="entertainment" value=""><br>
    <input id="entn2" type="radio" name="entertainment" value=""><br>
    <input id="entn3" type="radio" name="entertainment" value=""><br>

    <?php
      $sql="SELECT * FROM ENTERTAINMENT WHERE THEMEID=1;";
      $result=mysqli_query($con,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck > 0)
      {
        while($row=mysqli_fetch_assoc($result)){

          echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
        }
        
      }
      ?>

      

    </div>

    <script type="text/javascript">
      function calculateTotal() {
        
      }
    </script>

    <button onclick="calculateTotal()">Place Order!</button>
    
  </body>
</html>
