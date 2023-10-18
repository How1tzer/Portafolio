<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio-13</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  
    <div class="row align-items-start">
      <div class="col-2">
        <!--Slidebar-->
        <div class="d-flex flex-column flex-shrink-0 p-1 text-white bg-dark" style="height: 950px;  ">
          <a href="/" class="d-flex align-items-center mb-1 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Sidebar</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="#" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#home" />
                </svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#speedometer2" />
                </svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#table" />
                </svg>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#grid" />
                </svg>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#people-circle" />
                </svg>
                Customers
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
              id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-10">
        <!--Nvar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand">Navbar</a>

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars text-light"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link active" aria-current="page" href="#!">
                    <div>
                      <i class="fas fa-home fa-lg mb-1"></i>
                    </div>
                    Home
                  </a>
                </li>
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" href="#!">
                    Link
                  </a>
                </li>
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link disabled" aria-disabled="true" href="#!">
                    Disabled
                  </a>
                </li>
                <li class="nav-item dropdown text-center mx-2 mx-lg-1">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <div>
                      <i class="far fa-envelope fa-lg mb-1"></i>

                    </div>
                    Dropdown
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Left links -->

              <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" href="#!">
                    Messages
                  </a>
                </li>
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" href="#!">
                    News
                  </a>
                </li>
              </ul>
              <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
                <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                <button class="btn btn-primary" type="button" data-mdb-ripple-color="dark">
                  Search
                </button>
              </form>
            </div>
  
        </nav>

      </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>