<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashbord.php" class="brand-link">
        <img src="../dist/img/logo.jpg" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SoftJava</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">User</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="admin_dashbord.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Student Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        <li class="nav-item">
                            <a href="addnewclass.php" class="nav-link">
                                <i class="nav-icon fas fa-school"></i>
                                <p>
                                    Add New Class
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="createtimetable.php" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Create New Time Table
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="studentpaymentdetails.php" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Payment Details
                                </p>
                            </a>
                        </li>


                    </ul>
                </li>






                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>