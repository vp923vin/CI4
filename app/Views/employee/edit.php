<?= $this->extend('layouts/base') ?>

<?= $this->section('content')?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Employee
                        <a href="<?= base_url('employee')?>" class="btn btn-danger float-end">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee/update/'.$employee['id']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="first_name"  class="form-label" >First Name : </label>
                                    <input type="text" id="first_name" value="<?= $employee['first_name'] ?>" class="form-control" name="first_name" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="last_name"  class="form-label">Last Name : </label>
                                    <input type="text" name="last_name" value="<?= $employee['last_name'] ?>" class="form-control" id="last_name" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="phone"  class="form-label">Phone</label>
                                    <input type="text" name="phone" value="<?= $employee['phone'] ?>" class="form-control" id="phone" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="email"  class="form-label">Email</label>
                                    <input type="text" name="email" value="<?= $employee['email'] ?>" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="designation"  class="form-label">Designation</label>
                                    <input type="text" name="designation" value="<?= $employee['designation'] ?>" class="form-control" id="designation" placeholder="Enter Designation">
                                </div>    
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update Employee</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content')?>