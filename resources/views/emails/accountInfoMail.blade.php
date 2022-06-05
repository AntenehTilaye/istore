<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: grid;
            place-content: center;
            justify-content: center;
        }
        
        .header {
            text-align: center;
            padding: 30px;
            border-bottom: 1px solid black;
            font-size: 2rem;
        }
        
        .body {
            padding: 30px;
            border-bottom: 1px solid black;
            font-size: 1.2rem;
            min-height: 300px;
        }
        
        .footer {
            text-align: center;
            padding: 30px;
            border-bottom: 1px solid black;
            font-size: 1.2rem;
        }
        
        .footer h2 {
            margin: 0;
            pad: 0px;
        }
        
        .line {
            display: block;
            width: 100%;
            margin-top: 20px;
        }
        
        .key {
            font-weight: bold;
        }
        
        .value {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        Istore
    </div>
    <div class="body">
        <div class="title">
            Hello, <span class="value">{{ $name }}</span>
        </div>
        <div class="detial">
            Here is your account detail for istore. you can follow the link provided and login into your account.
        </div>
        <div class="line">
            <span class="key">Email</span> : <span class="value">{{ $email }}</span>

        </div>
        <div class="line">
            <span class="key">Password</span> : <span class="value">{{ $password }}</span>
        </div>

        <div class="line">
            Link -- http://127.0.0.1:8000/admin/login
        </div>

    </div>
    <div class="footer">
        Thank you for using
        <h2>Istore</h2>
    </div>

</body>

</html>