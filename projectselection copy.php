<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MINOR PROJECT</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#noOfStudent").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionValue = $(this).attr("value");
                    // console.log(optionValue);
                    if (optionValue == '1') {
                        $(".studentform2").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".studentform2").show();
                    }
                });
            }).change();
        });
    </script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">APAS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <section class="contact-section bg-black shadow">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-5 my-5">
                    <div class="card shadow">
                        <div class="card-body">

                            <!-- php -->
                            <?php
                            // insert to db
                            if(isset($_POST["studentpref"]))
                            {

                                // student count
                                $Option =  $_POST['noOfStudent'];

                                // student1
                                $s1name = $_POST['s1fullName'];
                                $s1sex = $_POST['s1sex'];
                                $s1roll = $_POST['s1rollNumber'];
                                $s1cgp = (float)$_POST['s1cgpa'];
                                $s1year = $_POST['s1year'];

                                // student2
                                $s2name = $_POST['s2fullName'];
                                $s2sex = $_POST['s2sex'];
                                $s2roll = $_POST['s2rollNumber'];
                                $s2cgp = (float)$_POST['s2cgpa'];
                                $s2year = $_POST['s2year'];

                                // preference

                                $pref1 = $_POST['preference1'];
                                $pref2 = $_POST['preference2'];
                                $pref3 = $_POST['preference3'];
                                $pref4 = $_POST['preference4'];
                                $pref5 = $_POST['preference5'];

                                // calcuate avg cgp

                                $avgcgp = ($s1cgp+$s2cgp)/2;
                                // echo "<script>alert('$avgcgp')</script>";die();

                                // echo ";<script>alert('')</script>";

                                // send student data

                                if ($Option == '1') { 
                                    //send single student data

                                    $query = "INSERT INTO `student_list`(`roll_no`,`cgpa`) VALUES ('$s1roll','$s1cgp')";
                                    $data = $conn->query($query);

                                    // store preference

                                    $prefquery = "INSERT INTO `preference_list`( `average_cgpa`,`Pr1`, `Pr2`, `Pr3`, `Pr4`, `Pr5`) 
                                    VALUES ('$s1cgp','$pref1','$pref2','$pref3','$pref4','$pref5')";
                                    $prefdata = $conn->query($prefquery);

                                    echo '<script>
                                    swal({
                                        title: "Submitted",
                                        icon: "success",
                                        button: "close",
                                        type: "success"
                                    });
                                    </script>'; 
                                    
                                }

                                elseif ($Option == '2') { 
                                    //send second+first student data

                                    // store preference

                                    $prefquery = "INSERT INTO `preference_list`( `average_cgpa`,`Pr1`, `Pr2`, `Pr3`, `Pr4`, `Pr5`) 
                                    VALUES ('$avgcgp','$pref1','$pref2','$pref3','$pref4','$pref5')";
                                    $prefdata = $conn->query($prefquery);

                                    $query = "INSERT INTO `student_list`(`roll_no`,`cgpa`) VALUES ('$s1roll','$s1cgp')"; //student1 entry sql
                                    $query2 = "INSERT INTO `student_list`(`roll_no`,`cgpa`) VALUES ('$s2roll','$s2cgp')"; //student2 entry sql
                                    $data = $conn->query($query);
                                    $data2 = $conn->query($query2);
                                    echo '<script>
                                    swal({
                                        title: "Submitted",
                                        icon: "success",
                                        button: "close",
                                        type: "success"
                                    });
                                    </script>'; 
                                   
                                }

                                
                                

                            }
                            ?>
                            <form id="contactForm" method="post" action="">
                                <!-- student selection -->
                                <div class="form-floating mb-3" id="studentform">
                                    <select class="form-select" id="batch" name="batch"  aria-label="Name of the batch">
                                       <option value="1" selected>MCA</option>
                                       <option value="2">BTech</option>
                                      <option value="3" >Mtech</option> 
                                    </select>
                                    <label for="noOfStudent">Batch</label>
                                </div>
                                <div class="form-floating mb-3" id="studentform">
                                    <select class="form-select" id="year" name="year"  aria-label="Year">
                                       <option value="1" selected>2022</option>
                                        <option value="2">2021</option>
                                   </select>
                                    <label for="noOfStudent">No of Student</label>
                                </div>
                                <div class="form-floating mb-3" id="studentform">
                                    <select class="form-select" id="noOfStudent" name="noOfStudent"  aria-label="No of Student">
                                       <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                   </select>
                                    <label for="noOfStudent">No of Student</label>
                                </div>
                                <!-- student form1 -->
                                <div class="studentform1">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s1fullName" type="text"
                                            placeholder="Full Name" data-sb-validations="required" />
                                        <label for="fullName">Full Name</label>
                                        <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is
                                            required.
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s1sex" type="text" placeholder="Sex"
                                            data-sb-validations="required" />
                                        <label for="sex">Sex</label>
                                        <div class="invalid-feedback" data-sb-feedback="sex:required">Sex is required.
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s1rollNumber" type="text"
                                            placeholder="Roll Number" data-sb-validations="required" />
                                        <label for="rollNumber">Roll Number</label>
                                        <div class="invalid-feedback" data-sb-feedback="rollNumber:required">Roll Number
                                            is
                                            required.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s1cgpa" type="text" placeholder="CGPA"
                                            data-sb-validations="required" />
                                        <label for="cgpa">CGPA</label>
                                        <div class="invalid-feedback" data-sb-feedback="cgpa:required">CGPA is required.
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s1year" type="text" placeholder="Year"
                                            data-sb-validations="required" />
                                        <label for="year">Year</label>
                                        <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.
                                        </div>
                                    </div>

                                </div>
                                <!-- student1 end -->

                                <!-- student2 form1 -->
                                <div class="studentform2">
                                    <div class="text-success p-2">Enter second student details</div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s2fullName" type="text"
                                            placeholder="Full Name" data-sb-validations="required" />
                                        <label for="fullName">Full Name</label>
                                        <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is
                                            required.
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s2sex" type="text" placeholder="Sex"
                                            data-sb-validations="required" />
                                        <label for="sex">Sex</label>
                                        <div class="invalid-feedback" data-sb-feedback="sex:required">Sex is required.
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s2rollNumber" type="text"
                                            placeholder="Roll Number" data-sb-validations="required" />
                                        <label for="rollNumber">Roll Number</label>
                                        <div class="invalid-feedback" data-sb-feedback="rollNumber:required">Roll Number
                                            is
                                            required.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s2cgpa" type="text" placeholder="CGPA"
                                            data-sb-validations="required" />
                                        <label for="cgpa">CGPA</label>
                                        <div class="invalid-feedback" data-sb-feedback="cgpa:required">CGPA is required.
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="s2year" type="text" placeholder="Year"
                                            data-sb-validations="required" />
                                        <label for="year">Year</label>
                                        <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.
                                        </div>
                                    </div>
                                </div>
                                <!-- student2 end -->

                                 <!-- project preference -->
                                 <div class="py-2">
                                    <div class="text-success p-2">Project Preference</div>
                                    
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="preference1" aria-label="Preference 1">
                                        <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE project_status = '0' ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                        </select>
                                        <label for="preference1">Preference 1</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="preference2" aria-label="Preference 2">
                                        <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE project_status = '0' ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                        </select>
                                        <label for="preference2">Preference 2</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="preference3" aria-label="Preference 3">
                                        <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE project_status = '0' ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                        </select>
                                        <label for="preference3">Preference 3</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="preference4" aria-label="Preference 4">
                                        <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE project_status = '0' ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                        </select>
                                        <label for="preference4">Preference 4</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="preference5" aria-label="Preference 5">
                                        <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE project_status = '0' ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                        </select>
                                        <label for="preference4">Preference 5</label>
                                    </div>
                               
                                    <!-- end preference -->
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" id="submitButton" name="studentpref"
                                            type="submit">Submit</button>
                                    </div>
                            </form>
                            <!-- end form -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project list -->
    <section class="contact-section bg-black">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-1 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-danger text-center p-2">Project List</div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>project Name</th>
                                        <th>Description</th>
                                        <th>Allocation Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                     $query = "SELECT * FROM `project_list` ";
                                     $data = $conn->query($query);
                                     while($row = $data->fetch_assoc())
                                     {
                                        // condition
                                        // 0 for available
                                        // 1 for Assigned
                                        if ($row["project_status"] == 0) {
                                            $status = '<div class="text-success">Available</div>';
                                        } else {
                                            $status = '<div class="text-danger">Assigned</div>';
                                        }
                                        
                                         echo '
                                         <tr>
                                        <td>'.$row["project_no"].'</td>
                                        <td>'.$row["project_name"].'</td>
                                        <td>'.$row["project_des"].'</td>
                                        <td>'.$status.'</td>
                                        </tr>';
                                     }
                                    ?>
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- endlist -->
    <!-- end -->

    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Priyanshu Pal Dutta & Subhrajit Saikia</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- custonm -->

</body>

</html>