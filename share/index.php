<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  manifest  -->
    <link rel="manifest" href="./manifest.json">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/jpg" href="./img/car-1.jpg" />

    <meta name="theme-color" content="#2A3443" />
    <meta name="description" content="Carzone web application" />

    <!-- iOS -->
    <link rel="apple-touch-icon" href="./img/96X96.png" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-status-bar-style" content="black" />
    <meta name="mobile-web-app-title" content="Carzone" />

    <!-- manifest ends -->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

</head>
  <script>
    function getFolderData() {
      var searchText = document.getElementById("searchText").value;
      if (searchText.length == 0) {
        document.getElementById("folderData").innerHTML = "";
        return;
      }
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("folderData").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "search.php?search=" + searchText, true);
      xhttp.send();
    }
  </script>
<body>
    <div class="container-fulid">
        <nav>
            <div class="top">
                <h2>WebShare</h2>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#main" class="nav__link active">
                            <i class="bx bx-home"></i><br>
                            <span class="nav__name">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#body-items" class="nav__link active">
                            <i class="bx bx-map"></i><br>
                            <span class="nav__name">Mapa B</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="show-add">
                            <i class='bx bx-plus-circle'></i><br>
                            <span class="nav__name">Cadastro</span>
                        </a>
                    </li>
                    <li>
                        <a href="#body-items" class="nav__link active">
                            <i class="bx bx-bell"></i><br>
                            <span class="nav__name">notificacao</span>
                        </a>
                    </li>
                    <li>
                        <a href="#content1" class="nav__link active">
                            <i class='bx bx-credit-card-alt'></i><br>
                            <span class="nav__name">cartao</span>
                        </a>
                    </li>
                </ul>
            </div>

                <div>
                      <div class="texto">
                        <input type="text" id="searchText" onkeyup="getFolderData()" placeholder="Bucar po itens">
                        <i class="bx bx-search"></i>
                      </div>
                      <div id="folderData"></div>
                  </div>
            <div class="perfil">

                <div class="top-menu">
                    <ul>
                        <li>
                            <i class=""></i>
                            <span>Home</span>
                        </li>
                        <li>
                            <i class=""></i>
                            <span>about</span>
                        </li>
                        <li>
                            <i class=""></i>
                            <span>contact</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="btn-show-menu">
                        <i class="bx bx-menu"></i>
                    </a>
                </div>
            </div>

        </nav>
        <div id="items-wrapper">
            <div id="items">


                <main class="item" id="main">

                </main>


                <div class="item" id="body-items">
                    
                </div>


                <div class="item" id="content1">
                    <iframe src="./upload.php"></iframe>
                </div>


            </div>
        </div>
    </div>
    <script src="assets/Booststrap/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>

