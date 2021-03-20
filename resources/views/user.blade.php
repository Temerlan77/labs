<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTML5 и CSS3 сайт</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>itProger</span>
    </div>
    <div id="about">
      <a href="#" title="Возможности" onclick="slowScroll('#main')">Возможности</a>
      <a href="#" onclick="slowScroll('#overview')" title="Преимущества">Преимущества</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Контакты">Контакты</a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
    </div>
  </header>

  <div id="top">
    <h1>Программирование</h1>
    <h3>как способ жизни!</h3>
  </div>

  <div id="main">
    <div class="intro">
      <h2>Наши услуги помогут вам!</h2>
      <span>Большой выбор всего, что может вам пригодиться</span>
    </div>
    <div class="text">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos impedit, ut vero commodi voluptate? Ipsam reiciendis, necessitatibus incidunt ipsa quis sapiente excepturi, optio iusto voluptatibus dolorem officia quidem, numquam eaque minus, autem praesentium rem architecto dolores. Ipsa unde id velit optio magni enim! Illum obcaecati, dolorem distinctio nemo, ipsum iure.</span>
    </div>
  </div>

  <div id="overview">
    <h2>Преимущества</h2>
    <h4>с нами все проще</h4>

    <div class="img">
      <img src="https://itproger.com/img/courses/1532975967.jpg" alt="">
      <span>Изучение языка Ruby для начинающих</span>
    </div>
    <div class="img">
      <img src="https://itproger.com/img/courses/1530341233.jpg" alt="">
      <span>Уроки PhotoShop для начинающих</span>
    </div>
  </div>

  <div id="contacts">
    <center><h5>Обратная связь</h5></center>
    <form id="form_input">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Ваша почта <span>*</span></label><br>
      <input type="email" placeholder="Введите email" name="email" id="email"><br>
      <label for="message">Сообщение <span>*</span></label><br>
      <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
      <div id="mess_send" class="btn">Отправить</div>
    </form>
  </div>

  <div id="faq">
    <div>
      <span class="title">Оплата</span><br>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Информация</span><br>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Гарантии</span><br>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto|Suez+One');

* {
  margin: 0;
  padding: 0;
  outline: none;
}

body, html {
  width: 100%;
  height: 100%;
}

body {
  background-color: #fafafa;
  font-family: Trebuchet MS, Helvetica;
}

/* Шапка сайта */

header {
  width: 100%;
  padding: 10px 0.5% 0px 0.5%;
  background: transparent;
  float: left;
  position: fixed;
}

header #logo {
  color: #fff;
  cursor: pointer;
}

header #logo span {
  font-size: 1.7em;
  line-height: 45px;
  margin-left: 40px;
  font-family: 'Suez One', serif;
}

@media (min-width: 701px) {
  #logo {
    float: left;
    width: 30%;
    font-size: 1.1em;
  }

  #about {
    float: right;
    width: 67%;
  }
}

@media (max-width: 700px) {
  #logo {
    margin-top: 15px;
    width: 100%;
    font-size: 1.5em;
  }

  #about {
    float: left;
    width: 100%;
  }
}

#about {
  text-align: center;
  font-size: 1em;
  line-height: 40px;
  margin-bottom: 10px;
}

#about > a {color: #fff}

#about > a:hover {
  color: #b0b0b0;
  text-decoration: underline;
}

#about > a:not(:last-child) {
  margin-right: 7%;
}

/* Стили для фиксированной шапки */

.fixed {
  z-index: 5000;
  background-color: #fff;
  border-bottom: 1px solid silver;
}

header.fixed #logo {
  color: #343434;
}

.fixed #about a {color: #343434}
.fixed #about a:hover {color: #7c7c7c}

/* Главный блок на сайте */

#top {
  width: 100%;
  background-image: url(https://www.lovelymockups.com/wp-content/uploads/2017/01/mackbook-on-table.jpg);
  background-blend-mode: multiply;
  background-color: #2e3a44;
  background-size: cover;
  text-align: center;
  color: #fff;
}

@media (min-width: 1001px) {
  #top {
    font-size: 3em;
    height: 1000px;
  }
}

@media (max-width: 1000px) and (min-width: 651px) {
  #top {
    font-size: 2em;
    height: 600px;
  }
}

@media (max-width: 650px) {
  #top {
    font-size: 1.3em;
    padding-top: 50%;
    height: 500px;
  }
}

@media (max-width: 450px) {
  #top {
    font-size: 0.9em;
  }
}

#top h1 {
  padding-top: 20%;
}

#top h3 {
  color: #ccc;
}

/* Блок с возможностями */

#main {
  float: left;
  background-color: #f6f6f6;
  border-top: 2px solid silver;
  color: #484848;
  font-size: 1.3em;
}

@media (min-width: 1401px) {
  #main {
    padding: 100px 20%;
    width: 60%;
  }
}

@media (max-width: 1400px) {
  #main {
    padding: 100px 10%;
    width: 80%;
  }
}

@media (max-width: 700px) {
  #main div {
    width: 98%!important;
    margin-bottom: 20px;
  }
}

#main div {
  width: 48%;
  margin-right: 2%;
  float: left;
}

#main h2 {font-size: 3em}
#main span {color: #a0a0a0}

/* Блок с преимуществами */

#overview {
  float: left;
  background-image: url(https://images.unsplash.com/1/work-station-straight-on-view.jpg?ixlib=rb-0.3.5&s=d055e15d0b8fd2de7295b726274d312b&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb);

  background-blend-mode: multiply;
  background-color: #403f40;
  background-size: cover;
  background-attachment: fixed;

  padding: 100px 0;
  width: 100%;
  text-align: center;
  color: #fff;
}

#overview h2 {font-size: 4em}
#overview h4 {color: #ccc; font-size: 1.5em}

@media (min-width: 561px) {
  #overview h2 {font-size: 4em}
}

@media (max-width: 560px) {
  #overview h2 {font-size: 2em}
}

#overview .img {
  float: left;
  width: 30%;
  margin-right: 5%;
  margin-top: 50px;
}

#overview .img:nth-child(odd) {
  margin-left: 18%;
}

#overview img {
  background: #fafafa;
  padding: 5px;
  border: 2px solid silver;
  float: left;
  width: 100%;
  max-width: 500px;
}

#overview span {
  float: left;
  width: 100%;
  font-size: 2em;
  margin-top: 10px;
}

@media (max-width: 700px) {
  #overview .img {
    width: 80%!important;
    margin-right: 0!important;
    margin-left: 10%!important;
  }
}

/* Блок с контактами */
#contacts {
  width: 100%;
  float: left;
  padding-bottom: 40px;
  padding-top: 70px;
  border-top: 4px solid #ccc;
  background: #f4f4f4;
}

h1, h2, h3, h4, h5 {
  font-family: 'Roboto Slab', serif;
  font-weight: lighter;
}

#contacts h5 {font-size: 3em; color: #4f4f4f}

#form_input {
  margin-top: 15px;
  font-size: 1.1em;
}

@media (min-width: 1051px) {
  #form_input {
    width: 35%;
    margin-left: 38%;
  }
}

@media (max-width: 1050px) {
  #form_input {
    width: 90%;
    margin-left: 10%;
  }
}

#form_input label {
  color: #505050;
  cursor: pointer;
  font-size: 1.4em;
  font-family: 'Roboto Slab', serif;
}

#form_input label > span {
  color: #e87e7e;
}

#form_input input,#form_input textarea {
  margin-bottom: 10px;
  width: 70%;
  padding: 10px 2%;
  border-radius: 7px;
  border: 2px solid silver;
  font-size: 0.9em;
  color: #4a4a4a;
}

#form_input input:focus, #form_input textarea:focus {
  border-color: #333;
}

.btn {
  float: left;
  border-radius: 5px;
  padding: 5px 9px;
  font-size: 1.2em;
  background-color: #ec6550;
  text-shadow: #454545 0 0 2px;
  cursor: pointer;
  color: white;
  font-family: 'Roboto Slab', serif;
}

.btn:hover {
  background-color: #c15443;
}

/* Вопросы и ответы */

#faq {
  background-color: #fff;
  border-top: 2px dashed #e4e3e3;
  width: 100%;
  float: left;
  padding-top: 70px;
  padding-bottom: 70px;
}

@media (min-width: 801px) {
  #faq div {
    width: 25%;
    margin-left: 6%;
    float: left;
  }
}

@media (max-width: 800px) {
  #faq div {
    width: 80%;
    margin-left: 10%;
    float: left;
  }
}

#faq .title {
  font-weight: lighter;
  color: #a3a0ad;
  margin-bottom: 20px;
  font-size: 2.2em;
}

#faq .heading {
  color: #7d7d7d;
  font-size: 1.3em;
  font-weight: bold;
}

#faq p {
  font-family: Arimo, Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  color: #4a4a4a;
  font-size: 0.95em;
  margin-bottom: 40px;
}
  </style>
</body>
</html>