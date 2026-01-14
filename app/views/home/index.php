<h2><?= $title ?></h2>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user['email'] ?></li>
    <?php endforeach; ?>
</ul>