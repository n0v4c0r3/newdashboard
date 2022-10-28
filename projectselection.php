<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MINOR PROJECT</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
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
    <section class="contact-section bg-black">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-5 my-5">
                    <form id="contactForm">
                        <!-- student selection -->

                        <div class="form-floating mb-3">
                            <select class="form-select" id="noOfStudent" aria-label="No of Student">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <label for="noOfStudent">No of Student</label>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- student form1 -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="fullName" type="text" placeholder="Full Name"
                                data-sb-validations="required" />
                            <label for="fullName">Full Name</label>
                            <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="sex" type="text" placeholder="Sex"
                                data-sb-validations="required" />
                            <label for="sex">Sex</label>
                            <div class="invalid-feedback" data-sb-feedback="sex:required">Sex is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="rollNumber" type="text" placeholder="Roll Number"
                                data-sb-validations="required" />
                            <label for="rollNumber">Roll Number</label>
                            <div class="invalid-feedback" data-sb-feedback="rollNumber:required">Roll Number is
                                required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="cgpa" type="text" placeholder="CGPA"
                                data-sb-validations="required" />
                            <label for="cgpa">CGPA</label>
                            <div class="invalid-feedback" data-sb-feedback="cgpa:required">CGPA is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="year" type="text" placeholder="Year"
                                data-sb-validations="required" />
                            <label for="year">Year</label>
                            <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.</div>
                        </div>
                        <!-- student1 end -->
                        <!-- student2 form1 -->
                        <div class="text-success p-2">Enter second student details</div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="fullName" type="text" placeholder="Full Name"
                                data-sb-validations="required" />
                            <label for="fullName">Full Name</label>
                            <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="sex" type="text" placeholder="Sex"
                                data-sb-validations="required" />
                            <label for="sex">Sex</label>
                            <div class="invalid-feedback" data-sb-feedback="sex:required">Sex is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="rollNumber" type="text" placeholder="Roll Number"
                                data-sb-validations="required" />
                            <label for="rollNumber">Roll Number</label>
                            <div class="invalid-feedback" data-sb-feedback="rollNumber:required">Roll Number is
                                required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="cgpa" type="text" placeholder="CGPA"
                                data-sb-validations="required" />
                            <label for="cgpa">CGPA</label>
                            <div class="invalid-feedback" data-sb-feedback="cgpa:required">CGPA is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="year" type="text" placeholder="Year"
                                data-sb-validations="required" />
                            <label for="year">Year</label>
                            <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.</div>
                        </div>
                        <!-- student2 end -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>
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
</body>

</html>