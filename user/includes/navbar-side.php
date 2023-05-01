    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user-check"></i>
            </div>
            <div class="sidebar-brand-text mx-3">FPN <sup>RP</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlans"
                aria-expanded="true" aria-controls="collapsePlans">
                <i class="fas fa-fw fa-cog"></i>
                <span>Students</span>
            </a>
            <div id="collapsePlans" class="collapse" aria-labelledby="Plans" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="make-withdrawal.php">View Students</a>
                    <a class="collapse-item" href="student-modal.php">View Student Score</a>
                    <a class="collapse-item" href="calculate-modal.php">Calculate Student GPA</a>
                    <a class="collapse-item" href="record-cgpa.php">Record Student GPA</a>
                    <a class="collapse-item" href="cgpa-modal.php">View Student CGPA</a>
                    <a class="collapse-item" href="view-grading.php">View Grading System</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment"
                aria-expanded="true" aria-controls="collapsePayment">
                <i class="fas fa-fw fa-folder"></i>
                <span>Courses</span>
            </a>
            <div id="collapsePayment" class="collapse" aria-labelledby="headingPayment"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="course-modal.php">View Courses</a>
                    <a class="collapse-item" href="unit-modal.php">View Course Units</a>
                    <a class="collapse-item" href="score-modal.php">View Score Sheet</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Settings</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Security</h6>
                    <a class="collapse-item" href="kyc.php">KYC</a>
                    <a class="collapse-item" href="forgot-password.php">Reset Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="../faq.php">FQAs</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>FPN</strong> Latest Academic news and updates</p>
            <a class="btn btn-success btn-sm" href="invest-card-view.php">Checkout Now</a>
        </div>

    </ul>
    <!-- End of Sidebar -->
