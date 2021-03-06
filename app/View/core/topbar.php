<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <form class="form-inline"  method="post">
            <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="find"
                    <i >search</i>
                </button>
            </div>
            </form>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                 aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                               placeholder="Search for..." aria-label="Search"
                               aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="dropdown-item" href="login.php" >
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
<!--            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"-->
<!--               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                <span class="mr-2 d-none d-lg-inline text-gray-600 small">USER</span>-->
<!--                <img class="img-profile rounded-circle"-->
<!--                     src="app/View/frontend/img/undraw_profile.svg">-->
<!--            </a>-->
<!--
<!--            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
<!--                 aria-labelledby="userDropdown">-->
<!--                <a class="dropdown-item" href="#">-->
<!--                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                    Profile-->
<!--                </a>-->
<!--                <div class="dropdown-divider"></div>-->
<!--                <a class="dropdown-item" href="login.php" >-->
<!--                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                    Logout-->
<!--                </a>-->
<!--            </div>-->
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
