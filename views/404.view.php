<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <?php $heading = "Oops!"; ?>
    <?php require 'includes/head.php' ?>
</head>

<body class="h-full">
    <div class="min-h-full">
    <?php require 'includes/nav.php' ?>
    <?php require 'includes/header.php' ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                Not found this page
                <p>
                    <a href="<?php Url('/')?>" class="text-blue underline mt-4">Go to home</a>
                </p>
            </div>
        </main>
    </div>
    <?php require 'includes/footer.php' ?>
</body>

</html>