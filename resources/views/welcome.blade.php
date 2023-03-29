<html>
    <head><title>Selamat Datang</title></head>
    <body>
        <div>
            <a href="/createuser">Create User</a>
            <table >
            <tr>
                <td>name</td>
                <td>password</td>
                <td>email</td>
                <td>action</td>
            </tr>
            <?php foreach($users as $user ){ ?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->password ?></td>
                    <td><?= $user->email ?></td>
                    <td><a href="/edituser/<?= $user->id ?>">Edit</a></td>
                </tr>
            <?php  }  ?>
            
            </table>
        </div>
    </body>
</html>