<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <div>
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="/NewsUK/includes/Signup.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRepeat" placeholder="Confirm Password">
                    <br/>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
        </div>
        <div->
            <h3></h3>
            <p></p>
            <form action="/NewsUK/includes/Login.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br/>
                <button type="submit" name="submit">LOG IN</button>
                <br/>
                <a href="">Forgot Password?</a>
                <br/>
            </form>
        </div->
    </section>
</body>
</html>