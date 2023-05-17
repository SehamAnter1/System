<?php
ob_start();
session_start();
require_once 'phpqrcode/qrlib.php';


if (isset($_SESSION['clientid'])) {

  $pageTitle = "Wild & Loud - Dashboard";
  include 'init.php';
  $_SESSION['time'] = '0';
  $stmt = $conn->prepare("SELECT * FROM pages WHERE id = 1");
  $stmt->execute();
  $page = $stmt->fetch();


  $stmt = $conn->prepare("SELECT * FROM users WHERE id  =? ");
  $stmt->execute(array($_SESSION['clientid']));
  $user = $stmt->fetch();

  $place = 0;
  $stmt2 = $conn->prepare("SELECT * FROM users WHERE  type = 0 ORDER BY points DESC ");
  $stmt2->execute();
  $sd = $stmt2->fetchAll();
  $me = 0;
  foreach ($sd as $s) {
    if ($s['id'] != $_SESSION['clientid']) {
      $place += 1;
    }
    if ($s['id'] == $_SESSION['clientid']) {
      $me = $place + 1;
    }
  }
?>
  <div class="content-ad-show">

  </div>



  <!-- right content model -->
  <div class="content dash-content">
    <div class="dashboard lf-pd" id="dashboard">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="box">
              <div class="icon money-icon">
                <img src="<?php echo $images ?>click.png" alt="">
              </div>
              <div class="details">
                <p> total hits</p>

                <span class="nbr"><?php echo $user['hits']; ?></span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <div class="icon users-icon">
                <img src="<?php echo $images ?>place.png" alt="">

              </div>
              <div class="details">
                <a href="webpage.php?page=comp">
                  <p> your place</p>
                </a>
                <span class="nbr"><?php echo $me; ?></span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="icon users-icon">
                <img src="<?php echo $images ?>ad.png" alt="">

              </div>
              <div class="details">
                <p> click credit</p>
                <span class="nbr"><?php echo Total($conn, 'players') ?></span>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="content-header">
              <span class="dashboard-overview">Your submit</span>
            </div>
          </div>
          <div class="col-md-12">
            <form method="post" id="adform">
              <div class="msg">

              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">service</label>
                    <div class="col-sm-9">
                      <?php
                      $stmt = $conn->prepare("SELECT * FROM services  ORDER BY id DESC");
                      $stmt->execute();
                      $services = $stmt->fetchAll();
                      ?>
                      <select class="form-control" name="service" id="service">
                        <?php
                        foreach ($services as $service) {
                        ?>
                          <option value="<?php echo $service['id'] ?>"><?php echo $service['name'] ?></option>

                        <?php
                        }
                        ?>
                        <option value="99">Free points</option>

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">service type</label>
                    <div class="col-sm-9">
                      <?php
                      $stmt = $conn->prepare("SELECT * FROM services  ORDER BY id DESC");
                      $stmt->execute();
                      $services = $stmt->fetchAll();
                      ?>
                      <select class="form-control" name="servicetype" id="servicetype">
                        <option value="default">select service type first</option>


                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">total click</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" id="mpr" name="tclicks" class="form-control" placeholder="Total clicks" aria-label="Total clicks" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <a id="on" class="btn btn-outline-secondary" style="height:unset !important;border:1px solid rgba(0,0,0,.1);color:white" type="a">on</a>
                          <a id="off" class="btn btn-outline-secondary" style="height:unset !important;border:1px solid rgba(0,0,0,.1);color:white" type="a">off</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


                <div class="col-md-5">
                  <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">points</label>
                    <div class="col-sm-10">
                      <input type="text" name="points" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Points">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">url / account</label>
                    <div class="col-sm-10">
                      <input type="text" name="uacc" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Your account url">

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Daily Clicks</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="text" id="mpr2" name="dclicks" class="form-control" placeholder="Daily Clicks" aria-label="Daily Clicks" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <a id="on2" class="btn btn-outline-secondary" style="height:unset !important;border:1px solid rgba(0,0,0,.1);color:white" type="button">on</a>
                          <a id="off2" class="btn btn-outline-secondary" style="height:unset !important;border:1px solid rgba(0,0,0,.1);color:white" type="a">off</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">

                  <div class="form-group row">
                    <div class="col-sm-9 col-xs-12">
                      <input type="a" class="btn btn-primary" id="mbeadbtn99003f3svb" value="submit">
                    </div>
                  </div>

                </div>
              </div>
          </div>
          </form>
        </div>
        <?php
        $stmt = $conn->prepare("SELECT * FROM ads WHERE userid = ?");
        $stmt->execute(array($_SESSION['clientid']));
        $ads = $stmt->fetchAll();
        ?>
        <div class="col-md-12">
          <div class="management-body dash-table">
            <div class="default-management-table">
              <table class="table" id="users-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">social</th>
                    <th scope="col">link</th>
                    <th scope="col"> points</th>
                    <th scope="col">hits</th>
                    <th scope="col">stats</th>
                    <th scope="col">action</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($ads as $ad) {
                  ?>
                    <tr style="background:white;margin:20px 0">
                      <td>
                        <?php echo $ad['id'] ?>
                      </td>
                      <?php

                      $stmt = $conn->prepare("SELECT * FROM services WHERE id = ?");
                      $stmt->execute(array($ad['service']));
                      $sv = $stmt->fetch();
                      ?>
                      <td>
                        <p> <img src="<?php echo $images . $sv['image'] ?>" alt="icon" style="width:20px;height:20px">
                          <?php echo $sv['name'] ?></p>
                      </td>
                      <td>
                        <a href="<?php echo $ad['link'] ?>" style="font-size:14px;color:rgba(0,0,0,.6)">view</a>
                      </td>
                      <td>
                        <?php
                        if ($ad['tclicks'] == 'default') {
                        ?>
                          <p> <?php echo $ad['points'] ?> / Unlimted</p>
                        <?php
                        } else {
                        ?>

                        <?php
                        }
                        ?>

                      </td>
                      <?php
                      $stmt = $conn->prepare("SELECT * FROM hits WHERE ad  = ?");
                      $stmt->execute(array($ad['id']));
                      $tt = $stmt->rowCount();

                      if ($ad['dclicks'] == 'default') {
                      ?>
                        <td>
                          <p><?php echo $ad['dclicks'] ?> </p>
                        </td>
                        <?php
                      } else {
                        if ($tt >= $ad['dclicks']) {
                          $stmt = $conn->prepare("UPDATE ads SET visibility = 0 WHERE id = ?");
                          $stmt->execute(array($ad['id']));
                        ?>
                          <td>
                            <p><?php echo $tt ?>/<?php echo $ad['dclicks'] ?></p>
                          </td>
                        <?php
                        } else {
                        ?>
                          <td>
                            <p><?php echo $tt ?>/ Unlimted</p>
                          </td>
                        <?php
                        }
                        ?>

                      <?php
                      }
                      ?>


                      <td class="ds99d">
                        <?php
                        if ($ad['status'] == 1) {
                          echo 'ON';
                        } else {
                          echo 'OFF';
                        }
                        ?>
                      </td>

                      <td>
                        <a style="font-size:13px;color:green;cursor:pointer" class="fas fa-edit ad-edit" ad=<?php echo $ad['id'] ?>></a>
                        <a style="font-size:13px;color:red;cursor:pointer;margin: 0px 15px !important" class="ad-delete fas fa-trash" ad=<?php echo $ad['id'] ?>></a>
                        <a style="font-size:13px;color:orange;cursor:pointer" class="visible_update fas fa-eye" ad=<?php echo $ad['id'] ?> status="<?php echo $ad['status'] ?>"></a>
                      </td>

                    </tr>
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

  include $tpl . 'footer.php';
} else {

  $noNavbar = '';
  $pageTitle = 'Wild & Loud - home page';
  include 'init.php';

  $ref = isset($_GET['ref']) ? $_GET['ref'] : 'empty';
  $stmt = $conn->prepare("SELECT * FROM pages WHERE id = 1");
  $stmt->execute();
  $page = $stmt->fetch();

?>

  <div class="register-page login-page" id="fpasswordpage" style="display:none">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-4">
          <div class="login">

            <form class="#" action="" method="post" style="text-align:left;width:90%;padding-bottom:153px" id="sforgotpasspage">

              <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

              <h1 style="color:black;margin:27px 0;font-size:35px;text-transform:capitalize;font-weight:bold">Forgot Password</h1>
              <p>Enter your Email to receive the Authenticator code </p>
              <div class="err-msg">

              </div>


              <div class="form-group">
                <input type="text" name="email" class="form-control col-md-12" placeholder="Email adress" required="required">
              </div>


              <div class="form-group">
                <input id="" type="a" class="btn btn-primary" value="confirm" style="text-transform: capitalize;border:none;width:60%;text-align:center !important;text-transform:capitalize;margin:auto !important">

              </div>


            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="img" style="background-image:url(<?php echo $images ?>accountpage.png)">
            <div class="d">
              <h1>hello, back</h1>
              <p>to keep connected with us please login with your personel info </p>
              <a style="cursor:pointer" id="swtichtologin">sign in</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="register-page login-page" id="registerpage" style="display:none;">
    <div class="container">
      <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

      <div class="row justify-content-center">
        <div class="col-md-5" style="padding-bottom:90px">
          <div class="img" style="background-image:url(<?php echo $images ?>g.png);padding-bottom:40px">
            <div class="d">
              <h1>hello, back</h1>
              <p>to keep connected with us please login with your personel info </p>
              <a style="cursor:pointer" id="swtichtologin">sign in</a> <br><br>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="login">

            <form class="#" action="" method="post" style="text-align:center;width:90%" id="registerform">


              <h1 style="color:black;margin:27px 0;font-size:35px;text-transform:capitalize;font-weight:bold">create account</h1>
              <div class="err-msg">

              </div>


              <div class="form-group bt-mg">
                <input id="ffname" type="tewt" name="fname" class="form-control col-md-12" placeholder="name " autocomplete="new-password" required="required">
              </div>
              <div class="form-group">
                <input id="femail" type="text" name="email" class="form-control col-md-12" placeholder="Email adress" required="required">
              </div>
              <div class="form-group bt-mg" style="margin-bottom:20px">
                <input id="ffphone" type="text" name="phone" class="form-control col-md-12" placeholder="phone " autocomplete="new-password" required="required">
              </div>

              <input type="hidden" name="comref" class="form-control col-md-12" value="<?php echo $ref ?>" autocomplete="new-password" required="required">


              <div class="form-group">
                <input onclick="validateform()" id="registerbtn" type="a" class="btn btn-primary" value="register" style="text-transform: capitalize;border:none;width:60%;text-align:center !important;text-transform:capitalize;margin:auto !important">

              </div>


            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="login-page" id="signinpage" style="display:none;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="login" style="border-radius:5px 0px 0px 5px !important">

            <form class="#" action="" method="post" style="text-align:center;" id="loginform">
              <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

              <h1 style="color:black;font-weight: bold;text-transform: capitalize;margin:40px 0">sign in</h1>
              <div class="form-group">
                <div class="err-msg">

                </div>
              </div>

              <div class="form-group">
                <input type="text" name="email" class="form-control col-md-12" placeholder="Email adress" required="required">
              </div>
              <div class="form-group bt-mg">
                <input type="password" name="password" class="form-control col-md-12" placeholder="Authenticator code " autocomplete="new-password" required="required">
              </div>
              <div class="new-acc" style="margin-bottom:10px">
                <a id="forget-p" class="new-acc" style="cursor: pointer;color:rgba(0,0,0,.6);text-transform:capitalize;font-size:14px">forget your password</a>
              </div>
              <div class="form-group">
                <input type="a" class="btn btn-primary" id="login_botton" value="sign in" style="text-transform: capitalize;border:none;width:60%;text-align:center !important;text-transform:capitalize;margin:auto !important">

              </div>
              <?php
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $password = sha1($_POST['password']);

                $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1 ");
                $stmt->execute(array($email, $password));
                $clientExist = $stmt->rowCount();
                $client = $stmt->fetch();
                if ($clientExist > 0) {
                  $_SESSION['client'] = $client['username'];
                  $_SESSION['clientid'] = $client['id'];
                  $_SESSION['email'] = $client['email'];


                  header('location: index.php');
                } else {
              ?>
                  <div class="alert alert-danger">
                    Email or password are wrong
                  </div>
              <?php
                }
              }
              ?>

            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img" style="border-radius: 0px 5px 5px 0px !important; background-image:url(<?php echo $images ?>accountpage.png)">
            <div class="d">
              <h1>hello friend</h1>
              <p>enter your personel details and start journey with us</p>
              <a id="swtichtoregiter">register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="homepage home__page" id="homepage" style="background-image: url(<?php echo $images ?>bg.png);background-size:cover;object-fit:cover;padding-bottom:180px">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-12">
          <div class="tbbar navigation__bar" style="margin-top:40px">
            <nav class="navbar navbar-expand-md px-sm-5" style="z-index: 99999;">
              <a class="navbar-brand" href="index.php">
                <img src="<?php echo $logo . $page['logo'] ?>" style="width:200px" alt="">
              </a>
              <a class="navbar-toggler" type="a" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fas fa-bars" style="color:var(--mainColor)"></span>
              </a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link" style="cursor: pointer" id="signin-botton">login</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" style="cursor: pointer" id="Regsiter-botton">register</a>
                  </li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container  ">
      <div class="row ">
        <div class="col-12 col-sm-12 col-md-7 col-lg-5  home__intro">
          <div class="content ">
            <h1>let get viral</h1>
            <p>get your first <?php echo $page['reg_points'] ?> point</p>
          </div>
          <a style="cursor:pointer;" id="mppf93f">try for free now</a>

        </div>
      </div>
    </div>
  </section>
  <section class="services">
    <div class="container">          
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hd" style="margin-bottom:60px">
            <h1>what de we provide</h1>
          </div>
        </div>
        <div class="col-md-12">

        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>facebook</h3>
                <p>Likes, share, Followers</p>
                <p>post likes, post share</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>fb.png" alt="service" style="width:100%">
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>Youtube</h3>
                <p>views, video likes, subscribe</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>yt.webp" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>twitter</h3>
                <p>Followers, tweets ,retweets, Likes</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>twt.png" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>tiktok</h3>
                <p>Followers, video likes ,video views</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>tik.png" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>twitch</h3>
                <p>Followerss</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>tch.png" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>reddit</h3>
                <p>posys upvotes</p>
                <p>comments upvotes</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>red.jpg" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>website hits</h3>
                <p>Earn money from viewing sites</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>red.jpg" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="dsm">
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>pinterest</h3>
                <p>Followers, rePins</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>pt.png" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>soundCloud</h3>
                <p>Followers, Likes, Music plays</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>sd.png" alt="service" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box">
              <div class="left">
                <h3>instagram</h3>
                <p>Followers, photo likes</p>
              </div>
              <div class="right">
                <img src="<?php echo $images ?>is.webp" alt="service" style="width:100%">
              </div>
            </div>
          </div>
        </div>
     
      </div>
     </div>
      <div class="journey py-5"  style="background-image:url(<?php echo $images ?>bg2.png);background-size:cover">
        <div class="row py-5 justify-content-center">
          <div class="col-md-6">
            <div class="hd px-5 mx-auto" style="width: fit-content;">
              <h1>our journey</h1>
            </div>
          </div>
          <div class="col-md-12">

          </div>
          <br><br>
          <div class="d-flex justify-content-center align-items-center col-md-4">
            <div class="tel">
              <p>12.15454</p>
              <h3>user actitvity</h3>
            </div>
          </div>
          <div class="d-flex  justify-content-center align-items-center  col-md-4">
            <div class="tel">
              <p>12.15454</p>
              <h3>user actitvity</h3>
            </div>
          </div>

          <div class="d-flex  justify-content-center align-items-center  col-md-4">
            <div class="tel">
              <p>12.15454</p>
              <h3>user actitvity</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php
  include $tpl . 'footer.php';
}
ob_end_flush();
?>