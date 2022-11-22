<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET["id"]) || $_GET["id"]==""){
header("Location: index.php");
}

$id = $_GET["id"];

switch ($id) {
  case '0':
    $dados["nome"]="Brook";
    $dados["valor"]="33,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, One Piece";
    $dados["descricao"]="Brook é o Músico dos Piratas do Chapéu de Palha. Ele é um esqueleto que os Chapéus de Palha encontraram a bordo de um navio fantasma depois de entrarem no Triângulo Florian. Ele é um usuário de Akuma no Mi que comeu a Yomi Yomi no Mi, o que o torna um pseudo-imortal por causa de seus poderes. ";
    break;
    
  case '1':
    $dados["nome"]="Luffy";
    $dados["valor"]="34,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, One Piece";
    $dados["descricao"]="Monkey D. Luffy, também conhecido como Luffy Chapéu de Palha ou Chapéu de Palha,[9]é um pirata e o protagonista do anime e mangá One Piece. Ele é o fundador e o capitão do cada vez mais infame e poderoso Piratas do Chapéu de Palha, bem como um de seus principais lutadores.";
    # code...
    break;
      
  case '2':
    $dados["nome"]="Franky";
    $dados["valor"]="35,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, One Piece";
    $dados["descricao"]="Franky é o carpinteiro dos Piratas do Chapéu de Palha. Ele é um cyborg de 36 anos de Water 7 e foi introduzido na história como o líder da Família Franky, um grupo de desmantelamento de navios. Ele foi originalmente chamado de Cutty Flam até trocar seu nome original por seu apelido a pedidos de Iceburg para esconder sua identidade.";
    # code...
    break;
        
  case '3':
    $dados["nome"]="Sabo";
    $dados["valor"]="36,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, One Piece";
    $dados["descricao"]="Sabo, o Imperador das Chamas, é o chefe de gabinete do Exército Revolucionário, reconhecido como o Nº 2 de toda a organização, sendo este o ranking diretamente abaixo de Monkey D. Dragon, o Comandante Supremo. Ele também é irmão jurado dos infames piratas Portgas D. Ace e Monkey D. Luffy.";
    # code...
    break;
          
  case '4':
    $dados["nome"]="Zoro";
    $dados["valor"]="39,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, One Piece";
    $dados["descricao"]="Roronoa Zoro, também conhecido como Caçador de Piratas Zoro, é o combatente dos Piratas do Chapéu de Palha e um ex-caçador de recompensas.Ele foi o primeiro membro a juntar-se à tripulação.[3] Sua fama como mestre espadachim e sua grande força, juntamente com as ações de seu capitão, às vezes levaram os outros a acreditar que ele era o verdadeiro capitão da tripulação antes deste obter sua primeira recompensa, enquanto algumas pessoas acreditam que ele seja o imediato.";
    # code...
    break;
    
  case '5':
    $dados["nome"]="Vegeta";
    $dados["valor"]="27,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, Dragon Ball Z";
    $dados["descricao"]="Vegeta IV, ou Príncipe Vegeta é o príncipe da raça Saiyajin e arqui-rival de Goku. Ele é o filho mais velho de Vegeta III, o irmão mais velho de Tarble, o marido de Bulma, o pai de Trunks e Bra, e tataravô de Vegeta Jr. Junto com Goku, Gohan, e Piccolo, ele é facilmente um dos personagens mais prominentes da série, recebendo mais desenvolvimento após ser introduzido do que vários personagens.";
    # code...
    break;
      
  case '6':
    $dados["nome"]="Seiya";
    $dados["valor"]="26,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, Cavaleiro dos Zodíacos";
    $dados["descricao"]="Seiya de Pégaso (天馬星座の星矢 Pegasasu no Seiya?) é o titular e principal protagonista do Mangá/Anime Saint Seiya do autor Musami Kurumada e o Cavaleiro de Bronze da constelação de Pégaso do século XX, incumbido com a missão de proteger a deusa Atena nas Guerras Santas no século XX. Caracterizado principalmente por nunca desistir de lutar em qualquer situação, por mais impossível ou difícil que possa parecer, ele também é a reencarnação do Cavaleiro de Bronze Tenma de Pégaso e do Primeiro Pégaso, o primeiro homem a ferir o Deus Hades nos tempos mitológicos.";
    # code...
    break;
        
  case '7':
    $dados["nome"]="Meliodas";
    $dados["valor"]="28,00";
    $dados["transacao"]="avista";
    $dados["origem"]="Animação Japoneza, Sete Pecados Capitais";
    $dados["descricao"]="Meliodas é o líder dos Sete Pecados Capitais, carregando o título de Pecado da Ira do Dragão. Ele é o proprietário do renomado bar Chapéu de Javali, e o principal protagonista da série. O seu Tesouro Sagrado é a Espada Demônio Lostvayne e seu poder é o Full Counter. Ele também já usou o Mandamento do Amor e é o antigo líder dos Dez Mandamentos, um antigo membro do Stigma, e o filho mais velho do Rei Demônio.";
    # code...
    break;
  
  default:
    # code...
    break;
}
// var_dump($dados);
$dados_json = json_encode($dados);
// var_dump($dados_json);
?>

<!DOCTYPE html>
<html lang="pt-br">

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
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>E-Commerce</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Compras </a>
                    
                  </li>
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <!-- <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div> -->
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>E-commerce :: Product Page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>E-commerce page design</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                      <div class="product-image">
                        <img src="images/<?php echo $_GET["id"]?>.jpg" alt="..." />
                      </div>
                      <div class="product_gallery">
                        <a>
                        <img src="images/<?php echo $_GET["id"]?>.jpg" alt="..." />
                        </a>
                        <a>
                        <img src="images/<?php echo $_GET["id"]?>.jpg" alt="..." />
                        </a>
                        <a>
                        <img src="images/<?php echo $_GET["id"]?>.jpg" alt="..." />
                        </a>
                        <a>
                          <img src="images/<?php echo $_GET["id"]?>.jpg" alt="..." />
                        </a>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title"><?php echo $dados["nome"]?></h3>

                      <p><?php echo $dados["descricao"]?>.</p>
                      <br />
                      <p><?php echo $dados["origem"]?>.</p>
                     
                      <br />

                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price">R$<?php echo $dados["valor"]?></h1>
                          <!-- <span class="price-tax">Ex Tax: Ksh80.00</span> -->
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" id="btn_buy"class="btn btn-primary btn-lg">Comprar</button>
                        
                      </div>

                      
                    </div>


                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
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
      var dados= <?php echo  $dados_json?>;
      $( document ).ready(function() {
        $("#btn_buy").on("click",comprar)
      });
      function comprar(){
        console.log( "id: " + <?php echo  $id?> );
         console.log(dados);
      }
 

    </script>
  </body>
</html>