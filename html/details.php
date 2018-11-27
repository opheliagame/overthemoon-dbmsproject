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
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/details.css">
    <title></title>
  </head>
  <body>
    <div>
      <h3>Please make your selections of food, venue, decorations and entertainment</h3>
    </div>

    <div id="transc">
      <div class="food item">
        <h3>FOOD</h3>
        <?php
        $sql="SELECT * FROM FOOD WHERE THEMEID='$themeid';";
        $result=mysqli_query($con,$sql);
        $resultcheck=mysqli_num_rows($result);
        $id = 1;
        if($resultcheck > 0)
        {
          while($row=mysqli_fetch_assoc($result)){
            echo '<input id="food'.$id . '" type="radio" name="food" 
            value="'.$row['PRICE'].'">';
            echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
            $id = $id + 1;
          }
          
        }
        ?>
      </div>

      <div class="venue item">
        <h3>VENUE</h3>
        <?php
          $sql="SELECT * FROM VENUE WHERE THEMEID='$themeid';";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $id = 1;
          if($resultcheck > 0)
          {
            while($row=mysqli_fetch_assoc($result)){
              echo '<input id="venue'.$id . '" type="radio" name="venue"
              value="'.$row['PRICE'].'">';
              echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
              $id = $id + 1;
            }
            
          }
        ?>
      </div>

      <div class="decorations item">
        <h3>DECORATIONS</h3>
        
        <?php
          $sql="SELECT * FROM DECORATIONS WHERE THEMEID='$themeid';";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $id = 1;
          if($resultcheck > 0)
          {
            while($row=mysqli_fetch_assoc($result)){
              echo '<input id="deco'.$id . '" type="radio" name="decorations"
              value="'.$row['PRICE'].'">';
              echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
              $id = $id + 1;
            }
            
          }
        ?>
      </div>

      <div class="entertainment item">
        <h3>ENTERTAINMENT</h3>
        
        <?php
          $sql="SELECT * FROM ENTERTAINMENT WHERE THEMEID='$themeid';";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $id = 1;
          if($resultcheck > 0)
          {
            while($row=mysqli_fetch_assoc($result)){
              echo '<input id="entn'.$id . '" type="radio" name="entertainment"
              value="'.$row['PRICE'].'">';
              echo $row['ITEM']. " $" . $row['PRICE'] ."<br>";
              $id = $id+1;
            }
            
          }
        ?>
      </div>
    </div>

    <div id="total">
      
    </div>

    <script type="text/javascript">
      function calculateTotal() {
        var total = 0;
        if(document.getElementById('food1').checked) {
          total = total + Number(document.getElementById('food1').value);
        }
        else if(document.getElementById('food2').checked) {
          total = total + Number(document.getElementById('food2').value);
        }
        else if(document.getElementById('food3').checked) {
          total = total + Number(document.getElementById('food3').value);
        }

        if(document.getElementById('venue1').checked) {
          total = total + Number(document.getElementById('venue1').value);
        }
        else if(document.getElementById('venue2').checked) {
          total = total + Number(document.getElementById('venue2').value);
        }
        else if(document.getElementById('venue3').checked) {
          total = total + Number(document.getElementById('venue3').value);
        }

        if(document.getElementById('deco1').checked) {
          total = total + Number(document.getElementById('deco1').value);
        }
        else if(document.getElementById('deco2').checked) {
          total = total + Number(document.getElementById('deco2').value);
        }
        else if(document.getElementById('deco3').checked) {
          total = total + Number(document.getElementById('deco3').value);
        }

        if(document.getElementById('entn1').checked) {
          total = total + Number(document.getElementById('entn1').value);
        }
        else if(document.getElementById('entn2').checked) {
          total = total + Number(document.getElementById('entn2').value);
        }
        else if(document.getElementById('entn3').checked) {
          total = total + Number(document.getElementById('entn3').value);
        }

        document.getElementById('total').innerHTML = 'Total: $' + total;
        
      }
    </script>

    <button onclick="calculateTotal()">Calculate total</button>
    <form action="./transaction.html">
      
      <button>Place order!</button>
    </form>

    
  </body>
</html>
