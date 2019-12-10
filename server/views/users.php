<h1>Users Page</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($users as $user) { ?>
        <tr>
            <th><?= $user['id'] ?></th>
            <th><?= $user['username'] ?></th>
            <th><?= $user['email'] ?></th>
            <th><?= $user['phone'] ?></th>
        </tr>
    <?php } ?>

</table>