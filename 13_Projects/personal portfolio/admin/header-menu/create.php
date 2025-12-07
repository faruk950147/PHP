<?php
$baseUrl = "http://localhost:8002/";
?>

<?php
   

    include "../include/head.php";
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "../include/sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include "../include/header.php";
                ?>

                <div class="container-fluid">
                    <!-- Page Heading -->
                 <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h5>Create Header Content</h5>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="title" class="form-label">Menu Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Menu Title">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="link" class="form-label">Menu Link</label>
                                            <input type="text" name="link" class="form-control" placeholder="Enter Menu Link">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="parent_id" class="form-label">Parent Menu</label>
                                            <input type="number" name="parent_id" class="form-control" placeholder="Enter Parent Menu ID">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="menu_order" class="form-label">Menu Order</label>
                                            <input type="number" name="menu_order" class="form-control" placeholder="Enter Menu Order">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>


                </div>



            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include_once "../include/footer.php";
            ?>
       