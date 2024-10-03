<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
      <div class="container text-center p-5">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="row">
          <div class="col-lg-10 offset-1">
            <textarea id="textAreaUrls" cols="30" rows="20" class="form form-control">
              www.store32.com, www.shop90.biz.html, www.shop76.biz.html, www.shop28.info, www.shop11.biz, www.commerce5.com.html, www.commerce58.net.html, www.buy53.biz.html, www.shop17.net, www.shop26.net, www.store36.org, www.shop96.biz, www.shop66.biz.html, www.market58.net, www.store92.info, www.shop89.org, www.shop57.info, www.shop60.com.html, www.shop67.com, www.shop28.biz.html, www.shop78.biz.html, www.market92.info, www.market35.info, www.commerce6.org.html, www.shop84.org, www.buy34.org, www.commerce1.net, www.shop41.com, www.shop81.info, www.shop58.info.html, www.shop5.net.html, www.market40.biz, www.shop67.com, www.buy20.net.html, www.shop90.biz.html, www.market77.org, www.shop43.biz.html, www.shop6.biz, www.shop77.info.html, www.market57.info, www.shop82.org, www.shop71.org, www.market24.net.html, www.commerce90.net.html, www.shop98.info, www.shop78.com, www.shop86.com, www.shop24.net, www.shop26.net.html, www.shop75.org, www.shop25.com, www.shop18.info.html, www.shop68.com, www.market23.org.html, www.shop11.net, www.shop82.biz.html, www.commerce92.net.html, www.shop90.info.html, www.commerce36.info, www.shop97.info.html, www.store50.biz.html, www.commerce43.info.html, www.shop79.net, www.market44.com.html, www.shiop9.biz, www.shop8.net, www.shop72.net, www.commerce21.com.html, www.shop8.com.html, www.shop68.biz, www.store71.com.html, www.shop24.info, www.shop6.info, www.shop44.com.html, www.commerce51.com.html, www.shop22.biz, www.shop26.net, www.commerce20.com, www.store31.net.html, www.shiop63.biz, www.shop30.org, www.buy38.biz, www.market27.com, www.store85.biz, www.shop85.net, www.shop100.net.html, www.shop9.com, www.shiop82.info, www.market17.net.html, www.shop89.com, www.shop98.info.html, www.shop75.com.html, www.shop51.info, www.buy4.com.html, www.shop15.net.html, www.commerce100.org.html, www.shop10.com.html, www.store50.org.html, www.shop25.info, www.market99.org.html, www.market77.org, www.shop28.biz.html, www.shop66.biz.html, www.shop89.com, www.shop57.info, www.shop90.biz.html, www.commerce51.com.html, www.market44.com.html, www.shop71.org, www.shop25.com
            </textarea>
          </div>
          <div class="col-lg-4 offset-4 mt-3">
            <button class="btn btn-primary" onclick="processUrls()">Procesar Urls</button>
          </div>
          <div class="col-lg-10 offset-1 mt-3">
            <div class="mb-3 row">
              <label for="name" class="col-sm-2 col-form-label">Cantidad de Urls</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="countUrls" readonly>
              </div>
            </div>
            <textarea id="textAreaResult" cols="30" rows="20" class="form form-control"></textarea>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{ asset('js/urls.js') }}"></script>
    </body>
</html>