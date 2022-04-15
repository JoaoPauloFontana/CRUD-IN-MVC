<?php $render('header'); ?>

<h2>Add User</h2>

<form action="<?=$base;?>/new" method="POST">
    <label>
        Nome: <br>
        <input type="text" name="name">
    </label><br><br>

    <label>
        Email: <br>
        <input type="email" name="email">
    </label><br><br>

    <input type="submit" value="Add">
</form>

<?php $render('footer'); ?>