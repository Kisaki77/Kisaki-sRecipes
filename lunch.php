<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title >Kisaki'sRecipes</title>

  <link type="image/png" sizes="32x32" rel="icon" href="images/icons8-noodles-3d-fluency-32.png">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&family=Ubuntu:ital@1&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5c32d52e92.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</head>

<body>

    <!-- Header -->
    <?php include('header.php'); ?>


   <!-- Recipes -->
 <main class="content lunch">

 <section class="first-wall-text">
  <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
        
        </div>
      </div>
    </div>
  </section>

  <section class="colored-section" id="recipes">

    <h2 class="recipe">Lunch Recipes!</h2>
    <h5 class="recipe-short-message">Savor the midday delight with our delectable lunch recipes, each bite a burst of flavors to fuel your day</h5>
  
  </section>


  <!-- Features -->

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
          <div class="new-dishes-text col-lg-12">
            
          </div>
      
          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="pizza.php"><img class="imge" src="images/Lunch/lunch001.jpg" alt=""></a>
            <a class="recipe-links " href="pizza.php"><h3 class="recipe-name-white">Pizza</h3></a>
            <p class="more-p">Delicious Easy Pizza with Olives and Pepper.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Lunch/lunch002.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Chicken Pie</h3></a>
            <p class="more-p">Baked Chicken Pie.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Lunch/lunch003.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Chicken Spaghetti</h3></a>
            <p class="more-p">Spaghetti with Chicken and Salads.</p>
          </div>
        </div>
      </div>
    </div>     

  </section>


<section class="wall-text">
  <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
        
        </div>
      </div>
    </div>
  </section>

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
          <div class="new-dishes-text col-lg-12">
            
          </div>
      
          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="pizza.php"><img class="imge" src="images/Lunch/lunch001.jpg" alt=""></a>
            <a class="recipe-links" href="pizza.php"><h3 class="recipe-name-white">Pizza</h3></a>
            <p class="more-p">Delicious Easy Pizza with Olives and Pepper.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Lunch/lunch002.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Chicken Pie</h3></a>
            <p class="more-p">Baked Chicken Pie.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Lunch/lunch003.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Chicken Spaghetti</h3></a>
            <p class="more-p">Spaghetti with Chicken and Salads.</p>
          </div>
        </div>
      </div>
    </div>     

  </section>



  <!-- Footer -->
  <?php include('footer.php'); ?>
 </main>

</body>

</html>
