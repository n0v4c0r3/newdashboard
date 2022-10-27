<?php
include("include/head.php");
include("include/sidebar.php");


// insert project to database
if(isset($_POST["addprojectButton"]))
{
    
    
    $query = "";
    $data = $conn->query($query);
    echo '<script>
	swal({
	    title: "Teacher added",
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
    <h1 class="h3 mb-2 text-gray-800">Edit Teacher Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="teacherform" data-sb-form-api-token="API_TOKEN">
                
                <label class="form-label" for="fullName">Profile Image</label>
                <div class="input-group mb-3">
                
                    <div class="input-group-prepend">
                   
                        <span class="input-group-text">Upload image</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="fullName">Full Name</label>
                    <input class="form-control" id="fullName" type="text" placeholder="Full Name"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email Address</label>
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                        data-sb-validations="required,email" required />
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not
                        valid.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control" id="address" type="text" placeholder="Address"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="address:required">Address is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mobile">Mobile</label>
                    <input class="form-control" id="mobile" type="text" placeholder="Mobile"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="mobile:required">Mobile is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" id="password" type="password" placeholder="Password"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success btn-lg" name="addprojectButton" type="submit">Update</button>
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