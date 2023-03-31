<?php 
require('php/db.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Кафе Таверна</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/main_bg.jpg" alt="">
    </div>
    <?php require("header.php");?>
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Таверна
                    </h1>
                    <p>
                      У нас вы найдете как традиционную русскую кухню, так и разнообразные зарубежные блюда.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Таверна
                    </h1>
                    <p>
                      Каждые выходыне у нас вы можете собраться с друзьями и поиграть в разные настольные игры.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Таверна
                    </h1>
                    <p>
                      Уютная и домашняя обстановка.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
  </div>

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/main_soup.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  День Супов по понедельникам
                </h5>
                <h6>
                  <span>20%</span> Скидка
                </h6>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/main_pizza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  День Пиццы по пятницам
                </h5>
                <h6>
                  <span>15%</span> Скидка
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Наше Меню
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">Все блюда</li>
        <li data-filter=".pasta">Супы</li>
        <li data-filter=".fries">Жаркое</li>
        <li data-filter=".pizza">Пицца</li>
        <li data-filter=".burger">Бургеры</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
        <?php
        $menu = get_menu_all();
        foreach ($menu as $item): ?>
          <div class="col-sm-6 col-lg-4 all <?php echo $item["category"];?>">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo $item["img"];?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  <?php echo $item["name"];?>
                  </h5>
                  <p>
                  <?php echo $item["desс"];?>
                  </p>
                  <div class="options">
                    <h6>
                    <?php echo $item["price"];?> ₽
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
      <div class="btn-box">
        <a href="menu.php">
          Посмотреть все блюда
        </a>
      </div>
    </div>
  </section>

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about_image.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
            <h2>Таверна</h2>
              </div>
              <p>
              Таверна - это уютное место, где встречаются путешественники и жители города, чтобы насладиться блюдами настоящей домашней кухни.
            </p>
            <a href="about.php">
              Подробнее
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
      <h2>
          Записаться
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Ваше имя" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Номер телефона" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Ваш Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    Сколько человек?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Записаться
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Что говорят наши посетители
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                Атмосфера была приятной и уютной, а обслуживание было высокого уровня. Я заказал блюда с морепродуктами и они были свежими и вкусными. Особенно мне понравилась вариация на тему креветок - такое великолепное сочетание вкусов! В целом, ресторан Таверна - отличное место для того, чтобы насладиться вкусной едой и приятной атмосферой. Я бы определенно рекомендовал его своим друзьям и знакомым!
                </p>
                <h6>
                  Михаил Гусев
                </h6>
                <p>
                </p>
              </div>
              <div class="img-box">
                <img src="images/client01.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                Я была приятно удивлена атмосферой ресторана Таверна - уютное место, где можно насладиться вкусной едой и приятной компанией. Меню порадовало разнообразием блюд, особенно впечатлила курица на гриле с овощами, очень сочная и ароматная. Обслуживание было на высшем уровне - персонал был внимателен и доброжелателен. В целом, визит в ресторан Таверна оставил только положительные впечатления, и я обязательно вернусь сюда еще раз.
                </p>
                <h6>
                  Елена Кузнецова
                </h6>
              </div>
              <div class="img-box">
                <img src="images/client02.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require("footer.php");?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
</body>

</html>