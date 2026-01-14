<?php use app\Core\View; ?>

<h2><?= $title ?></h2>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= View::e($user['email']) ?></li>
    <?php endforeach; ?>
</ul>