<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="script/script.js"></script>
    <link rel="stylesheet" href="css/fs.css" />
    <title>Signup</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>
    <script type="text/javascript">
    </script>

  <body>
    <header>
      <nav id="header-nav" class="navbar navbar-light">
        <div class="navbar-header">
          <div class="navbar-brand center">
            <a href="index.php">
              <img
                id="header-img"
                src="https://cdn0.iconfinder.com/data/icons/most-usable-logos/120/Amazon-512.png"
                alt="Logo"
              />
              <h1>aSmile</h1>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <div id="main-content" class="container">
      <div id="main-text" class="center">
        <form action="register.php" method="post" name="form" onsubmit="return validateForm()">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="form-group col-sm-10">

              <div class="col-sm-12 required">
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Name"
                  required
                />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-10 form-group">

              <div class="col-sm-12">
                <input
                  class="form-control"
                  type="text"
                  name="mobile"
                  placeholder="Mobile No."
                  required
                />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputAddress" class="col-sm-2 col-form-label"
              >Address</label
            >

            <div class="col-sm-10 required form-group">
              <div class="col-sm-12">
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  name="address"
                  placeholder="1234 Main St"
                />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>

            <div class="col-sm-10 required form-group">
              <div class="col-sm-12">
                <input
                  type="email"
                  class="form-control"
                  placeholder="abs@xyz.com"
                  id="inputEmail4"
                  name="email"
                  placeholder="Email"
                />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label"
              >Password</label
            >

            <div class="col-sm-10 required form-group">
              <div class="col-sm-12">
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  placeholder="Password"
                  required
                />
              </div>
            </div>
          </div>

          <div class="col text-center">
            <div id="buttons">
              <button type="submit" class="btn btn-primary">Signup</button>
            </div>

            <div  id="buttons">
              
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </body>
</html>
