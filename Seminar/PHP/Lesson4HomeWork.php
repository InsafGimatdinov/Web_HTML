<?php 
  $first_name = 'Инсаф';
  $post = 'Программист Java';
  $city = 'Казань';
  $country = 'Россия';
  $e_mail = 'insaf.gim@mail.ru';
  $phone_number = '+7(937)-284-38-93';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?=$first_name?></h2>
          </div>
        </div>
        <div class="w3-container">

          <?php 

            $userAgeByYear = 2022 - 1996;
            $userFields = [
              'post' => ['icon' => 'briefcase', 'title' => $post, 'department' => ['title' => 'Отдел разработки']],
              'locations' => 
                [
                  'country' => ['title' => $country],
                  'city' => ['title' => $city],
                  'icon' => 'home'
                ],
              'e_mail' => ['icon' => 'envelope', 'title' => $e_mail],
              'phone_number' => ['icon' => 'phone', 'title' => $phone_number],
              'age' => ['year' => $userAgeByYear, 'days' => $userAgeByYear * 365, 'icon' => 'hourglass-half']
            ];

          ?>

          <?php foreach ($userFields as $key => $userField):?>

            <?php if ($key === 'locations'):?>

              <p>
                <i class="fa fa-<?=$userField['icon']?> fa-fw w3-margin-right w3-large w3-text-teal">
                </i><?=$userField['city']['title']?>, <?=$userField['country']['title']?>
              </p>

            <?php elseif ($key === 'age'):?>

              <p>
                <i class="fa fa-<?=$userField['icon']?> fa-fw w3-margin-right w3-large w3-text-teal">
                </i><?=$userField['year']?> лет, (<?=$userField['days']?> дней)
              </p>

            <?php else:?>

              <p>
                <i class="fa fa-<?=$userField['icon']?> fa-fw w3-margin-right w3-large w3-text-teal">
                </i><?=$userField['title']?>
              </p>

            <?php endif;?>

          <?php endforeach;?>

          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>

          <?php 

            $userSkills = [
              ['title' => 'Adobe Photoshop', 'percent' => 98],
              ['title' => 'Photography', 'percent' => 80],
              ['title' => 'Illustrator', 'percent' => 75],
              ['title' => 'Media', 'percent' => 50],
            ];

          ?>

          <?php foreach ($userSkills as $skill):?>
            
            <p><?=$skill['title']?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$skill['percent']?>%"><?=$skill[percent]?>%
            </div>
          </div>

          <?php endforeach;?>

          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    


      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

        <?php 

          $userExperience = [
            ['title' => 'Front End Developer', 'icon' => 'calendar', 'workStart' => 'Jan 2015', 'workFinish' => 'Current', 'text' => 'Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'],
            ['title' => 'Web Developer / something.com', 'icon' => 'calendar', 'workStart' => 'Mar 2012', 'workFinish' => 'Dec 2014', 'text' => 'Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'],
            ['title' => 'Graphic Designer / designsomething.com', 'icon' => 'calendar', 'workStart' => 'Jun 2010', 'workFinish' => 'Mar 2012', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'],
          ];

        ?>

        <?php foreach ($userExperience as $exp):?>
          
          
            <h5 class="w3-opacity"><b><?=$exp['title']?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-<?=$exp['icon']?> fa-fw w3-margin-right"></i><?=$exp['workStart']?> - <span class="w3-tag w3-teal w3-round"><?=$exp['workFinish']?></span></h6>
            <p>
              <?=$exp['text']?>
            </p>

        <?php endforeach;?>

            <hr>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
