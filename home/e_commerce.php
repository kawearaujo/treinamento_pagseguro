<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// require_once "funcoes.php";
require_once "config/config.php";

if (!isset($_GET["id"]) || $_GET["id"] == "") {
  header("Location: index.php");
}
// var_dump($id);
// exit;
$id = $_GET["id"];
$pagseguro_token = "221DF1406C454C69A4D1CD7A63579241";
$pagseguro_vendedor = "kawepetro@gmail.com";
// $pagseguro_postback = "https://webhook.site/0f04d4db-78df-45a9-9161-bee86b9615ad";
$pagseguro_postback = "https://kawe.re9agencia.com.br/home/funcoes.php";


switch ($id) {
  case '1':
    $dados["nome"] = "Brook";
    $dados["valor"] = "33,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, One Piece";
    $dados["descricao"] = "Brook é o Músico dos Piratas do Chapéu de Palha. Ele é um esqueleto que os Chapéus de Palha encontraram a bordo de um navio fantasma depois de entrarem no Triângulo Florian. Ele é um usuário de Akuma no Mi que comeu a Yomi Yomi no Mi, o que o torna um pseudo-imortal por causa de seus poderes. ";
    break;

  case '2':
    $dados["nome"] = "Luffy";
    $dados["valor"] = "34,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, One Piece";
    $dados["descricao"] = "Monkey D. Luffy, também conhecido como Luffy Chapéu de Palha ou Chapéu de Palha,[9]é um pirata e o protagonista do anime e mangá One Piece. Ele é o fundador e o capitão do cada vez mais infame e poderoso Piratas do Chapéu de Palha, bem como um de seus principais lutadores.";
    # code...
    break;

  case '3':
    $dados["nome"] = "Franky";
    $dados["valor"] = "35,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, One Piece";
    $dados["descricao"] = "Franky é o carpinteiro dos Piratas do Chapéu de Palha. Ele é um cyborg de 36 anos de Water 7 e foi introduzido na história como o líder da Família Franky, um grupo de desmantelamento de navios. Ele foi originalmente chamado de Cutty Flam até trocar seu nome original por seu apelido a pedidos de Iceburg para esconder sua identidade.";
    # code...
    break;

  case '4':
    $dados["nome"] = "Sabo";
    $dados["valor"] = "36,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, One Piece";
    $dados["descricao"] = "Sabo, o Imperador das Chamas, é o chefe de gabinete do Exército Revolucionário, reconhecido como o Nº 2 de toda a organização, sendo este o ranking diretamente abaixo de Monkey D. Dragon, o Comandante Supremo. Ele também é irmão jurado dos infames piratas Portgas D. Ace e Monkey D. Luffy.";
    # code...
    break;

  case '5':
    $dados["nome"] = "Zoro";
    $dados["valor"] = "39,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, One Piece";
    $dados["descricao"] = "Roronoa Zoro, também conhecido como Caçador de Piratas Zoro, é o combatente dos Piratas do Chapéu de Palha e um ex-caçador de recompensas.Ele foi o primeiro membro a juntar-se à tripulação.[3] Sua fama como mestre espadachim e sua grande força, juntamente com as ações de seu capitão, às vezes levaram os outros a acreditar que ele era o verdadeiro capitão da tripulação antes deste obter sua primeira recompensa, enquanto algumas pessoas acreditam que ele seja o imediato.";
    # code...
    break;

  case '6':
    $dados["nome"] = "Vegeta";
    $dados["valor"] = "27,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Dragon Ball Z";
    $dados["descricao"] = "Vegeta IV, ou Príncipe Vegeta é o príncipe da raça Saiyajin e arqui-rival de Goku. Ele é o filho mais velho de Vegeta III, o irmão mais velho de Tarble, o marido de Bulma, o pai de Trunks e Bra, e tataravô de Vegeta Jr. Junto com Goku, Gohan, e Piccolo, ele é facilmente um dos personagens mais prominentes da série, recebendo mais desenvolvimento após ser introduzido do que vários personagens.";
    # code...
    break;

  case '7':
    $dados["nome"] = "Seiya";
    $dados["valor"] = "26,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Cavaleiro dos Zodíacos";
    $dados["descricao"] = "Seiya de Pégaso (天馬星座の星矢 Pegasasu no Seiya?) é o titular e principal protagonista do Mangá/Anime Saint Seiya do autor Musami Kurumada e o Cavaleiro de Bronze da constelação de Pégaso do século XX, incumbido com a missão de proteger a deusa Atena nas Guerras Santas no século XX. Caracterizado principalmente por nunca desistir de lutar em qualquer situação, por mais impossível ou difícil que possa parecer, ele também é a reencarnação do Cavaleiro de Bronze Tenma de Pégaso e do Primeiro Pégaso, o primeiro homem a ferir o Deus Hades nos tempos mitológicos.";
    # code...
    break;

  case '8':
    $dados["nome"] = "Meliodas";
    $dados["valor"] = "28,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Sete Pecados Capitais";
    $dados["descricao"] = "Meliodas é o líder dos Sete Pecados Capitais, carregando o título de Pecado da Ira do Dragão. Ele é o proprietário do renomado bar Chapéu de Javali, e o principal protagonista da série. O seu Tesouro Sagrado é a Espada Demônio Lostvayne e seu poder é o Full Counter. Ele também já usou o Mandamento do Amor e é o antigo líder dos Dez Mandamentos, um antigo membro do Stigma, e o filho mais velho do Rei Demônio.";
    # code...
    break;

    case '9':
      $dados["nome"] = "Brook";
      $dados["valor"] = "33,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, One Piece";
      $dados["descricao"] = "Brook é o Músico dos Piratas do Chapéu de Palha. Ele é um esqueleto que os Chapéus de Palha encontraram a bordo de um navio fantasma depois de entrarem no Triângulo Florian. Ele é um usuário de Akuma no Mi que comeu a Yomi Yomi no Mi, o que o torna um pseudo-imortal por causa de seus poderes. ";
      break;
  
    case '10':
      $dados["nome"] = "Luffy";
      $dados["valor"] = "34,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, One Piece";
      $dados["descricao"] = "Monkey D. Luffy, também conhecido como Luffy Chapéu de Palha ou Chapéu de Palha,[9]é um pirata e o protagonista do anime e mangá One Piece. Ele é o fundador e o capitão do cada vez mais infame e poderoso Piratas do Chapéu de Palha, bem como um de seus principais lutadores.";
      # code...
      break;
  
    case '11':
      $dados["nome"] = "Franky";
      $dados["valor"] = "35,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, One Piece";
      $dados["descricao"] = "Franky é o carpinteiro dos Piratas do Chapéu de Palha. Ele é um cyborg de 36 anos de Water 7 e foi introduzido na história como o líder da Família Franky, um grupo de desmantelamento de navios. Ele foi originalmente chamado de Cutty Flam até trocar seu nome original por seu apelido a pedidos de Iceburg para esconder sua identidade.";
      # code...
      break;
  
    case '12':
      $dados["nome"] = "Sabo";
      $dados["valor"] = "36,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, One Piece";
      $dados["descricao"] = "Sabo, o Imperador das Chamas, é o chefe de gabinete do Exército Revolucionário, reconhecido como o Nº 2 de toda a organização, sendo este o ranking diretamente abaixo de Monkey D. Dragon, o Comandante Supremo. Ele também é irmão jurado dos infames piratas Portgas D. Ace e Monkey D. Luffy.";
      # code...
      break;
  
    case '13':
      $dados["nome"] = "Zoro";
      $dados["valor"] = "39,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, One Piece";
      $dados["descricao"] = "Roronoa Zoro, também conhecido como Caçador de Piratas Zoro, é o combatente dos Piratas do Chapéu de Palha e um ex-caçador de recompensas.Ele foi o primeiro membro a juntar-se à tripulação.[3] Sua fama como mestre espadachim e sua grande força, juntamente com as ações de seu capitão, às vezes levaram os outros a acreditar que ele era o verdadeiro capitão da tripulação antes deste obter sua primeira recompensa, enquanto algumas pessoas acreditam que ele seja o imediato.";
      # code...
      break;
  
    case '14':
      $dados["nome"] = "Vegeta";
      $dados["valor"] = "27,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, Dragon Ball Z";
      $dados["descricao"] = "Vegeta IV, ou Príncipe Vegeta é o príncipe da raça Saiyajin e arqui-rival de Goku. Ele é o filho mais velho de Vegeta III, o irmão mais velho de Tarble, o marido de Bulma, o pai de Trunks e Bra, e tataravô de Vegeta Jr. Junto com Goku, Gohan, e Piccolo, ele é facilmente um dos personagens mais prominentes da série, recebendo mais desenvolvimento após ser introduzido do que vários personagens.";
      # code...
      break;
  
    case '15':
      $dados["nome"] = "Seiya";
      $dados["valor"] = "26,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, Cavaleiro dos Zodíacos";
      $dados["descricao"] = "Seiya de Pégaso (天馬星座の星矢 Pegasasu no Seiya?) é o titular e principal protagonista do Mangá/Anime Saint Seiya do autor Musami Kurumada e o Cavaleiro de Bronze da constelação de Pégaso do século XX, incumbido com a missão de proteger a deusa Atena nas Guerras Santas no século XX. Caracterizado principalmente por nunca desistir de lutar em qualquer situação, por mais impossível ou difícil que possa parecer, ele também é a reencarnação do Cavaleiro de Bronze Tenma de Pégaso e do Primeiro Pégaso, o primeiro homem a ferir o Deus Hades nos tempos mitológicos.";
      # code...
      break;
  
    case '16':
      $dados["nome"] = "Meliodas";
      $dados["valor"] = "28,00";
      $dados["transacao"] = "avista";
      $dados["origem"] = "Animação Japonesa, Sete Pecados Capitais";
      $dados["descricao"] = "Meliodas é o líder dos Sete Pecados Capitais, carregando o título de Pecado da Ira do Dragão. Ele é o proprietário do renomado bar Chapéu de Javali, e o principal protagonista da série. O seu Tesouro Sagrado é a Espada Demônio Lostvayne e seu poder é o Full Counter. Ele também já usou o Mandamento do Amor e é o antigo líder dos Dez Mandamentos, um antigo membro do Stigma, e o filho mais velho do Rei Demônio.";
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

  <style>
    body {
    background:url('images/gifbg2.gif') 100% 100% fixed;
    background-size: cover;
    height: 100vh;
    padding:0;
    margin:0;

    }

  </style>
</head>

<body class="nav-md">
  <div style="width:96vw; justify-content:end; display:flex; position:fixed; margin-top:10px ;">
    <iframe style="display:flex;" width="300" height="80" src="https://www.youtube.com/embed/q55qNEKQLG0?autoplay=1&controls=0"  frameborder="0" allow="autoplay;clipboard-write;" ></iframe>
  </div>
  <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
  <div class="container body">
    <div class="main_container" style="background:transparent !important;">
      <div class="col-md-3 left_col" style="background:transparent !important;">
        <div class="left_col scroll-view" style="background:transparent !important;">
          <div class="navbar nav_title" style="border: 0 ;background:transparent !important;">
            <a href="index.php" class="site_title"><i class="fa fa-circle-o-notch" aria-hidden="true"></i><span> Lojinha Geek</span></a>
          </div>

          <div class="clearfix"></div>
          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
            <div class="menu_section" >
              <h3>Paginas</h3>
              <i class="fa fa-grav" aria-hidden="true"></i>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Compras </a>

                </li>
              </ul>
            </div>


          </div>
        </div>
      </div>

      <!-- top navigation -->
      
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main" style="display:flex; margin-right:230px;background:transparent !important;" >

        <div class="" >
          <div class="page-title" style="margin-top:60px ;">
            <div class="title_left" >
              <h3 style="color:white">Produto ::  <?php $id < 9 ? print ("Caneca do ". $dados["nome"] ) : print ("Camisa do ". $dados["nome"] )  ?> </h3>
            </div>

            
          </div>

          <div class="clearfix"></div>
          <div class="row" style="margin-top:60px ;">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel" style="background-color:rgba(249, 249, 249, 50%);color:darkslategray">
                <!-- <div class="x_title">
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
                </div> -->
                <div class="x_content" style="background-color:transparent !important;">

                  <div class="col-md-7 col-sm-7 " style="background-color:transparent !important;">
                    <div class="product-image">
                      <img src="images/<?php echo $_GET["id"] ?>.jpg" alt="..." />
                    </div>
                    <div class="product_gallery">
                      <!-- <a>
                        <img src="images/<?php echo $_GET["id"] ?>.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.jpg" alt="..." />
                      </a> -->
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                    <h3 class="prod_title"><?php echo $dados["nome"] ?></h3>

                    <p><?php echo $dados["descricao"] ?>.</p>
                    <br />
                    <p><?php echo $dados["origem"] ?>.</p>

                    <br />

                    <br />

                    <div class="">
                      <div class="product_price">
                        <h1 class="price">R$<?php echo $dados["valor"] ?></h1>
                        <!-- <span class="price-tax">Ex Tax: Ksh80.00</span> -->
                        <br>
                      </div>
                    </div>

                    <div class="">
                      <button type="button" id="btn_buy" class="btn btn-primary btn-lg">Comprar</button>

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
    var id = <?php echo $_GET['id'];?>
    // console.log(id);
    // var dados = < ?php echo  $dados_json ?>;
    var url_base = "<?php echo (URL_BASE_PAGSEGURO) ?> ?id=",id;

    $(document).ready(function() {
      $("#btn_buy").on("click", comprar)
    });

    function comprar() {


      $.ajax({
        method: 'post',
        url: "funcoes.php",
        // headers: {'Content-Type': 'application/json',},
        // body: JSON.stringify(data),

        data: {
          acao: 'comprar',
          id: id
        },
        // body: JSON.stringify(data),
        success: function(res) {
          res=JSON.parse(res)
          console.log("teste:",res)
          if (res['code'])
            chamar_lightbox(res['code'])
            else 
            console.log(res['code']);
        },
        error:err => {alert("Erro!", err, "error")},
      })

    
    }
    function salvarTransactionCode (transactionCode) {
      $.ajax({
        method: 'post',
        url: "funcoes.php",
        // headers: {'Content-Type': 'application/json',},
        // body: JSON.stringify(data),

        data: {
          acao: 'salvarCodTransacao',
          transactionCode: transactionCode
        },
        success: function(res) {
          // console.log(res);
          // res=JSON.parse(res)
          console.log('Transação salva:', res);
          // location.reload()
        },
        error:err => {alert("Erro!", err, "error")},
      })

        }
  </script>
    
<!-- LIGHTBOX -->
<script type="text/javascript">
        //Insira o código de checkout gerado no Passo 1
        var callback = {
            success: function(transactionCode) {
                //Insira os comandos para quando o usuário finalizar o pagamento.
                //O código da transação estará na variável "transactionCode"
                // console.log("salvar código de transacao", transactionCode);
                // code = transactionCode.replace("-", "")
                salvarTransactionCode(transactionCode);
            },
            abort: function() {
                //Insira os comandos para quando o usuário abandonar a tela de pagamento.
                console.log("abortado");
            }
        };

        function chamar_lightbox (code) {
            //Chamada do lightbox passando o código de checkout e os comandos para o callback
            var isOpenLightbox 
            console.log(isOpenLightbox = PagSeguroLightbox(code, callback));
            // Redireciona o comprador, caso o navegador não tenha suporte ao Lightbox
            if (!isOpenLightbox) {
                location.href = "https://pagseguro.uol.com.br/v2/checkout/payment.html?code=" + code;
                console.log("Redirecionamento")
            }
        }
    </script>

</body>

</html>