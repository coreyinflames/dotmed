<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Friends | Friend Finder Friend List</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
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
                  <img src="images/samaritano.jpg" alt="" class="img-responsive profile-photo" />
                  <h3>Hospital Samaritano</h3>
                  <p class="text-muted">Hospital</p>
                  <button onclick="location.href = 'timeline-book-samaritano.html'; "class="btn-primary"> Agendar Atendimento</button>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline-samaritano.html">Timeline</a></li>
                  <li><a href="timeline-about-samaritano.html"  >Sobre</a></li>
                  <li><a href="timeline-album-samaritano.html">Álbum</a></li>
                  <li><a href="timeline-friends-samaritano.html" class="active">Amigos</a></li>
                  <li><a href="timeline-prof.html">Profissionais</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 seguidores</li>
                  <li><button class="btn-primary">Adicionar Amigo</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html" class="active">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Friend List
              ================================================= -->
              <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/clinica1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/icone1.png" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">Laboratório</a>
                          <h5><a href="timeline.html" class="profile-link">VisionMed</a></h5>
                          <p>Diagnóstico por imagem</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/clinica5.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/clinica4.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">Consultório Odontológico</a>
                          <h5><a href="timeline.html" class="profile-link">Dra. Fátima Almeida</a></h5>
                          <p>Dentista</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/passaro.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/ft8.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="timeline.html" class="pull-right text-green">Paciente</a>
                          <h5><a href="#" class="profile-link">Osmar Carlos</a></h5>
                          <p>Paciente de rotina</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                  
                
                  
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Atividades do Samaritano</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Samaritano</a> Comentou em uma foto</p>
                    <p class="text-muted">5 mins atrás</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Samaritano</a> Postou uma foto</p>
                    <p class="text-muted">uma hora atrás</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Samaritano</a> Curtiu uma postagem</p>
                    <p class="text-muted">4 horas atrás</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Samaritano</a> Compartilhou um álbum</p>
                    <p class="text-muted">um dia atrás</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
      include("footer.php");
    ?>
