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
  
</head>

<body>

    <!-- Header -->
    <?php include('header.php'); ?>


   <!-- Recipes -->
 <main class="content meat">

 <section class="first-wall-text">
  <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
        
        </div>
      </div>
    </div>
  </section>

  <section class="colored-section" id="recipes">

    <h2 class="recipe">Meat Recipes</h2>
    <h5 class="recipe-short-message">Juicy, tastey and delicious meat</h5>
    <div class="recipe-list">
      <a class="recipe-link" href="chicken.php">Chicken</a>
      <a class="recipe-link" href="beef.php">Beef</a>
      <a class="recipe-link" href="fish.php">Fish</a>
      <a class="recipe-link" href="pork.php">Pork</a>
      <a class="recipe-link" href="lamp.php">Lamp</a>
    </div>
  
  </section>


  <!-- Features -->

  <section class="white-section" id="features">

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
      
          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="tilapiaFish.php"><img class="imge" src="images/Meat/meat012.jpg" alt=""></a>
            <a class="recipe-links" href="tilapiaFish.php"><h3>Tilapia Fish</h3></a>
            <p class="more-p">Grilled Tilapia Fish with Spices and Lemon.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Meat/meat013.jpg" alt=""></a>
            <a class="recipe-links " href=""><h3 class="recipe-name-white">Mince</h3></a>
            <p class="more-p">Fresh Cooked Beef Mince.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="wors.php"><img class="imge" src="images/Meat/meat011.jpg" alt=""></a>
            <a class="recipe-links" href="wors.php"><h3>Beef Wors</h3></a>
            <p class="more-p">Smoked Beef Wors.</p>
          </div>
        </div>
      </div>
    </div>     

  </section>



  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
      
        <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Meat/meat017.jpg" alt=""></a>
            <a class="recipe-links " href=""><h3 class="recipe-name-white">Beef Slices</h3></a>
            <p class="more-p">Grilled Beef Slices.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Meat/meat018.jpg" alt=""></a>
            <a class="recipe-links " href=""><h3 class="recipe-name-white">Chicken On A Stick</h3></a>
            <p class="more-p">Grilled Chicken with Veggies On A Stick.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Meat/meat014.jpg" alt=""></a>
            <a class="recipe-links " href=""><h3 class="recipe-name-white">Sweat Chicken</h3></a>
            <p class="more-p">Fried Chicken with Sweat Chilli.</p>
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
