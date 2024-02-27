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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('searchBar').addEventListener('input', function () {
        const searchQuery = this.value.toLowerCase();

        // Get all recipe containers
        const recipeContainers = document.querySelectorAll('.zoomable-div');

        // Loop through each recipe container
        recipeContainers.forEach(container => {
          const recipeName = container.querySelector('h3').textContent.toLowerCase();
          const recipeDescription = container.querySelector('.more-p').textContent.toLowerCase();

          // Check if the search query matches the recipe name or description
          if (recipeName.includes(searchQuery) || recipeDescription.includes(searchQuery)) {
            container.style.display = 'block'; // Show the container
          } else {
            container.style.display = 'none'; // Hide the container
          }
        });
      });
    });
  </script>
</head>

<body>

    <!-- Header -->
    <?php include('header.php'); ?>


   <!-- Recipes -->
 <main class="content meat">


  <section class="colored-section" id="recipes">

    <h2 class="recipe">Search Recipes</h2>
    <form class="mobile-search-container search-box form-inline">
          <input type="text" placeholder="What are you looking for?" class="search mobile-nav-search" id="searchBar" name="searchBar">
        </form>

  
  </section>


  <!-- Features -->

  <section class="white-section" id="features">

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="more">
    
        <div class="row">
      
        <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Breakfast/breakfast003.jpg" alt=""></a>
            <a class="recipe-links " href=""><h3 class="recipe-name-white">Southern Breakfast</h3></a>
            <p class="more-p">Croissant with Egg and Bacon, served with Cappoccino.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge"  src="images/Breakfast/breakfast004.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>French Breakfast</h3></a>
            <p class="more-p">Fried Eggs, Bacon with Viennas, served with break and Croissant.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge"  src="images/Breakfast/breakfast005.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Easy Breakfast</h3></a>
            <p class="more-p">Toasted Bread with Eggs and Bacon.</p>
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

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Dinner/dinner003.jpg" alt=""></a>
            <a class="recipe-links " href=""><h3 class="recipe-name-white">Star Mince</h3></a>
            <p class="more-p">Mince with Boiled Eggs.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Dinner/dinner004.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Home Pasta</h3></a>
            <p class="more-p">Pasta with Grilled Hake and Green Salad.</p>
          </div>

          <div class="more-box col-lg-4 zoomable-div">
            <a class="recipe-links" href=""><img class="imge" src="images/Dinner/dinner005.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Common Dish</h3></a>
            <p class="more-p">Pap with Wors and Beef, Served with Chakalaka.</p>
          </div>

          
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
            <a class="recipe-links" href=""><img class="imge" src="images/Meat/meat011.jpg" alt=""></a>
            <a class="recipe-links" href=""><h3>Beef Wors</h3></a>
            <p class="more-p">Smoked Beef Wors.</p>
          </div>

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

        </div>
      </div>
    </div>     

  </section>


  <!-- Footer -->
  <?php include('footer.php'); ?>
 </main>

</body>

</html>
