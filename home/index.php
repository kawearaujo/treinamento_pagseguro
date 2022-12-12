<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>E-Commerce! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <style>
    body {
    background:url('images/gifbg2.gif') 100% 100% fixed;
    background-size: cover;
    height: 100vh;
    padding:0;
    margin:0;

    }

    h1 {
      /* color: rgb(49, 78, 125); */
      /* color:rgba(255, 255, 255,50%) */
      margin-top: 0px;
      padding: 30px 0px 30px 0px;
    }

    span {
      cursor: pointer;
      padding: 10px 10px 10px 10px;
    }

    /* span : {
      text-decoration: underline;
      background-color: rgb(49, 78, 125);
      color: white;
      border-radius: 5px;
      border: 2px solid rgb(49, 78, 125);
    } */
  </style>

</head>

<body class="nav-md">
  <div style="width:96vw; justify-content:end; display:flex;margin-top:10px ; position:fixed">
    <iframe style="display:flex;" width="300" height="80" src="https://www.youtube.com/embed/q55qNEKQLG0?autoplay=1&controls=0"  frameborder="0" allow="autoplay;clipboard-write;" ></iframe>
  </div>
  <!-- <img src="images/gifbg2.gif"  height="100" cover alt="This will display an animated GIF"> -->
  <div class="body container main_container mx-auto" style="width:60vw ;">
    <div class="tophead mx-auto text-center bg-dark rounded-lg" style="width:100%;">
      <h1 class="text-light">Lojinha Geek</h1>
  

    </div>

    <!-- // DIV - Carousel -->
    <div style="display:flex ;justify-content:center ">
      <div class="carousel" style="width:min-content;">

        <!-- // Carousel -->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
              <img src="images/4.jpg" class="d-block " alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="images/3.jpg" class="d-block " alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="images/5.jpg" class="d-block " alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(21%) sepia(11%) saturate(2286%) hue-rotate(177deg) brightness(91%) contrast(89%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(21%) sepia(11%) saturate(2286%) hue-rotate(177deg) brightness(91%) contrast(89%);"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- // Carousel -->

      </div>
    </div>
    <!-- // DIV - Carousel -->

    <div class="collections rounded-lg" style="background-color:rgba(249, 249, 249, 50%) ;">
      <div class="row titles">

      </div>
      <div class="itens rounded-lg">
        <!-- modificar -->
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="background-color: transparent !important;">

            <li role="presentation" class="rounded-lg">
              <a href="#tab_dados" id="home-tab" class="active" role="tab" aria-selected="true" data-toggle="tab" aria-expanded="">Canecas <i class="fas fa-user"></i></a>
            </li>
            <li role="presentation" class="rounded-lg"><a href="#tab_planos" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Camisas <i class="fas fa-books"></i></a>
            </li>
          </ul>

          <!-- end TABS -->

          <div id="myTabContent" class="tab-content">

            <div role="tabpanel" class="tab-pane fade active in show" id="tab_dados" aria-labelledby="home-tab">
              <table class="table table-hover">
                <tbody>
                  <div class="x_content">

                    <div class="row">

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first rounded-lg" onclick="(window.location='e_commerce.php?id=1')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%;display: block;" src="images/1.jpg" alt="image" />
                            <div class="mask">
                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Brook <b>R$ 33,00</b></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=2')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/2.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Luffy <b>R$ 34,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=3')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/3.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Franky <b>R$ 35,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=4')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/4.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Sabo <b>R$ 36,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=5')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/5.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Zoro <b>R$ 39,00</b></p>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=6')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/6.jpg" alt="image" />
                            <div class="mask no-caption">

                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Veggeta <b>R$ 27,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=7')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/7.jpg" alt="image" />
                            <div class="mask no-caption">

                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Seiya <b>R$ 26,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=8')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/8.jpg" alt="image" />
                            <div class="mask no-caption">

                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Caneca do Meliodas <b>R$ 28,00</b></p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </tbody>
              </table>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tab_planos" aria-labelledby="profile-tab">
              <table class="table table-hover">
                <tbody>
                  <div class="x_content">

                    <div class="row">

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=9')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%;display: block;" src="images/1c.jpeg" alt="image" />
                            <div class="mask">
                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Brook <b>R$ 33,00</b></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=10')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/2c.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Luffy <b>R$ 34,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=11')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/3c.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Franky <b>R$ 35,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=12')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/4c.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Sabo <b>R$ 36,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=13')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/5c.jpg" alt="image" />
                            <div class="mask">


                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Zoro <b>R$ 39,00</b></p>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=14')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/6c.jpg" alt="image" />
                            <div class="mask no-caption">

                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Veggeta <b>R$ 27,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=15')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/7c.jpg" alt="image" />
                            <div class="mask no-caption">

                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Seiya <b>R$ 26,00</b></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" onclick="(window.location='e_commerce.php?id=16')" style="cursor:pointer; display: flex;flex-direction: column ;align-items:center;">
                            <img style="height: 100%; display: block;" src="images/8c.jpg" alt="image" />
                            <div class="mask no-caption">

                            </div>
                          </div>
                          <div class="caption" style="text-align:center ;">
                            <p>Camisa do Meliodas <b>R$ 28,00</b></p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!--  -->


      </div>
    </div>
    

  </div>





  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

  <script>
    $(document).ready(function() {
      // window.location.reload();
      $("body").tooltip({
        selector: '[data-toggle=tooltip]'
      });
      $('.carousel').carousel()
      // $('#home-tab').addClass('active');
      // $('#home-tab').prop('aria-selected', true);
    });
  </script>
</body>

</html>