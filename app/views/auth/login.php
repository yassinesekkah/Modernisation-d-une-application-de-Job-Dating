<h2>Login</h2>

<form method="post" action="/login">
    <input type="hidden" name="csrf_token"
           value="<?= \App\Core\Security::generateCsrfToken() ?>">

    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">

    <button type="submit">Login</button>
</form>