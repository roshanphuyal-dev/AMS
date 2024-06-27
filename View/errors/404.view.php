<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 !!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead">
                The page you’re looking for doesn’t exist.
            </p>
            <?php
            // Check if HTTP_REFERER is set and not empty
                if (!empty($_SERVER['HTTP_REFERER'])) {
                    $previousUrl = $_SERVER['HTTP_REFERER'];
                    echo "<a href='$previousUrl' class='btn btn-primary'>Go Back</a>";
                } else {
                    echo "<a href='/' class='btn btn-primary'>Go Back</a>";
                }
            ?>
            
        </div>
    </div>
</body>

</html>