<?php require_once './add_user.php'; ?>
<table class="users" id="users">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Company</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td data-label="Name"><?php echo $user['name'] ?></td>
            <td scope="row" data-label="Username"><?php echo $user['username'] ?></td>
            <td scope="row" data-label="Email"><?php echo $user['email'] ?></td>
            <td scope="row" data-label="Address"><?php echo $user['address']['street'] . ', ' . $user['address']['zipcode'] . ', ' . $user['address']['city'] ?></td>
            <td scope="row" data-label="Phone"><?php echo $user['phone'] ?></td>
            <td scope="row" data-label="Company"><?php echo $user['company']['name'] ?></td>
            <td>
            <form method="POST" action="remove_user.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="deleteButton">Remove</button>
            </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>