<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller & View pada Laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="contrainer text-center my-5">
        <h1 class="mb-4">Belajar Controller & View pada Laravel</h1>
        <img src="<?php echo e(Vite::asset('resources/images/laravel.png')); ?>" alt="img-laravel">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a href="home"class="btn btn-dark">Home</a>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Users\aisya\Documents\pfmodul4\resources\views/welcome.blade.php ENDPATH**/ ?>