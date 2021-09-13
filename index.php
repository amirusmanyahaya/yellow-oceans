<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/styles/style.css" />
    <title>Home Page</title>
  </head>
  <body>
    <main>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a href="#" class="navbar-brand">Yellow Oceans</a>
        <div class="navbar-header">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#collapseNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="collapseNavbar"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Products</a>
            </li>
          </ul>
        </div>
      </nav>
      <div
        id="carousel"
        class="carousel slide hero-slides"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li class="active" data-target="#carousel" data-slide-to="0"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active boat">
            <div class="container h-100 d-none d-md-block">
              <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="caption animated fadeIn">
                    <h2 class="animated fadeInLeft">Boat Excursions</h2>
                    <p class="animated fadeInRight">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Cras tristique nisl vitae luctus sollicitudin. Fusce
                      consectetur sem eget dui tristique, ac posuere arcu
                      varius.
                    </p>
                    <a class="animated fadeInUp btn delicious-btn" href="#"
                      >Learn more</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item sea">
            <div class="container h-100 d-none d-md-block">
              <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="caption animated fadeIn">
                    <h2 class="animated fadeInLeft">
                      Discover the canyon by the sea
                    </h2>
                    <p class="animated fadeInRight">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Cras tristique nisl vitae luctus sollicitudin. Fusce
                      consectetur sem eget dui tristique, ac posuere arcu
                      varius.
                    </p>
                    <a class="animated fadeInUp btn delicious-btn" href="#"
                      >Learn more</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item river">
            <div class="container h-100 d-none d-md-block">
              <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="caption animated fadeIn">
                    <h2 class="animated fadeInLeft">
                      Explore the river valley
                    </h2>
                    <p class="animated fadeInRight">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Cras tristique nisl vitae luctus sollicitudin. Fusce
                      consectetur sem eget dui tristique, ac posuere arcu
                      varius.
                    </p>
                    <a class="animated fadeInUp btn delicious-btn" href="#"
                      >Learn more</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </main>
    <footer></footer>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"
  ></script>
</html>
