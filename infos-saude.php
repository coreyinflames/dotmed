<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>.dotMED | Editar Perfil</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

  <?php
    include("header.php");
  ?>

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="images/ft2.jpg" alt="" class="img-responsive profile-photo" />
                  <h3>Sônia Silva</h3>
                  <p class="text-muted">Perfil de paciênte</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html"></a></li>
                  <li><a href="timeline-about.html" class="active"></a></li>
                  <li><a href="timeline-album.html"></a></li>
                  <li><a href="timeline-friends.html"></a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li><button class="btn-primary">Enviar Mensagem</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/ft2.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Sônia Silva</h4>
              <p class="text-muted">Perfil de paciênte</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
              </ul>
              <button class="btn-primary">Enviar Mensagem</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

                      <!-- INICIO DE CONTEÚDO -->
                      <!-- INICIO DE CONTEÚDO -->
                      <!-- INICIO DE CONTEÚDO -->
                      <!-- INICIO DE CONTEÚDO -->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
                <li><i class="icon ion-ios-information-outline"></i><a href="infos-basic.php">Info Básica</a></li>
                <li class="active"><i class="icon ion-ios-heart-outline"></i><a href="infos-saude.php">Infos Saúde</a></li>
              </ul>
            </div>
            <div class="col-md-9">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Informações básicas de saúde</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="basic-info" id="basic-info" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Gravidez?: </strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não Sei
                          </label>
                        </div>
                      </div>
                      <div class="form-group col-xs-6">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Fumante?: </strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Uso de drogas?: </strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                        </div>
                      </div>
                      <div class="form-group col-xs-6">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Tem diabetes?: </strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Está fazendo uso de alguma Medicação?: (Se sim, diga qual(is))</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Teve alguma internação nos últimos 12 meses?: (Se sim, diga por quê)</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Teve diagnóstico de algum problema de saúde mental por profissional de saúde: </strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Teve alguma alergia?: (Se sim, qual(is))</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Tem hipertensão arterial ou histórico na família?: (Medida da pressão arterial (se possível aferir em casa)(de referência, a ultima):</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Tem doença cardíaca ou histórico na família?</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Doença respiratória?: (Se sim, qual(ais))</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                      <div class="form-group col-xs-6">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Tem problema hepático?:</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Tem ou teve problema nos rins?: (Se sim, qual(ais)</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Doença cronica?: (Se sim, qual(ais))</strong></span>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Sim
                          </label>
                          <label class="radio-inline">
                            <input type="checkbox" name="optradio"> Não
                          </label>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Você possui algum problema significativo não mencionado?</strong></span>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="form-group gender">
                          <span class="custom-label"><strong>Outras condições de saúde? (Qual(ais))</strong></span>
                          <textarea id="my-info" name="information" class="form-control" placeholder="Informações..." rows="4" cols="400"></textarea>
                        </div>
                      </div>
                    </div>
                    
                    <button class="btn btn-primary">Salvar Alterações</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



                      <!-- FIM DE CONTEÚDO -->
                      <!-- FIM DE CONTEÚDO -->
                      <!-- FIM DE CONTEÚDO -->
                      <!-- FIM DE CONTEÚDO -->

<?php 

include("footer.php");

?>
