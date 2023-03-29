<html>
    <head>
        <title>
            create user
        </title>
    </head>
    <body>
        <div>
            <form action="/saveuser" method="post">
                @csrf
                <label>nama</label>
                <input type="text" name="name" />
                <label>password</label>
                <input type="text" name="password" />
                <label>email</label>
                <input type="text" name="email" />
                <input type="submit" value="submit" />
            </form>
        </div>
    </body>
</html>