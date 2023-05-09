<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Manager - Sales</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      referrerpolicy="no-referrer"
    />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div class="sidebar" data-color="orange">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
        <div class="logo">
          <a href="#" class="simple-text logo-mini"><img src="{{ asset('images/techxLogoWhite.svg') }}" alt="logo"></a>
          <a href="#" class="simple-text logo-normal"> TechX </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li>
              <a href="{{route('management')}}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li>
              <a href="{{route('products')}}">
                <i class="now-ui-icons shopping_bag-16"></i>
                <p>Products</p>
              </a>
            </li>

            <li>
              <a href="{{route('categories')}}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Categories</p>
              </a>
            </li>

            <li class="active">
              <a href="{{route('sales')}}">
                <i class="now-ui-icons business_money-coins"></i>
                <p>Sales</p>
              </a>
            </li>

            <li class="active-pro">
              <a href="#">
                <i class="now-ui-icons tech_headphones"></i>
                <p>Contact Support</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav
          class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navigation"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navigation"
            >
              <form>
                <div class="input-group no-border">
                  <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder="Search..."
                  />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_zoom-bold"></i>
                    </div>
                  </div>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="now-ui-icons users_single-02"></i>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                    <a class="dropdown-item text-danger" href="#">Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Products Onsale</h3>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <h1>38</h1>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Product Sales</h5>
                  <h4 class="card-title">New Sale</h4>
                </div>
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col-md-4">
                      <label for="">Product ID</label>
                      <input type="text" class="form-control" placeholder="#" />
                    </div>

                    <div class="col-md-4">
                      <label for="">Sale Price</label>
                      <input type="text" class="form-control" placeholder="€" />
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-4">
                      <label for="">From</label>
                      <input
                        type="date"
                        name="start_date"
                        class="form-control"
                      />
                    </div>

                    <div class="col-md-4">
                      <label for="">To</label>
                      <input type="date" name="end_date" class="form-control" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary">Add Sale</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="d-flex">
                    <h4 class="card-title">All Products</h4>
                  </div>
                  <div class="d-flex">
                    <div class="input-group no-border mx-2">
                      <input
                        type="text"
                        value=""
                        class="form-control"
                        placeholder="Search products..."
                      />
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </div>
                      </div>
                    </div>

                    <div class="input-group no-border mx-2">
                      <select name="" id="" class="form-control">
                        <option value="">Category #1</option>
                        <option value="">Category #2</option>
                        <option value="">Category #3</option>
                        <option value="">Category #4</option>
                        <option value="">Category #5</option>
                      </select>
                      <div class="input-group-append">
                        <div class="input-group-text"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Gaming Mouse</td>
                          <td>Whiteshark gaming mouse</td>
                          <td>32</td>
                          <td>Gaming</td>
                          <td>45.99€</td>
                          <td>35.99€</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Gaming Keyboard</td>
                          <td>Whiteshark gaming keyboard</td>
                          <td>15</td>
                          <td>Gaming</td>
                          <td>95.99€</td>
                          <td>-</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div
          class="modal fade"
          id="editCategoryModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="editCategoryLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editCategoryLabel">
                  Edit Category
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="category_name">Name</label>
                      <input
                        name="category_name"
                        type="text"
                        class="form-control"
                        placeholder="Category name"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea
                        class="form-control"
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="Category description..."
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button type="button" class="btn btn-primary">
                  Save Changes
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.crispy-code.com"> CrispyCode </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document
                .getElementById("copyright")
                .appendChild(document.createTextNode(new Date().getFullYear()));
            </script>
            - Developed by
            <a href="https://www.crispy-code.com" target="_blank">CrispyCode</a>
          </div>
        </div>
      </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script
      src="../assets/js/now-ui-dashboard.min.js?v=1.5.0"
      type="text/javascript"
    ></script>
  </body>
</html>
