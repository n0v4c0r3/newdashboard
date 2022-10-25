<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Studnet Details</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- Tales -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Student id</th>
                                            <th>Project id</th>
                                            <th>name</th>
                                            <th>assign date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>

                                        <tr>
                                            <td>001</td>
                                            <td>002</td>
                                            <td>pranay</td>
                                            <td>2011/04/25</td>
                                            <td>
                                            
                                            <!-- view -->
                                            <form action="studetdetails.php" method="post" class="d-inline p-2">
												<input type="hidden" name="id" value='.$row["projectid"].'>
												<button class="btn btn-success" type="submit" name="editproject">
												<i class="fas fa-eye "></i><span> View</span>
												</button>
											</form>
                                           
                                            <!-- delete -->
                                            <form action="" method="post" class="d-inline p-2">
												<input type="hidden" name="id" value='.$row["cat_id"].'>
												<button class="btn btn-danger btn-circle" type="submit" name="deleteproject">
												<i class="fas fa-trash "></i>
												</button>
											</form>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
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