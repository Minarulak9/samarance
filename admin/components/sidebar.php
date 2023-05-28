<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-2" style="gap: 6px;">
                            <a class="nav-link <?php if($page=='dashboard')echo 'active'?>" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link <?php if($page=='top_links')echo 'active'?>" href="./top_links.php">
                                <div class="sb-nav-link-icon">
                                <i class="fa-regular fa-square-minus"></i>
                                </div>
                                Top links
                            </a>
                            <a class="nav-link <?php if($page=='banners')echo 'active'?>" href="./banners.php">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-images"></i>
                                </div>
                                Banners
                            </a>
                            <a class="nav-link <?php if($page=='students')echo 'active'?>" href="./students.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-money-check-dollar"></i>
                                </div>
                                Students
                            </a>
                            <a class="nav-link <?php if($page=='salary_report')echo 'active'?>" href="./salary_report.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-receipt"></i>
                                </div>
                                Salary Report
                            </a>
                            <a class="nav-link <?php if($page=='monthly_report')echo 'active'?>" href="./monthly_report.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-receipt"></i>
                                </div>
                                Monthly Report
                            </a>
                            <a class="nav-link <?php if($page=='year_report')echo 'active'?>" href="./year_report.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-file-invoice-dollar"></i>
                                </div>
                                Year Wise Report
                            </a>
                            <a class="nav-link <?php if($page=='pass_change')echo 'active'?>" href="./change_pass.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-unlock-keyhole"></i>
                                </div>
                                Change Password
                            </a>
                            <a class="nav-link <?php if($page=='log_out')echo 'active'?>" href="./logout.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                                Logout
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome, Mr. Rahul Kumar</div>
                    </div>
                </nav>