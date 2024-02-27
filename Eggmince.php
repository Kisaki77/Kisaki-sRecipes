<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kisaki'sRecipes</title>

    <link type="image/png" sizes="32x32" rel="icon" href="images/icons8-noodles-3d-fluency-32.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&family=Ubuntu:ital@1&display=swap"
        rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5c32d52e92.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- Header -->
    <?php include('header.php'); ?>


    <!-- Recipes -->

    <section class="cook">

        <h2 class="recipe-title">How To Make An<span class="recipe-span">EggMince Special Dish!</span></h2>

    </section>


    <!-- Features -->

    <section id="cooking-instructions">
        <div class="container-fluid-recipes">
            <div class="row">
                <div class="col-lg-6">
                    <img class="imge" src="images/mince2.jpg" alt="mince pasta">
                </div>

                <div class="col-lg-6">
                <span>
                      <i id="recipe-span" class="fa fa-clock"></i>
                  </span>
                  <h3 id="intro-recipes">Prep time: 10 mins</h3><br>

                  <span>
                      <i id="recipe-span" class="fa fa-clock"></i>
                  </span>
                  <h3 id="intro-recipes">Cooking time: 30 mins</h3><br>

                  <span>
                      <i id="recipe-span" class="fa-solid fa-bowl-food"></i>
                  </span>
                  <h3 id="intro-recipes">Servings: 6</h3>
              </div>


                <div class="col-lg-12 ingredients-section">
                    <h1 class="actual-recipe-heading">EggMince Ingredients</h1>

                    <p class="actual-recipe-paragraphs">
                        Here are the ingredients that you'll be needing for this recipe. <br>  
                    </p>

                    <p class="actual-recipe-paragraphs">
                        <ul class="ingredients actual-recipe-paragraphs">
                            <li class="ingredients-li">Eggs: </li>
                            <p>4 eggs.</p><br>
                            <li class="ingredients-li">All-purpose flour: </li>
                            <p>Half a cup.</p><br>
                            <li class="ingredients-li">Milk: </li>
                            <p>Half a cup.</p><br>
                            <li class="ingredients-li">Herbs: </li><br>
                            <li class="ingredients-li">Salt: </li>
                            <p>A pinch of salt.</p><br>
                            <li class="ingredients-li">Tomato: </li>
                            <p>1 large tomato.</p><br>
                            <li class="ingredients-li">Onion: </li>
                            <p>1 medium sized onion.</p><br>
                            <li class="ingredients-li">Garlic: </li>
                            <p>Garlic makes it have a strong flavour.</p><br>
                            <li class="ingredients-li">Greenpepper, Redpepper and Yellowpepper: </li>
                            <p>1 of each peppers.</p><br>
                            <li class="ingredients-li">Mince Meat: </li>
                            <p>Any mince meat of your liking.</p><br>
                            <li class="ingredients-li">Any Toppings or spices of your liking</li>
                        </ul>
                    </p>

                    <h1 class="actual-recipe-heading">Instructions</h1>
                        <p class="actual-recipe-paragraphs">Follow the instructions below on how to make EggMince and enjoy 😋:</p>
                        <p class="actual-recipe-paragraphs">
                            1. Boil eggs <br>
                            2. Chop onion, tomato, peppers, chillies and garlic into square pieces. <br><br>
                            3. Take a pan or pot, put mince and a pinch of salt and stir until cooked then add tomato source. <br><br>
                            4. Take chopped vegies and pour them in the pan or pot with mince and add your spices
                            then stir and cook for 3 minutes. <br><br>
                            5. In a bowl mix flour with milk  and pour it on top of the pan or pot, cut the eggs in half and add them on top, 
                            then add herbs and spices and let it cook for 10 minutes in medium low heat. <br><br>
                        </p>
                            <div class="col-lg-6"><img class="imge" src="images/mince.jpg" alt=""></div>
                        <p class="actual-recipe-paragraphs">
                            6. Take it out and serve hot with a drink 😊😋😋 Enjoy with family and friends for either lunch or dupper. 
                        </p>
                </div>

                <div class="col-lg-6">
                <img class="imge" src="images/mince3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>

</html>
