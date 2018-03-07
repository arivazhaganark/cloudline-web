<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>
        
        <div>
            Thanks for creating an account in Cloudline.
            Please follow the link below to verify your email address
            {{ url('admin/registerusers/verify' , $token) }}.<br/>

        </div>

    </body>
</html>