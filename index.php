<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mycss.css">  
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="https://masterclean102.ru/"/>
    <title>Химчистка мебели Уфа – Цена — от 900 руб!</title>
    <meta name="Description" content="🚗Выездная химчистка в Уфе! 💵Диваны от 1100руб, матрасы от 500руб, ковровые покрытия от 130руб! 💸Доступные цены! 🔥АКЦИИ! 📞+7(987)133-21-26 📱ЗВОНИТЕ!">
    <meta name="Keywords" content="химчистка диванов, химчистка ковров, Уфа, химчистка мебели, выездная химчистка, химчистка матраса">
    <meta name="robots" content="all" />
    <meta name="yandex-verification" content="b3e143f00161fa2d" />
    <!--<meta name="robots" content="noyaca"/>-->
    <meta name="robots" content="nosnippet">
  </head>
  <body>
    <header class="navbar navbar-expand-lg navbar-light bg-light text-center">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.png" class="d-inline-block align-top logo" alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#aboutUs">О нас</a>
          <a class="nav-item nav-link active" href="#prices">Цены</a>
          <a class="nav-item nav-link active " href="#contacts">Контакты</a>
        </div>
      <ul class="navbar-nav ml-md-auto">
          <li class="nav-item">
            <a class="nav-item nav-link">+7 (987)133-21-26</a>
          </li>
          <li class="nav-item">   
            <a class="nav-item nav-link" href="https://www.instagram.com/masterclean102/">
              <img src="./img/inst48.png" width="30" height="30">
            </a>
          </li>
        </ul>
      </div>
    </header>
    <div class="container-fluid" ng-app="myApp" ng-controller="mainCtrl">
      <div class="row" >
        <div class="col-12 first-div text-center">
          <h1 class="display-4">Химчистка мебели в Уфе</h1>
          <h4 class="lead">с выездом на дом</h4>
          <h4 class="lead">Удаляем пятна и выводим неприятный</h4><h4 class="lead">запах быстро и качественно</h4>
          <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal">Заказать звонок </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header-mine">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body-mine">
                  <h4 >Заказать звонок</h4>
                  <p><small><em>Введите свой номер телефона,<br> и мы перезвоним Вам</em></small></p>
                  <form action="send.php" method="post">
                    <div class="form-group text-left"> 
                      <label>Имя</label>
                      <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group text-left"> 
                      <label>Телефон</label>
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="8(___) -___-__-__" required>
                    </div>
                    <input class="btn btn-mine" type="submit" value="Отправить">
                  </form>
                </div>  
              </div>
            </div>
          </div>
           <div class="row-timer">
            <div class="col-sm-12 col-md-5">
              <h4 class="h4-timer"><small class="text-muted">До окончания акции:</small></h4>
              <div id="TimerDisplay" class="clock" onload="showTime()"></div>
            </div>
            <div class="col-sm-12 col-md-7">
              <h3>{{sale.name}} </h3>
              <h4><font color="#FF0000">{{sale.cost-100}} руб  </font><small class="text-muted"><s> {{sale.cost}} руб</s></small></h4>
            </div>
          </div>  
        </div>
        <div class="col-12 padding" id="aboutUs">
          <p class="lead text-center">Компания MasterClean102 предлагает профессиональные услуги химчистки диванов,<br>ковров и другой мягкой мебели с выездом к заказчику на дом или в офис.<br>Мы работаем по всей Уфе.
          </p>
        </div>
        <div class="col-12 padding"> 
          <h2 class="text-center">Почему клиенты выбирают нас?</h2>
          <div class="row padding">
            <div class="col-6 col-lg-3">
              <div class="card-mine">
                <div class="text-center">
                  <img src="./img/why-3.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Эффективно</h5>
                  <p class="card-text">С помощью профессиональных моющих средств и техники мы очистим Вашу мебель от пятен любого происхождения без следа!</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="card-mine">
                <div class="text-center">
                  <img src="./img/why-1.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Удобно</h5>
                  <p class="card-text">Вам не придется прикладывать каких-либо усилий для чистки Вашей мебели, наши мастера все сделают за Вас!</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="card-mine">
                <div class="text-center">
                  <img src="./img/why-2.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Безопасно</h5>
                  <p class="card-text">В своей работе мы используем только гипоаллергенные составы, которые не нанесут вреда ни детям, ни домашним животным.</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="card-mine" >
                <div class="text-center">
                  <img src="./img/why-4.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Прозрачно</h5>
                  <p class="card-text">Стоимость услуг всегда прозрачна, без надбавок за ”уникальные пятна”</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 padding" id="problems" ng-if="model.isNotPhone">
          <h2 class="text-center">Знакомы ли Вам такие проблемы?</h2>
          <div class="row padding">
            <div class="col-4">
              <div class="card-mine">
                <div class="text-center">
                  <img src="./img/clock.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <p class="card-text">Хочется свежести и чистоты в доме, но чистка мебели занимает слишком много Вашего времени?</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card-mine">
                <div class="text-center">
                  <img src="./img/nose.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <p class="card-text">Вы удалили пятна при помощи ручной чистки, но остался неприятный запах?</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card-mine">
                <div class="text-center">
                  <img src="./img/insect.png" height="100px" width="100px" alt="...">
                </div>
                <div class="card-body-mine text-center">
                  <p class="card-text">Микробы и пылевые клещи не исчезают даже после самой тщательной ручной чистки?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 padding" id="prices">
          <h2 class="text-center">Цены на химчистку мягкой мебели</h2>
          <p class="lead text-center">Наши цены не зависят от степени загрязнения.<br>Выезд мастера по Уфе – бесплатный.<br>Вы платите только за его работу!
          </p>
          <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
              <a class="nav-link " ng-class="model.isPic?'active':''"  ng-click='ShowPic()'>Основные</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" ng-class="!model.isPic?'active':''" ng-click='ShowTable()'>Полный список</a>
            </li>
          </ul>
          <div class="row" ng-if='model.isPic'>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/two_seat.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Диван</h5>
                  <p class="card-text">2 посадочных места (до 150 см)</p>
                  <h5 class="card-text">1100 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/three_seat.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Диван</h5>
                  <p class="card-text">3 посадочных места (до 200 см)</p>
                  <h5 class="card-text">1400 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/three_seat_corner.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Угловой диван</h5>
                  <p class="card-text">2 посадочных места + угол (до 220 см)</p>
                  <h5 class="card-text">1600 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/four_seat_corner.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Угловой диван</h5>
                  <p class="card-text">3 посадочных места + угол (до 270 см)</p>
                  <h5 class="card-text">1900 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/cushion.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Диванная подушка</h5>
                  <h5 class="card-text">300 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/ottoman.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Пуфик</h5>
                  <h5 class="card-text">300 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/armchair.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Кресло</h5>
                  <h5 class="card-text">500 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/chair.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Стул</h5>
                  <h5 class="card-text">200 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/office_chair.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Офисное кресло</h5>
                  <h5 class="card-text">250 руб</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/single_mattress.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Односпальный матрас</h5> 
                  <table style="width: 100%">
                    <tr>
                      <td colspan="2">ширина 80-95 см</td>
                    </tr>
                    <tr>
                      <td>с одной стороны</td>
                      <td>c двух сторон</td>
                    </tr>
                    <tr>
                      <td><h5 class="card-text">500 руб</h5></td>
                      <td><h5 class="card-text">900 руб</h5></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/one_half_mattress.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Полутороспальный матрас</h5> 
                  <table style="width: 100%">
                    <tr>
                      <td colspan="2">ширина 100-135 см</td>
                    </tr>
                    <tr>
                      <td>с одной стороны</td>
                      <td>c двух сторон</td>
                    </tr>
                    <tr>
                      <td><h5 class="card-text">700 руб</h5></td>
                      <td><h5 class="card-text">1300 руб</h5></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6" >
              <div class="card-mine">
                <img src="./img/double_mattress.png" class="card-img-top" alt="...">
                <div class="card-body-mine text-center">
                  <h5 class="card-title">Двуспальный матрас</h5>
                  <table style="width: 100%">
                    <tr>
                      <td colspan="2">ширина 140-200 см</td>
                    </tr>
                    <tr>
                      <td>с одной стороны</td>
                      <td>c двух сторон</td>
                    </tr>
                    <tr>
                      <td><h5 class="card-text">850 руб</h5></td>
                      <td><h5 class="card-text">1600 руб</h5></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12" >
              <div class="card-mine mb-3">
                <div class="row no-gutters">
                  <div class="col-sm-4 img-carpet">
                    <img src="./img/carper2.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body-mine">
                      <h5 class="card-title">Ковролин</h5>
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>до 30 м2</td>
                            <td><h5 class="card-text">130 руб</h5></td>
                          </tr>
                          <tr>
                            <td>От 31 м2 до 50 м2</td>
                            <td><h5 class="card-text">120 руб</h5></td>
                          </tr>
                          <tr>
                            <td>От 51 м2 до 100 м2</td>
                            <td><h5 class="card-text">90 руб</h5></td>
                          </tr>
                          <tr>
                            <td>От 100 м2 до 200 м2</td>
                            <td><h5 class="card-text">80 руб</h5></td>
                          </tr>
                          <tr>
                            <td>От 200 м2</td>
                            <td><h5 class="card-text">Договорная</h5></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12" >
              <div class="card-mine mb-3 ">
                <div class="row no-gutters">
                  <div class="col-sm-4 img-rug">
                    <img src="./img/rug3.png" class="card-img-top " alt="...">
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body-mine">
                      <h5 class="card-title">Ковeр</h5>
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td>Синтетика</td>
                            <td><h5 class="card-text">140 руб</h5></td>
                          </tr>
                          <tr>
                            <td>Синтетика (длинный ворс)</td>
                            <td><h5 class="card-text">150 руб</h5></td>
                          </tr>
                          <tr>
                            <td>Синтетика + шерсть</td>
                            <td><h5 class="card-text">170 руб</h5></td>
                          </tr>
                          <tr>
                            <td>Шерсть</td>
                            <td><h5 class="card-text">200 руб</h5></td>
                          </tr>
                          <tr>
                            <td>Шерсть (длинный ворс)</td>
                            <td><h5 class="card-text">210 руб</h5></td>
                          </tr>
                          <tr>
                            <td>Вискоза, шелк</td>
                            <td><h5 class="card-text">от 400 руб</h5></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" ng-if='!model.isPic'>
            <div class="col-lg-6 col-md-12" >
              <table class="table table-hover" style="margin-left: 20px; margin-right: 20px;">
                <thead>
                  <tr>
                    <th>Вид изделия</th>
                    <th>Примечание</th>
                    <th>Цена</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>2-х местный диван</th>
                    <td>(800 см - 1490 см)</td>
                    <td>1100 руб</td>
                  </tr>
                  <tr>
                    <th>3-х местный диван</th>
                    <td>(1500 см - 2190 см)</td>
                    <td>1400 руб</td>
                  </tr>
                  <tr>
                    <th>3-х местный диван</th>
                    <td>угловой</td>
                    <td>1600 руб</td>
                  </tr>
                  <tr>
                    <th>4-х местный диван</th>
                    <td>угловой</td>
                    <td>1900 руб</td>
                  </tr>
                  <tr>
                    <th colspan="2">П-образный диван</th>
                    <td>2000 руб</td>
                  </tr>
                  <tr>
                    <th colspan="2">Дополнительное посадочное место</th>
                    <td>400 руб</td>
                  </tr>
                  <tr>
                    <th>Диванная подушка</th>
                    <td>(300 мм - 700 мм)</td>
                    <td>300 руб</td>
                  </tr>
                  <tr>
                    <th colspan="2">Химчистка кресла</th>
                    <td>500 руб</td>
                  </tr>
                  <tr>
                    <th colspan="2">Химчистка офисного кресла</th>
                    <td>200 руб</td>
                  </tr>
                  <tr>
                    <th colspan="2">Химчистка пуфика</th>
                    <td>300 руб</td>
                  </tr>
                  <tr>
                    <th rowspan="2">Химчистка стула</th>
                    <td>Без спинки</td>
                    <td>100 руб</td>
                  </tr>
                  <tr>
                    <td>Со спинкой</td>
                    <td>200 руб</td>
                  </tr>
                  <tr>
                    <th rowspan="5">Ковролин</th>
                    <td>до 30 м2</td>
                    <td>130 руб</td>
                  </tr>
                  <tr>
                    <td>От 31 м2 до 50 м2</td>
                    <td>120 руб</td>
                  </tr>
                  <tr>
                    <td>От 51 м2 до 100 м2</td>
                    <td>90 руб</td>
                  </tr>
                  <tr>
                    <td>От 100 м2 до 200 м2</td>
                    <td>80 руб</td>
                  </tr>
                  <tr>
                    <td>От 200 м2</td>
                    <td>Договорная</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-6 col-md-12" >
              <table class="table table-hover" style="margin-left: 10px; margin-right: 30px;">
                <thead>
                  <tr>
                    <th>Матрас</th>
                    <th>Примечание</th>
                    <th>Цена</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th rowspan="2">Односпальный (80-95 см)</th>
                    <td>С одной стороны</td>
                    <td>500 руб</td>
                  </tr>
                  <tr>
                    <td>С двух сторон</td>
                    <td>900 руб</td>
                  </tr>
                  <tr>
                    <th rowspan="2">Полутораспальный (100-135 см)</th>
                    <td>С одной стороны</td>
                    <td>700 руб</td>
                  </tr>
                  <tr>
                    <td>С двух сторон</td>
                    <td>1300 руб</td>
                  </tr>
                  <tr>
                    <th rowspan="2">Двуспальный (140-200 см)</th>
                    <td>С одной стороны</td>
                    <td>850 руб</td>
                  </tr>
                  <tr>
                    <td>С двух сторон</td>
                    <td>1600 руб</td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th>Вид изделия</th>
                    <th>Примечание</th>
                    <th>Цена (1м2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th rowspan="6">Ковры</th>
                    <td>Синтетика</td>
                    <td>140 руб</td>
                  </tr>
                  <tr>
                    <td>Синтетика (длинный ворс)</td>
                    <td>150 руб</td>
                  </tr>
                  <tr>
                    <td>Синтетика + шерсть</td>
                    <td>170 руб</td>
                  </tr>
                  <tr>
                    <td>Шерсть</td>
                    <td>200 руб</td>
                  </tr>
                  <tr>
                    <td>Шерсть (длинный ворс)</td>
                    <td>210 руб</td>
                  </tr>
                  <tr>
                    <td>Вискоза, шелк</td>
                    <td>от 400 руб</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
        <div class="col-12 accordion padding" id="AnswerOnQuestions">
          <h2 class="text-center">Ответы на вопросы</h2>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Как производится химчистка мебели?
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
              <div class="card-body">
                Сначала мы наносим моющий раствор профессиональным пылесосом. Затем избавляемся от пятен с помощью специальных средств. После этого пылесосом мы собираем моющий раствор вместе с грязью. Далее мы промываем всю поверхность чистой водой.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Все ли загрязнения и запахи можно удалить?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
              <div class="card-body">
                К сожалению, нет. Нельзя удалить пятна, которые уже нарушили структуру волокна. Это происходит, если клиент с помощью каких-либо моющих средств уже пробовал убрать пятно. Поэтому чистка мебели должна быть очень бережной, чтобы не повредить ткань еще сильнее.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Сколько сохнет поверхность после чистки?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
              <div class="card-body">
                После чистки поверхность сохнет от 6 до 12 часов. Остаточная влага - 30 %.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Не возникнет ли аллергия на состав? Безопасен ли он?
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
              <div class="card-body">
                Чистящие средства, которые мы используем в своей работе, содержат компоненты, которые оказывают минимальное раздражающее действие. То есть, если у человека не было прямого контакта с самим чистящим средством, никакой аллергической реакции не возникнет. После самой чистки мы полностью удаляем остатки моющего средства с поверхности.
              </div>
            </div>
          </div>
        </div>
        <div class="col-12" id="contacts">
          <div class="row row-contacts" >
            <div class="col-md-12 col-lg-6 contacts">
              <h2 class="h2-contact">Контакты</h2>
              <p><b>Компания: </b>MasterClean102</p>
              <p><b>Адрес: </b>г. Уфа, ул. Загира Исмагилова, д. 17</p>
              <p><b>Телефон: </b>+7 (987) 133-21-26</p>
              <p><b>E-mail: </b>online@masterclean102.ru</p>
              <a href="https://www.instagram.com/masterclean102/">
                <img src="./img/inst48.png" width="30" height="30">
              </a>
            </div>
            <div class="ymap-container col-md-12 col-lg-6">
              <div class="loader loader-default"></div>
              <div id="map"></div>
            </div>
          </div>
        </div>
        <footer class="col-12 footer" >
          <div class="row">
            <div class="col-md-12 col-lg-3 text-center">
              <img src="./img/logo.png" class="d-inline-block align-top logo" alt="" loading="lazy">
            </div>
            <div class="col-3 col-lg-2">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link footer-link" href="#aboutUs">О нас</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-link" href="#prices">Цены</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-link" href="#contacts">Контакты</a>
                </li>
              </ul>
            </div>
            <div class="col-7 col-lg-6" style="padding-top: 10px;">
              <p><i class="fa fa-whatsapp" aria-hidden="true"></i> +7 (987) 133-21-26</p>
              <p><i class="fa fa-map-marker" aria-hidden="true"></i> Адрес: г. Уфа, ул. Загира Исмагилова, д. 17</p>
              <p><i class="fa fa-envelope-o" aria-hidden="true"></i> online@masterclean102.ru</p>
              <a href="https://www.instagram.com/masterclean102/" class="footer-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="col-2 col-lg-1">
              <a class="footer-link" href="#">Наверх <i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.min.js" integrity="sha512-jiG+LwJB0bmXdn4byKzWH6whPpnLy1pnGA/p3VCXFLk4IJ/Ftfcb22katPTapt35Q6kwrlnRheK6UPOIdJhYTA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="mainCtrl.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(65393527, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
     });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/65393527" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  </body>
  
</html>