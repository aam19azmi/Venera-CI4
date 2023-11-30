<!-- admin_create.php -->

<?= $this->include('header'); ?>

<body>
    <?= $this->include('sidebar'); ?>

    <!-- Main content for admin creation form -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Create Admin</h2>
                    <form action="<?= base_url('adminbase/store'); ?>" method="post" enctype="multipart/form-data">
                        <!-- Your form fields go here -->
                        <label for="name">Name:</label>
                        <input type="text" name="name" required>

                        <label for="username">Username:</label>
                        <input type="text" name="username" required>

                        <label for="email">Email:</label>
                        <input type="email" name="email" required>

                        <label for="password">Password:</label>
                        <input type="password" name="password" required>

                        <label for="profil">Profile Image (jpg, png):</label>
                        <input type="file" name="profil" required>

                        <button type="submit">Create Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('footer'); ?>
</body>

</html>