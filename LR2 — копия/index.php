<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="headers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header class="main-head">
      <div class="container-fluid">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row g-0" style="background-color: red;">
          <div class="col">
            <nav class="navbar" >
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </nav>
          </div>
          <div class="col">
            <nav class="navbar">
              <form class="d-flex" style="margin-left: 700px;">
                <button class="btn btn-sm btn-outline-secondary" type="button">Вход</button>
                <button class="btn btn-sm btn-outline-secondary" type="button">Регистрация</button>
              </form>
            </nav>
          </div>
        </div>
    </header>
    <main class="osnovnoe">
      <div class="container">
        <div class="row">
          <div class="col-7">
            <nav aria-label="breadcrumb">
              <div class="xleb ">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Волгоград</a></li>
                  <li class="breadcrumb-item"><a href="#">Образование</a></li>
                  <li class="breadcrumb-item"><a href="#">Школы и лицеи </a></li>
                  <li class="breadcrumb-item active" aria-current="page">Школа Царицынская № 1 на Советской улице, 27</li>
                </ol>
              </div> 
            </nav>
            <div class="d-flex align-items-center">
              <img src="iconhead1.jpg" alt="Иконка" class="headdd">
              <h4 class="school">Школа Царицынская № 1 на<br> Советской улице, 27</h4>
              <div class="vova">
                <button type="button" class="btn btn-danger">+7 844 252-90-80</button>
              </div>
            </div>
              <table class="table p-3">
                <tr>
                  <td>+7 844 252-90-80</td>
                  <td>Россия, г Волгоград, ул Советская, д 27<br> 1 этаж</td>
                  <td>Сейчас закрыто</td>
                </tr>
                <tr>
                  <td>16 отзывов</td>
                  <td>Район:Центральный</td>
                  <td>Часы работы</td>
                </tr>
              </table>
            <div class="d-flex align-items-center">
              <h4 class="school">Про «Школа Царицынская № 1 на Советской улице,<br> 27»</h4>
            </div>
            <button type="button" class="btn btn-light">Предложить изменения</button>
            <button type="button" class="btn btn-light">Сообщить о закрытии</button>
            <button type="button" class="btn btn-light">Вы владелец?</button>
          </div>
          <div class="col">
            <div class="karta"><img src="karta.png"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-7 pt-3">
            <p class="school1">Школа Царицынская № 1 на Советской улице, 27 предлагает свои услуги людям, которые заняты поиском частного учебного заведения для своего ребенка. Школьные годы — время, когда выстраивается личность человека. В этом учреждении ребенок, кроме прохождения программы на занятиях, сможет понять, человеком с каким характером он желает стать, в каком направлении идти дальше, в какой колледж или вуз идти учиться после окончания обучения здесь. Для большинства людей значимый фактор — учительский состав учреждения, и отыскать информацию о нем вы сможете на сайте организации.</p>
            <p class="school1">Найти организацию можно по адресу Россия, г Волгоград, ул Советская, д 27 (рабочие часы: с понедельника по пятницу - 08:00-18:00).</p>
            <p class="school1">Вас проконсультируют по номеру +7 844 252-90-80. Сайт: zarizinz.ru</p>
            <p class="school1">Ищите нас в соцсетях:<a href="https://vk.com/public99261786">Вконтакте</a> </p>
          <div class="col-7 pt-3 d-flex align-items-center">
            <img src="iconbook.png" alt="Иконка" class="headdd">
            <p class="school">Образование 4</p>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Дистанционное</a></li>
              <li class="breadcrumb-item"><a href="#">Частная школа</a></li>
              <li class="breadcrumb-item"><a href="#">Школа</a></li>
              <li class="breadcrumb-item active" aria-current="page">Школы</li>
            </ol>
          </nav>
          <div class="col-7 pt-3 d-flex align-items-center">
            <img src="iconbook.png" alt="Иконка" class="headdd">
            <p class="school">Форма собственности 1</p>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Частная</a></li>
            </ol>
          </nav>
          </div>
          <div class="col">
            <p class="school1">Ближайшие по району</p>
            <div class="bok">
              <div class="row">
                <div class="container">
                  <div class="d-flex align-items-center">
                    <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                  <p class="school">Средняя частная интегрированная школа</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="bok">
              <div class="row">
                <div class="container">
                  <div class="d-flex align-items-center">
                    <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                    <p class="school">Лицей №5 им. Ю.А. Гагарина в Центральном районе</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bok">
              <div class="row">
                <div class="container">
                  <div class="d-flex align-items-center">
                    <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                    <p class="school">Средняя школа №81</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bok">
              <div class="row">
                <div class="container">
                  <div class="d-flex align-items-center">
                    <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                    <p class="school">Вечерняя (сменная) общеобразовательная школа №5 на Волгодонской улице</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bok">
              <div class="row">
                <div class="container">
                  <div class="d-flex align-items-center">
                    <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                    <p class="school">Средняя школа №83</p>
                  </div>
                </div>
              </div>
            </div>
            <p class="school1">Ближайшие по улице</p>
            <div class="bok2">
              <div class="bok">
                <div class="row">
                  <div class="container">
                    <div class="d-flex align-items-center">
                      <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                    <p class="school">Средняя школа Родник</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bok">
                <div class="row">
                  <div class="container">
                    <div class="d-flex align-items-center">
                      <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                      <p class="school">Частная школа Царицынская №1 в Центральном районе</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bok">
                <div class="row">
                  <div class="container">
                    <div class="d-flex align-items-center">
                      <img src="iconhead1.jpg" alt="Иконка" class="headdd">
                      <p class="school">Средняя школа №19 в Центральном районе</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container-fluid text-center">
        <table>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="row">
      <div class="main py-5">
    <div class="container text-center">
    <h2>Фильтр</h2>
    <form method="get" action="">
    <label for="search">Выберите предмет:</label>
    <input type="text" name="search" id="search">
    
    <label for="hours">Часы курсов:</label>
    <select name="hours" id="hours">
        <option value="">Выберите</option>
        <option value="2">2</option>
        <option value="6">6</option>
        <option value="12">12</option>
        
        <!-- Добавьте остальные варианты часов курсов по необходимости -->
    </select>
    
    <button type="submit">Искать</button>
</form>

    <?php
    include 'display_data.php';
    ?>
</div>
    
</div>
      </div>
    </main>
    <footer class="podval-main">
      <div class="container" style="background-color: red;">
        <div class="row">
          <div class="col">
            <nav class="nav flex-column">
              <p class="orange"><strong>Бизнес</strong></p>
              <a class="nav-link" href="#">Yell Business</a>
              <a class="nav-link" href="#">Добавить компанию</a>
            </nav>
          </div>
          <div class="col">
            <table>
              <tr>
                <td class="orange"><strong>Компания</strong></td>
              </tr>
              <tr>
                <td>О компании</td>
                <td>Правила</td>
                <td>Наш Блог</td>
              </tr>
              <tr>
                <td>Помощь</td>
                <td>Контакты</td>
                <td>Работа в Yell</td>
              </tr>
            </table>
          </div>
          <div class="col">
            <div class="podval">
              <p class="orange"><strong >Категория</strong></p>
              <select>
                <option>Культура и искусство</option>
                <option>Бары и клубы</option>
                <option>Маркетинг и реклама</option>
                <option>Сад, огород, растения</option>
                <option>Спортивные базы</option>
              </select>
            </div>  
          </div>
          
          <div class="col">
            <div class="podval">
              <p class="orange"><strong>Ваш город</strong></p>
              <select>
                <option>Волгоград</option>
                <option>Москва</option>
                <option>Спб</option>
                <option>Новгород</option>
                <option>Краснодар</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
    
</html>