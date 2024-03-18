<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<?php
if(isset($_POST['add_user'])){
?>
      <form action="action/add_user.php" method="post">
          <a class="strelka" href="adminka.php">&#8592;</a>
          <h2>Добавьте пользователя</h2>
          
          <label for="name">Логин</label>
          <input type="text" id="name" name="login">

          <label for="mail">Email</label>
          <input type="email" id="mail" name="email">

          <label for="password">Пароль</label>
          <input type="password" id="password" name="password">

          <label>Статус</label>
          <input type="radio" id="under_16" value="admin" name="user_status"><label for="under_16" class="light">Админ</label><br>
          <input type="radio" id="over_16" value="user" name="user_status"><label for="over_16" class="light">Пользователь</label>

          <!-- <h2>Your profile</h2>
          
          <label for="bio">Biography</label>
          <textarea id="bio" name="student_bio"></textarea>

          <label for="courses">Select Courses</label>
          <select id="courses" name="student_courses">
            <optgroup label="Engineering">
              <option value="computer_engineering">Computer Science Engineering</option>
              <option value="slectrical_engineering">Electrical Engineering</option>
              <option value="mechanical_engineering">Mechanical Engineering</option>
              <option value="civil_engineering">Civil Engineering</option>
              <option value="chemical_engineering">Chemical Engineering</option>
            </optgroup>
            <optgroup label="Management">
              <option value="finance_management">Finance Management</option>
              <option value="technology_management">Technology Management</option>
              <option value="marketing_management">Marketing Management</option>
              <option value="business_administration">Business Administration</option>
            </optgroup>
          </select>

          <label>Interests:</label>
          <input type="checkbox" id="engineering" value="interest_engineering" name="user_interest"><label class="light" for="engineering">Engineering</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label><br>
          <input type="checkbox" id="law" value="interest_law" name="user_interest"><label class="light" for="law">Law</label> -->
        
        <button name="add_user" type="submit">Добавить</button>
      </form>
      <?php
}
      ?>
      <?php
if(isset($_POST['add_category'])){
?>
      <form action="action/add_category.php" method="post">
          <a class="strelka" href="adminka.php">&#8592;</a>
          <h2>Добавьте категорию</h2>
          
          <label for="name">Название категории</label>
          <input type="text" id="name" name="title">

        <button name="add_category" type="submit">Добавить</button>
      </form>
      <?php
}
      ?>
    </body>
</html>