

    <?php $page="study_support"; include './components/head.php'; ?>
        <title>Student Support</title>
        <style>
            #popup.active {
                top: 50%;
                opacity: 1;
            }
            #popup {
                position: fixed;
                top: -50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 60%;
                max-width: 600px;
                min-width: 300px;
                height: 400px;
                background-color: rgb(255, 255, 255);
                z-index: 10001;
                box-shadow: 5px 5px 20px -15px;
                border-radius: 10px;
                transition: .4s;
                opacity: 0;
                display: flex;
                overflow: hidden;
            }
            #overlay.active {
                display: block;
            }
            #overlay {
                width: 100%;
                height: 100%;
                position: fixed;
                left: 0;
                top: 0;
                background-color: rgba(0, 0, 0, 0.541);
                z-index: 10000;
                display: none;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
    <div id="popup" class="d-flex justify-content-center align-items-center ">
                <div class="content text-center">
                    <img src="./assets/img/upload.png" width="100px" alt="">
                    <form action="">
                        <label for="upload">Add New Phone Number</label>
                        <input type="text" name="pdf" id="upload" class="form-control" placeholder="Phone Number"> 
                        <input type="submit" value="Submit" class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
            <div id="overlay" class=""></div>
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <h4 class="page-header">Student Support</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Phone Numbers</h6>
                            <a href="#" class="btn btn-primary" id="popup-btn"> Add Phone</a>
                        </div>
                        <div class="card-body pd-sm">
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th >#</th>
                                            <th >Phone Number</th>
                                          
                                            <th >Action</th>
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>7001685742</td>
                                           
                                            <td class="d-flex" style="gap:2px;">
                                                <!-- <a href="#" class="btn btn-sm btn-success" id="popup-btn">Add</a> -->
                                                <a href="#" class="btn btn-sm btn-success">Edit</a>
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
  
let popupBtn = document.querySelector('#popup-btn');
let overlay = document.querySelector('#overlay');
let popup = document.querySelector('#popup');
popupBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    popup.classList.toggle('active');
    overlay.classList.toggle('active');
})
overlay.addEventListener('click',()=>{
  document.querySelector('#popup.active').classList.toggle('active');
  overlay.classList.toggle('active');
})
        </script>
    </body>
</html>
