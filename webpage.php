<?php
ob_start();
session_start();


if (isset($_SESSION['clientid'])) {




  // هنا هنا ناخذ المتغير الذي ياتي به الاسم بايج و ذالك المتغير هو اسم الصفحة عن طريق غات ميثود
  $page = isset($_GET['page']) ? $_GET['page'] : 'index.php';

  if ($page == 'pointszone') {



    // page title تعني عنوان الصفحة الذي يظهر في الصفحة
    $pageTitle = 'Wild & Loud - points zone';
    include 'init.php';
?>
    <div class="msgwindow">

    </div>

    <div class="content dash-content ptszone col-md-10 col-12">
      <div class="dashboard lf-pd" id="dashboard">
        <div class="container-fluid">
          <div class="row">


            <div class="col-md-4">
              <div class="content-header">
                <a class="dashboard-overview socialhits" social="1">social</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="content-header">
                <a class="dashboard-overview webhists" social="2">ads</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="content-header">
                <a class="dashboard-overview freepoints luckyloot" social="3">free points</a>
              </div>
            </div>
            <div class="col-md-12 pointsTyle pore mmxpsqkjze 9re8dbb00er">
              <div class="sol-list">
                <ul class="social-points mt-3 d-flex justify-content-center align-items-center">
                  <?php
                  $name = 'Website hits';
                  $stmt = $conn->prepare("SELECT * FROM services WHERE name != ? ORDER BY id DESC");
                  $stmt->execute(array($name));

                  $services = $stmt->fetchAll();
                  foreach ($services as $service) {
                  ?>
                    <li>
                      <a class="service-btfd" service="<?php echo $service['id'] ?>">
                        <img src="/system/downloads/images/<?php echo $service['image'] ?>" alt="<?php echo $service['name'] ?>" style="width:60px;height:60px;border-radius:5px">
                      </a>
                    </li>

                  <?php
                  }
                  ?>

                </ul>
     <!-- social__controls -->
                     <div class="social__controls my-3">
                           <ul>
                             <li class="ds" data-active="followers">followers</li>
                             <li class="" data-active="tweets">tweets</li>
                             <li data-active="retweets">retweets</li>
                             <li data-active="likes">likes</li>
                             </ul>
                    </div>
                 <!-- social__body -->
                     <div class="social__body d-flex">
                      <div class="col-md-3 d-grid">
                                       <img src="<?php echo $images ?>red.jpg" alt="service" >
                                       <img src="<?php echo $images ?>red.jpg" alt="service" >

                        </div>
                       <div  class="col-md-6  video__section">
                           <h3 class="title">view this video for 30 seconds</h3>                        
                             
<video  controls>
  <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
  <source src="https://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>
                            <span class="notes">must play for 0/30 seconds</span>
                            <span class="notes">@account name</span>
                            <input type="button" value="30 points">
                      </div>
                    <div class="col-md-3 d-grid">
                                       <img src="<?php echo $images ?>red.jpg" alt="service" >
                                       <img src="<?php echo $images ?>red.jpg" alt="service" >
                    
                      </div>
                     </div>
              </div>
            </div>
            <div class="col-md-12 ">
              <div class="row ">

              </div>
            </div>

            <div class="col-md-12 mpds098fb">
              <div class="row justify-content-center mpz665r32ds">

              </div>
            </div>
            <div class="col-md-12">
              <div class="webhits" style="display:none">
                <?php
                $stmt = $conn->prepare("SELECT * FROM services WHERE name = ?");
                $stmt->execute(array($name));
                $idw = $stmt->fetch();

                $stmt = $conn->prepare("SELECT * FROM ads WHERE service = ? AND  status = 1");
                $stmt->execute(array($idw['id']));
                $ads = $stmt->fetchAll();
                //  
                $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
                $stmt->execute(array($_SESSION['clientid']));
                $s = $stmt->fetch();
                if ($s['subs'] == 0) {
                  $lt = 1;
                } elseif ($s['subs'] == 1) {
                  $lt = 15;
                } elseif ($s['subs'] == 2) {
                  $lt = 30;
                } elseif ($s['subs'] == 1) {
                  $lt = 75;
                } elseif ($s['subs'] == 4) {
                  $lt = 30;
                } else {
                  $lt = 1;
                }
                $stmt4 = $conn->prepare("SELECT * FROM freepoints  ORDER BY id DESC LIMIT $lt");
                $stmt4->execute();
                $sd = $stmt4->fetchAll();
                ?>
                <?php
                foreach ($ads as $ad) {
                ?>
                  <div class="shadow my-3">
                    <div class="col-md-12 ">

                      <div class="today-total fd" style="text-align:left;padding: 20px 0;">
                        <a target="_blank" href="preview.php?page=viewsite&id=<?php echo $ad['id'] ?>" style="color:black;background:unset">
                          <h2 class="py-4" style="color: #626571;">Article Headline Go On...…………..
                          </h2>
                          <p style="color:rgba(0,0,0,.6);font-weight:bold;padding-bottom:20px; font-size:13px;color:#707070;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                          </p>
                          <!-- <span style="font-weight:bold;color:rgba(0,0,0,.6);margin-top:10px;display:block;text-align:center"><?php echo $ad['points'] ?> point</span> -->
                        </a>
                      </div>
                    </div>

                    <div class="row webhit_bottom_section">
                      <div class="col-12 col-md-6 col-lg-7 text-center text-md-left my-4  my-md-0" style="color: #626571;">
                        <h2>Site_Name</h2>
                      </div>
                      <?php
                      $d = date('Y-m-d');
                      $stmt11 = $conn->prepare("SELECT * FROM lc  WHERE adid = ? AND userid = ? AND created = ?");
                      $stmt11->execute(array($ad['id'], $_SESSION['clientid'], $d));
                      $cc = $stmt11->rowCount();

                      if ($cc ==  '0') {
                      ?>
                        <div class="col-12 col-md-6 col-lg-5 p-0 fd99fd">
                          <div class="box-bfd main-ad" ad="<?php echo $ad['id'] ?>" style="cursor:pointer;">
                            <h2 class="mpprlotk" ad="<?php echo $ad['id'] ?>">Lucky Loot</h2>
                            <!-- <a ad="<?php echo $ad['id'] ?>" href="<?php echo $ad['url'] ?>" target="_blank" class="mpprlotk mpprlotk srtcount adh999bb07es" adshow adspce></a> -->

                            <span class="pointsforad mpprlotk" ad="<?php echo $ad['id'] ?>"><?php echo $ad['points'] ?> </span>
                            <p style="color:white">The more ads you view the more chances you get</p>
                          </div>
                        </div>
                      <?php
                      } else {
                      ?>
                        <div class="col-12 col-md-6 col-lg-5 p-0">
                          <div class="box-bfd main-ad" ad="<?php echo $ad['id'] ?>" style=";background:grey;min-height:195px">
                            <h3 class="mpprlotk" ad="<?php echo $ad['id'] ?>">Closed Lucky Loot</h3>
                            <!-- <a ad="<?php echo $ad['id'] ?>" target="_blank"  class="" adshow adspce>

                          </a> -->

                            <p style="color:white">The more ads you view the more chances you get</p>
                          </div>
                        </div>

                      <?php
                      }
                      ?>
                    </div>
                  </div>
                <?php
                }
                ?>

              </div>
            </div>


            <div class="col-md-12">
              <div class="management-body dash-table">
                <div class="freepoints-tt">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
    <?php



    ?>


    <?php


    ?>


    <?php



    ?>

  <?php
    // صفحة تو دو ليست
  } elseif ($page == "comp") {
    $pageTitle = 'Wild & Loud - Competition ';
    include 'init.php';

    //get compition informationn
    $stmt = $conn->prepare("SELECT * FROM competition ORDER BY id DESC LIMIT 1");
    $stmt->execute();
    $co = $stmt->fetch();
    $checkcomp = $stmt->rowCount();

    $today = date("Y-m-d");



  ?>
    <div class="comp content dash-content ptszone rewards" style="margin-bottom:220px">
      <div class="dashboard lf-pd" id="dashboard">
        <div class="container">
          <div class="row">

            <?php

            if ($co['ed'] > $today || TRUE) {

              // get user hits
              $stmt = $conn->prepare("SELECT  DISTINCT userid FROM hits WHERE created >= ?  AND created <= ?");
              $stmt->execute(array($co['str'], $co['ed']));
              $hits = $stmt->fetchAll();



            ?>
              <div class="col-md-12">
                <div class="content-header " style="padding:20px;border-radius:10px">
                  <h3><?php echo $co['title'] ?> <span style="color:red">: <?php echo $co['ed'] ?></span> </h3>
                </div>
              </div>
              <?php
              $i = 0;
              foreach ($hits as $hit) {


                // get user information
                $checkid = $hit['userid'];
                $stmt = $conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1  ");
                $stmt->execute(array($hit['userid']));
                $user = $stmt->fetch();

                $stmt = $conn->prepare("SELECT * FROM ord WHERE userid = ? AND comp = ?   ");
                $stmt->execute(array($hit['userid'], $co['id']));
                $check = $stmt->rowCount();
                if ($check > 0) {
                  $stmt2 = $conn->prepare("SELECT * FROM hits WHERE userid = ? AND created >= ? AND created <= ?");
                  $stmt2->execute(array($hit['userid'], $co['str'], $co['ed']));
                  $total = $stmt2->rowCount();


                  $stmt = $conn->prepare("UPDATE ord SET totalclicks = ? WHERE userid= ? AND comp = ?");
                  $stmt->execute(array($total, $hit['userid'], $co['id']));
                } else {

                  // insert total hit for one user on table
                  $stmt = $conn->prepare("INSERT INTO ord(totalclicks,userid,comp)
                       VALUES(:zmr,:zcr, :zpass)");
                  $stmt->execute(array(
                    'zmr' => $total,
                    'zcr' => $hit['userid'],
                    'zpass' => $co['id']

                  ));
                }
              }
              ?>
              <div class="row justify-content-center">
                <?php
                $stmt5 = $conn->prepare("SELECT DISTINCT userid FROM ord WHERE comp = ?  ORDER BY totalclicks  DESC   ");
                $stmt5->execute(array($co['id']));
                $bs = $stmt5->fetchAll();
                foreach ($bs as $s) {
                  $i += 1;
                  $stmt2 = $conn->prepare("SELECT * FROM hits WHERE userid = ? AND created >= ? AND created <= ?");
                  $stmt2->execute(array($s['userid'], $co['str'], $co['ed']));
                  $total = $stmt2->rowCount();

                  $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?  ");
                  $stmt->execute(array($s['userid']));
                  $user = $stmt->fetch();
                ?>
                  <div class="col-lg-4  col-sm-6 col-10 ">
                    <div class="user <?php echo $co['id'] ?>">
                      <div class="top mb-2 d-flex align-items-start">
                        <div class="image">

                          <?php
                          if (empty($user['image'])) {
                          ?>
                            <img src="<?php echo $avatar  ?>default.png" alt="avart" style="width:40px">

                          <?php
                          }
                          if (!empty($user['image'])) {
                          ?>
                            <img src="<?php echo $avatar . $user['image']  ?>" alt="avart" style="width:40px">

                          <?php
                          }
                          ?><br>
                          <span class="name" style="font-size:13px"><?php echo $user['fname'] ?></span>
                        </div>
                        <div class="palce">
                          <img src="<?php echo $images ?>gold2.png" alt=""> <br>
                          <span style="font-size:15px;"><?php echo $i ?></span>
                        </div>
                      </div>
                      <div class="bottom">
                        <ul>
                          <li class="d-flex flex-column justify-content-center">
                            <span><?php echo $total; ?></span>
                            <p class="mb-0 pb-0">click</p>
                          </li>
                          <li class="d-flex flex-column justify-content-center">
                            <span>0$</span>
                            <p class="mb-0 pb-0">withdrawls</p>
                          </li>
                          <li class="d-flex flex-column justify-content-center">
                            <span><?php echo $user['hits'] ?></span>
                            <p class="mb-0 pb-0">Total Clicks</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                <?php
                }
              } else {
                ?>
                <div class="col-md-12">
                  <div class="content-header " style="padding:20px;border-radius:10px">
                    <h3 style="color:green;text-transform:capitalize">Competition is over and winners :</h3>
                  </div>
                </div>

                <?php
                $i = 0;
                $stmt5 = $conn->prepare("SELECT DISTINCT userid FROM ord WHERE comp = ?  ORDER BY totalclicks  DESC   ");
                $stmt5->execute(array($co['id']));
                $bs = $stmt5->fetchAll();
                foreach ($bs as $s) {



                  $stmt2 = $conn->prepare("SELECT * FROM hits WHERE userid = ? AND created >= ? AND created <= ?");
                  $stmt2->execute(array($s['userid'], $co['str'], $co['ed']));
                  $total = $stmt2->rowCount();

                  $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?  ");
                  $stmt->execute(array($s['userid']));
                  $user = $stmt->fetch();

                  if ($total != 0) {

                    $stmt = $conn->prepare("SELECT * FROM winners WHERE userid = ? AND comp = ? LIMIT 1");
                    $stmt->execute(array($user['id'], $co['id']));
                    $data = $stmt->fetch();
                    $checmy = $stmt->rowCount();

                    $i += 1;
                ?>
                    <div class="col-lg-4 col-sm-6 col-10">
                      <div class="user">
                        <div class="top mb-2 d-flex align-items-center">
                          <div class="image">

                            <?php
                            if (empty($user['image'])) {
                            ?>
                              <img src="<?php echo $avatar  ?>default.png" alt="avart" style="width:40px">

                            <?php
                            }
                            if (!empty($user['image'])) {
                            ?>
                              <img src="<?php echo $avatar . $user['image']  ?>" alt="avart" style="width:40px">

                            <?php
                            }
                            ?><br>
                            <span class="name" style="font-size:13px"><?php echo $user['fname'] ?></span>
                          </div>
                          <div class="palce">
                            <img src="<?php echo $images ?>gold2.png" style="width:50px" alt=""> <br>
                            <span style="font-size:25px;"><?php echo $i ?></span> <br>

                          </div>
                        </div>
                        <?php
                        if ($_SESSION['clientid'] == $user['id']) {
                          if ($checmy > 0) {
                        ?>
                            <a userid="<?php echo $user['id'] ?>" comp="<?php echo $co['id'] ?>" style="cursor: pointer;font-size:12px;background: gold;color:black;display:block;text-align:center;padding:10px">Congratulations, You won <?php echo $data['points'] ?> </a>

                          <?php
                          } else {
                          ?>
                            <a place="<?php echo $i ?>" class="winner" userid="<?php echo $user['id'] ?>" comp="<?php echo $co['id'] ?>" style="cursor: pointer;font-size:12px;background: gold;color:black;display:block;text-align:center;padding:10px">Click here to get yor point</a>

                          <?php
                          }
                          ?>

                        <?php
                        }
                        ?>
                        <div class="bottom">
                          <ul>
                            <li class="d-flex flex-column justify-content-center">
                              <span><?php echo $total; ?></span>
                              <p class="mb-0 pb-0">click</p>
                            </li>
                            <li class="d-flex flex-column justify-content-center">
                              <span>0$</span>
                              <p class="mb-0 pb-0">withdrawls</p>
                            </li>
                            <li class="d-flex flex-column justify-content-center">
                              <span><?php echo $user['hits'] ?></span>
                              <p class="mb-0 pb-0">Total Clicks</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>


              <?php

                }
              }




              ?>

              </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
  <?php




  } elseif ($page == "rewards") {
    $pageTitle = 'Wild & Loud - rewards';
    include 'init.php';


    $date = date("Y-m-d");

    $stmt = $conn->prepare("SELECT * FROM rewards ORDER BY id DESC LIMIT 1");
    $stmt->execute();
    $total = $stmt->rowCount();
    $rds = $stmt->fetchAll();

    $codeone = mt_rand(0, $total);
    $codetwo = mt_rand(0, $total);


    $stmt2 = $conn->prepare("SELECT * FROM ar WHERE user =  ? AND created  =?");
    $stmt2->execute(array($_SESSION['clientid'], $date));
    $check1 = $stmt2->rowCount();


    $stmt = $conn->prepare("SELECT * FROM hits WHERE userid = ? AND created = ?");
    $stmt->execute(array($_SESSION['clientid'], $date));
    $alls = $stmt->fetchAll();
    $count = 0;
    foreach ($alls as $all) {
      $count += 1;
    }

  ?>
    <div class="content dash-content ptszone rewards">
      <div class="dashboard lf-pd" id="dashboard">
        <div class="container">
          <div class="row">
            <?php
            foreach ($rds as $rd) {
              if ($rd['clicks'] >= $count && $check1 == 0) {
                $stmt = $conn->prepare("INSERT INTO ar(user,ad,created)
               VALUES(:zf,:ze,now())");
                $stmt->execute(array(
                  'zf' => $_SESSION['clientid'],
                  'ze' => $rd['id']

                ));

                $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
                $stmt->execute(array($_SESSION['clientid']));
                $userpoints = $stmt->fetch();


                if ($userpoints['subs'] == 0) {
                  $totalpoints = $userpoints['points'] + $rd['points'];
                } elseif ($userpoints['subs'] == 1) {
                  $totalpoints = $userpoints['points'] + $rd['points'] + ($rd['points'] / 2);
                } elseif ($userpoints['subs'] == 2) {
                  $totalpoints = $userpoints['points'] + $rd['points'] * 2;
                } elseif ($userpoints['subs'] == 3) {
                  $totalpoints = $userpoints['points'] + $rd['points'] * 3;
                } elseif ($userpoints['subs'] == 4) {
                  $totalpoints = $userpoints['points'] + $rd['points'] * 2;
                } else {
                  $totalpoints = $userpoints['points'] + $rd['points'];
                }


                $totalpoints = $userpoints['points'] + $rd['points'];

                $stmt = $conn->prepare("UPDATE users SET points = ? WHERE id = ?");
                $stmt->execute(array($totalpoints, $_SESSION['clientid']));
              }
            ?>
              <div class="col-md-12">
                <div class="cnt-header shadow">
                  <div class="content-s">
                    <span style="color:white"><?php echo $rd['points'] ?> point</span> <br>
                    <?php
                    if ($count >= $rd['clicks']) {
                    ?>
                      <small style="font-size:17px;color:red !important;font-weight:bold"><?php echo $rd['clicks'] ?> / <?php echo $rd['clicks'] ?></small>

                    <?php
                    }
                    if ($count < $rd['clicks']) {
                    ?>
                      <small style="font-size:17px"><?php echo $count ?> / <?php echo $rd['clicks'] ?></small>

                    <?php
                    }
                    ?>
                  </div>

                  <div class="row">
                    <div class="col-8">
                      <?php
                      if ($count >= $rd['clicks']) {
                        $stmt = $conn->prepare("SELECT * FROM ar WHERE user = ? AND ad = ? AND created  =?");
                        $stmt->execute(array($_SESSION["clientid"], $rd['id'], $date));
                        $checkg = $stmt->rowCount();

                        if ($checkg == 0) {
                      ?>
                          <a ad="<?php echo $rd['id'] ?>" points="<?php echo $rd['points'] ?>" class="getrewardpoints" style="cursor: pointer;text-transform:capitalize;color:black;text-decoration:underline">click to get points</a>

                        <?php
                        } else {
                        ?>
                          <p style="color:green;text-transform:capitalize;font-weight:bold">Congratulations, you won <?php echo $rd['points'] ?> point for this reward</p>
                        <?php
                        }
                        ?>
                      <?php
                      }
                      ?>
                      <h3 style="text-transform:capitalize;font-weight:600;color:#25262E"><?php echo $rd['title'] ?>Get daily 50 Points points!
                      </h3>
                      <p style="color:#626571"><?php echo $rd['description'] ?> You have not done enough clicks today to get points. you have to do at least 40 click (this refers to all social types) to get points.
                      </p>
                    </div>
                    <div class="col-4">
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-12">
                <a href="#">
                  <img src="<?php echo $images ?>bannerad.png" style="    width: 60%;
    margin: auto;
    display: flex;" alt="ad">
                </a>
              </div>
              <div class="col-md-12">
                <div class="cnt-header shadow">
                  <div class="content-s">
                    <span style="color:white"><?php echo $rd['points'] ?> point</span> <br>
                    <?php
                    if ($count >= $rd['clicks']) {
                    ?>
                      <small style="font-size:17px;color:red !important;font-weight:bold"><?php echo $rd['clicks'] ?> / <?php echo $rd['clicks'] ?></small>

                    <?php
                    }
                    if ($count < $rd['clicks']) {
                    ?>
                      <small style="font-size:17px;color:red;"><?php echo $count ?> / <?php echo $rd['clicks'] ?></small>

                    <?php
                    }
                    ?>
                  </div>

                  <div class="row">
                    <div class="col-8">
                      <?php
                      if ($count >= $rd['clicks']) {
                        $stmt = $conn->prepare("SELECT * FROM ar WHERE user = ? AND ad = ? AND created  =?");
                        $stmt->execute(array($_SESSION["clientid"], $rd['id'], $date));
                        $checkg = $stmt->rowCount();

                        if ($checkg == 0) {
                      ?>
                          <a ad="<?php echo $rd['id'] ?>" points="<?php echo $rd['points'] ?>" class="getrewardpoints" style="cursor: pointer;text-transform:capitalize;color:black;text-decoration:underline">click to get points</a>

                        <?php
                        } else {
                        ?>
                          <p style="color:green;text-transform:capitalize;font-weight:bold">Congratulations, you won <?php echo $rd['points'] ?> point for this reward</p>
                        <?php
                        }
                        ?>
                      <?php
                      }
                      ?>
                      <h3 style="text-transform:capitalize;font-weight:600;color:#25262E"><?php echo $rd['title'] ?>Referral Clicks

                      </h3>
                      <p style="color:#626571"><?php echo $rd['description'] ?> You have not done enough clicks today to get points. you have to do at least 40 click (this refers to all social types) to get points.
                      </p>
                    </div>
                    <div class="col-4">
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-12">
                <a href="#">
                  <img src="<?php echo $images ?>bannerad.png" style="    width: 60%;
    margin: auto;
    display: flex;" alt="ad">
                </a>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
  <?php



  } elseif ($page == "referral") {
    $pageTitle = 'rewards page';
    include 'init.php';
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute(array($_SESSION['clientid']));
    $user = $stmt->fetch();
    $stmt = $conn->prepare("SELECT * FROM rewards ORDER BY id DESC");
    $stmt->execute();
    $total = $stmt->rowCount();

    $codeone = mt_rand(1, $total);
    $codetwo = mt_rand(1, $total);
  ?>
    <?php
    $stmt = $conn->prepare("SELECT * FROM hits WHERE userid = ? ORDER BY id DESC LIMIT 1");
    $stmt->execute(array($_SESSION['clientid']));
    $hits = $stmt->fetch();
    $checkhi = $stmt->rowCount();

    if ($checkhi > 0) {

      $todayhits = $hits['id'];
    }
    ?>
    <div class="content dashboard_container col-md-10 col-12 dash-content ptszone rewards">
      <div class="dashboard lf-pd" id="dashboard">
        <div>
          <div class="row w-100 m-auto">
            <?php
            if ($checkhi > 0) {
            ?>
              <div class="col-md-12">
                <div class="referral-status" style="margin:40px 0">
                  <?php
                  $today = date("Y-m-d");


                  if ($hits['created'] == $today) {
                  ?>
                    <p class="sts-v"> <span class="active-cir"></span> your active for this day</p>

                  <?php
                  } else {
                  ?>
                    <p style="color:#ee7373" class="sts-v"> <span class="unactive-cir"></span>No activities for this day</p>

                  <?php
                  }

                  ?>


                </div>
              </div>
            <?php
            } else {
            ?>
              <p style="color:#ee7373" class="sts-v"> <span class="unactive-cir"></span>No data to show</p>

            <?php
            }
            ?>
            <div class="col-md-12 position-relative">
              <div class="cnt-header m-0 shadow referral_header p-4">

                <div class="row justify-content-between">
                  <div class="col-lg-8 col-12">
                    <h2 class="text-capitalize mb-3">Refer friends and earn points</h2>
                    <p>Introduce a friend to wild & loud to earn 200 point.<br>Earn on every click your refer does. even when they buy from our store.</p>
                  </div>
                  <div class="col-lg-3  col-12 points mt-lg-0 mt-3  d-flex flex-column justify-content-center align-items-center text-center">
                    <span>200 points</span>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-12">
              <div class="cnt-header shadow my-4 p-4">

                <div class="row">
                  <div class="col-md-12">

                    <h3 class="text-capitalize mb-3">share my referral link with my friends</h3>

                    <div class="input-group mb-3">
                      <input type="text" value="http://localhost/system/index.php?ref=<?php echo  $user['myref'] ?>" class="form-control" placeholder="referral link" id="myInput" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button onclick="myFunction()" class="btn " type="button">copy link</button>
                      </div>
                    </div>
                  </div>

                </div>

                <script>
                  function myFunction() {
                    /* Get the text field */
                    var copyText = document.getElementById("myInput");

                    /* Select the text field */
                    copyText.select();
                    copyText.setSelectionRange(0, 99999); /* For mobile devices */

                    /* Copy the text inside the text field */
                    navigator.clipboard.writeText(copyText.value);

                    /* Alert the copied text */
                    alert("Copied the referral: " + copyText.value);
                  }
                </script>
                <div class="social">
                  <div class="vconte">
                    <ul class="d-flex justify-content-center mt-3" style="gap: 20px;">
                      <li>
                        <a href="https://www.twitter.com" target="_blank">
                          <img src="<?php echo $images ?>twt.png" alt="twitter" style="width:50px" class="img-fluid">
                        </a>
                      </li>

                      <li class="text-center">
                        <a href="https://www.pinterest.com/" target="_blank">
                          <img src="<?php echo $images ?>pt.png" alt="pinterest" style="width:50px" class="img-fluid">
                        </a>
                      </li>
                      <li>
                        <a href="https://www.facebook.com" target="_blank">
                          <img src="<?php echo $images ?>fb.png" alt="facebook" style="width:50px" class="img-fluid">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <?php
            $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute(array($_SESSION['clientid']));
            $my = $stmt->fetch();


            $stmt2 = $conn->prepare("SELECT * FROM users WHERE comref = ?");
            $stmt2->execute(array($my['myref']));
            $users = $stmt2->fetchAll();
            $ehc = $stmt2->rowCount();


            ?>
            <div class="col-md-12 my-3 shadow banner px-md-5 px-3">
              <div class="fd ">
                <img src="<?php echo $images ?>mm.png" style="width:100%" alt="banner">
              </div>
              <div class="fd banner_text text-center d-flex flex-column justify-content-center align-items-center">
                <h5 style="color:#626571" class="my-3">BANNER IMAGE CODE</h5>
                <input type="text" name="" class="form-control" placeholder="<a href='https://wildnloud.com/lips.datafilhref='https://wildnloud.com/lips.datafil">
                <a href="#" class="d-flex flex-column justify-content-center mt-3 mb-2">Copy</a>
              </div>
            </div>
            <div class="col-md-12 referral_table my-3">
              <h3>Your Referral</h3>
              <div class="management-body dash-table ">
                <div class="default-management-table table-responsive">
                  <table class="table  " id="referral-table">
                    <thead>
                      <tr style="background:#FCFCFC">
                        <th scope="col">#</th>
                        <th scope="col">came from</th>
                        <th scope="col">name</th>
                        <th scope="col">clicks</th>
                        <th scope="col">last click</th>
                        <th scope="col">avg</th>
                        <th scope="col">stats</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($ehc > 0) {
                      ?>
                        <?php
                        foreach ($users as $ad) {
                        ?>
                          <tr style="  background:#F5F5F5;margin:20px 0;filter: drop-shadow(-3px 3px 3px rgba(0,0,0,0.16 ));">
                            <td>
                              <?php echo $ad['id'] ?>
                            </td>
                            <td>

                              <a href="#">www.google.com</a>

                            </td>
                            <td>
                              @<?php echo $ad['username'] ?>
                            </td>

                            <td>
                              <?php
                              $c = 0;
                              $stmt = $conn->prepare("SELECT * FROM hits WHERE userid = ?");
                              $stmt->execute(array($ad['id']));
                              $tt = $stmt->fetchAll();

                              foreach ($tt as $t) {
                                $c += 1;
                              }

                              ?>
                              <?php echo $c ?> click
                            </td>

                            <?php
                            $stmt = $conn->prepare("SELECT * FROM hits WHERE userid =? ORDER BY id DESC");
                            $stmt->execute(array($ad['id']));
                            $lastad = $stmt->fetch();
                            $check = $stmt->rowCount();

                            if ($check > 0) {
                              $stmt = $conn->prepare("SELECT * FROM ads WHERE id =? ORDER BY created DESC");
                              $stmt->execute(array($lastad['ad']));
                              $dd = $stmt->fetch();
                            ?>
                              <td>
                                <?php echo $lastad['created'] ?>

                              </td>
                            <?php
                            } else {
                            ?>
                              <td>
                                No click !

                              </td>


                            <?php
                            }
                            ?>
                            <td>

                              <?php
                              $stmts = $conn->prepare("SELECT * FROM hits WHERE userid = ? ORDER BY created DESC");
                              $stmts->execute(array($ad['id']));
                              $hitds = $stmts->fetchAll();
                              $counter = 0;
                              $todayhits = 0;
                              foreach ($hitds as $h) {
                                $counter += 1;
                                $todayhits = $h['id'];
                              }
                              $stmtr = $conn->prepare("SELECT * FROM hits WHERE id = ?");
                              $stmtr->execute(array($todayhits));
                              $hitday = $stmtr->fetch();
                              $today = date("d");

                              $day = substr($hitday['created'], 8);

                              $moy = ((int)$today - (int)$day);
                              if ($moy != 0) {
                                $tot = $counter / $moy;
                                echo $tot;
                              } else {
                                echo 'no avg yet';
                              }
                              ?>

                            </td>

                            <td>
                              <?php
                              if ($moy == 0) {
                              ?>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect width="24" height="24" fill="#FB4040" />
                                  <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2V2ZM12 20C10.4178 20 8.87104 19.5308 7.55544 18.6518C6.23985 17.7727 5.21447 16.5233 4.60897 15.0615C4.00347 13.5997 3.84504 11.9911 4.15372 10.4393C4.4624 8.88743 5.22433 7.46197 6.34315 6.34315C7.46197 5.22433 8.88743 4.4624 10.4393 4.15372C11.9911 3.84504 13.5997 4.00346 15.0615 4.60896C16.5233 5.21447 17.7727 6.23984 18.6518 7.55544C19.5308 8.87103 20 10.4177 20 12C20 14.1217 19.1572 16.1566 17.6569 17.6569C16.1566 19.1571 14.1217 20 12 20V20Z" fill="white" />
                                  <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="white" />
                                  <path d="M12 7C11.7348 7 11.4804 7.10536 11.2929 7.29289C11.1054 7.48043 11 7.73478 11 8V13C11 13.2652 11.1054 13.5196 11.2929 13.7071C11.4804 13.8946 11.7348 14 12 14C12.2652 14 12.5196 13.8946 12.7071 13.7071C12.8946 13.5196 13 13.2652 13 13V8C13 7.73478 12.8946 7.48043 12.7071 7.29289C12.5196 7.10536 12.2652 7 12 7Z" fill="white" />
                                </svg>

                              <?php
                              } else {
                              ?>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect width="24" height="24" fill="#21C56C" />
                                  <path d="M8 12.5L11 15.5L16 9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" />
                                </svg>

                              <?php
                              }
                              ?>

                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                      <?php
                      }
                      ?>



                      <?php

                      ?>



                    </tbody>
                  </table>
                </div>

              </div>
            </div>





          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
  <?php



  } elseif ($page == 'store') {
    // page title تعني عنوان الصفحة الذي يظهر في الصفحة
    $pageTitle = 'Store system';
    include 'init.php';
    // Include configuration file

    $stmt = $conn->prepare("SELECT * FROM store ORDER BY id DESC");
    $stmt->execute();
    $options = $stmt->fetchAll();
  ?>
    <div class="dashboard_container col-md-10 col-12">

      <div class="content dash-content ptszone">
        <div class="dashboard lf-pd" id="dashboard">
          <div class="container">
            <div class="row  store_board">





              <?php
              foreach ($options as $option) {
                if ($option['type'] == '0') {
              ?>

                  <div class="BOX">
                    <a href="paymentSelect.php?page=ad&id=<?php echo $option['id'] ?>">

                      <div class="cashbox ds " style="padding:15px;  background: #F5F5F5;margin:10px 0;border:1px solid rgba(0,0,0,.2)">
                        <div class="row">
                          <div class="">
                            <img src="<?php echo $images ?>gold1.png" style="" alt="">
                          </div>
                          <div class="">
                            <div class="today-total" style="text-align:left;padding:0 !important">
                              <h3 style="color:rgba(0,0,0,.6);font-size:23px;">$<?php echo $option['moneyd'] ?> cashout</h3>
                              <p style="color:var(--mainColor);font-size:14px"><?php echo $option['points'] ?> point</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
              <?php
                }
              }

              ?>


              <?php
              foreach ($options as $option) {

                if ($option['type'] == '1') {
              ?>
                  <div class="BOX">
                    <a href="paymentSelect.php?page=ad&id=<?php echo $option['id'] ?>">
                      <div class="cashbox ds " style="padding:15px;  background: #F5F5F5;margin:10px 0">
                        <div class="row">
                          <div class="">
                            <img src="<?php echo $images ?>out.png" style="" alt="">
                          </div>
                          <div class="">
                            <div class="today-total" style="text-align:left;padding:0 !important">
                              <h3 style="color:rgba(0,0,0,.6);font-size:23px;">$<?php echo $option['points'] ?> point</h3>
                              <p style="color:#FE4C4C;font-size:14px"><?php echo $option['moneyd'] ?> cash out</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
              <?php
                }
              }

              ?>


            </div>


            <div class="col-md-12">

              <div class="management-body dash-table">
                <div class="default-management-table">

                </div>
              </div>
            </div>
          </div>
          <section class="mpprre87 paymentmethod">
            <div class="container">
              <div class="row" style="background:#F5F5F5;">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="paytpye" style="display:inline-flex;  background: #F5F5F5;padding:10px">
                        <a href="#">
                          <img src="<?php echo $images ?>paypal.png" alt="">

                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="paytpye" style="display:inline-flex;  background: #F5F5F5;padding:10px">
                        <a href="">
                          <img src="<?php echo $images ?>stripe.png" alt="">
                        </a>
                      </div>
                    </div>


                    <div class="col-md-4">

                      <div class="paytpye" style=" background: #F5F5F5;padding:14px;text-align:center;font-size:18px">
                        <a class="dssad" href="paymentSelect.php?page=subs" style="color:var(--mainColor);font-size:30px;padding:10px 20px;font-weight:bold">
                          Premium
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="paytpye" style="display:inline-flex;  background: #F5F5F5;padding:10px">
                        <a href="#">
                          <img src="<?php echo $images ?>net.png" alt="">
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="paytpye" style="display:inline-flex;  background: #F5F5F5;padding:10px">
                        <a href="#">
                          <img src="<?php echo $images ?>skrill.png" alt="">
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="paytpye" style="display:inline-flex;  background: #F5F5F5;padding:10px">
                        <a href="">
                          <img src="<?php echo $images ?>bit.png" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">

                    <div class="col-md-12">
                      <div class="prelist">
                        <ul>
                          <li><i class="fas fa-times"></i>
                            490 Point
                          </li>
                          <li><i class="fas fa-times"></i>
                            2000 Point
                          </li>
                          <li><i class="fas fa-times"></i>
                            Premium Subscription
                          </li>
                        </ul>
                      </div>
                      <div class="conrte">
                        <a href="#" style="display: block;background-color:var(--mainColor);color:white;font-size:30px;padding:10px 50px;font-weight:bold;border-radius:5px">
                          Pay $45
                        </a>
                      </div>
                    </div>

                  </div>
                </div>

                <!--  -->
              </div>
            </div>
          </section>

        </div>

      </div>
    </div>
    </div>

    </div>
    </div>
    <?php



    ?>


    <?php


    ?>


    <?php



    ?>

  <?php
    // صفحة تو دو ليست
  } elseif ($page == "myprofile") {

    $pageTitle = 'Wild & Loud - user account details';
    include 'init.php';

    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : header('location: index.php');
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->execute(array($_SESSION['clientid']));
    $userInfo = $stmt->fetch();
  ?>
    <div class="edit-page col-md-10 col-12 user-edit-pages deep-page">
      <div class="container">
        <div class="row">
          <div class="col-12 jusitify-content-center">
            <form class="pic" action="webpage.php?page=avatupdate&id=<?php echo $userInfo['id'] ?>" style="text-align:center;padding: 0" method="post" enctype="multipart/form-data">
              <?php
              if (empty($userInfo['image'])) {
              ?>
                <img src="<?php echo $avatar  ?>default.png" style="width: 180px;height: 180px;border-radius:50%;margin:auto" alt="avart">

              <?php
              } else {
              ?>
                <img src="<?php echo $avatar . $userInfo['image'] ?>" style="width: 180px;height: 180px;border-radius:50%;margin:auto" alt="avart">

              <?php
              }
              ?>
              <p class="username"><?php echo $userInfo['username'] ?></p>
              <label for="avatar" class="avar-up">upload <i class="fas fa-plus"></i> </label>
              <input type="file" id="avatar" name="avatar" class="up-ava" style="display:none;">
              <input type="submit" name="upload" value="save" class="form-control btn btn-primary shw-btn" id="sb-bt" style="visibility:hidden; margin:0 auto !important">
            </form>
            <div class="use-fl-info">
              <form method="post" class="d-flex flex-column" action="webpage.php?page=update" style="padding: 0">

                <div class="form-row justify-content-center">

                  <div class="col-12 settig_heading mb-5 d-flex flex-column align-items-center">
                    <h1 class="shadow py-2 px-2">Personal Data</h1>

                  </div>

                  <div class="form-group col-md-6 mb-md-4">
                    <label for="userNameUpdate" class="text-left text-md-center w-100">username</label>
                    <input type="text" id="userNameUpdate" name="username" class="form-control" required value="<?php echo $userInfo['username'] ?>">
                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="fullNameUpdate" class="text-left text-md-center w-100">full name</label>
                    <input type="text" id="fullNameUpdate" name="fname" class="form-control" required value="<?php echo $userInfo['fname'] ?>">
                  </div>

                  <div class="form-group col-md-6 mb-md-4">
                    <label for="counteryUpdate" class="text-left text-md-center w-100">country</label>
                    <input type="text" id="counteryUpdate" name="country" class="form-control" required value="<?php echo $userInfo['country'] ?>">
                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="statsUpdate" class="text-left text-md-center w-100">stats</label>
                    <input type="text" id="statsUpdate" name="stats" class="form-control" required value="<?php echo $userInfo['stats'] ?>">
                  </div>



                  <div class="form-group col-md-6 mb-md-4">
                    <label for="cityUpdate" class="text-left text-md-center w-100">city</label>
                    <input type="text" id="cityUpdate" name="city" class="form-control" required value="<?php echo $userInfo['city'] ?>">
                  </div>


                  <div class="form-group col-md-6 mb-md-4">
                    <label for="adressUpdate" class="text-left text-md-center w-100">adress</label>
                    <input type="text" id="adressUpdate" name="adress" class="form-control" required value="<?php echo $userInfo['adress'] ?>">
                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="zipUpdate" class="text-left text-md-center w-100">zip</label>
                    <input type="text" id="zipUpdate" name="zip" class="form-control" required value="<?php echo $userInfo['zip'] ?>">
                  </div>



                  <input type="hidden" value="<?php echo $userInfo['id'] ?>" name="id" value="">
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="newPasswordUpdate" class="text-left text-md-center w-100">new password </label>
                    <input type="password" id="newPasswordUpdate" name="password" class="form-control">
                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="confirmNewPassUpdate" class="text-left text-md-center w-100">confirm new password</label>
                    <input type="password" id="confirmNewPassUpdate" name="cpassword" class="form-control">
                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="BODUpdate" class="text-left text-md-center w-100">birthday date</label>
                    <input type="datetime-local" id="BODUpdate" name="br" class="form-control" value="<?php echo $userInfo['zip'] ?>">
                  </div>


                  <div class="form-group col-md-6 mb-md-4">
                    <label for="phoneUpdate" class="text-left text-md-center w-100">phone</label>
                    <input type="text" id="phoneUpdate" name="phone" class="form-control" required value="<?php echo $userInfo['phone'] ?>">
                  </div>
<div class="form-group col-12">
                <label>Social accounts</label>
                  <social-account-editor data-nodeinfo-software-url="/settings/nodeinfo_software" data-targets="waiting-form.prerequisites" data-waiting-form-method="waitForRecognition" data-catalyst="">
    <div class="color-fg-muted mt-2 d-flex flex-items-center">
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="facebook">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.3 15.4" role="img" aria-labelledby="i5xokfpng1m4qtx6fj3dwcgj1e6onns" class="octicon" height="16" width="16"><title id="i5xokfpng1m4qtx6fj3dwcgj1e6onns">Facebook</title><path d="M14.5 0H.8a.88.88 0 0 0-.8.9v13.6a.88.88 0 0 0 .8.9h7.3v-6h-2V7.1h2V5.4a2.87 2.87 0 0 1 2.5-3.1h.5a10.87 10.87 0 0 1 1.8.1v2.1h-1.3c-1 0-1.1.5-1.1 1.1v1.5h2.3l-.3 2.3h-2v5.9h3.9a.88.88 0 0 0 .9-.8V.8a.86.86 0 0 0-.8-.8z" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:[^.]+\.)?facebook\.com/(?:[^/?]+/?|profile\.php\?id=\d+)$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="hometown">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="kfrb2cxtv4mpya6g55t0kwkfzb7i0wu" class="octicon"><title id="kfrb2cxtv4mpya6g55t0kwkfzb7i0wu">Hometown</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="hometown"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="nktloqj2mr0kwy93fzpk9ofcvy2ivju" class="octicon"><title id="nktloqj2mr0kwy93fzpk9ofcvy2ivju">Instagram</title>
<g clip-path="url(#clip0_202_91849)">
<path d="M4.66536 0C2.0927 0 0 2.09464 0 4.66797V11.3346C0 13.9073 2.09464 16 4.66797 16H11.3346C13.9073 16 16 13.9054 16 11.332V4.66536C16 2.0927 13.9054 0 11.332 0H4.66536ZM12.6667 2.66667C13.0347 2.66667 13.3333 2.96533 13.3333 3.33333C13.3333 3.70133 13.0347 4 12.6667 4C12.2987 4 12 3.70133 12 3.33333C12 2.96533 12.2987 2.66667 12.6667 2.66667ZM8 4C10.206 4 12 5.794 12 8C12 10.206 10.206 12 8 12C5.794 12 4 10.206 4 8C4 5.794 5.794 4 8 4ZM8 5.33333C7.29276 5.33333 6.61448 5.61428 6.11438 6.11438C5.61428 6.61448 5.33333 7.29276 5.33333 8C5.33333 8.70724 5.61428 9.38552 6.11438 9.88562C6.61448 10.3857 7.29276 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3857 9.88562 9.88562C10.3857 9.38552 10.6667 8.70724 10.6667 8C10.6667 7.29276 10.3857 6.61448 9.88562 6.11438C9.38552 5.61428 8.70724 5.33333 8 5.33333V5.33333Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(www\.)?instagram\.com/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="linkedin">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="1cv9j31fvayceo4j68ycx2uxmecpvbs" class="octicon"><title id="1cv9j31fvayceo4j68ycx2uxmecpvbs">LinkedIn</title>
<g clip-path="url(#clip0_202_91845)">
<path d="M14.5455 0H1.45455C0.650909 0 0 0.650909 0 1.45455V14.5455C0 15.3491 0.650909 16 1.45455 16H14.5455C15.3491 16 16 15.3491 16 14.5455V1.45455C16 0.650909 15.3491 0 14.5455 0ZM5.05746 13.0909H2.912V6.18764H5.05746V13.0909ZM3.96291 5.20073C3.27127 5.20073 2.712 4.64 2.712 3.94982C2.712 3.25964 3.272 2.69964 3.96291 2.69964C4.65236 2.69964 5.21309 3.26036 5.21309 3.94982C5.21309 4.64 4.65236 5.20073 3.96291 5.20073ZM13.0938 13.0909H10.9498V9.73382C10.9498 8.93309 10.9353 7.90327 9.83491 7.90327C8.71855 7.90327 8.54691 8.77527 8.54691 9.67564V13.0909H6.40291V6.18764H8.46109V7.13091H8.49018C8.77673 6.58836 9.47636 6.016 10.52 6.016C12.6924 6.016 13.0938 7.44582 13.0938 9.30473V13.0909V13.0909Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?linkedin\.com/(?:in|company)/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="mastodon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="cqu9phauu6i4p48kw5vaer7t7owp9z3" class="octicon"><title id="cqu9phauu6i4p48kw5vaer7t7owp9z3">Mastodon</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="mastodon"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="reddit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="ajwstdfo6j6gmejgenu4xydzk5p03gb" class="octicon"><title id="ajwstdfo6j6gmejgenu4xydzk5p03gb">Reddit</title>
<path d="M9.42117 1C8.30163 1 7.46615 1.91456 7.46615 2.95502V4.75573C5.9979 4.83364 4.65515 5.2251 3.58321 5.83907C3.17013 5.4424 2.61701 5.26625 2.08071 5.26664C1.49925 5.26707 0.904821 5.46856 0.494798 5.92979L0.485414 5.94021L0.47603 5.95064C0.0827037 6.44221 -0.0730397 7.10072 0.0318487 7.75447C0.127638 8.35152 0.473426 8.95088 1.07453 9.34352C1.07059 9.4098 1.05993 9.47469 1.05993 9.54163C1.05993 12.1906 4.17335 14.3463 8 14.3463C11.8266 14.3463 14.9401 12.1906 14.9401 9.54163C14.9401 9.47469 14.9294 9.4098 14.9255 9.34352C15.5266 8.95088 15.8724 8.35152 15.9682 7.75447C16.073 7.10072 15.9173 6.44221 15.524 5.95064L15.5146 5.94021L15.5052 5.92979C15.0951 5.4685 14.5008 5.26707 13.9193 5.26664C13.3829 5.26625 12.8297 5.44225 12.4168 5.83907C11.3449 5.2251 10.0021 4.83364 8.53385 4.75573V2.95502C8.53385 2.43237 8.83559 2.0677 9.42117 2.0677C9.69914 2.0677 10.0378 2.20699 10.5681 2.39302C11.0165 2.55028 11.5999 2.70923 12.3459 2.75691C12.5243 3.2844 13.0197 3.66926 13.6054 3.66926C14.3395 3.66926 14.9401 3.06868 14.9401 2.33463C14.9401 1.60058 14.3395 1 13.6054 1C13.1043 1 12.6699 1.28317 12.4418 1.69442C11.8041 1.65911 11.3356 1.53103 10.9216 1.38579C10.4391 1.21654 9.99576 1 9.42117 1ZM2.08071 6.33435C2.29166 6.33419 2.49208 6.38955 2.65731 6.47928C2.06795 6.97122 1.62078 7.54599 1.35084 8.17363C1.20751 7.99671 1.12113 7.79807 1.08704 7.58556C1.02951 7.22698 1.13682 6.85424 1.30704 6.63359C1.46791 6.46045 1.76166 6.33458 2.08071 6.33435ZM13.9182 6.33435C14.2374 6.33458 14.5321 6.4605 14.693 6.63359C14.8632 6.85424 14.9705 7.22698 14.913 7.58556C14.8789 7.79807 14.7925 7.99671 14.6492 8.17363C14.3792 7.54599 13.9321 6.97122 13.3427 6.47928C13.5075 6.38965 13.7074 6.33419 13.9182 6.33435ZM5.33074 7.40622C5.92065 7.40622 6.39845 7.88402 6.39845 8.47392C6.39845 9.06383 5.92065 9.54163 5.33074 9.54163C4.74084 9.54163 4.26304 9.06383 4.26304 8.47392C4.26304 7.88402 4.74084 7.40622 5.33074 7.40622ZM10.6693 7.40622C11.2592 7.40622 11.737 7.88402 11.737 8.47392C11.737 9.06383 11.2592 9.54163 10.6693 9.54163C10.0794 9.54163 9.60155 9.06383 9.60155 8.47392C9.60155 7.88402 10.0794 7.40622 10.6693 7.40622ZM10.7965 10.3601C10.4553 11.3568 9.36452 12.2109 8 12.2109C6.63548 12.2109 5.54467 11.3572 5.20354 10.4321C5.81746 10.9302 6.84047 11.286 8 11.286C9.15953 11.286 10.1825 10.9297 10.7965 10.3601Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?reddit\.com/u(?:ser)?/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitch">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="bk6c52mlfizqmwanpq3cubgwzbjgvoz" class="octicon"><title id="bk6c52mlfizqmwanpq3cubgwzbjgvoz">Twitch</title>
<g clip-path="url(#clip0_202_91859)">
<path d="M2.96249 0L0.399994 3.53274V13.7143H4.20952V16H6.49523L8.78095 13.7143H11.8286L15.6381 9.90476V0H2.96249ZM3.44761 1.52381H14.1143V8.38095L11.8286 10.6667H8.01904L5.73333 12.9524V10.6667H3.44761V1.52381ZM7.25714 3.80952V7.61905H8.78095V3.80952H7.25714ZM11.0667 3.80952V7.61905H12.5905V3.80952H11.0667Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitch\.tv/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitter">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 273.5 222.3" role="img" aria-labelledby="e50nfox7bpypc7enh6yyssjcpmpxmn1" class="octicon" height="16" width="16"><title id="e50nfox7bpypc7enh6yyssjcpmpxmn1">Twitter</title><path d="M273.5 26.3a109.77 109.77 0 0 1-32.2 8.8 56.07 56.07 0 0 0 24.7-31 113.39 113.39 0 0 1-35.7 13.6 56.1 56.1 0 0 0-97 38.4 54 54 0 0 0 1.5 12.8A159.68 159.68 0 0 1 19.1 10.3a56.12 56.12 0 0 0 17.4 74.9 56.06 56.06 0 0 1-25.4-7v.7a56.11 56.11 0 0 0 45 55 55.65 55.65 0 0 1-14.8 2 62.39 62.39 0 0 1-10.6-1 56.24 56.24 0 0 0 52.4 39 112.87 112.87 0 0 1-69.7 24 119 119 0 0 1-13.4-.8 158.83 158.83 0 0 0 86 25.2c103.2 0 159.6-85.5 159.6-159.6 0-2.4-.1-4.9-.2-7.3a114.25 114.25 0 0 0 28.1-29.1" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitter\.com/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="youtube">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="j23u9ub7wv4gexgqq4cxqzvcgemf1dg" class="octicon"><title id="j23u9ub7wv4gexgqq4cxqzvcgemf1dg">YouTube</title>
<path d="M15.6656 3.7488C15.4816 3.0608 14.9392 2.5184 14.2512 2.3344C13.0032 2 8 2 8 2C8 2 2.9968 2 1.7488 2.3344C1.0608 2.5184 0.5184 3.0608 0.3344 3.7488C-2.38419e-08 4.9968 0 8.4 0 8.4C0 8.4 -2.38419e-08 11.8032 0.3344 13.0512C0.5184 13.7392 1.0608 14.2816 1.7488 14.4656C2.9968 14.8 8 14.8 8 14.8C8 14.8 13.0032 14.8 14.2512 14.4656C14.94 14.2816 15.4816 13.7392 15.6656 13.0512C16 11.8032 16 8.4 16 8.4C16 8.4 16 4.9968 15.6656 3.7488ZM6.4 10.4784V6.3216C6.4 6.0136 6.7336 5.8216 7 5.9752L10.6 8.0536C10.8664 8.2072 10.8664 8.5928 10.6 8.7464L7 10.8248C6.7336 10.9792 6.4 10.7864 6.4 10.4784Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/(user|c)/[^/?]+/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/channel/[a-zA-Z0-9_-]{24}/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/@[^/?]+/?$"></span>
        </span>
        <span data-targets="social-account-editor.iconOptions" data-target="social-account-editor.iconGeneric" data-provider-key="generic">
          <svg title="Social account" aria-label="Social account" role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-link">
    <path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path>
</svg>
        </span>
      <span data-target="social-account-editor.iconSpinner" hidden="">
        <svg style="box-sizing: content-box; color: var(--color-icon-primary);" width="16" height="16" viewBox="0 0 16 16" fill="none" data-view-component="true" class="anim-rotate">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
</svg>
      </span>
      <input type="hidden" data-target="social-account-editor.iconField" name="user[profile_social_accounts][][key]" value="generic">
      <input class="ml-2 form-control flex-auto input-sm" data-target="social-account-editor.urlField" data-action="change:social-account-editor#recognizeUrl" type="text" placeholder="Link to social profile" aria-label="Link to social profile" name="user[profile_social_accounts][][url]" value="">
    </div>
  </social-account-editor>
  <social-account-editor data-nodeinfo-software-url="/settings/nodeinfo_software" data-targets="waiting-form.prerequisites" data-waiting-form-method="waitForRecognition" data-catalyst="">
    <div class="color-fg-muted mt-2 d-flex flex-items-center">
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="facebook">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.3 15.4" role="img" aria-labelledby="1xavjd7w629jr0pydgfuzmzybsvdqwc" class="octicon" height="16" width="16"><title id="1xavjd7w629jr0pydgfuzmzybsvdqwc">Facebook</title><path d="M14.5 0H.8a.88.88 0 0 0-.8.9v13.6a.88.88 0 0 0 .8.9h7.3v-6h-2V7.1h2V5.4a2.87 2.87 0 0 1 2.5-3.1h.5a10.87 10.87 0 0 1 1.8.1v2.1h-1.3c-1 0-1.1.5-1.1 1.1v1.5h2.3l-.3 2.3h-2v5.9h3.9a.88.88 0 0 0 .9-.8V.8a.86.86 0 0 0-.8-.8z" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:[^.]+\.)?facebook\.com/(?:[^/?]+/?|profile\.php\?id=\d+)$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="hometown">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="mivxvriaru5wudwjkq6maag44l2b5gj" class="octicon"><title id="mivxvriaru5wudwjkq6maag44l2b5gj">Hometown</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="hometown"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="72vnb54hqgv7q2modbeaegsxtjc8yub" class="octicon"><title id="72vnb54hqgv7q2modbeaegsxtjc8yub">Instagram</title>
<g clip-path="url(#clip0_202_91849)">
<path d="M4.66536 0C2.0927 0 0 2.09464 0 4.66797V11.3346C0 13.9073 2.09464 16 4.66797 16H11.3346C13.9073 16 16 13.9054 16 11.332V4.66536C16 2.0927 13.9054 0 11.332 0H4.66536ZM12.6667 2.66667C13.0347 2.66667 13.3333 2.96533 13.3333 3.33333C13.3333 3.70133 13.0347 4 12.6667 4C12.2987 4 12 3.70133 12 3.33333C12 2.96533 12.2987 2.66667 12.6667 2.66667ZM8 4C10.206 4 12 5.794 12 8C12 10.206 10.206 12 8 12C5.794 12 4 10.206 4 8C4 5.794 5.794 4 8 4ZM8 5.33333C7.29276 5.33333 6.61448 5.61428 6.11438 6.11438C5.61428 6.61448 5.33333 7.29276 5.33333 8C5.33333 8.70724 5.61428 9.38552 6.11438 9.88562C6.61448 10.3857 7.29276 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3857 9.88562 9.88562C10.3857 9.38552 10.6667 8.70724 10.6667 8C10.6667 7.29276 10.3857 6.61448 9.88562 6.11438C9.38552 5.61428 8.70724 5.33333 8 5.33333V5.33333Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(www\.)?instagram\.com/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="linkedin">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="la9p3czinh53zuqhv2zwgs9sg3d2u7x" class="octicon"><title id="la9p3czinh53zuqhv2zwgs9sg3d2u7x">LinkedIn</title>
<g clip-path="url(#clip0_202_91845)">
<path d="M14.5455 0H1.45455C0.650909 0 0 0.650909 0 1.45455V14.5455C0 15.3491 0.650909 16 1.45455 16H14.5455C15.3491 16 16 15.3491 16 14.5455V1.45455C16 0.650909 15.3491 0 14.5455 0ZM5.05746 13.0909H2.912V6.18764H5.05746V13.0909ZM3.96291 5.20073C3.27127 5.20073 2.712 4.64 2.712 3.94982C2.712 3.25964 3.272 2.69964 3.96291 2.69964C4.65236 2.69964 5.21309 3.26036 5.21309 3.94982C5.21309 4.64 4.65236 5.20073 3.96291 5.20073ZM13.0938 13.0909H10.9498V9.73382C10.9498 8.93309 10.9353 7.90327 9.83491 7.90327C8.71855 7.90327 8.54691 8.77527 8.54691 9.67564V13.0909H6.40291V6.18764H8.46109V7.13091H8.49018C8.77673 6.58836 9.47636 6.016 10.52 6.016C12.6924 6.016 13.0938 7.44582 13.0938 9.30473V13.0909V13.0909Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?linkedin\.com/(?:in|company)/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="mastodon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="2n8i3psg48mw33ngo1ilateq2efy6k8" class="octicon"><title id="2n8i3psg48mw33ngo1ilateq2efy6k8">Mastodon</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="mastodon"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="reddit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="8qw0sj94lh5qgqold2cjmkt30otcvpv" class="octicon"><title id="8qw0sj94lh5qgqold2cjmkt30otcvpv">Reddit</title>
<path d="M9.42117 1C8.30163 1 7.46615 1.91456 7.46615 2.95502V4.75573C5.9979 4.83364 4.65515 5.2251 3.58321 5.83907C3.17013 5.4424 2.61701 5.26625 2.08071 5.26664C1.49925 5.26707 0.904821 5.46856 0.494798 5.92979L0.485414 5.94021L0.47603 5.95064C0.0827037 6.44221 -0.0730397 7.10072 0.0318487 7.75447C0.127638 8.35152 0.473426 8.95088 1.07453 9.34352C1.07059 9.4098 1.05993 9.47469 1.05993 9.54163C1.05993 12.1906 4.17335 14.3463 8 14.3463C11.8266 14.3463 14.9401 12.1906 14.9401 9.54163C14.9401 9.47469 14.9294 9.4098 14.9255 9.34352C15.5266 8.95088 15.8724 8.35152 15.9682 7.75447C16.073 7.10072 15.9173 6.44221 15.524 5.95064L15.5146 5.94021L15.5052 5.92979C15.0951 5.4685 14.5008 5.26707 13.9193 5.26664C13.3829 5.26625 12.8297 5.44225 12.4168 5.83907C11.3449 5.2251 10.0021 4.83364 8.53385 4.75573V2.95502C8.53385 2.43237 8.83559 2.0677 9.42117 2.0677C9.69914 2.0677 10.0378 2.20699 10.5681 2.39302C11.0165 2.55028 11.5999 2.70923 12.3459 2.75691C12.5243 3.2844 13.0197 3.66926 13.6054 3.66926C14.3395 3.66926 14.9401 3.06868 14.9401 2.33463C14.9401 1.60058 14.3395 1 13.6054 1C13.1043 1 12.6699 1.28317 12.4418 1.69442C11.8041 1.65911 11.3356 1.53103 10.9216 1.38579C10.4391 1.21654 9.99576 1 9.42117 1ZM2.08071 6.33435C2.29166 6.33419 2.49208 6.38955 2.65731 6.47928C2.06795 6.97122 1.62078 7.54599 1.35084 8.17363C1.20751 7.99671 1.12113 7.79807 1.08704 7.58556C1.02951 7.22698 1.13682 6.85424 1.30704 6.63359C1.46791 6.46045 1.76166 6.33458 2.08071 6.33435ZM13.9182 6.33435C14.2374 6.33458 14.5321 6.4605 14.693 6.63359C14.8632 6.85424 14.9705 7.22698 14.913 7.58556C14.8789 7.79807 14.7925 7.99671 14.6492 8.17363C14.3792 7.54599 13.9321 6.97122 13.3427 6.47928C13.5075 6.38965 13.7074 6.33419 13.9182 6.33435ZM5.33074 7.40622C5.92065 7.40622 6.39845 7.88402 6.39845 8.47392C6.39845 9.06383 5.92065 9.54163 5.33074 9.54163C4.74084 9.54163 4.26304 9.06383 4.26304 8.47392C4.26304 7.88402 4.74084 7.40622 5.33074 7.40622ZM10.6693 7.40622C11.2592 7.40622 11.737 7.88402 11.737 8.47392C11.737 9.06383 11.2592 9.54163 10.6693 9.54163C10.0794 9.54163 9.60155 9.06383 9.60155 8.47392C9.60155 7.88402 10.0794 7.40622 10.6693 7.40622ZM10.7965 10.3601C10.4553 11.3568 9.36452 12.2109 8 12.2109C6.63548 12.2109 5.54467 11.3572 5.20354 10.4321C5.81746 10.9302 6.84047 11.286 8 11.286C9.15953 11.286 10.1825 10.9297 10.7965 10.3601Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?reddit\.com/u(?:ser)?/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitch">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="dl7rvm5ctj1b69jfcimtr2ramm399rp" class="octicon"><title id="dl7rvm5ctj1b69jfcimtr2ramm399rp">Twitch</title>
<g clip-path="url(#clip0_202_91859)">
<path d="M2.96249 0L0.399994 3.53274V13.7143H4.20952V16H6.49523L8.78095 13.7143H11.8286L15.6381 9.90476V0H2.96249ZM3.44761 1.52381H14.1143V8.38095L11.8286 10.6667H8.01904L5.73333 12.9524V10.6667H3.44761V1.52381ZM7.25714 3.80952V7.61905H8.78095V3.80952H7.25714ZM11.0667 3.80952V7.61905H12.5905V3.80952H11.0667Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitch\.tv/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitter">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 273.5 222.3" role="img" aria-labelledby="q2i7zhl45yzkxtcqpf8sf0zkxwhk4pt" class="octicon" height="16" width="16"><title id="q2i7zhl45yzkxtcqpf8sf0zkxwhk4pt">Twitter</title><path d="M273.5 26.3a109.77 109.77 0 0 1-32.2 8.8 56.07 56.07 0 0 0 24.7-31 113.39 113.39 0 0 1-35.7 13.6 56.1 56.1 0 0 0-97 38.4 54 54 0 0 0 1.5 12.8A159.68 159.68 0 0 1 19.1 10.3a56.12 56.12 0 0 0 17.4 74.9 56.06 56.06 0 0 1-25.4-7v.7a56.11 56.11 0 0 0 45 55 55.65 55.65 0 0 1-14.8 2 62.39 62.39 0 0 1-10.6-1 56.24 56.24 0 0 0 52.4 39 112.87 112.87 0 0 1-69.7 24 119 119 0 0 1-13.4-.8 158.83 158.83 0 0 0 86 25.2c103.2 0 159.6-85.5 159.6-159.6 0-2.4-.1-4.9-.2-7.3a114.25 114.25 0 0 0 28.1-29.1" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitter\.com/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="youtube">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="skn1edxwzt4tl2d3967o3vasc1ly8vp" class="octicon"><title id="skn1edxwzt4tl2d3967o3vasc1ly8vp">YouTube</title>
<path d="M15.6656 3.7488C15.4816 3.0608 14.9392 2.5184 14.2512 2.3344C13.0032 2 8 2 8 2C8 2 2.9968 2 1.7488 2.3344C1.0608 2.5184 0.5184 3.0608 0.3344 3.7488C-2.38419e-08 4.9968 0 8.4 0 8.4C0 8.4 -2.38419e-08 11.8032 0.3344 13.0512C0.5184 13.7392 1.0608 14.2816 1.7488 14.4656C2.9968 14.8 8 14.8 8 14.8C8 14.8 13.0032 14.8 14.2512 14.4656C14.94 14.2816 15.4816 13.7392 15.6656 13.0512C16 11.8032 16 8.4 16 8.4C16 8.4 16 4.9968 15.6656 3.7488ZM6.4 10.4784V6.3216C6.4 6.0136 6.7336 5.8216 7 5.9752L10.6 8.0536C10.8664 8.2072 10.8664 8.5928 10.6 8.7464L7 10.8248C6.7336 10.9792 6.4 10.7864 6.4 10.4784Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/(user|c)/[^/?]+/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/channel/[a-zA-Z0-9_-]{24}/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/@[^/?]+/?$"></span>
        </span>
        <span data-targets="social-account-editor.iconOptions" data-target="social-account-editor.iconGeneric" data-provider-key="generic">
          <svg title="Social account" aria-label="Social account" role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-link">
    <path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path>
</svg>
        </span>
      <span data-target="social-account-editor.iconSpinner" hidden="">
        <svg style="box-sizing: content-box; color: var(--color-icon-primary);" width="16" height="16" viewBox="0 0 16 16" fill="none" data-view-component="true" class="anim-rotate">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
</svg>
      </span>
      <input type="hidden" data-target="social-account-editor.iconField" name="user[profile_social_accounts][][key]" value="generic">
      <input class="ml-2 form-control flex-auto input-sm" data-target="social-account-editor.urlField" data-action="change:social-account-editor#recognizeUrl" type="text" placeholder="Link to social profile" aria-label="Link to social profile" name="user[profile_social_accounts][][url]" value="">
    </div>
  </social-account-editor>
  <social-account-editor data-nodeinfo-software-url="/settings/nodeinfo_software" data-targets="waiting-form.prerequisites" data-waiting-form-method="waitForRecognition" data-catalyst="">
    <div class="color-fg-muted mt-2 d-flex flex-items-center">
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="facebook">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.3 15.4" role="img" aria-labelledby="rwqhj593l1dejrdmxi3gi01st7zj6em" class="octicon" height="16" width="16"><title id="rwqhj593l1dejrdmxi3gi01st7zj6em">Facebook</title><path d="M14.5 0H.8a.88.88 0 0 0-.8.9v13.6a.88.88 0 0 0 .8.9h7.3v-6h-2V7.1h2V5.4a2.87 2.87 0 0 1 2.5-3.1h.5a10.87 10.87 0 0 1 1.8.1v2.1h-1.3c-1 0-1.1.5-1.1 1.1v1.5h2.3l-.3 2.3h-2v5.9h3.9a.88.88 0 0 0 .9-.8V.8a.86.86 0 0 0-.8-.8z" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:[^.]+\.)?facebook\.com/(?:[^/?]+/?|profile\.php\?id=\d+)$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="hometown">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="s0wcekf9wllperwqoz469t6vter1csq" class="octicon"><title id="s0wcekf9wllperwqoz469t6vter1csq">Hometown</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="hometown"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="f4zaioc442r5rqrmrxbqdytqdwqhhto" class="octicon"><title id="f4zaioc442r5rqrmrxbqdytqdwqhhto">Instagram</title>
<g clip-path="url(#clip0_202_91849)">
<path d="M4.66536 0C2.0927 0 0 2.09464 0 4.66797V11.3346C0 13.9073 2.09464 16 4.66797 16H11.3346C13.9073 16 16 13.9054 16 11.332V4.66536C16 2.0927 13.9054 0 11.332 0H4.66536ZM12.6667 2.66667C13.0347 2.66667 13.3333 2.96533 13.3333 3.33333C13.3333 3.70133 13.0347 4 12.6667 4C12.2987 4 12 3.70133 12 3.33333C12 2.96533 12.2987 2.66667 12.6667 2.66667ZM8 4C10.206 4 12 5.794 12 8C12 10.206 10.206 12 8 12C5.794 12 4 10.206 4 8C4 5.794 5.794 4 8 4ZM8 5.33333C7.29276 5.33333 6.61448 5.61428 6.11438 6.11438C5.61428 6.61448 5.33333 7.29276 5.33333 8C5.33333 8.70724 5.61428 9.38552 6.11438 9.88562C6.61448 10.3857 7.29276 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3857 9.88562 9.88562C10.3857 9.38552 10.6667 8.70724 10.6667 8C10.6667 7.29276 10.3857 6.61448 9.88562 6.11438C9.38552 5.61428 8.70724 5.33333 8 5.33333V5.33333Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(www\.)?instagram\.com/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="linkedin">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="ays3q64fxgdy5de6wr3s7itihemws2v" class="octicon"><title id="ays3q64fxgdy5de6wr3s7itihemws2v">LinkedIn</title>
<g clip-path="url(#clip0_202_91845)">
<path d="M14.5455 0H1.45455C0.650909 0 0 0.650909 0 1.45455V14.5455C0 15.3491 0.650909 16 1.45455 16H14.5455C15.3491 16 16 15.3491 16 14.5455V1.45455C16 0.650909 15.3491 0 14.5455 0ZM5.05746 13.0909H2.912V6.18764H5.05746V13.0909ZM3.96291 5.20073C3.27127 5.20073 2.712 4.64 2.712 3.94982C2.712 3.25964 3.272 2.69964 3.96291 2.69964C4.65236 2.69964 5.21309 3.26036 5.21309 3.94982C5.21309 4.64 4.65236 5.20073 3.96291 5.20073ZM13.0938 13.0909H10.9498V9.73382C10.9498 8.93309 10.9353 7.90327 9.83491 7.90327C8.71855 7.90327 8.54691 8.77527 8.54691 9.67564V13.0909H6.40291V6.18764H8.46109V7.13091H8.49018C8.77673 6.58836 9.47636 6.016 10.52 6.016C12.6924 6.016 13.0938 7.44582 13.0938 9.30473V13.0909V13.0909Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?linkedin\.com/(?:in|company)/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="mastodon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="jbivj97a9a8f2wnlawibw5rzjwctlp0" class="octicon"><title id="jbivj97a9a8f2wnlawibw5rzjwctlp0">Mastodon</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="mastodon"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="reddit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="szbnz6fklkse7j5not3ygquwbb20kwi" class="octicon"><title id="szbnz6fklkse7j5not3ygquwbb20kwi">Reddit</title>
<path d="M9.42117 1C8.30163 1 7.46615 1.91456 7.46615 2.95502V4.75573C5.9979 4.83364 4.65515 5.2251 3.58321 5.83907C3.17013 5.4424 2.61701 5.26625 2.08071 5.26664C1.49925 5.26707 0.904821 5.46856 0.494798 5.92979L0.485414 5.94021L0.47603 5.95064C0.0827037 6.44221 -0.0730397 7.10072 0.0318487 7.75447C0.127638 8.35152 0.473426 8.95088 1.07453 9.34352C1.07059 9.4098 1.05993 9.47469 1.05993 9.54163C1.05993 12.1906 4.17335 14.3463 8 14.3463C11.8266 14.3463 14.9401 12.1906 14.9401 9.54163C14.9401 9.47469 14.9294 9.4098 14.9255 9.34352C15.5266 8.95088 15.8724 8.35152 15.9682 7.75447C16.073 7.10072 15.9173 6.44221 15.524 5.95064L15.5146 5.94021L15.5052 5.92979C15.0951 5.4685 14.5008 5.26707 13.9193 5.26664C13.3829 5.26625 12.8297 5.44225 12.4168 5.83907C11.3449 5.2251 10.0021 4.83364 8.53385 4.75573V2.95502C8.53385 2.43237 8.83559 2.0677 9.42117 2.0677C9.69914 2.0677 10.0378 2.20699 10.5681 2.39302C11.0165 2.55028 11.5999 2.70923 12.3459 2.75691C12.5243 3.2844 13.0197 3.66926 13.6054 3.66926C14.3395 3.66926 14.9401 3.06868 14.9401 2.33463C14.9401 1.60058 14.3395 1 13.6054 1C13.1043 1 12.6699 1.28317 12.4418 1.69442C11.8041 1.65911 11.3356 1.53103 10.9216 1.38579C10.4391 1.21654 9.99576 1 9.42117 1ZM2.08071 6.33435C2.29166 6.33419 2.49208 6.38955 2.65731 6.47928C2.06795 6.97122 1.62078 7.54599 1.35084 8.17363C1.20751 7.99671 1.12113 7.79807 1.08704 7.58556C1.02951 7.22698 1.13682 6.85424 1.30704 6.63359C1.46791 6.46045 1.76166 6.33458 2.08071 6.33435ZM13.9182 6.33435C14.2374 6.33458 14.5321 6.4605 14.693 6.63359C14.8632 6.85424 14.9705 7.22698 14.913 7.58556C14.8789 7.79807 14.7925 7.99671 14.6492 8.17363C14.3792 7.54599 13.9321 6.97122 13.3427 6.47928C13.5075 6.38965 13.7074 6.33419 13.9182 6.33435ZM5.33074 7.40622C5.92065 7.40622 6.39845 7.88402 6.39845 8.47392C6.39845 9.06383 5.92065 9.54163 5.33074 9.54163C4.74084 9.54163 4.26304 9.06383 4.26304 8.47392C4.26304 7.88402 4.74084 7.40622 5.33074 7.40622ZM10.6693 7.40622C11.2592 7.40622 11.737 7.88402 11.737 8.47392C11.737 9.06383 11.2592 9.54163 10.6693 9.54163C10.0794 9.54163 9.60155 9.06383 9.60155 8.47392C9.60155 7.88402 10.0794 7.40622 10.6693 7.40622ZM10.7965 10.3601C10.4553 11.3568 9.36452 12.2109 8 12.2109C6.63548 12.2109 5.54467 11.3572 5.20354 10.4321C5.81746 10.9302 6.84047 11.286 8 11.286C9.15953 11.286 10.1825 10.9297 10.7965 10.3601Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?reddit\.com/u(?:ser)?/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitch">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="rydakhnvw2c2hf51muxbv03v3fxfy8m" class="octicon"><title id="rydakhnvw2c2hf51muxbv03v3fxfy8m">Twitch</title>
<g clip-path="url(#clip0_202_91859)">
<path d="M2.96249 0L0.399994 3.53274V13.7143H4.20952V16H6.49523L8.78095 13.7143H11.8286L15.6381 9.90476V0H2.96249ZM3.44761 1.52381H14.1143V8.38095L11.8286 10.6667H8.01904L5.73333 12.9524V10.6667H3.44761V1.52381ZM7.25714 3.80952V7.61905H8.78095V3.80952H7.25714ZM11.0667 3.80952V7.61905H12.5905V3.80952H11.0667Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitch\.tv/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitter">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 273.5 222.3" role="img" aria-labelledby="2txdf7osyowvxmp1yf8e9m1gnydl2uw" class="octicon" height="16" width="16"><title id="2txdf7osyowvxmp1yf8e9m1gnydl2uw">Twitter</title><path d="M273.5 26.3a109.77 109.77 0 0 1-32.2 8.8 56.07 56.07 0 0 0 24.7-31 113.39 113.39 0 0 1-35.7 13.6 56.1 56.1 0 0 0-97 38.4 54 54 0 0 0 1.5 12.8A159.68 159.68 0 0 1 19.1 10.3a56.12 56.12 0 0 0 17.4 74.9 56.06 56.06 0 0 1-25.4-7v.7a56.11 56.11 0 0 0 45 55 55.65 55.65 0 0 1-14.8 2 62.39 62.39 0 0 1-10.6-1 56.24 56.24 0 0 0 52.4 39 112.87 112.87 0 0 1-69.7 24 119 119 0 0 1-13.4-.8 158.83 158.83 0 0 0 86 25.2c103.2 0 159.6-85.5 159.6-159.6 0-2.4-.1-4.9-.2-7.3a114.25 114.25 0 0 0 28.1-29.1" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitter\.com/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="youtube">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="db4pw1szq5hp6vvrag5ypcwhc8ciga7" class="octicon"><title id="db4pw1szq5hp6vvrag5ypcwhc8ciga7">YouTube</title>
<path d="M15.6656 3.7488C15.4816 3.0608 14.9392 2.5184 14.2512 2.3344C13.0032 2 8 2 8 2C8 2 2.9968 2 1.7488 2.3344C1.0608 2.5184 0.5184 3.0608 0.3344 3.7488C-2.38419e-08 4.9968 0 8.4 0 8.4C0 8.4 -2.38419e-08 11.8032 0.3344 13.0512C0.5184 13.7392 1.0608 14.2816 1.7488 14.4656C2.9968 14.8 8 14.8 8 14.8C8 14.8 13.0032 14.8 14.2512 14.4656C14.94 14.2816 15.4816 13.7392 15.6656 13.0512C16 11.8032 16 8.4 16 8.4C16 8.4 16 4.9968 15.6656 3.7488ZM6.4 10.4784V6.3216C6.4 6.0136 6.7336 5.8216 7 5.9752L10.6 8.0536C10.8664 8.2072 10.8664 8.5928 10.6 8.7464L7 10.8248C6.7336 10.9792 6.4 10.7864 6.4 10.4784Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/(user|c)/[^/?]+/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/channel/[a-zA-Z0-9_-]{24}/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/@[^/?]+/?$"></span>
        </span>
        <span data-targets="social-account-editor.iconOptions" data-target="social-account-editor.iconGeneric" data-provider-key="generic">
          <svg title="Social account" aria-label="Social account" role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-link">
    <path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path>
</svg>
        </span>
      <span data-target="social-account-editor.iconSpinner" hidden="">
        <svg style="box-sizing: content-box; color: var(--color-icon-primary);" width="16" height="16" viewBox="0 0 16 16" fill="none" data-view-component="true" class="anim-rotate">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
</svg>
      </span>
      <input type="hidden" data-target="social-account-editor.iconField" name="user[profile_social_accounts][][key]" value="generic">
      <input class="ml-2 form-control flex-auto input-sm" data-target="social-account-editor.urlField" data-action="change:social-account-editor#recognizeUrl" type="text" placeholder="Link to social profile" aria-label="Link to social profile" name="user[profile_social_accounts][][url]" value="">
    </div>
  </social-account-editor>
  <social-account-editor data-nodeinfo-software-url="/settings/nodeinfo_software" data-targets="waiting-form.prerequisites" data-waiting-form-method="waitForRecognition" data-catalyst="">
    <div class="color-fg-muted mt-2 d-flex flex-items-center">
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="facebook">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.3 15.4" role="img" aria-labelledby="m5iyn7fe84d383yx6lnv9gw0a50grkm" class="octicon" height="16" width="16"><title id="m5iyn7fe84d383yx6lnv9gw0a50grkm">Facebook</title><path d="M14.5 0H.8a.88.88 0 0 0-.8.9v13.6a.88.88 0 0 0 .8.9h7.3v-6h-2V7.1h2V5.4a2.87 2.87 0 0 1 2.5-3.1h.5a10.87 10.87 0 0 1 1.8.1v2.1h-1.3c-1 0-1.1.5-1.1 1.1v1.5h2.3l-.3 2.3h-2v5.9h3.9a.88.88 0 0 0 .9-.8V.8a.86.86 0 0 0-.8-.8z" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:[^.]+\.)?facebook\.com/(?:[^/?]+/?|profile\.php\?id=\d+)$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="hometown">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="c9bk6jm2qru32imbtkajxk64nb56mhc" class="octicon"><title id="c9bk6jm2qru32imbtkajxk64nb56mhc">Hometown</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="hometown"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="taep89ffozqkoucsji4esw80q3r2ahy" class="octicon"><title id="taep89ffozqkoucsji4esw80q3r2ahy">Instagram</title>
<g clip-path="url(#clip0_202_91849)">
<path d="M4.66536 0C2.0927 0 0 2.09464 0 4.66797V11.3346C0 13.9073 2.09464 16 4.66797 16H11.3346C13.9073 16 16 13.9054 16 11.332V4.66536C16 2.0927 13.9054 0 11.332 0H4.66536ZM12.6667 2.66667C13.0347 2.66667 13.3333 2.96533 13.3333 3.33333C13.3333 3.70133 13.0347 4 12.6667 4C12.2987 4 12 3.70133 12 3.33333C12 2.96533 12.2987 2.66667 12.6667 2.66667ZM8 4C10.206 4 12 5.794 12 8C12 10.206 10.206 12 8 12C5.794 12 4 10.206 4 8C4 5.794 5.794 4 8 4ZM8 5.33333C7.29276 5.33333 6.61448 5.61428 6.11438 6.11438C5.61428 6.61448 5.33333 7.29276 5.33333 8C5.33333 8.70724 5.61428 9.38552 6.11438 9.88562C6.61448 10.3857 7.29276 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3857 9.88562 9.88562C10.3857 9.38552 10.6667 8.70724 10.6667 8C10.6667 7.29276 10.3857 6.61448 9.88562 6.11438C9.38552 5.61428 8.70724 5.33333 8 5.33333V5.33333Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(www\.)?instagram\.com/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="linkedin">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="slszjyb73f63atduml0aaoq7ho0pll3" class="octicon"><title id="slszjyb73f63atduml0aaoq7ho0pll3">LinkedIn</title>
<g clip-path="url(#clip0_202_91845)">
<path d="M14.5455 0H1.45455C0.650909 0 0 0.650909 0 1.45455V14.5455C0 15.3491 0.650909 16 1.45455 16H14.5455C15.3491 16 16 15.3491 16 14.5455V1.45455C16 0.650909 15.3491 0 14.5455 0ZM5.05746 13.0909H2.912V6.18764H5.05746V13.0909ZM3.96291 5.20073C3.27127 5.20073 2.712 4.64 2.712 3.94982C2.712 3.25964 3.272 2.69964 3.96291 2.69964C4.65236 2.69964 5.21309 3.26036 5.21309 3.94982C5.21309 4.64 4.65236 5.20073 3.96291 5.20073ZM13.0938 13.0909H10.9498V9.73382C10.9498 8.93309 10.9353 7.90327 9.83491 7.90327C8.71855 7.90327 8.54691 8.77527 8.54691 9.67564V13.0909H6.40291V6.18764H8.46109V7.13091H8.49018C8.77673 6.58836 9.47636 6.016 10.52 6.016C12.6924 6.016 13.0938 7.44582 13.0938 9.30473V13.0909V13.0909Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?linkedin\.com/(?:in|company)/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="mastodon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="1p0leldtpdsry5lnads3ini89exn1pw" class="octicon"><title id="1p0leldtpdsry5lnads3ini89exn1pw">Mastodon</title>
<path d="M8.29202 0.000202252C6.27825 0.00837918 4.27877 0.264357 3.23839 0.744626C3.23839 0.744626 1 1.76482 1 5.23985C1 9.37638 0.997 14.5711 4.70851 15.5757C6.12991 15.9582 7.35227 16.0405 8.33499 15.9838C10.1184 15.883 11.0005 15.3359 11.0005 15.3359L10.9406 14.0165C10.9406 14.0165 9.78462 14.4244 8.35322 14.3776C6.93515 14.3276 5.44121 14.221 5.20853 12.4481C5.1872 12.2832 5.17662 12.1163 5.17728 11.9501C8.18209 12.697 10.7444 12.2754 11.4497 12.19C13.4191 11.9503 15.1336 10.7139 15.3522 9.58385C15.6949 7.80294 15.6661 5.23985 15.6661 5.23985C15.6661 1.76482 13.4316 0.744626 13.4316 0.744626C12.3345 0.231649 10.3058 -0.00797468 8.29202 0.000202252ZM6.13696 2.65066C6.82691 2.66919 7.5087 2.97824 7.92872 3.63106L8.33499 4.32203L8.73995 3.63106C9.58333 2.31808 11.4736 2.40001 12.3729 3.41595C13.2023 4.3825 13.0175 5.00632 13.0175 9.32441V9.32571H11.3859V5.56839C11.3859 3.80952 9.14622 3.74159 9.14622 5.81219V7.9894H7.52505V5.81219C7.52505 3.74159 5.28666 3.80821 5.28666 5.56709V9.32441H3.65117C3.65117 5.00298 3.46969 4.37515 4.29573 3.41595C4.74875 2.90464 5.44701 2.63214 6.13696 2.65066Z" fill="currentColor"></path>
</svg>

              <span class="d-none" data-try-nodeinfo-pattern="^https?://([^/]+)/@([^/?]+)/?$" data-nodeinfo-software="mastodon"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="reddit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="qx9frji8gzq3vqqmfz1xcn3qaaicjgv" class="octicon"><title id="qx9frji8gzq3vqqmfz1xcn3qaaicjgv">Reddit</title>
<path d="M9.42117 1C8.30163 1 7.46615 1.91456 7.46615 2.95502V4.75573C5.9979 4.83364 4.65515 5.2251 3.58321 5.83907C3.17013 5.4424 2.61701 5.26625 2.08071 5.26664C1.49925 5.26707 0.904821 5.46856 0.494798 5.92979L0.485414 5.94021L0.47603 5.95064C0.0827037 6.44221 -0.0730397 7.10072 0.0318487 7.75447C0.127638 8.35152 0.473426 8.95088 1.07453 9.34352C1.07059 9.4098 1.05993 9.47469 1.05993 9.54163C1.05993 12.1906 4.17335 14.3463 8 14.3463C11.8266 14.3463 14.9401 12.1906 14.9401 9.54163C14.9401 9.47469 14.9294 9.4098 14.9255 9.34352C15.5266 8.95088 15.8724 8.35152 15.9682 7.75447C16.073 7.10072 15.9173 6.44221 15.524 5.95064L15.5146 5.94021L15.5052 5.92979C15.0951 5.4685 14.5008 5.26707 13.9193 5.26664C13.3829 5.26625 12.8297 5.44225 12.4168 5.83907C11.3449 5.2251 10.0021 4.83364 8.53385 4.75573V2.95502C8.53385 2.43237 8.83559 2.0677 9.42117 2.0677C9.69914 2.0677 10.0378 2.20699 10.5681 2.39302C11.0165 2.55028 11.5999 2.70923 12.3459 2.75691C12.5243 3.2844 13.0197 3.66926 13.6054 3.66926C14.3395 3.66926 14.9401 3.06868 14.9401 2.33463C14.9401 1.60058 14.3395 1 13.6054 1C13.1043 1 12.6699 1.28317 12.4418 1.69442C11.8041 1.65911 11.3356 1.53103 10.9216 1.38579C10.4391 1.21654 9.99576 1 9.42117 1ZM2.08071 6.33435C2.29166 6.33419 2.49208 6.38955 2.65731 6.47928C2.06795 6.97122 1.62078 7.54599 1.35084 8.17363C1.20751 7.99671 1.12113 7.79807 1.08704 7.58556C1.02951 7.22698 1.13682 6.85424 1.30704 6.63359C1.46791 6.46045 1.76166 6.33458 2.08071 6.33435ZM13.9182 6.33435C14.2374 6.33458 14.5321 6.4605 14.693 6.63359C14.8632 6.85424 14.9705 7.22698 14.913 7.58556C14.8789 7.79807 14.7925 7.99671 14.6492 8.17363C14.3792 7.54599 13.9321 6.97122 13.3427 6.47928C13.5075 6.38965 13.7074 6.33419 13.9182 6.33435ZM5.33074 7.40622C5.92065 7.40622 6.39845 7.88402 6.39845 8.47392C6.39845 9.06383 5.92065 9.54163 5.33074 9.54163C4.74084 9.54163 4.26304 9.06383 4.26304 8.47392C4.26304 7.88402 4.74084 7.40622 5.33074 7.40622ZM10.6693 7.40622C11.2592 7.40622 11.737 7.88402 11.737 8.47392C11.737 9.06383 11.2592 9.54163 10.6693 9.54163C10.0794 9.54163 9.60155 9.06383 9.60155 8.47392C9.60155 7.88402 10.0794 7.40622 10.6693 7.40622ZM10.7965 10.3601C10.4553 11.3568 9.36452 12.2109 8 12.2109C6.63548 12.2109 5.54467 11.3572 5.20354 10.4321C5.81746 10.9302 6.84047 11.286 8 11.286C9.15953 11.286 10.1825 10.9297 10.7965 10.3601Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?reddit\.com/u(?:ser)?/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitch">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="t07s92f4mapnesyqwgu8fbfd70v9e4h" class="octicon"><title id="t07s92f4mapnesyqwgu8fbfd70v9e4h">Twitch</title>
<g clip-path="url(#clip0_202_91859)">
<path d="M2.96249 0L0.399994 3.53274V13.7143H4.20952V16H6.49523L8.78095 13.7143H11.8286L15.6381 9.90476V0H2.96249ZM3.44761 1.52381H14.1143V8.38095L11.8286 10.6667H8.01904L5.73333 12.9524V10.6667H3.44761V1.52381ZM7.25714 3.80952V7.61905H8.78095V3.80952H7.25714ZM11.0667 3.80952V7.61905H12.5905V3.80952H11.0667Z" fill="currentColor"></path>
</g>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitch\.tv/[^/?]+/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="twitter">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 273.5 222.3" role="img" aria-labelledby="9uzw8uaungcn0vx8smcz4e4axzo83di" class="octicon" height="16" width="16"><title id="9uzw8uaungcn0vx8smcz4e4axzo83di">Twitter</title><path d="M273.5 26.3a109.77 109.77 0 0 1-32.2 8.8 56.07 56.07 0 0 0 24.7-31 113.39 113.39 0 0 1-35.7 13.6 56.1 56.1 0 0 0-97 38.4 54 54 0 0 0 1.5 12.8A159.68 159.68 0 0 1 19.1 10.3a56.12 56.12 0 0 0 17.4 74.9 56.06 56.06 0 0 1-25.4-7v.7a56.11 56.11 0 0 0 45 55 55.65 55.65 0 0 1-14.8 2 62.39 62.39 0 0 1-10.6-1 56.24 56.24 0 0 0 52.4 39 112.87 112.87 0 0 1-69.7 24 119 119 0 0 1-13.4-.8 158.83 158.83 0 0 0 86 25.2c103.2 0 159.6-85.5 159.6-159.6 0-2.4-.1-4.9-.2-7.3a114.25 114.25 0 0 0 28.1-29.1" fill="currentColor"></path></svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?twitter\.com/([^/?]+)/?$"></span>
        </span>
        <span hidden="" data-targets="social-account-editor.iconOptions" data-provider-key="youtube">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" role="img" aria-labelledby="laow6kpxud218un3xz7m07tbmfek0q6" class="octicon"><title id="laow6kpxud218un3xz7m07tbmfek0q6">YouTube</title>
<path d="M15.6656 3.7488C15.4816 3.0608 14.9392 2.5184 14.2512 2.3344C13.0032 2 8 2 8 2C8 2 2.9968 2 1.7488 2.3344C1.0608 2.5184 0.5184 3.0608 0.3344 3.7488C-2.38419e-08 4.9968 0 8.4 0 8.4C0 8.4 -2.38419e-08 11.8032 0.3344 13.0512C0.5184 13.7392 1.0608 14.2816 1.7488 14.4656C2.9968 14.8 8 14.8 8 14.8C8 14.8 13.0032 14.8 14.2512 14.4656C14.94 14.2816 15.4816 13.7392 15.6656 13.0512C16 11.8032 16 8.4 16 8.4C16 8.4 16 4.9968 15.6656 3.7488ZM6.4 10.4784V6.3216C6.4 6.0136 6.7336 5.8216 7 5.9752L10.6 8.0536C10.8664 8.2072 10.8664 8.5928 10.6 8.7464L7 10.8248C6.7336 10.9792 6.4 10.7864 6.4 10.4784Z" fill="currentColor"></path>
</svg>

            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/(user|c)/[^/?]+/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/channel/[a-zA-Z0-9_-]{24}/?$"></span>
            <span class="d-none" data-provider-pattern="^https://(?:www\.)?youtube\.com/@[^/?]+/?$"></span>
        </span>
        <span data-targets="social-account-editor.iconOptions" data-target="social-account-editor.iconGeneric" data-provider-key="generic">
          <svg title="Social account" aria-label="Social account" role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-link">
    <path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path>
</svg>
        </span>
      <span data-target="social-account-editor.iconSpinner" hidden="">
        <svg style="box-sizing: content-box; color: var(--color-icon-primary);" width="16" height="16" viewBox="0 0 16 16" fill="none" data-view-component="true" class="anim-rotate">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
</svg>
      </span>
      <input type="hidden" data-target="social-account-editor.iconField" name="user[profile_social_accounts][][key]" value="generic">
      <input class="ml-2 form-control flex-auto input-sm" data-target="social-account-editor.urlField" data-action="change:social-account-editor#recognizeUrl" type="text" placeholder="Link to social profile" aria-label="Link to social profile" name="user[profile_social_accounts][][url]" value="">
    </div>
  </social-account-editor>

              </div>

                  <div class="col-12 settig_heading mb-5 mt-4 d-flex flex-column align-items-center">
                    <h1 class="shadow py-2 px-2">Security Data</h1>

                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="emailUpdate" class="text-left text-md-center w-100">Current Email</label>
                    <input type="email" id="emailUpdate" name="cemail" class="form-control" required value="<?php echo $userInfo['email'] ?>">
                  </div>
                  <div class="form-group col-md-6 mb-md-4">
                    <label for="newEmailUpdate" class="text-left text-md-center w-100">new Email</label>
                    <input type="email" id="newEmailUpdate" name="nemail" class="form-control" value="">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mx-auto">save</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>






    <?php

  } elseif ($page == 'avatupdate') {

    include 'init.php';

    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : header('location: users.php');


    $imageName = $_FILES['avatar']['name'];
    $imageSize = $_FILES['avatar']['size'];
    $imageTmp = $_FILES['avatar']['tmp_name'];
    $imageType = $_FILES['avatar']['type'];

    $imageAllowedExtension = array("jpeg", "jpg", "png");
    $Infunc = explode('.', $imageName);
    $imageExtension = strtolower(end($Infunc));
    $formErrors = array();
    if (empty($imageName)) {
      $formErrors[] = 'user avatar  cant be empty';
    }
    if (!empty($imageName) && !in_array($imageExtension, $imageAllowedExtension)) {
      $formErrors[] = 'avatar Extension is not allowed';
    }
    if ($imageSize > 4194304) {
      $formErrors[] = 'avatar size cant be empty';
    }


    foreach ($formErrors as $error) {
    ?>
      <div class="container">
        <?php
        echo '<div class="alert alert-danger" style="width: 50%;">' . $error . '</div>';
        ?>

      </div>
    <?php
    }



    if (empty($formErrors)) {
      $image = rand(0, 100000) . '_' . $imageName;
      move_uploaded_file($imageTmp, $avatar . '/' . $image);
      $stmt = $conn->prepare("UPDATE users SET image = ? WHERE id = ? LIMIT 1 ");
      $stmt->execute(array($image, $id));
    ?>

    <?php
      header('location: ' . $_SERVER['HTTP_REFERER']);
    }
  } elseif ($page == 'avatupdate') {

    include 'init.php';

    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : header('location: index.php');


    $imageName = $_FILES['avatar']['name'];
    $imageSize = $_FILES['avatar']['size'];
    $imageTmp = $_FILES['avatar']['tmp_name'];
    $imageType = $_FILES['avatar']['type'];

    $imageAllowedExtension = array("jpeg", "jpg", "png");
    $Infunc = explode('.', $imageName);
    $imageExtension = strtolower(end($Infunc));
    $formErrors = array();
    if (empty($imageName)) {
      $formErrors[] = 'user avatar  cant be empty';
    }
    if (!empty($imageName) && !in_array($imageExtension, $imageAllowedExtension)) {
      $formErrors[] = 'avatar Extension is not allowed';
    }
    if ($imageSize > 4194304) {
      $formErrors[] = 'avatar size cant be empty';
    }


    foreach ($formErrors as $error) {
    ?>
      <div class="container">
        <?php
        echo '<div class="alert alert-danger" style="width: 50%;">' . $error . '</div>';
        ?>

      </div>
    <?php
    }



    if (empty($formErrors)) {
      $image = rand(0, 100000) . '_' . $imageName;
      move_uploaded_file($imageTmp, $avatars . '/' . $image);
      $stmt = $conn->prepare("UPDATE players SET image = ? WHERE id = ? LIMIT 1 ");
      $stmt->execute(array($image, $id));
    ?>

      <?php
      header('location: ' . $_SERVER['HTTP_REFERER']);
    }
  } elseif ($page == 'update') {


    $pageTitle = 'update page';
    include 'init.php';
    $id = $_POST['id'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->execute(array($id));
    $checkIfuser = $stmt->rowCount();


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nemail = $_POST['nemail'];
      $cemail = $_POST['cemail'];

      $username = $_POST['username'];
      $pass = $_POST['password'];
      $cpass = $_POST['cpassword'];
      $phone = $_POST['phone'];
      $fname = $_POST['fname'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $zip = $_POST['zip'];
      $adress = $_POST['adress'];
      $stats = $_POST['stats'];

      $br = $_POST['br'];

      $formErrors = array();
      if (empty($username)) {
        $formErrors[] = 'username is required';
      }
      if (empty($nemail)) {
        $email = $cemail;
      }
      if (!empty($nemail)) {
        $email = $nemail;
      }
      if (empty($pass)) {
        $stmt = $conn->prepare("SELECT password FROM users WHERE id = ? LIMIT 1");
        $stmt->execute(array($id));
        $passs = $stmt->fetch();

        $password = $passs['password'];
      }
      if (!empty($pass)) {
        if ($pass != $cpass) {
          $formErrors[] = 'passwords not match';
        } else {
          $password = sha1($_POST['cpassword']);
        }
      }

      if (empty($email)) {
        $formErrors[] = 'email is required';
      }
      if (empty($adress)) {
        $formErrors[] = 'adress is required';
      }
      if (empty($city)) {
        $formErrors[] = 'city is required';
      }



      foreach ($formErrors as $error) {
      ?>
        <div class="container">
          <?php
          echo '<div class="alert alert-danger" style="width: 50%;">' . $error . '</div>';
          ?>

        </div>
      <?php
        // header('refresh:4;url=' . $_SERVER['HTTP_REFERER']);
      }
      ?>
      <div class="container" style="text-align:center">
        <a href="webpage.php?page=myprofile&id=<?php echo $id ?>"> back</a>
      </div>
<?php

      if (empty($formErrors)) {
        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ?,  fname = ?, phone = ?,city = ?, email =?, country = ?, stats= ?, adress= ?, zip =?, br =?
                                                             WHERE id= ? LIMIT 1  ");
        $stmt->execute(array($username, $password, $fname, $phone, $city, $email, $country, $stats, $adress, $zip, $br, $id));
        header('location: ' . $_SERVER['HTTP_REFERER']);
      }
    }
  } else {
    header('location:index.php');
  }

  echo "</div>";
  include $tpl . 'footer.php';
} else {
  header('location: logout.php');
  exit();
}
?>

<?php
ob_end_flush();
?>