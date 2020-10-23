<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
  </head>

  <body>
    <div id="heading">
      <header id="header">
        <img
          id="header-img"
          src="https://cdn0.iconfinder.com/data/icons/most-usable-logos/120/Amazon-512.png"
          alt="Logo"
        />
        <h2 id="aSmile"><a class="nav-link" href="#">aSmile</a></h2>
        <div id="search">
          <input type="text" id="search-bar" placeholder="Search Products" />
          <button type="submit" id="search-btn">
            <i class="fa fa-search"></i>
          </button>
        </div>
        <nav id="nav-bar">
          <ul id="nav-ul">
            <li id="nav-li">
              <a class="nav-link" href="#signin">Sign in</a>
            </li>
            <li id="nav-li">
              <a class="nav-link" href="signin.php">Cart</a>
            </li>
            <li id="nav-li">
              <a class="nav-link" href="#product">Products</a>
            </li>
          </ul>
        </nav>
      </header>

      <section id="signin">
        <h2 id="greet1">Welcome to aSmile,</h2>
        <h3 id="greet2">
          a place with wide variety of products and best services offered
        </h3>
        <form id="form" action="signin.php" method="post">
          <input
            name="email"
            id="email"
            class="box"
            type="email"
            placeholder="E-mail"
            required
          />
          <input
            name="password"
            id="password"
            class="box"
            type="password"
            placeholder="Password"
            required
          />
          <input id="submit" type="submit" value="Sign in" />
        </form>
        <h3 id="signup">
          New here, <a href="Form.php" id="signup-link">Signup</a>
        </h3>
      </section>

      <hr />

      <section id="product">
        <h2 id="product-header">Select from the wide range of products</h2>
        <hr />
        <h2 class="ProductHeading">Fashion</h2>
        <div id="product-div">
          <div class="pricing" id="men">
            <div class="products">Men</div>
            <span class="earlier-price">Rs.700</span>
            <h2>Rs.549</h2>
            <img
              id="product-img"
              src="img/products/men.jpg"
              alt="Men Clothing Set"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="women">
            <div class="products">Women</div>
            <span class="earlier-price">Rs.1000</span>
            <h2>Rs.849</h2>
            <img
              id="product-img"
              src="img/products/women.jpg"
              alt="Women Clothing Set"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="kids">
            <div class="products">Kids</div>
            <span class="earlier-price">Rs.700</span>
            <h2>Rs.549</h2>
            <img
              id="product-img"
              src="img/products/kids.jpg"
              alt="Kids Clothing Set"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="footwear">
            <div class="products">Footwear</div>
            <span class="earlier-price">Rs.500</span>
            <h2>Rs.349</h2>
            <img
              id="product-img"
              src="img/products/footwear.jpg"
              alt="Footwear Set"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
        </div>

        <h2 class="ProductHeading">Electronics</h2>
        <div id="product-div">
          <div class="pricing" id="laptop">
            <div class="products">Laptop</div>
            <span class="earlier-price">Rs.89000</span>
            <h2>Rs.74900</h2>
            <img id="product-img" src="img/products/laptop.jpg" alt="Laptop" />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="mobile">
            <div class="products">Mobiles</div>
            <span class="earlier-price">Rs.15000</span>
            <h2>Rs.13499</h2>
            <img id="product-img" src="img/products/mobile.jpg" alt="Mobile" />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="camera">
            <div class="products">Cameras</div>
            <span class="earlier-price">Rs.35000</span>
            <h2>Rs.27499</h2>
            <img
              id="product-img"
              src="img/products/cameras.jpg"
              alt="Cameras"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="accessories">
            <div class="products">Accessories</div>
            <span class="earlier-price">Rs.800</span>
            <h2>Rs.600</h2>
            <img
              id="product-img"
              src="img/products/accessories.jpg"
              alt="Blue Jeans"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
        </div>

        <h2 class="ProductHeading">Home Products</h2>
        <div id="product-div">
          <div class="pricing" id="books">
            <div class="products">Books</div>
            <span class="earlier-price">Rs.400</span>
            <h2>Rs.299</h2>
            <img id="product-img" src="img/products/books.jpg" alt="Books" />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="cookware">
            <div class="products">Cookware</div>
            <span class="earlier-price">Rs.300</span>
            <h2>Rs.149</h2>
            <img
              id="product-img"
              src="img/products/cookware.jpg"
              alt="Kitchen Cookware"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="decor">
            <div class="products">Home Decor</div>
            <span class="earlier-price">Rs.200</span>
            <h2>Rs.99</h2>
            <img
              id="product-img"
              src="img/products/decor.jpg"
              alt="Home Decor"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
          <hr class="product-hr" />
          <div class="pricing" id="bedsheet">
            <div class="products">Bedsheets & curtains</div>
            <span class="earlier-price">Rs.400</span>
            <h2>Rs.200</h2>
            <img
              id="product-img"
              src="img/products/bedsheets.jpg"
              alt="Bedsheets and curtains"
            />
            <br />
            <button class="btn">Add to Cart</button>
          </div>
        </div>
      </section>

      <section id="how-it-works">
        <h2 id="how-id">How it works?</h2>
        <hr />
        <iframe
          id="video"
          src="https://www.youtube.com/embed/ia7006AzOUY?controls=0&loop=1&playlist=ia7006AzOUY&amp;showinfo=0"
          frameborder="0"
        >
        </iframe>
      </section>

      <footer>
        <ul>
          <li class="footer-li"><a class="footer-a" href="#">Privacy</a></li>
          <li class="footer-li"><a class="footer-a" href="#">Terms</a></li>
          <li class="footer-li"><a class="footer-a" href="#">Contact</a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>
