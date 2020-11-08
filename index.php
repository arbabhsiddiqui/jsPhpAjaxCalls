<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4>php curd app using js fetch function</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">add user</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mx-3">
            <div class="col-12">
                <div id="showMessage"></div>

            </div>


        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id='add-user-form' action="" novalidate>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="" aria-describedby="helpId" required>
                                    <div class="invalid-feedback">First Name is required</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" placeholder="" aria-describedby="helpId" required>
                                    <div class="invalid-feedback">Last Name is required</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" required>
                                    <div class="invalid-feedback">Email is required</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Number</label>
                                    <input type="text" name="number" id="number" class="form-control" placeholder="" aria-describedby="helpId" required>
                                    <div class="invalid-feedback">Number is required</div>
                                </div>
                            </div>
                            <div class="col-6 mt-5">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" id='add-user-btn'>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div>


    <!-- Edit User Modal Start -->
    <div class="modal fade" tabindex="-1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit This User</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form" class="p-2" novalidate>
                        <input type="text" name="id" id="id">

                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input type="text" name="fname" id="fnameEdit" class="form-control form-control-lg" required>
                                <div class="invalid-feedback">First name is required!</div>
                            </div>

                            <div class="col">
                                <input type="text" name="lname" id="lnameEdit" class="form-control form-control-lg" placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last name is required!</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" id="emailEdit" class="form-control form-control-lg" placeholder="Enter E-mail" required>
                            <div class="invalid-feedback">E-mail is required!</div>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="phone" id="phoneEdit" class="form-control form-control-lg" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!</div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Update User" class="btn btn-success btn-block btn-lg" id="edit-user-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit User Modal End -->



</body>

<script src="./main.js"></script>

</html>