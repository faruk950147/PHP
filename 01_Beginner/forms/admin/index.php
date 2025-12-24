<?php
    include_once "include/open_html.php";
    include_once "include/header.php";
?>

<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-white text-dark p-3">
                <div class="title mb-3">
                    <h2 class="text-center">Student Information Table</h2>
                </div>
                <table class="table table-bordered table-striped text-dark" id="studentTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Roll</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Faruk Ahmed</td>
                            <td>faruk@gmail.com</td>
                            <td>1234567890</td>
                            <td>CSE</td>
                            <td>123</td>
                            <td><img src="../assets/images/1.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sarah Khan</td>
                            <td>Sarah@gmail.com</td>
                            <td>1234567890</td>
                            <td>CSE</td>
                            <td>123</td>
                            <td><img src="../assets/images/2.jpg" alt=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    include_once "include/footer.php";
    include_once "include/closed_html.php";
?>