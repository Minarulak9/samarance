<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-2" style="gap: 6px;">
                            <a class="nav-link <?php if($page=='dashboard')echo 'active'?>" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link <?php if($page=='manage_student')echo 'active'?>" href="manage_student.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                                Manage Student
                            </a>
                            <a class="nav-link <?php if($page=='manage_teacher')echo 'active'?>" href="manage_teacher.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                                Manage Teacher
                            </a>
                            <a class="nav-link <?php if($page=='student_club')echo 'active'?>" href="student_club.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                                Student Club
                            </a>
                            <a class="nav-link <?php if($page=='earn_money')echo 'active'?>" href="earn_money.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-coins"></i></div>
                                Earn Money
                            </a>
                            <a class="nav-link <?php if($page=='study_support')echo 'active'?>" href="study_support.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-headset"></i></div>
                                Study Support
                            </a>
                            <a class="nav-link <?php if($page=='prime_mem')echo 'active'?>" href="prime_mem.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-award"></i></div>
                                Prime Member
                            </a>
                            <a class="nav-link <?php if($page=='classes')echo 'active'?>" href="classes.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-award"></i></div>
                                Classes
                            </a>
                            <a class="nav-link <?php if($page=='project_support')echo 'active'?>" href="project_support.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake-simple"></i></div>
                                Project Support
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
                            <a class="nav-link <?php if($page=='setting')echo 'active'?>" href="./setting.php">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-gear"></i>
                                </div>
                                Settings
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