    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user-check"></i>
            </div>
            <div class="sidebar-brand-text mx-3">FXTM <sup>VIP</sup> Admin</div>
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
                <span>Investments</span>
            </a>
            <div id="collapsePlans" class="collapse" aria-labelledby="Plans" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="view-register.php">View Users</a>
                    <a class="collapse-item" href="plans-view.php">View Plans</a>
                    <a class="collapse-item" href="plans-add.php">Add Plans</a>
                    <a class="collapse-item" href="invest-card-view.php">My Investments</a>
                    <a class="collapse-item" href="active-invest.php">My Active Investments</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment"
                aria-expanded="true" aria-controls="collapsePayment">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Payment & Withdrawal</span>
            </a>
            <div id="collapsePayment" class="collapse" aria-labelledby="headingPayment"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="view-payment-method.php">Payment Methods</a>
                    <a class="collapse-item" href="add-payment-method.php">Add Payment Method</a>
                    <a class="collapse-item" href="view-payment-log.php">Payment History</a>
                    <a class="collapse-item" href="view-tempay-log.php">View Temp Pay Log</a>
                    <a class="collapse-item" href="view-deposit-image.php">View Deposit Image</a>
                    <a class="collapse-item" href="view-withdrawal-method.php">Withdrawal Methods</a>
                    <a class="collapse-item" href="view-widthdrawal-log.php">Withdrawal</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Settings</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Security</h6>
                    <a class="collapse-item" href="kyc.php">KYC</a>
                    <a class="collapse-item" href="forgot-password.php">Reset Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="privacy-policy.php">Privacy Policy</a>
                    <a class="collapse-item" href="faqs.php">FQAs</a>
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
            <p class="text-center mb-2"><strong>FXTM VIP</strong> has a lot of good profit making investment plans and more!</p>
            <a class="btn btn-success btn-sm" href="invest-card-view.php">Invest Now</a>
        </div>

    </ul>
    <!-- End of Sidebar -->
