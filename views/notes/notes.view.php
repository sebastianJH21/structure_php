<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <?php require views('includes/head.php') ?>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require views('includes/nav.php') ?>
        <?php require views('includes/header.php') ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <ul>
                    <?php foreach ($notes as $note ){ $idNote = $note['id']?>
                        
                        <li>
                            <a href="<?= Url("/note?id=$idNote")?>" class="text-blue-500 hover:underline"><?= $note['body'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <p class="mt-6">
                    <a href="<?= Url("/notes/create")?>" class="text-blue-500 hover:underline">Create Note</a>
                </p>
            </div>
        </main>
    </div>
    <?php require views('/includes/footer.php') ?>
</body>

</html>