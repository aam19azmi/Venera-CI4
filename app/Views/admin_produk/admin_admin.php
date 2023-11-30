<!-- admin_admin.php -->

<?= $this->include('header'); ?>

<body>
    <?= $this->include('sidebar'); ?>

    <!-- Main content -->
    <div class="content d-flex justify-content-end align-items-center" style="min-height: 100vh;">
        <div class="container-xxl">
            <div class="row justify-content-end">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Admins</h4>
                            <a href="<?= base_url('adminbase/create'); ?>" class="btn btn-primary">Add Admin</a>
                        </div>
                        <div class="card-body">
                            <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif; ?>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Profile Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admins as $admin) : ?>
                                    <tr>
                                        <td><?= $admin['id']; ?></td>
                                        <td><?= $admin['name']; ?></td>
                                        <td><?= $admin['username']; ?></td>
                                        <td><?= $admin['email']; ?></td>
                                        <td><img src="<?= base_url($admin['profil']); ?>" alt="Profile Image"
                                                width="50"></td>
                                        <td>
                                            <a href="<?= base_url('adminbase/edit/' . $admin['id']); ?>"
                                                class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('adminbase/delete/' . $admin['id']); ?>"
                                                class="btn btn-danger">Delete</a>
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
    </div>
    <?= $this->include('footer'); ?>
</body>

</html>