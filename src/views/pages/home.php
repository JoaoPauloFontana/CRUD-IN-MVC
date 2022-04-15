<?php $render('header'); ?>

<a href="<?=$base;?>/new">
    <img width="30" src="<?=$base;?>/assets/images/add.png" alt="">
</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['name'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/user/<?=$usuario['id'];?>/edit">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="">
                </a>
                <a href="<?=$base;?>/user/<?=$usuario['id'];?>/delete" onclick="return confirm('Tem certeza que deseja excluir este usuário>')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>