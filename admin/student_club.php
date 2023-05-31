

    <?php $page="student_club"; include './components/head.php'; ?>
        <title>Student Club</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <h4 class="page-header">Student Club</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Club</h6>
                            <!-- <a href="./new_teacher.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> New Teacher</a> -->
                        </div>
                        <div class="card-body pd-sm">
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th >#</th>
                                            <th >Image</th>
                                            <th >Program Name</th>
                                            <th >Link</th>
                                            <th >Expire Time</th>
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="./img/icon1.png" width="50px" alt=""></td>
                                            <td>BCA</td>
                                            <td><a href="https://meet.google.com/xyp-kqdj-ctj">https://meet.google.com/xyp-kqdj-ctj</a></td>
                                            <td >
                                             12 :30 PM
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                        
                    </div>
                </main>
                <!--<?php include './components/copy.php'; ?>-->
            </div>
        </div>
        <?php include './components/script.php'; ?>
        <script>
  
        </script>
    </body>
</html>
