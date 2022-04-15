<?php $render('header'); ?>

<h2>Edit User</h2>

<form action="<?=$base;?>/user/<?=$usuario['id'];?>/edit" method="POST">
    <label>
        Nome: <br>
        <input type="text" name="name" value="<?=$usuario['name'];?>">
    </label><br><br>

    <label>
        Email: <br>
        <input type="email" name="email" value="<?=$usuario['email'];?>">
    </label><br><br>

    <input type="submit" value="Edit">
</form>

<?php $render('footer'); ?>