

    <?php $page="top_links"; include './components/head.php'; ?>
        <title>Top Links</title>
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
                        <div id="icons">
                            <div href="#" class="icon">
                                <div class="img"><img src="./img/icon1.png" alt=""></div>
                                <div class="text"><a href="#">Student Club</a></div>
                                <div class="edit"><a href="#" class="edit"><i class="fa-solid fa-pen"></i></a></div>
                                <div class="order">1</div>
                            </div>
                            <div href="#" class="icon">
                                <div class="img"><img src="./img/icon2.png" alt=""></div>
                                <div class="text"><a href="#">Student Club</a></div>
                                <div class="edit"><a href="#" class="edit"><i class="fa-solid fa-pen"></i></a></div>
                                <div class="order">2</div>
                            </div>
                            <div href="#" class="icon">
                                <div class="img"><img src="./img/icon3.png" alt=""></div>
                                <div class="text"><a href="#">Student Club</a></div>
                                <div class="edit"><a href="#" class="edit"><i class="fa-solid fa-pen"></i></a></div>
                                <div class="order">3</div>
                            </div>
                            <div href="#" class="icon">
                                <div class="img"><img src="./img/icon4.png" alt=""></div>
                                <div class="text"><a href="#">Student Club</a></div>
                                <div class="edit"><a href="#" class="edit"><i class="fa-solid fa-pen"></i></a></div>
                                <div class="order">4</div>
                            </div>
                            
                            <div href="#" class="icon add_more">
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
