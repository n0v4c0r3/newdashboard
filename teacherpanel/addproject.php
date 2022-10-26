<?php
include("include/head.php");
include("include/sidebar.php");


// insert project to database
if(isset($_POST["addprojectButton"]))
{
    $year = $_POST["year"];
    $batch = $_POST["batchname"];
    $projectname = $_POST["projectname"];
    $description = $conn->real_escape_string($_POST["projectdesc"]);
    $tag = $conn->real_escape_string($_POST["projecttag"]);
    
    $query = "INSERT INTO `project_list`(`project_name`, `project_des`, `project_tag`, `batch_id`) 
    VALUES ('$projectname','$description','$tag','$batch')";
    $data = $conn->query($query);
    echo '<script>
	swal({
	    title: "project added",
	    icon: "success",
	    button: "close",
	    type: "success"
	});
	</script>'; 

    // echo '<meta http-equiv="refresh" content= "2;URL=?added" />'; 

}
?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Project Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="projectaddform" method="post" action="">
                <div class="form-group mb-3">
                    <label for="year">Year</label>
                    <input class="form-control" type="number" name="year" min="1900" max="2099" step="1" value="2022"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="year:required">date is required.</div>
                </div>

                <div class="form-group mb-3">
                    <label for="batch">Select Batch</label>
                    <select class="form-control" name="batchname" aria-label="Batch">
                        <?php
                        $q = "SELECT * FROM `PROGRAM`";
                        $d = $conn->query($q);
                        while($r = $d->fetch_assoc())
                        {
                            echo '<option name="batchname" value='.$r["sid"].'>'.$r["name"].'</option>';
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="nameOfProject">Project Details :</label>
                    <input class="form-control" id="nameOfProject" name="projectname" type="text" placeholder="Name Of Project"
                        data-sb-validations="required" required/>
                    <div class="invalid-feedback" data-sb-feedback="nameOfProject:required">Name Of Project is
                        required.</div>
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" id="projectDescription" name="projectdesc" type="text" placeholder="Project Description"
                        style="height: 10rem;" data-sb-validations="required" required></textarea>
                    <div class="invalid-feedback" data-sb-feedback="projectDescription:required">Project Description
                        is required.</div>
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" id="projectTags" type="text" name="projecttag" placeholder="Project tags"
                        data-sb-validations="required" required/>
                    <label for="projectTags">eg: Ai,python,Web,ML</label>
                    <div class="invalid-feedback" data-sb-feedback="projectTags:required">Project tags is required.
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success btn-lg" name="addprojectButton" type="submit">Add project</button>
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