<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            font-size: 0.875rem; /* 14px */
        }
        .form-control {
            font-size: 0.875rem; /* 14px */
        }
        .btn {
            font-size: 0.875rem; /* 14px */
        }
        .small-text {
            font-size: 0.75rem; /* 12px */
        }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card bg-dark text-white shadow-lg p-3 rounded">
                <div class="card-body p-4">
                    <h2 class="fw-bold mb-4 text-center">Login</h2>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <input type="text" id="typeUsernameX" name="username" class="form-control form-control-lg" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder="Password" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="small-text mb-0"><a href="#!" class="text-white-50">Forgot password?</a></p>
                        <p class="mb-0 mt-3 small-text">Don't have an account? <a href="#!" class="text-white fw-bold">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
