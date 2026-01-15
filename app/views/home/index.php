<?php use app\Core\View; ?>

<h2><?= $title ?></h2>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= View::e($user['email']) ?></li>
    <?php endforeach; ?>

    <?php if(!empty($userFound)): ?>

        <ul>
            <li><?= View::e($userFound['email']) ?></li>
        </ul>
    <?php else:?>
        <p>Aucun utilisateur trouve</p>
    <?php endif; ?>

</ul>


<form method="post" action="/users/store">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Create user</button>
</form>
