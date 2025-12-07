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
                                <h5>Create Portfolio Content</h5>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="title" class="form-label">Portfolio Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Portfolio Title">
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
       