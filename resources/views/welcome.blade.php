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
    <script type="text/javascript" src="{{ asset('/js/logicModule.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/uiModule.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ballApp.css') }}">
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Proba interviu Nichita Ionut</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3>Enuntul problemei</h3>
          <p>Sa se dezvolte o aplicatie care rezolva urmatoarea problema:<br><br>
            1.Se dau bile de n culori (pentru a nu complica prea mult n este limitat la 10)
            In total sunt n x n bile (n la patrat).
            Distributia bilelor pe culori este random.
            Exemplu:
            Pentru n=3 culori (rosu,galben,albastru) avem 9 bile si o distributie ar putea fi 1 bila rosie, 3 bile galbene, 5 bile albastre.<br>
            2.Sa se decida daca este posibil si in caz afirmativ sa se prezinte algoritmul general prin care bilele sunt repartizate in n grupe de cate n bile astfel incat in fiecare grupa sa fie bile de maxim 2 culori diferite (sunt permise si grupe cu o singura culoare) indiferent de distributia initiala.
            Exemplu de grupare:
            Pentru n=3 culori (rosu,galben,albastru) avem 9 bile  si distributia 1 bila rosie, 3 bile galbene, 5 bile albastre o varianta de grupare in 3 grupe de cate 3 bile astfel incat in orice grupa sa fie maxim 2 culori ar fi :
            - prima grupa:   1 bila galbena si 2 albastre
            - a doua grupa: 1 bila rosie si 2 galbene
            - a treia grupa : 3 bile albastre
            Nota: e posibil ca un algoritm general care sa functioneze pe orice distributie si orice valoare n sa aleaga alta grupare in cazul de mai sus.<br>
            3. Aplicatia are ca input numarul de culori, un array cu numarul de bile din fiecare culoare si va trebui sa preia datele de input si sa ilustreze cum algoritmul gasit la punctul 2 grupeaza bilele in n grupe de n bile fiecare grupa continand maxim 2 culori diferite.<br>
            4. Bonus points pentru :
            a) existenta unui backend bazat pe Laravel care serveste pagina de web (daca aplicatia este o pagina de web) si salveaza intr-o baza de date gruparea rezultata a bilelor pentru un set de date de input
            b) folosire jQuery/Bootstrap/VueJS in partea de frontend web
            c) codul sursa rezultat este incarcat intr-un repository pe Git (in README sa fie descris algoritmul)
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <label>Numar culori (2-10): </label>
          <input id="ballNo" type="number"  min="2" max="10" name="ballNo" value="5">
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <button type="button" class="btn btn-primary" id="generateMatrix">Genereaza matrice aleatorie</button>
          <br>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
      <div hidden class="showMe"><h3>Matrice generata aleator:</h3></div>
      <div id="insertMatrix"></div>
      <br>
      <div hidden class="showMe"><h3>Matrice reordonata:</h3></div>
      <div id="insertResultMatrix"></div>
      <div hidden class="row showMe">
        <div class="col-sm-3">
          <br>
          <form action="/lista" method="post">
            @csrf
            <input hidden type="text" name="random_matrix" id="random_matrix" value="">
            <input hidden type="text" name="reordered_matrix" id="reordered_matrix" value="">
            <input type="submit" class="btn btn-primary" id="saveMatrix" value="Salveaza in DB">
          </form>
          <br>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
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