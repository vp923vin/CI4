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
                                    <button type="button" value="<?= $row['id']?>" class="btn btn-danger btn-sm confirm_del_btn" >Delete</button>
                                    </td>
                                    <!-- <a href=" // base_url('employee/delete/'.$row['id']) " class="btn btn-danger btn-sm">Delete</a> -->
                                       
                                    <!-- <form action=" base_url('employee/delete/'.$row['id']) ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE"> 
                                        <button type="submit" value=" $row['id']?>" class="btn btn-danger btn-sm del">Delete</button>
                                    </form> -->
                                    
                                   
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
   $(document).ready(function()
   {
        $('.confirm_del_btn').click(function(e)
        {
            e.preventDefault();
            var id = $(this).val(); 
            if(confirm("Are you sure to delete this data ?"))
            {
                // alert(id);
                $.ajax({
                    url: "/crudn/employee/confirm-delete/"+id,
                    success: function(response){
                        window.location.reload();
                        alert("Data Deleted");
                    }

                });
            }
        });

   });
</script>
    

<?= $this->endSection('scripts') ?>