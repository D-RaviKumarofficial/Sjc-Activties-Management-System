<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NavBar</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <style>
      .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      }

      .cancel-icon span {
        font-size: 30px;
        color: white;
      }

      .navbar-brand img {
        border-radius: 50%;
        height: 50px;
        /* Adjust height as needed */
      }

      .custom-navbar {
        background-color: #022352;
        /* Blue color */
      }

      .navbar-nav .nav-item .nav-link {
        font-weight: bold;
        position: relative;
        color: white;
        /* White text color */
        text-decoration: none;
        overflow: hidden; /* Ensure text overflow hides properly */
        transition: transform 0.3s; /* Smooth transition for zoom effect */
      }

      .navbar-nav .nav-item .nav-link::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 1px;
        background-color: transparent; /* Remove underline */
        transform: scaleX(0);
        transition: transform 0.3s ease;
      }

      .navbar-nav .nav-item:hover .nav-link {
        transform: scale(1.1); /* Zoom effect on hover */
      }

      .navbar-toggler:focus {
        outline: none;
        /* Remove focus outline on hamburger icon */
      }

      .dropdown:hover .dropdown-menu {
        display: block;
      }

      .dropdown-menu {
        right: 0;
        left: auto;
        /* Ensures dropdown is aligned properly */
      }

      @media (max-width: 992px) {
        .dropdown-menu {
          position: static;
          float: none;
          width: 100%;
          text-align: center;
          background-color: #022352;
        }

        .dropdown-menu .dropdown-item {
          color: white;
        }

        .dropdown-menu .dropdown-item:hover {
          background-color: #022352;
        }
      }
    </style>
    <link
      rel="shortcut icon"
      href="{{asset('sjc/images/logo.png')}}"
      type="image/x-icon"
    />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
      <a class="navbar-brand" href="#">
        <img
          src="{{asset('/images/sjclogo.png')}}"
          alt="sjc logo"
          height="30"
        />
      </a>
      <button
        class="navbar-toggler custom-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <button
        class="navbar-toggler d-lg-none ml-auto cancel-icon"
        style="display: none"
      >
        <span>&times;</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="eventsDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Events
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="eventsDropdown"
            >
              <a class="dropdown-item" href="#">Sjc Events</a>
              <a class="dropdown-item" href="#">Finearts</a>
              <a class="dropdown-item" href="#">Acadamic</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.aboutus')}}">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
        // Toggle between navbar-toggler and cancel-icon
        $(".navbar-toggler").click(function () {
          $(".cancel-icon").toggle();
          $(".navbar-toggler-icon").toggleClass("d-none");
          $(".navbar-brand img").toggleClass("logo-circle");
        });

        // Hide navbar on nav link click and reset toggler icon
        $(".navbar-nav>li>a").on("click", function () {
          $(".cancel-icon").hide();
          $(".navbar-toggler-icon").removeClass("d-none");
          $(".navbar-brand img").removeClass("logo-circle");
        });

        // Hide navbar on cancel icon click and reset toggler icon
        $(".cancel-icon").click(function () {
          $(".navbar-collapse").collapse("hide");
          $(this).hide();
          $(".navbar-toggler-icon").removeClass("d-none");
          $(".navbar-brand img").removeClass("logo-circle");
        });

        // Prevent dropdown from closing on click inside
        $(".dropdown-menu").on("click", function (e) {
          e.stopPropagation();
        });

        // Close dropdown on click outside
        $(document).on("click", function (e) {
          if (!$(e.target).closest(".dropdown-menu").length) {
            $(".dropdown-menu").slideUp();
          }
        });

        // Make sure the dropdown stays open when clicked on mobile
        $(".dropdown-toggle").on("click", function (e) {
          var $dropdownMenu = $(this).next(".dropdown-menu");
          if ($dropdownMenu.is(":visible")) {
            $dropdownMenu.slideUp();
          } else {
            $(".dropdown-menu").slideUp(); // close other dropdowns
            $dropdownMenu.slideDown();
          }
          e.stopPropagation();
        });
      });
    </script>
  </body>
</html>
