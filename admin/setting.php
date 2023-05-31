

    <?php $page="setting"; include './components/head.php'; ?>
        <title>Settings</title>
        <style>
            #icons .icon{
                flex:0 0 225px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h4 class="page-header">Settings</h4>
                    <div class="container-fluid px-4">
                        <div id="icons">
                            <div href="#" class="icon">
                                <div class="img"><img src="./img/lock.png" alt=""></div>
                                <div class="text"><a href="change_pass.php">Change Password</a></div>
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
