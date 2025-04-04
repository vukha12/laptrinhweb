<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Update</title>
</head>

<body>
    <!-- header -->
    <div
        class="header-menu d-flex text-black justify-content-center p-2 m-2 border border-black border-2">
        <a class="p-2 fs-5 link-menu" href="#">Home</a>
        <hr />
        <a class="p-2 fs-5 link-menu" href="login.html">Đăng Nhập</a>
        <hr />
        <a class="p-2 fs-5 link-menu" href="update.html">Đăng Ký</a>
    </div>

    <!-- main -->
    <section class="container-fluid main mt-5">
        <div class="border border-black border-1 p-4">
            <h1 class="text-center p-3 m-3">Màn hình cập nhật</h1>

            <form action="<?php echo e(route('user.postUpdateUser')); ?>" method="POST">

                <?php echo csrf_field(); ?>
                <input name="id" type="hidden" value="<?php echo e($user->id); ?>">

                <div class="form-group pb-4 ps-4 pe-4">
                    <label class="fs-6" for="pwd">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>" require autofocus />
                </div>

                <div class="form-group pb-4 ps-4 pe-4">
                    <label class="fs-6" for="pwd">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>" require autofocus />
                </div>

                <div class="form-group pb-4 ps-4 pe-4">
                    <label class="fs-6" for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" require />
                </div>

                <div
                    class="text-center mt-3 mb-3 justify-content-center align-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <div
        class="container-fluid border border-secondary border-2 text-center mt-5 p-2">
        <span class="fw-medium">Lập trình backend-2 @3/24/2025</span>
    </div>
    <script src="./js/handleClick.js"></script>
</body>

</html><?php /**PATH K:\1-TDC\2-backend\week_7\laravel_crud_user\example-app\resources\views/crud_user/update.blade.php ENDPATH**/ ?>