<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="style/home.css" />
</head>

<body>
  <div class="nav-icons">
    <!-- <a href="#">
      <img class="nav-svgs" src="assets/person.svg" />
    </a> -->
  </div>
  <nav>
    <div class="wrapper">
      <div class="top-nav">
        <div class="logo-title">
          <img class="logo" src="assets/book.svg" alt="" />
          <h1 class="title">atrons</h1>
        </div>
        <div class="search-wrapper">
          <input class="search-bar" type="text" placeholder="Search By Title" />
          <button class="search-btn" type="button">Search</button>
        </div>
      </div>
      <ul class="nav-list">
        <li id="home">
          <a href="home.php">Home</a>
        </li>

        <li id="categories">
          <a href="#">Categories</a>
        </li>

        <!-- <li id="wishlist">
          <a href="#">Wishlist</a>
        </li> -->

        <li id="cart">
          <a href="cart.php">Cart</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="mega-menu" id="mega-menu">
    <ul class="drop-menu">
      <li class="choice"><a href="categories.php?category=Fiction">Fiction</a></li>
      <li class="choice"><a href="categories.php?category=Romance">Romance</a></li>
      <li class="choice"><a href="categories.php?category=Sci-Fi">Sci-Fi</a></li>
      <li class="choice"><a href="categories.php?category=Adventure">Adventure</a></li>
    </ul>

    <ul class="drop-menu">
      <li class="choice"><a href="categories.php?category=History">History</a></li>
      <li class="choice"><a href="categories.php?category=Biography">Biography</a></li>
      <li class="choice"><a href="categories.php?category=Psychology">Psychology</a></li>
      <li class="choice"><a href="categories.php?category=Poetry">Poetry</a></li>
    </ul>

    <ul class="drop-menu">
      <li class="choice"><a href="categories.php?category=Children">Children</a></li>
      <li class="choice"><a href="categories.php?category=Politics">Politics</a></li>
    </ul>
  </div>

  <section class="featured-books">
    <h1>Featured Books of <br /><span id="month">June</span></h1>

    <div id="slider">
      <figure>
        <img src="cover-img/jurassic_park.png" />
        <img src="cover-img/the_call_of_the_wild.jpeg" />
        <img src="cover-img/the_hobbit.jpg" />
        <img src="cover-img/treasure_island.jpg" />
        <img src="cover-img/jurassic_park.png" />
      </figure>
    </div>
  </section>

  <section class="bestselling-books">
    <h1>Bestselling Books</h1>

    <div class="card-container">
      <div class="card">
        <img src="cover-img/the_westing_game.jpeg" alt="Book 1" class="card-image" />
        <div class="card-content">
          <h3 class="card-title">Treasure Island</h3>
          <p class="card-author">Jhon Doe</p>
          <p class="card-price">$9.99</p>
          <div class="card-buttons">
            <button class="cart-btn">Add to cart</button>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="cover-img/the_maze_runner.png" alt="Book 2" class="card-image" />
        <div class="card-content">
          <h3 class="card-title">The Maze Runner</h3>
          <p class="card-author">David Parkinson</p>
          <p class="card-price">$12.99</p>
          <div class="card-buttons">
            <button class="cart-btn">Add to cart</button>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="assets/newBook.jpg" alt="Book 3" class="card-image" />
        <div class="card-content">
          <h3 class="card-title">The Book Of Narnia</h3>
          <p class="card-author">Albert Maddison</p>
          <p class="card-price">$20.99</p>
          <div class="card-buttons">
            <button class="cart-btn">Add to cart</button>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="cover-img/The_lion_the_witch_and_the_wardrobe.jpeg" alt="Book 4" class="card-image" />
        <div class="card-content">
          <h3 class="card-title">The Lion The Witch And The Wardrobe</h3>
          <p class="card-author">Micheal Corrly</p>
          <p class="card-price">$10</p>

          <div class="card-buttons">
            <button class="cart-btn">Add to cart</button>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="cover-img/the_lightning_thief.jpg" alt="Book 5" class="card-image" />
        <div class="card-content">
          <h3 class="card-title">The Lightning Theif</h3>
          <p class="card-author">James Crook</p>
          <p class="card-price">$40.99</p>

          <div class="card-buttons">
            <button class="cart-btn">Add to cart</button>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <h1>About Us</h1>

    <div class="info">
      <div class="centered">
        <p>4 Kilo, Addis Ababa, Ethiopia</p>
        <p>info@atrons.com</p>
        <p>+251900026618</p>
      </div>

      <div class="links">
        <ul>
          <li>
            <a href="#">
              <img src="assets/instagram.svg" alt="" />
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/youtube.svg" alt="" />
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/telegram.svg" alt="" />
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/facebook.svg" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="./script/home.js"></script>
  <script src="./script/searchByCategory.js"></script>
  <script src="./script/searchByTitle.js"></script>
  <!-- <script src="./script/cart.js"></script> -->

</body>

</html>