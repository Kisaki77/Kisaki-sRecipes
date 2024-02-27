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

   <section class="colored-section" id="recipes">

    <h2 class="recipe">Recipes.</h2>
    <div class="recipe-list">
      <a class="recipe-link" href="breakfast.php">Breakfast</a>
      <a class="recipe-link" href="dessert.php">Dessert</a>
      <a class="recipe-link" href="diet.php">Diet</a>
      <a class="recipe-link" href="dinner.php">Dinner</a>
      <a class="recipe-link" href="lunch.php">Lunch</a>
      <a class="recipe-link" href="quick&easy.php">Quick & Easy</a>
    </div>
  
  </section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
          <h2>These are the one of the food recipes that are very easy and quick to do! 
            Very delicious dishes.
          </h2>
        </div>
  
        <div class="feature-box col-lg-4">
          <img class="imge" src="images/mince&pasta2.jpg" alt="">
          <a class="feature-links" href=""><h3>Pasta & Mince.</h3></a>
          <p>Simple and easy meal to enjoy with friends and family.</p>
          <p><i class="icon-recipe fa-solid fa-clock fa-1x"></i>  3 mins</p>
           
        </div>
  
        <div class="feature-box col-lg-4">
          <img class="imge" src="images/mince2.jpg" alt="">
          <a class="feature-links" href=""><h3>Mince & Eggs.</h3></a>
          <p>Amazing tasty meal for dinner. </p>
          <p><i class="icon-recipe fa-solid fa-clock fa-1x"></i>  3 mins</p>
        </div>
  
        <div class="feature-box col-lg-4">
          <img class="imge" src="images/pizza1.jpg" alt="">
          <a class="feature-links" href=""><h3>Pizza.</h3></a>
          <p>Easy, quick and delicious home made pizza. </p>
          <p><i class="icon-recipe fa-solid fa-clock fa-1x"></i>  3 mins</p>
        </div>

        <div class="feature-box col-lg-4">
            <img class="imge" src="images/mince&pasta2.jpg" alt="">
            <a class="feature-links" href=""><h3>Pasta & Mince.</h3></a>
            <p>Simple and easy meal to enjoy with friends and family.</p>
            <p><i class="icon-recipe fa-solid fa-clock fa-1x"></i>  3 mins</p>
          </div>
    
          <div class="feature-box col-lg-4">
            <img class="imge" src="images/mince2.jpg" alt="">
            <a class="feature-links" href=""><h3>Mince & Eggs.</h3></a>
            <p>Amazing tasty meal for dinner. </p>
            <p><i class="icon-recipe fa-solid fa-clock fa-1x"></i>  3 mins</p>
          </div>
    
          <div class="feature-box col-lg-4">
            <img class="imge" src="images/pizza1.jpg" alt="">
            <a class="feature-links" href=""><h3>Pizza.</h3></a>
            <p>Easy, quick and delicious home made pizza. </p>
            <p><i class="icon-recipe fa-solid fa-clock fa-1x"></i>  3 mins</p>
          </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <?php include('footer.php'); ?>


</body>

</html>
