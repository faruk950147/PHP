<?php
include __DIR__ . "/include/open_html.php";
include __DIR__ . "/include/header.php";
require_once __DIR__ . "/config/db.php";
?>

<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Add Student Information</h4>
                    </div>

                    <div class="card-body">
                        <form method="post" action="">
                            <!-- Name -->
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Student Name">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                            </div>

                            <!-- Department -->
                            <div class="mb-3">
                                <select name="department" class="form-select">
                                    <option selected disabled>Select Department</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="ME">ME</option>
                                    <option value="CE">CE</option>
                                </select>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    Save Student
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>

<?php
    include __DIR__ . "/include/closed_html.php";
?>