<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit/Update Project Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="projectaddform" method="post" action="">
                <div class="form-group mb-3">
                    <label for="year">Year</label>
                    <input class="form-control" type="number" min="1900" max="2099" step="1" value="2022"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="year:required">date is required.</div>
                </div>

                <div class="form-group mb-3">
                    <label for="batch">Select Batch</label>
                    <select class="form-control" id="batch" aria-label="Batch">
                        <option value="Btech">Btech</option>
                        <option value="Mtech">Mtech</option>
                        <option value="Mca">Mca</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="nameOfProject">Project Details :</label>
                    <input class="form-control" id="nameOfProject" type="text" placeholder="Name Of Project"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="nameOfProject:required">Name Of Project is
                        required.</div>
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" id="projectDescription" type="text" placeholder="Project Description"
                        style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="projectDescription:required">Project Description
                        is required.</div>
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" id="projectTags" type="text" placeholder="Project tags"
                        data-sb-validations="required" />
                    <label for="projectTags">eg: Ai,python,Web,ML</label>
                    <div class="invalid-feedback" data-sb-feedback="projectTags:required">Project tags is required.
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success btn-lg" id="submitButton" type="submit">Add project</button>
                </div>
            </form>
            <!-- end form -->
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- end paste -->

<?php
include("include/footer.php");
?>

<!-- <a href="#" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Split Button Success</span>
    </a> -->