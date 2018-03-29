<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
       @if($status == 1)
       <!--<h2>Cloudline Partner Registration Approved</h2>-->
        <div>
            Dear {{$name}}, <br />
                Congratulations you have been registered as a Partner with Cloudline.
        </div>
       @elseif($status == 2)
       <!--<h2>Cloudline Partner Registration Declined</h2>-->
       <div>
            Dear {{$name}}, <br />
                Your Partner Registration has not been Approved.
        </div>
       @endif
    </body>
</html>