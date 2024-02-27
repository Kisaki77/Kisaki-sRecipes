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

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5c32d52e92.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Link to the React build files -->
  <!-- <link rel="stylesheet" href="/my-app/build/static/css/main.0c55d96e.css"> -->

  <!-- JavaScript -->
  <!-- <script src="script.js"></script> -->

</head>

<body>

  <!-- Render the React app inside this div -->
  <div id="root"></div>

  <section id="title">

  <div  id="header-container">

    <div class="navbar-recipe-page sticky-nav menu" id="container-fluid" id="header-container">
        <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="hamburger">
              <div class="bar"></div>
          </button>

          <div id="logo">
            <a class="navbar-brand" href="index.php"><h1 id="brand-name">Kisaki's<span>Recipes</span></h1></a>
          </div>
            
          <div class="nav-menu collapse navbar-collapse" id="navbarTogglerDemo02">               
            <ul class="navbar-nav ms-auto">                
             <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="recipes.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recipes</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="breakfast.php">Breakfast</a>
                    <a class="dropdown-item" href="lunch.php">Lunch</a>
                    <a class="dropdown-item" href="dinner.php">Dinner</a>
                    <a class="dropdown-item" href="dessert.php">Dessert</a>
                    <a class="dropdown-item" href="healthy.php">Healthy</a>
                    <a class="dropdown-item" href="quick&easy.php">Quick & Easy</a>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="meat.php">Meat</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <div class="searchbar">
                  <form class="search-container search-box form-inline">
                    <input type="text" placeholder="Search..." class="search" id="searchBar" name="searchBar">
                    
                  </form>
                  <!-- Placeholder div for the React search filter component -->
                  <div id="search-filter-root"></div>

                      <script>
                      // Function to asynchronously load the React app
                      function loadReactApp() {
                        // ... (previous code to load the React app)

                        // Real-time search function
                        const searchInput = document.getElementById("searchBar");
                        searchInput.addEventListener("input", function () {
                          const searchTerm = searchInput.value.toLowerCase();
                          const recipeBoxes = document.querySelectorAll(".template");
                          recipeBoxes.forEach(function (box) {
                            const recipeTitle = box.querySelector("h3").textContent.toLowerCase();
                            if (recipeTitle.includes(searchTerm)) {
                              box.style.display = "block";
                            } else {
                              box.style.display = "none";
                            }
                          });
                        });
                      }

                      // Load the React app when the document is ready
                      document.addEventListener("DOMContentLoaded", loadReactApp);
                    </script>
                </div>
              </li>
            </ul>
          </div>
      </nav>
    </div>
  </div> 

  <!-- Sidebar Menu -->
  <div class="page-container">
    <div class="mobile-nav">
      <ul class="sidebar-menu">
        <form class="mobile-search-container search-box form-inline">
          <input type="text" placeholder="What are you looking for?" class="search mobile-nav-search" id="searchBar" name="searchBar">
        </form>
        <li><a class="mobile-nav-link" href="breakfast.php">Breakfast</a></li>
        <li><a class="mobile-nav-link" href="lunch.php">Lunch</a></li>
        <li><a class="mobile-nav-link" href="dinner.php">Dinner</a></li>
        <li><a class="mobile-nav-link" href="dessert.php">Dessert</a></li>
        <li><a class="mobile-nav-link" href="healthy.php">Healthy</a></li>
        <li><a class="mobile-nav-link" href="quick&easy.php">Quick & Easy</a></li>
        <li><a class="mobile-nav-link" href="meat.php">Meat</a></li>
        <hr class="hr">
        <li><a class="mobile-nav-link" href="index.php">Home</a></li>
        <li><a class="mobile-nav-link" href="aboutus.php">About Us</a></li>
        <li><a class="mobile-nav-link" href="aboutus.php">Contact</a></li>
        <li><a class="mobile-nav-link" href="features.php">Features</a></li>
        <hr class="hr">
        <p class="mobile-nav-paragraph">Follow Us</p>
      </ul>
      <div class="mobile-nav-icon">
          <a href="https://www.facebook.com/nobuhle.mlahleki"><i class="mobile-icon fa-brands fa-square-facebook fa-1x"></i></a>
          <a href="mailto:nobuhlemlahleki@gmail.com"><i class="mobile-icon fa-solid fa-envelope fa-1x"></i></a>
          <a href="https://www.instagram.com/nobuhlmlahleki/"><i class="mobile-icon fa-brands fa-instagram fa-1x"></i></a>
          <a href="https://web.whatsapp.com/"><i class="mobile-icon fa-brands fa-whatsapp fa-1x"></i></a>
        </div>
    </div>
  </div>
</section>

  <!-- Link to the React build files -->
  <!-- <script src="/my-app/build/static/js/main.85cb8f89.js"></script> -->
  <!-- JavaScript -->
  <script src="script.js"></script>
</body>
</html>