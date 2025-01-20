<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARTCDLING</title>
    <link rel="stylesheet" href="{{asset('assets/css/mainstyle.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/img/Logo.png')}}" type="image/x-icon">
    <style>
        body, html {
          height: 100%;
          margin: 0;
        }
        
        .bgimg {
          position: relative;
          height: 100%;
          background-image: url('{{asset('assets/img/coming-soon-2.jpg')}}');
          background-position: center;
          background-size: cover;
          color: white;
          font-size: 25px;
        }
        
        .bgimg::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: linear-gradient(to bottom, rgba(0, 0, 255, 0.295), rgba(0, 0, 255, 0.295));
          
          z-index: 1;
        }
        
        .topleft {
          position: absolute;
          top: 0;
          left: 16px;
          z-index: 100;
        }
        .middle {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
          z-index: 100;
        }
        
        hr {
          margin: auto;
          width: 40%;
        }
    </style>
</head>

<body>

<div class="bgimg">
  <div class="topleft">
    <img src="{{asset('assets/img/Logo.png')}}" alt="Logo" width="100">
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    {{-- <hr> --}}
    {{-- <p>35 days left</p> --}}
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/qrcode.js')}}"></script>
</body>

</html>
