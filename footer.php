
<div class="guidepage contact-page login-page" id="mappage" style="display:none;top:0;position:fixed;overflow:auto">
  <?php

            $stmt = $conn->prepare("SELECT * FROM pages  WHERE id = 1");
                      $stmt->execute();
                      $page = $stmt->fetch();

   ?>
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-6">
        <div class="login" style="position:relative;margin:50px auto;text-align:center">
          <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

          <img src="<?php echo $images ?>contactbg.png" style="width:100%;height:120px" alt="">
          <h1 style="color:black);margin:27px 0;font-size:25px;text-transform:capitalize;font-weight:bold">sitemap</h1>
          <div class="ds" style="margin: 30px !important;position:relative;overflow:hidden">
            <?php echo $page['map'] ?>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>



<div class="guidepage contact-page login-page" id="guidepage" style="display:none;top:0;position:fixed;overflow:auto">
  <?php

            $stmt = $conn->prepare("SELECT * FROM pages  WHERE id = 1");
                      $stmt->execute();
                      $page = $stmt->fetch();

   ?>
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-6">
        <div class="login" style="position:relative;margin:50px auto;text-align:center">
          <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

          <img src="<?php echo $images ?>contactbg.png" style="width:100%;height:120px" alt="">
          <h1 style="color:black);margin:27px 0;font-size:25px;text-transform:capitalize;font-weight:bold">guide</h1>
          <div class="ds" style="margin: 30px !important">
            <?php echo $page['guide'] ?>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>


<div class="faqpage contact-page login-page" id="tmpage" style="display:none;top:0;position:fixed;overflow:auto">
  <?php

            $stmt = $conn->prepare("SELECT * FROM pages  WHERE id = 1");
                      $stmt->execute();
                      $page = $stmt->fetch();

   ?>
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-6">
        <div class="login" style="position:relative;margin:50px auto;text-align:center">
          <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

          <img src="<?php echo $images ?>contactbg.png" style="width:100%;height:120px" alt="">
          <h1 style="color:black);margin:27px 0;font-size:25px;text-transform:capitalize;font-weight:bold">Terms & Confitions</h1>
          <div class="ds" style="margin: 30px !important">
            <?php echo $page['tm'] ?>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>





<div class="faqpage contact-page login-page" id="faqpage" style="display:none;top:0;position:fixed;overflow:auto">
  <?php

            $stmt = $conn->prepare("SELECT * FROM faq  ORDER BY id DESC");
                      $stmt->execute();
                      $posts = $stmt->fetchAll();

   ?>
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-6">
        <div class="login" style="position:relative;margin:50px auto;text-align:center">
          <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>

          <img src="<?php echo $images ?>contactbg.png" style="width:100%;height:120px" alt="">
          <h1 style="color:black);margin:27px 0;font-size:25px;text-transform:capitalize;font-weight:bold">Frequently Asked Questions</h1>
          <?php
            foreach ($posts as $post)
            {
              ?>
              <div class="acc" style="margin: 10px 40px">
              <h3><?php echo $post['qst'] ?></h3>
              <div class="content-faq" style="display: none;">
                <div class="content-inner">
                  <p style="text-align:left"><?php echo $post['ans'] ?></p>

                </div>
              </div>
            </div>
              <?php
            }
           ?>

        </div>

      </div>

    </div>
  </div>
</div>



<div class="contact-page login-page" id="contactpages" style="display:none;top:0;position:fixed;overflow:auto">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-7">
        <div class="login">
          <img src="<?php echo $images ?>contactbg.png" style="width:100%;height:120px" alt="">
                            <form class="#" style="width:70%" id="contact-from" method="post" style="text-align:center" style="position:relative">
                              <i class="fas fa-times close" id="close" style="position:absolute;padding:10px;margin:30px;top:0;left:0;cursor:pointer;background:white;"></i>
                              <h1 style="color:black);margin:27px 0;font-size:35px;text-transform:capitalize;font-weight:bold">contact us</h1>
                              <div class="err-msg2">

                              </div>
                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">username</label>
                              <div class="col-sm-9">
                              <input type="text"  name="username" class="form-control form-control-sm" id="colFormLabelSm" placeholder="username">
                              </div>
                              </div>

                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">email</label>
                              <div class="col-sm-9">
                              <input type="text"  name="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="email">
                              </div>
                              </div>
                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">title</label>
                              <div class="col-sm-9">
                              <input type="text"  name="title" class="form-control form-control-sm" id="colFormLabelSm" placeholder="title">
                              </div>
                              </div>

                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">email</label>
                              <div class="col-sm-9">
                                <textarea name="message" class="form-control"></textarea>
                              </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-md-3">

                                </div>
                              <div class="col-sm-9">
                                <input type="bottom" id="contact-btn" name="" value="submit" class="btn btn-primary" style="text-align:center !important;border:none !important">
                              </div>
                              </div>
                            </form>
        </div>
      </div>

    </div>
  </div>
</div>
<footer class="footer" id="footer"  style="background-image:url(<?php echo $images ?>footerbg.png);margin-top:70px;padding-bottom:40px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <ul>
            <li class="logo">
              <a href="index.php">
                <img src="<?php echo $logo ?>logo.png" style="width:150px" alt="">
              </a>
            </li style="margin-right:15px">
            <li style="text-align:right !important" >
              <a id="guide" style="text-align:right !important" >
                guide
              </a>
            </li>
            <li >
              <a id="map">
              sitemap
              </a>
            </li>
            <li >
              <a id="faqpage-btn">
          FAQ
              </a>
            </li>
            <li >
              <a id="tm" >
              terms & conditions
              </a>
            </li>

            <li  class="contact">
              <a id="contactpage-btn">
              contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo $js ?>main.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js"></script>
<script>
  AOS.init();
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

</body>
</html>
