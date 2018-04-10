<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Proba interviu Nichita Ionut</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/bootstrap-3.3.7/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/css/bootstrap-3.3.7/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ballApp.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ballApp.css') }}">
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Proba interviu Nichita Ionut</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <a href="/" class="aLink"><button type="button" class="btn btn-primary" id="backToMain">Inapoi</button></a>
          <br>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
      <br><hr>
      <div class="row">
        <div class="col-sm-4">
          <label>Id</label>
        </div>
        <div class="col-sm-4"><label>Matrice generata</label></div>
        <div class="col-sm-4"><label>Matrice reordonata</label></div>
      </div>
      @foreach ($matrici as $matrice)
      <div class="row breakMe">
        <div class="col-sm-4">{{ $matrice->id}}</div>
        <div class="col-sm-4"> {{ $matrice->random_matrix }}</div>
        <div class="col-sm-4">{{ $matrice->reordered_matrix }}</div>
      </div>
      @endforeach
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <footer>
            <p>Nichita Ionut 2018</p>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>