<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <title>USD TO MXN</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .form-control{
            font-size: 1.2rem;
        }
    </style>

    <!-- San Pancho creará audiencia con visitantes para excluirlos de campañas -->
    <!-- Global site tag (gtag.js) - Google Ads: 875355666 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-875355666"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-875355666');
    </script>

</head>
<body>
    <div class="container">
        <h1>Convertidor de dólares a otras monedas</h1>
        <h4>De a cuerdo al tipo de cambio usado en Travelclick al momento de la consulta</h4>
        <br>
        <div class="row no-gutters align-items-center">
            <div class="col-12 col-md-7">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Seleccione un resort</label>
                            <select name="" id="select-resort" class="form-control">
                                <option value="">...</option>
                                @foreach ($resorts as $resort)
                                    <option value="{{$resort->ihotelier_id}}">{{ $resort->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group m-0">
                            <label for="">Ingresa la tarifa en dólares</label>
                            <input type="text" id="usd" class="form-control">
                            <div class="alert alert-primary p-2 m-0">
                                USD
                            </div>
                        </div>
                    </div>
                    <div class="col-2 text-center">
                        <label style="font-size: 35px;" >=</label>
                    </div>
                    <div class="col-5">
                        <div class="form-group m-0">
                            <label for=""> </label>
                            <input style="font-weight: bold" type="text" id="mxn" class="form-control" disabled>
                            <div class="alert alert-primary p-2 m-0">
                                MXN $<span id="mxn-span">0</span>
                                <img style="float: right; width: 40px" src="/img/banderas/mexico.png" alt="bandera de mexico">
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="form-group m-0">
                            <label for=""> </label>
                            <input style="font-weight: bold" type="text" id="eur" class="form-control" disabled>
                            <div class="alert alert-primary p-2 m-0">
                                EUR $<span id="eur-span">0</span>
                                <img style="float: right; width: 40px" src="/img/banderas/europa.png" alt="bandera de europa">
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>

                    <div class="col-5">
                        <div class="form-group m-0">
                            <label for=""> </label>
                            <input style="font-weight: bold" type="text" id="cad" class="form-control" disabled>
                            <div class="alert alert-primary p-2 m-0">
                                CAD $<span id="cad-span">0</span>
                                <img style="float: right; width: 40px" src="/img/banderas/canada.png" alt="bandera canada">
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <script src="{{mix('js/usd_to_mxn.js')}}" ></script>

</body>
</html>