

    <?php $page="banners"; include './components/head.php'; ?>
        <title>Banners</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h4 class="page-header">Top Links</h4>
                    <div class="container-fluid px-4">
                        <div id="banners">
                            <div class="banner">
                                <div class="img"><img src="./img/banner1.jpg" alt=""></div>
                                <div class="order">1</div>
                                <a href="#" class="edit"><i class="fa-solid fa-pen"></i></a>
                            </div>
                            <div class="banner">
                                <div class="img"><img src="./img/banner2.jpg" alt=""></div>
                                <div class="order">2</div>
                                <a href="#" class="edit"><i class="fa-solid fa-pen"></i></a>
                            </div>
                            <div class="banner">
                                <div class="img"><img src="./img/banner3.jpg" alt=""></div>
                                <div class="order">3</div>
                                <a href="#" class="edit"><i class="fa-solid fa-pen"></i></a>
                            </div>
                            <div class="banner add_more">
                            <a href="" class="add"><i class="fa-solid fa-plus"></i></a>
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
