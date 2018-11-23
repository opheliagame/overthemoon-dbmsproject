<?php

include_once '../php/func.php';

$themeid;

if(isset($_GET['linkkitty'])) {
  $themeid = 1;
}
else if(isset($_GET['linkfrozen'])) {
  $themeid = 3;
}
else if(isset($_GET['linkmarvel'])) {
  $themeid = 2;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="transc">
      <div class="food">
        FOOD
        <br>
        <?php
        $sql="SELECT * FROM FOOD WHERE THEMEID='$themeid';";
        $result=mysqli_query($con,$sql);
        $resultcheck=mysqli_num_rows($result);
        $id = 1;
        if($resultcheck > 0)
        {
          while($row=mysqli_fetch_assoc($result)){
            echo '<input id="food'.$id . '" type="radio" name="food"><br>';
            echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
            $id = $id + 1;
          }
          
        }
        ?>
      </div>

      <div class="venue">
        VENUE<br>
        <?php
          $sql="SELECT * FROM VENUE WHERE THEMEID='$themeid';";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $id = 1;
          if($resultcheck > 0)
          {
            while($row=mysqli_fetch_assoc($result)){
              echo '<input id="venue'.$id . '" type="radio" name="venue"><br>';
              echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
              $id = $id + 1;
            }
            
          }
        ?>
      </div>

      <div class="decorations">
        DECORATIONS
        <br>
        <?php
          $sql="SELECT * FROM DECORATIONS WHERE THEMEID='$themeid';";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $id = 1;
          if($resultcheck > 0)
          {
            while($row=mysqli_fetch_assoc($result)){
              echo '<input id="deco'.$id . '" type="radio" name="decorations"><br>';
              echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
              $id = $id + 1;
            }
            
          }
        ?>
      </div>

      <div class="entertainment">
        ENTERTAINMENT
        <br>
        <?php
          $sql="SELECT * FROM ENTERTAINMENT WHERE THEMEID='$themeid';";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $id = 1;
          if($resultcheck > 0)
          {
            while($row=mysqli_fetch_assoc($result)){
              echo '<input id="entn'.$id . '" type="radio" name="entertainment"><br>';
              echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
              $id = $id+1;
            }
            
          }
        ?>
      </div>
    </div>

    <script type="text/javascript">
      function calculateTotal() {
        
      }
    </script>

    <button onclick="calculateTotal()">Place Order!</button>
    
  </body>
</html>
