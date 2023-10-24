<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo e($title); ?> | MyKos</title>
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
        />
    </head>
    <body id="index">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <a class="navbar-brand fw-semibold fs-3 first-color" href="<?php echo e(route('home')); ?>">
                    <img src="../img/logo-hotelku.png" alt="logo" height="55" class="d-inline-block" />
                    MyKos
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fs-5" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Home") ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "About Us") ? 'active' : ''); ?>" href="<?php echo e(route('about-us')); ?>">About Us</a>
                        </li>

                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo e(($title == "Login") ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Register") ? 'active' : ''); ?>" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->role_id == '1'): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Dashboard") ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Catalog") ? 'active' : ''); ?>" href="<?php echo e(route('catalog')); ?>">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="<?php echo e(route('logout')); ?>">Logout</a>
                        </li>
                        <?php endif; ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a> -->
                        <!-- </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Content Wrapper -->
        <?php echo $__env->yieldContent('container'); ?>
        
        <!-- Start of Footer -->
        <footer class="text-center text-white mt-5" style="background-color: var(--first-color)">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://rafialiefian03@gmail.com" role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/rafifiaan" role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/rafifianpr/" role="button"
                        ><i class="fab fa-linkedin-in"></i
                    ></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/rafifiaan" role="button"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #09308b">© 2023 MyKos Team. All Rights Reserved</div>
            <!-- Copyright -->
        </footer>
        <!-- End of Footer -->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"
        ></script>
        <script src="../js/script.js"></script>
        <script src="https://kit.fontawesome.com/1aeb993afb.js" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\RAFI ALIEFIAN\OneDrive\Documents\SEM 5\PWEB\Midterm WP\resources\views/layouts/main.blade.php ENDPATH**/ ?>