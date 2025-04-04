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
    <title>View</title>
</head>

<body>
    <!-- header -->
    <div
        class="header-menu d-flex text-black justify-content-center p-2 m-2 border border-black border-2">
        <a class="p-2 fs-5 link-menu" href="#">Home</a>
        <hr />
        <a class="p-2 fs-5 link-menu" href="login.html">Đăng Xuất</a>
    </div>

    <!-- main -->
    <section class="container-fluid main mt-5">
        <div class="border border-black border-1">
            <h1 class="text-center p-3 m-3">
                Màn hình chi tiết
                <table></table>
            </h1>
            <form action="<?php echo e(route('user.viewUser')); ?>}">
                <?php echo csrf_field(); ?>
                <input name='id' value="<?php echo e($user->id); ?>" type="hidden">
                <div class="form-group p-4">
                    <label class="fs-6" for="name">Username:</label>
                    <input type="text" class="form-control" id="name" value="<?php echo e($user->name); ?>" />
                </div>
                <div class="form-group pb-1 ps-4 pe-4">
                    <label class="fs-6" for="Email">Email:</label>
                    <input type="text" class="form-control" id="email" value="<?php echo e($user->email); ?>" />
                </div>
                <div class="text-end mb-3 align-center me-4">
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <div
        class="container-fluid border border-black border-2 text-center mt-5 p-2">
        <span class="fw-medium">Lập trình backend-2 @3/24/2025</span>
    </div>
    <script src="./js/handleClick.js"></script>
</body>

</html><?php /**PATH K:\1-TDC\2-backend\week_7\laravel_crud_user\example-app\resources\views/crud_user/view.blade.php ENDPATH**/ ?>