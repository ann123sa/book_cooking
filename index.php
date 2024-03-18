<?php
include "includes/header_1.php";
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
<style>
  body{
    color: #000;
  }
  h1{
    margin-top: 25px;
    color: #000;
    text-align: center;
    font-family: "Inconsolata", monospace;
    font-style: normal;
  }
  .container {
    margin: 0px 166px;
}
.text p{
  color: white;
    text-align: center;
    position: absolute;
    margin-top: -450px;
    margin-left: 300px;
    z-index:100;
    font-size: 50px;
    font-family: "Inconsolata", monospace;
}
.card{
    color: #000;
    width: 349px;
    box-shadow: 10px 10px 40px 20px #0000001A;
    margin-right: 31px;
    background-color: white;
    margin-top: 80px;
    padding: 10px 10px;
}
.card-png{
    width: 126px;
    height: 124px;
}
.card-image{
    display: flex;
    justify-content: center;
    padding-top: 31px;
    
   
}
.card-image img{
  max-width: 100%;
  height: auto;
}
.card-title{
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    font-family: "Tinos", serif;
    font-size: 26px;
    font-weight: 400;
    margin-top: 5px;
}
.card-desc{
    text-align: center;
    justify-content: center;
    font-family: "Tinos", serif;
    font-size: 26px;
    font-weight: 400;
    color: #656363;
}
.cards-holder{
    display: flex;
    justify-content: center;
    font-size: 26px;
    font-weight: 400;
}
.card-title span{
    color: #D67E35;
    margin-left: 5px;
}
</style>
<body>
    <div class="center">
      <div class="image">
      </div>
      <div class="text">
        <p>CookBan - Ваша личная книга для сохранения рецептов</p>
      </div>
      </div>
      <h1>Как это работает</h1>

<div class="cards">
        <div class="container">
            <div class="cards-holder">
        <div class="card">
            <div class="card-image">
                <img class="card-png" src="img/pencil.png" alt="pencil">
            </div>
            <div class="card-title">
            Записывайте
            </div>
            <div class="card-desc">
            Бабушка поделилась рецептом своих волшебных булочек?  
            Теперь вам есть где записать его, чтобы не потерять
            </div>
        </div>
        <div class="card" id="history_nav">
            <div class="card-image">
                <img class="card-png" src="img/magnifier.png" alt="magnifier">
            </div>
            <div class="card-title">
            Организуйте
            </div>
            <div class="card-desc">
            Давно хотели навести порядок в своих рецептах? Все, что вам нужно - зарегистрироваться на нашем сайте
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img class="card-png" src="img/cooking.png" alt="cooking">
            </div>
            <div class="card-title">
                Готовьте
            </div>
            <div class="card-desc">
            Больше не нужно тратить время на поиск - просто выберите рецепт на любом устройстве и готовьте с удовольствием
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="comment">
        
    </div>
<?php
include "includes/footer.php";
?>
</body>
</html>