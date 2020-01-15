<style>
   body, html {
      /* size */ height: 100%; 
      /* text */ -webkit-text-fill-color: white; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black; color: black; font-size:125%; text-align:center;
   }
   .background {
      background-image: url('https://washingtoninformer.com/wp-content/uploads/2015/04/smiley-face-symbols-detlev-van-ravenswaay.jpg'); height:100%;  background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;
   }
   .centeredDiv {
      /* centered */ position: absolute; top: 50%; left: 50%; -moz-transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%);
      /*    div   */ font-size:200%; background-color:blue;  border:2px solid black;  width:80%;  height:auto; position: fixed;;
   }
</style>
<body class="background">
   <h1>(: Nathan Birch :)</h1>
   
   <?php 
      $randomNumberArray = [];
      echo '<ul style="list-style-type: none;">';
      for ($i = 1; $i <= 50; $i++) {
         $newRandomNumber = rand(1,100); // random number from 1-100
         array_push($randomNumberArray, $newRandomNumber);
         echo "<li>Random number $i is $newRandomNumber</li>";
      }
      echo '</ul>';
      $average = array_sum($randomNumberArray)/count($randomNumberArray);
      echo "<div class='centeredDiv'>
               <h2>The average of the 50 random numbers is $average</h2>
            </div>";
   ?>
</body>