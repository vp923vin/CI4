<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (session()->getFlashdata('status')) {
                echo "<h3>" . session()->getFlashdata('status') . "</h3>";
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>Employee Data
                        <a href="<?= base_url('employee-add') ?>" class="btn btn-primary float-end">Add Employee</a>
                    </h4>

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Created </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employee as $row) : ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['first_name'] ?></td>
                                    <td><?= $row['last_name'] ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['designation'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td><a href="<?= base_url('employee/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <!-- <a href=" // base_url('employee/delete/'.$row['id']) " class="btn btn-danger btn-sm">Delete</a> -->
                                       
                                        <form action="<?= base_url('employee/delete/'.$row['id']) ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" value="<?= $row['id']?>" class="btn btn-danger btn-sm del">Delete</button>
                                        </form>
                                    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content') ?>

<?= $this->section('scripts')?>
<script>
    $(document).ready(function(){
        $('.del').click(function(e){
            e.preventDefault();
            var id = $(this).val()

            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
            });
        });

    });

</script>
    

<?= $this->endSection('scripts') ?>