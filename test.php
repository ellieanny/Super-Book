<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
          @font-face {
            font-family: 'Poppins';
            src: url("Poppins/Poppins-Regular.ttf");
            font-weight: normal;
        }

        *{
            font-family: 'Poppins';
            padding: 0;
            margin: 0;
        }

        body{
            background-color: #010029;
        }
        .header{
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f3f5f9;
        }

        .container{
            margin-top: 1.5%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .box{
            height: 90%;
            width: 90%;
            background-color: #151428;
            border-radius: 8px;
            box-shadow:0 0 15px black;
            
        }

        .bookoftheday{
            background-color: red;
            height: 100px;
            width: 100px;
        }

    </style>
    <div class="header">
        <div class="logo">
            <!-- <h1>Dashboard</h1> -->
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="title">
                <h3>Dashboard</h3>
            </div>
        <div class="column1">

        </div>
        </div>
    </div>
    <div class="footer">

    </div>
</body>
</html>