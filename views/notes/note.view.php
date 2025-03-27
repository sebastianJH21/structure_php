<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <?php require views('/includes/head.php') ?>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require views('/includes/nav.php') ?>
        <?php require views('/includes/header.php') ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="mb-6">
                    <a href="<?= Url("/notes")?>" class="text-blue-500 hover:underline">Back to Notes</a>
                </p>
                <p> <?= $note[0]['body'] ?></p>
                <form class="mt-6" method="POST">
                    <input type="text" name="_method" value="DELETE" hidden>
                    <input type="text" name="id" value="<?= $note[0]['id'] ?>" hidden>
                    <p class="mb-3">
                        <a href="<?= Url("/note/edit?id={$note[0]['id']}") ?>" class="text-blue-500 hover:underline">Edit Note</a>
                    </p>
                    <button class="text-red-500 hover:underline">Delete Note</button>
                </form>
            </div>

        </main>
    </div>
    <?php require views('/includes/footer.php') ?>
</body>

</html>