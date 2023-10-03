<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DARA</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-icons-1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="dara-touch-icon" sizes="120x120" href="../assets/img/daraicon.png">
    <link rel="icon" type="image/png" href="../assets/img/daraicon.png">
</head>

<body>
    <div class="global-container"><br>
        <div class="card login-form"">
        <div class=" icon-text">
            <img src="../assets/img/daraicon.png" class="iconjudul" alt="">
            <div class="titledesc">
                <h2 class="title">
                    DARA (DARAH RELAWAN)
                </h2>
                <p class="slogan">
                    Setetes Darah Akan Sangat Berarti
                </p>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr class="line">

        @if (session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('loginaksi') }}" method="post">
            @csrf

            <p style="text-align:center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                Kode OTP akan segera dikirimkan ke alamat email yang terdaftar di akun Anda. Silakan cek kotak masuk email Anda dalam beberapa saat.
            </p>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group button-container">
                        <button type="submit" class="btn"><i style="font-size: 15px;" class="bi bi-arrow-right-square"></i></button>
                    </div>
                </div>
            </div>

            <hr style="margin-top:0;margin-bottom:0">

            <div class="text-center logopmi">
                <img src="../assets/img/logopmi.png" alt="">
            </div>
        </form>
    </div>
</body>

</html>