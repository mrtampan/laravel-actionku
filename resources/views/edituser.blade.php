<html>
    <head>
        <title>
            edit user
        </title>
    </head>
    <body>
        <div>
            <form action="/updateuser" method="post">
                @csrf
                <input type="text" hidden name="id" value="<?= request()->userid; ?>" />
                <label>nama</label>
                <input type="text" name="name" value="<?= $user->name; ?>" />
                <label>password</label>
                <input type="text" name="password"/>
                <label>email</label>
                <input type="text" name="email" value="<?= $user->email; ?>" />
                <input type="submit" value="submit" />
            </form>
        </div>
    </body>
</html>