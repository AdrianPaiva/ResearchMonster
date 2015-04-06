<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
            Thanks for creating an account with Research Monster.
            Please follow the link below to verify your email address<br>
            <br/>
            <a href="{{ URL::to('/register/verify/' . $confirmation_code) }}" >Verify Me!</a>
        </div>

    </body>
</html>