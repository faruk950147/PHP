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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Testimonial Section</h1>
                        <a href="create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create Testimonial Section</a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <table class="" id="datatable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Profile Picture</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Rate</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="uploads/profile.png" width="40"></td>
                                        <td>Jane Doe</td>
                                        <td>Web Designer</td>
                                        <td>5/5</td>
                                        <td>Excellent work!</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>



            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include_once "../include/footer.php";
            ?>
       