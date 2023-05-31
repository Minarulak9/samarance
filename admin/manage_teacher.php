

    <?php $page="manage_teacher"; include './components/head.php'; ?>
        <title>Manage Teacher</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <h4 class="page-header">Manage Teacher </h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Teachers</h6>
                            <a href="./new_teacher.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> New Teacher</a>
                        </div>
                        <div class="card-body pd-sm">
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th >#</th>
                                            <th >Teacher Name</th>
                                            <th >Department</th>
                                            <th >Subject</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rahul Das</td>
                                            <td>BCA</td>
                                            <td>DSA</td>
                                            <td class="d-flex" style="gap:2px;">
                                                <a href="./student_view.php" class="btn btn-sm btn-primary">View</a>
                                                <a href="./student_edit.php" class="btn btn-sm btn-success">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Block</a>
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
