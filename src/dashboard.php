<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../dist/output.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link
      rel="stylesheet"
      href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
    />
    <title>GP-EDMS</title>
</head>
  <body>
    <div class="flex h-screen bg-white">
      <div class="flex-none w-64 p-6 bg-indigo-900 border-r">
        <h1 class="text-2xl font-semibold text-white">GP-EDMS</h1>
        <ul class="mt-6" id="menu">
          <li class="mb-1">
            <a
              href="dashboard.php"
              data-content-url="components/dashboard-content.php"
              class="flex items-center p-3 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white sidebar-link"
            >
              <span class="mr-2"><i class="fas fa-home"></i></span> Home
            </a>
          </li>
          <li class="mb-1">
            <a
              href="#"
              class="flex items-center p-3 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
            >
              <span class="mr-2"><i class="fas fa-list"></i></span> Task
              Management
            </a>
            <ul
              class="hidden ml-4 space-y-1 transition-all duration-300 ease-in-out"
            >
              <li>
                <a
                  href="#"
                  data-content-url="forms/add-task.php"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white sidebar-link"
                >
                  <span class="mr-2"><i class="fas fa-plus"></i></span>
                  Add Task
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-content-url="forms/assignTask-form.html"
                  class="block px-4 py-2 sidebar-link text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
                >
                  <span class="mr-2"><i class="fas fa-pen-to-square"></i></span>
                  Assign Task
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-content-url="tables/task-table.html"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white sidebar-link"
                >
                  <span class="mr-2"><i class="fas fa-eye"></i></span>
                  View Tasks
                </a>
              </li>
            </ul>
          </li>
          <li class="mb-1">
            <a
              href="#"
              class="flex items-center p-3 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
            >
              <span class="mr-2"><i class="fas fa-message"></i></span> Chat
            </a>
            <ul class="ml-4 space-y-1 hidden">
              <li>
                <a
                  href="#"
                  data-content-url="forms/add-officer.html"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
                >
                  <span class="mr-2"><i class="fas fa-comment"></i></span>
                  New Chat
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
                >
                  <span class="mr-2"><i class="fas fa-address-book"></i></span>
                  My Contacts
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
                >
                  <span class="mr-2"><i class="fas fa-bell"></i></span>
                  Notifications
                </a>
              </li>
            </ul>
          </li>
          <li class="mb-1">
            <a
              href="#"
              class="flex items-center p-3 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
            >
              <span class="mr-2"><i class="fas fa-chart-bar"></i></span>
              Analytics
            </a>
          </li>
          <li class="mb-1">
            <a
              href="#"
              class="flex items-center p-3 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
            >
              <span class="mr-2"><i class="fas fa-cogs"></i></span> Settings
            </a>
            <!-- Submenu for Settings -->
            <ul class="ml-4 space-y-1 hidden">
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
                >
                  <span class="mr-2"><i class="fas fa-user-cog"></i></span>
                  User Settings
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-white hover:text-indigo-900 hover:bg-indigo-500 focus:bg-indigo-500 focus:text-white"
                >
                  <span class="mr-2"><i class="fas fa-wrench"></i></span>
                  System Settings
                </a>
              </li>
            </ul>
          </li>
          <li class="mb-1">
            <a
              href="#"
              class="flex items-center p-3 text-white hover:text-white hover:bg-red-500 focus:bg-indigo-500 focus:text-white"
            >
              <span class="mr-2"><i class="fas fa-sign-out-alt"></i></span>
              Logout
            </a>
          </li>
        </ul>
      </div>

      <!-- Main Content -->
      <div class="flex-grow p-6" id="main-content">
        <?php include 'components/dashboard-content.php';?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      $(document).ready(function () {
        function showLoading() {
        var loadingSpinner = '<div class="flex h-screen justify-center items-center"><i class="inline-block h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite] text-blue-500"></i></div>';
        $("#main-content").html(loadingSpinner);
      }
        // Function to load content into the main content div
        function loadContent(url) {
          showLoading();
          $("#main-content").load(url);
        }

        $(".sidebar-link").on("click", function (event) {
          event.preventDefault();

          $(".sidebar-link").next("ul").addClass("hidden");

          var submenu = $(this).next("ul");
          submenu.toggleClass("hidden");

          var contentUrl = $(this).data("content-url");
          if (contentUrl) {
            loadContent(contentUrl);
          }
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
      var menuItemsWithSubmenu = document.querySelectorAll("#menu li:has(ul)");
      menuItemsWithSubmenu.forEach(function (menuItem) {
        menuItem.addEventListener("click", function (event) {
          event.preventDefault();
          var allSubmenus = document.querySelectorAll("#menu li ul");
          allSubmenus.forEach(function (submenu) {
            if (submenu !== menuItem.querySelector("ul")) {
              submenu.classList.add("hidden");
            }
          });
          var submenu = menuItem.querySelector("ul");
          submenu.classList.toggle("hidden");
        });
      });
      });
  </script>
  </body>
</html>
