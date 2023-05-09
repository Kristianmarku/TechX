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
    <title>TechX - Issue</title>
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
          <a href="{{ route('dashboard') }}" class="simple-text logo-normal"> TechX </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li>
              <a href="{{ route('dashboard') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="active">
              <a href="{{ route('issues') }}">
                <i class="now-ui-icons tech_headphones"></i>
                <p>Issues</p>
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
        <div class="panel-header panel-header-sm"></div>
        <div class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <h5 class="title">Issue #id</h5>
                    <button class="btn btn-info mt-0">
                      <i class="fa-solid fa-check pr-1"></i> Mark as Resolved
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>Topic</label>
                          <p class="form-control rounded-0">Payment Error</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Issue Description</label>
                          <p class="form-control rounded-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque repellendus magni nobis obcaecati
                            laboriosam? Sint deserunt provident maiores
                            architecto enim dicta, porro dignissimos
                            reprehenderit deleniti nobis ducimus delectus quasi
                            molestias mollitia odio quo sequi ullam nulla
                            quibusdam obcaecati. Nobis, veritatis!
                          </p>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  <button class="btn btn-info">
                    <i class="fa-solid fa-reply pr-1"></i> Reply
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Details</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Reported by</label>
                        <p class="form-control">John Smith</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Priority</label>
                        <select class="form-control" name="" id="">
                          <option value="">High</option>
                          <option value="">Medium</option>
                          <option value="">Low</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="" id="">
                          <option value="">In Progress</option>
                          <option value="">On Hold</option>
                          <option value="">Resolved</option>
                          <option value="">Closed</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <p><strong>Date:</strong> 4.16.2023</p>
                  <p><strong>Time:</strong> 3:13 PM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Add Reply -->
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Your message</label>
                        <textarea
                          name=""
                          id=""
                          class="form-control"
                          cols="30"
                          rows="10"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-info">
                    <i class="fa-solid fa-plus pr-1"></i> Add Reply
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Add Reply -->

          <!-- Issue Replies -->
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="d-flex flex-column gap-2">
                    <h5 class="title mb-0">Kristian Marku</h5>
                    <p>Admin</p>
                  </div>
                  1 Hour ago
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <p class="form-control rounded-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Itaque repellendus magni nobis obcaecati
                          laboriosam? Sint deserunt provident maiores architecto
                          enim dicta, porro dignissimos reprehenderit deleniti
                          nobis ducimus delectus quasi molestias mollitia odio
                          quo sequi ullam nulla quibusdam obcaecati. Nobis,
                          veritatis!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-info">
                    <i class="fa-solid fa-pencil pr-1"></i>
                  </button>
                  <button class="btn btn-danger">
                    <i class="fa-solid fa-trash pr-1"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Issue Replies -->
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <nav>
              <ul>
                <li>
                  <a href="https://www.creative-tim.com"> CrispyCode </a>
                </li>
              </ul>
            </nav>
            <div class="copyright" id="copyright">
              &copy;
              <script>
                document
                  .getElementById("copyright")
                  .appendChild(
                    document.createTextNode(new Date().getFullYear())
                  );
              </script>
              - Developed by
              <a href="https://www.crispy-code.com" target="_blank"
                >CrispyCode</a
              >
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script
      src="../assets/js/now-ui-dashboard.min.js?v=1.5.0"
      type="text/javascript"
    ></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
  </body>
</html>
