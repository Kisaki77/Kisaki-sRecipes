<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title >Kisaki's Recipes</title>

  <link type="image/png" sizes="32x32" rel="icon" href="images/icons8-noodles-3d-fluency-32.png">

  <!-- Google fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&family=Ubuntu:ital@1&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/navigationbar.css">

  <!-- Interactive Stylesheets -->
  <link rel="stylesheet" href="css/interactive.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5c32d52e92.js" crossorigin="anonymous"></script>


  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Link to the React build files -->
  <!-- <link rel="stylesheet" href="/my-app/build/static/css/main.0c55d96e.css"> -->
</head>


<body>
  
  <!-- Rendering the React app inside this div -->
  <div id="root"></div>

  <!-- Header -->
  <?php include('header.php'); ?>


<main class="content home"> 
  <div id="search-filter-root"></div>

  <!-- Include the App.js file for the React search filter component -->
  <script src="/my-app/src/App.js"></script>

  <section id="blur-background">

    <!-- Title -->
    <div class="container-fluid" >
      <div class="row ">

        <div class="col-lg-6 interactive-text" id="row2">
          <div class="home-text-top ">
            <h2 class="home-text">
            Where Passion Meets the Pan: Crafting Culinary Wonders, One Recipe at a Time!
            </h2>
          </div>

          <div class="share">
            <a href=""><i class="icon fa-brands fa-square-facebook fa-2x"></i></a>
            <a href=""><i class="icon fa-solid fa-envelope fa-2x"></i></a>
            <a href=""><i class="icon fa-brands fa-linkedin fa-2x"></i></a>
            <a href=""><i class="icon fa-brands fa-instagram fa-2x"></i></a>
            <a href=""><i class="icon fa-brands fa-whatsapp fa-2x"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-6 scroll-reveal" >
            <h2>
              <span>There is a lot to choose, from these food recipes.</span>
            </h2>
            <p>
            <span>Kisaki's Recipes invites you on a culinary journey where flavors come alive and every dish tells a story. Immerse yourself in a world of delightful recipes curated with passion and creativity. <br> <br>From mouthwatering classics to innovative culinary creations, Kisaki's Recipes is your go-to destination for inspiration in the kitchen.</span>
            </p> <br><br>
            <a href="recipes.php" class="btn recipe-button">Explore Recipes</a>
        </div>

      

        <div class="recipe-pictures col-lg-6" id="parent">
          <div class="inner-div">

            <div class="green1"></div>
            <img class="img-fluid rounded w-100 wow zoomIn green-image" data-wow-delay="0.1s" src="images/Dinner/dinner000.jpg" alt="">
            <div class="green2"></div>
          </div>
    
        </div>


      </div>
    </div>
  </section>
  

  <section class="colored-section" id="features">

    <div class="container-fluid">
      <div class="row">

      <div class="recipe-pictures col-lg-6" id="parent-b">
            <div class="green1b"></div>
            <img class="img-fluid rounded w-100 wow zoomIn green-image" data-wow-delay="0.1s" src="images/Dessert/dessert002.jpg" alt="">
            <div class="green2b"></div>
    
        </div>

        <div class="message-recipe col-lg-6 scroll-reveal2" >
            <h2>
              <span>Elevate Your Plate: Unleashing Flavors and Create Memories.</span>
            </h2>
            <p>
            <span>Elevate your cooking experience and savor the joy of bringing delicious meals to life. Join us in celebrating the art of cooking and the joy it brings to our tables. <br><br> Kisaki's Recipes, where every recipe is a masterpiece waiting to be shared.</span>
            </p> <br><br>
            <a href="recipes.php" class="btn recipe-button">Explore Recipes</a>
        </div>
      </div>
    </div>
  </section>

<!-- Indulge in a world of sweetness with our delightful dessert recipes.
                                  From heavenly cakes to decadent chocolates, satisfy your cravings with a spoonful of happiness. -->

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
          <div class="new-dishes-text col-lg-12">
            <h2 class="dessert-text"> From Cooking To Baking <br> <br> Sweet Creations, Baked to Perfection: Indulge in the Artistry of Heavenly Treats!
            </h2>

          </div>
      
          
          <div class="more-box col-lg-4 zoomable-div">
              <div class="image-container">
                  <a class="recipe-links" href="chocolatecake.php">
                      <img class="imge" src="images/Bake/bake000.jpg" alt="">
                  </a>
                  <div class="heart-container">
                      <!-- Add your heart icon here -->
                      <i class="fas fa-heart" id="heartIcon"></i>
                  </div>
              </div>
              <a class="recipe-links " href="chocolatecake.php">
                  <h3 class="recipe-name-white">Chocolate Cake</h3>
              </a>
              <p class="more-p">Chocolate Cake with White Sweat Cream and Cherry On Top.</p>
          </div>


          <script>
    // Add this JavaScript code to toggle the heart icon color
    var heartIcon = document.getElementById('heartIcon');

    heartIcon.addEventListener('click', function() {
        if (heartIcon.classList.contains('clicked')) {
            heartIcon.classList.remove('clicked');
        } else {
            heartIcon.classList.add('clicked');
        }
    });
</script>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="cupcake.php"><img class="imge" src="images/Bake/bake001.jpg" alt=""></a>
            <a class="recipe-links" href="cupcake.php"><h3>Chocolate Cupcakes</h3></a>
            <p class="more-p">Chocolate Cupcakes with Chocolate Cream.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="cookies.php"><img class="imge" src="images/Bake/bake002.jpg" alt=""></a>
            <a class="recipe-links" href="cookies.php"><h3>Choc Chip Biscuit</h3></a>
            <p class="more-p">Biscuit with Choc Chip.</p>
          </div>

          <a href="bake.php" class="btn recipe-button-b">Explore Recipes</a>
        </div>
      </div>
    </div>     

  </section>


  <section class="colored-section" id="features">

    <div class="container-fluid">
      <div class="row">

          <div class="message-recipe col-lg-6 scroll-reveal2" >
              <h2>
                <span>Meat Mastery: Where Flavor Meets Tradition!</span>
              </h2>
              <p>
              <span>Indulge in a culinary symphony of savory delights with our premium selection of meats. From succulent steaks to mouthwatering roasts, each bite is a journey into rich, savory perfection <br><br> Find out which meat you prefer.</span>
              </p><br><br>
              <a href="meat.php" class="btn recipe-button">Explore Recipes</a>
          </div>

  

        <div class="recipe-pictures col-lg-6" id="parent">
          <div class="inner-div">

            <div class="green1"></div>
            <img class="img-fluid rounded w-100 wow zoomIn green-image" data-wow-delay="0.1s" src="images/Meat/meat006.jpg" alt="">
            <div class="green2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
          <div class="new-dishes-text col-lg-12">
            <h2 class="dessert-text"> Choose Your Meat, From Grilled To Roasted!
            </h2>
          </div>
      
          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="steak1.php"><img class="imge" src="images/Meat/meat000.jpg" alt=""></a>
            <a class="recipe-links " href="steak1.php"><h3 class="recipe-name-white">Grilled Steak</h3></a>
            <p class="more-p">Medium Rare Grilled Streak.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="tilapiaFish.php"><img class="imge" src="images/Meat/meat012.jpg" alt=""></a>
            <a class="recipe-links" href="tilapiaFish.php"><h3>Tilapia Fish</h3></a>
            <p class="more-p">Grilled Tilapia Fish with Spices and Lemon.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href="wors.php"><img class="imge" src="images/Meat/meat011.jpg" alt=""></a>
            <a class="recipe-links" href="wors.php"><h3>Beef Wors</h3></a>
            <p class="more-p">Smoked Beef Wors.</p>
          </div>
          <a href="meat.php" class="btn recipe-button-b">Explore Recipes</a>
        </div>
      </div>
    </div>
            

  </section>

  <section class="colored-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
          <div class="new-dishes-text col-lg-12">
            <h2 class="dessert-text-b"> Who Doesn't Love Dessert? Savor Sweet Bliss!
            </h2>
          </div>
      
          <div class="more-box col-lg-4 zoomable-div-b">
            <a class="recipe-links" href="pudding.php"><img class="imge" src="images/Dessert/dessert003.jpg" alt=""></a>
            <a class="recipe-links " href="pudding.php"><h3 class="recipe-name-white">Creamy Yorghut Pudding</h3></a>
            <p class="more-p-b">Delicious Creamy Yorghut Pudding with Strawberry.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div-b">
            <a class="recipe-links" href="pancake.php"><img class="imge" src="images/Dessert/dessert009.jpg" alt=""></a>
            <a class="recipe-links" href="pancake.php"><h3>Pancakes</h3></a>
            <p class="more-p-b">Heavy Cream Pancakes with Chocolate Sauce.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div-b">
            <a class="recipe-links" href="icecup.php"><img class="imge" src="images/Dessert/dessert008.jpg" alt=""></a>
            <a class="recipe-links" href="icecup.php"><h3>Yorghut and Icecream Cup</h3></a>
            <p class="more-p-b">Smooth Yorghut and Icecream Cup.</p>
          </div>
          <a href="dessert.php" class="btn recipe-button-b">Explore Recipes</a>
        </div>
      </div>
    </div>
  </section>


    <section class="white-section" id="features">

<div class="container-fluid">
  <div class="row">

  <div class="recipe-pictures col-lg-6" id="parent-b">
      <div class="inner-div">

        <div class="green1b"></div>
        <img class="img-fluid rounded w-100 wow zoomIn green-image" data-wow-delay="0.1s" src="images/image001.jpg" alt="">
        <div class="green2b" style="background-color: rgb(29, 63, 63);"></div>
      </div>

    </div>

    <div class="message-recipe col-lg-6 scroll-reveal" >
        <h2 class="message-b-recipe">
          <span>There are a lot of recipes to choose from. <br><br> Are you ready to start cooking! <br><br></span>
        </h2>

        <a href="recipes.php" class="btn recipe-button">Explore Recipes</a>
      
    </div>
  </div>
</div>
</section>


  <!-- Footer -->
  <?php include('footer.php'); ?>

  <!-- Link to the React build files -->
  <!-- <script src="/my-app/build/static/js/main.85cb8f89.js"></script> -->

  </main>

  <!-- JavaScript -->
  <script src="script.js"></script>
</body>
</html>