<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Nissan | Login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        * {
            font-family: 'Poppins', sans serif;
        }
        body {
            background-image: url('{{ asset('Images/Fondo.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }
        .container {
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 0 15px 0 15px;
        }
        span {
            color: #fff;
            font-size: small;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }
        header {
            color: #fff;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }
        .input-field {
            display: flex;
            flex-direction: column;
            position: relative;
            margin-bottom: 15px;
        }
        .input-field .input {
            height: 45px;
            width: 87%;
            border: none;
            outline: none;
            border-radius: 30px;
            color: #fff;
            padding: 0 0 0 42px;
            background: rgba(255, 255, 255, 0.1);
        }
        i {
            position: absolute;
            top: 50%;
            left: 17px;
            color: #fff;
            transform: translateY(-50%);
        }
        ::-webkit-input-placeholder {
            color: #fff;
        }
        .submit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100%;
            background: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: .3s;
        }
        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }
        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: small;
            color: #fff;
            margin-top: 10px;
           margin-left: 25%;
        }
        .left {
            display: flex;
        }
        label a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Login Seller</header>
            </div>

            <form action="{{route('seller.login')}}" method="POST">

                @csrf

                <div class="input-field">
                    <input type="text" name="name" class="input" placeholder="Username" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="email" name="email" class="input" placeholder="Email" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="input" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Entrar">
                </div>
            </form>


            {{-- <div class="bottom">
                <div class="right">
                    <label><a href="#">No tengo cuenta, Registrar</a></label>
                </div> --}}
            </div>
        </div>
    </div>
</body>
</html>
