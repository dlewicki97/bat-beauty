<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bat Beauty - Strona główna</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <nav class="px-5">
        <div class="d-flex justify-content-between">
          <div class="social-icons d-flex align-items-center">
            <div>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="logo">
            <img class="img-fluid" src="./img/logo.png" alt="Bat Beauty Logo">
          </div>
          <div class="d-flex align-items-center">
            <div class="menu" onclick="openSidebar()">
              <div class="menu-line"></div>
              <div class="menu-line menu-midline"></div>
              <div class="menu-line"></div>
            </div>
          </div>
        </div>
      </nav>
      <aside class="d-none">
        <div class="sidebar">
          <div class="sidebar-content pr-5">
            <div class="close-sidebar-container">
              <span class="close-sidebar " onclick="closeSidebar()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 27.581 27.581">
                  <g id="Component_4_1" data-name="Component 4 – 1" transform="translate(1.414 1.414)">
                    <g id="Group_2" data-name="Group 2" transform="translate(-723.37 -876.812) rotate(45)">
                      <line id="Line_2" data-name="Line 2" x2="35.006" transform="translate(1131.5 108.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                      </g>
                      <g id="Group_5" data-name="Group 5" transform="translate(-876.812 748.123) rotate(-45)">
                        <line id="Line_2-2" data-name="Line 2" x2="35.006" transform="translate(1131.5 108.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                        </g>
                      </g>
                    </svg>
                  </span>
                </div>
                <ul class="sidebar-subpages">
                  <li>O nas</li>
                  <li>Oferta</li>
                  <li>Galeria</li>
                  <li>Aktualności</li>
                  <li>Cennik</li>
                  <li>Kontakt</li>
                </ul>
              </div>
            </div>
          </aside>
          <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-1z" data-slide-to="1"></li>
              <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="bg-picture slider-img" style="background-image: url('./img/slider-1.jpg')"></div>
                <div class="slider-content">
                  <h1>Centrum Urody</h1>
                  <p>Zadbaj o swoje piękno</p>
                  <button class="slider-button button"><span>UMÓW SIĘ NA WIZYTĘ</span></button>
                </div>
              </div>
              <div class="carousel-item">
                <div class="bg-picture slider-img" style="background-image: url('./img/slider-2.jpg')"></div>
                <div class="slider-content">
                  <h1>Bloomea</h1>
                  <p>Odmień swoją skórę</p>
                  <button class="slider-button button"><span>UMÓW SIĘ NA WIZYTĘ</span></button>
                </div>
              </div>
              <div class="carousel-item">
                <div class="bg-picture slider-img" style="background-image: url('./img/slider-3.jpg')"></div>
                <div class="slider-content">
                  <h1>Pielęgnacja brwi i rzęs</h1>
                  <p>Zabiegi już od 15 zł</p>
                  <button class="slider-button button"><span>UMÓW SIĘ NA WIZYTĘ</span></button>
                </div>
              </div>
            </div>
          </div>
        </header>
        <main>
          <section class="treatments-1">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="treatments-background bg-picture" style="background-image: url('./img/treatment-1-1.png')">
                    <div class="treatments-content">
                      <h2>Pielęgnacja Twarzy</h2>
                      <p>Zadbaj o swoją skórę</p>
                      <button class="button">SPRAWDŹ</button>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="col-12 h-50">
                    <div class="treatments-right-background bg-picture" style="background-image: url('./img/treatment-1-2.png')">
                      <div class="d-flex h-100 justify-content-end treatments-content">
                        <div class="h-100 d-flex flex-column justify-content-between">
                          <div>
                            <h2>Zabieg Bloomea</h2>
                            <p>Odmień swoją skórę</p>
                          </div>
                          <div>
                            <button class="button">SPRAWDŹ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 h-50">
                    <div class="treatments-right-background bg-picture" style="background-image: url('./img/treatment-1-3.png')">
                      <div class="d-flex h-100 justify-content-end treatments-content">
                        <div class="h-100 d-flex flex-column justify-content-between">
                          <div>
                            <h2>Zabiegi na brwi</h2>
                            <p>Henna, regulacja i lifting</p>
                          </div>
                          <div>
                            <button class="button">SPRAWDŹ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="bloomea">
            <div class="bloomea-content">
              <div class="bloomea-banner bg-picture" style="background-image: url('./img/bloomea-banner.jpg')">
                <div class="bloomea-mask"></div>
                <h1 class="bloomea-text pl-3 pl-sm-5">BLOOMEA</h1>
              </div>
              <div class="bloomea-pink-line"></div>
            </div>
            <div class="container-fluid px-3 px-sm-5">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="treatments-content">
                    <h2 class="mb-3">Bloomea - pierwsze urządzenie do modelingu skóry bez bólu!</h2>
                    <p>Najbardziej popularny zabieg ostatnich 2 lat w Polsce i za granicą! Redukcja zmarszczek, poprawa kolorytu, efekt resurfacingu laserowego! To wszystko w zaledwie 30 min! Sprawdź jak działa modeling Bloomea®…</p>
                    <button class="button">SPRAWDŹ</button>
                  </div>
                </div>
                <div class="col-12 col-lg-6 position-relative bloomea-img-col">
                  <img class="img-fluid bloomea-img" src="./img/bloomea.png" alt="">
                </div>
              </div>
            </div>
          </section>
          <section class="treatments-2">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="treatments-right-background bg-picture" style="background-image: url('./img/treatment-2-1.png')">
                    <div class="d-flex h-100 justify-content-end treatments-content">
                      <div class="h-100 d-flex flex-column justify-content-lg-between">
                        <div>
                          <h2>Mezoterapia mikroigłowa</h2>
                          <p>Już za 140 zł</p>
                        </div>
                        <div>
                          <button class="button">SPRAWDŹ</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="treatments-right-background bg-picture" style="background-image: url('./img/treatment-2-2.png')">
                    <div class="d-flex h-100 justify-content-end treatments-content">
                      <div class="h-100 d-flex flex-column justify-content-lg-between">
                        <div>
                          <h2>Pielęgnacja twarzy</h2>
                          <p>Zabiegi już od 150 zł</p>
                        </div>
                        <div>
                          <button class="button">SPRAWDŹ</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="attributes">
            <div class="container-fluid px-4 px-sm-5">
              <div class="row justify-content-center mb-4">
                <div class="attributes-content">
                  <h2>Dlaczego Bat Beauty?</h2>
                  <p>Poznaj nasze atuty!</p>
                </div>
              </div>
              
              <div class="row attributes-row">
                <div class="col-12 col-lg-4">
                  <div class="attributes-col-wrapper">
                    <div class="attributes-col-content">
                      <img class="img-fluid" src="./img/attributes-1.png" alt="">
                      <h2>Bezpieczeństwo</h2>
                      <p>Starannie wykonane zabiegi to pewność, że przyniosą one zamierzone efekty, bez narażania zdrowia i naturalnego piękna.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="attributes-col-wrapper">
                    <div class="attributes-col-content">
                      <img class="img-fluid" src="./img/attributes-2.png" alt="">
                      <h2>Profesjonalny sprzęt</h2>
                      <p>Nowoczesna technologia, z której korzystamy, zapewnia najlepsze rezultaty oraz bezpieczeństwo stosowania.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="attributes-col-wrapper">
                    <div class="attributes-col-content">
                      <img class="img-fluid" src="./img/attributes-3.png" alt="">
                      <h2>Doświadczona obsługa</h2>
                      <p>Profesjonalna obsługa, dzięki sumiennemu wysłuchaniu potrzeb klienta i odpowiednim kwalifikacjom, gwarantuje dobór właściwej metody kuracji.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="pricelist bg-picture" style="background-image: url('./img/pricelist-bg.jpg')">
            <div class="pricelist-mask"></div>
            <div class="pricelist-pink-line-container">
              <div class="pricelist-pink-line"></div>
            </div>
            <div class="container py-5 position-relative">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="d-flex justify-content-center wings">
                    <img class="img-fluid" src="./img/left-wing.png" alt="">
                    <h2 class="pricelist-header">Cennik zabiegów</h2>
                    <img class="img-fluid" src="./img/right-wing.png" alt="">
                  </div>
                  <p class="text-center pricelist-subheader">Bat Beauty</p>
                </div>
              </div>
              <div class="row px-5">
                <div class="pricelist-table">
                  <div class="row pricelist-table-head">Zabiegi podstawowe</div>
                  <div class="row pricelist-table-row">
                    <p>Regulacja brwi</p>
                    <p>15 zł</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="pricelist-pink-line"></div>
            <div style="height: 1.15rem; margin-top: -2.3rem"></div>
          </section>
          <section class="facebook">
            <div class="container-fluid px-5">
              <div class="row justify-content-center">
                <h2 class="facebook-header">Ostatnio na naszym facebooku</h2>
              </div>
              <div class="row facebook-row">
                <div class="col-12 col-lg-2">
                  <div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=146988010442303&amp;id=103368558137582"  data-width="100%"></div>
                </div>
                <div class="col-12 col-lg-2">
                  <div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=145665697241201&amp;id=103368558137582" data-show-text="true" data-width="100%"></div>
                </div>
              </div>
              <div class="row justify-content-center">
                <button class="button">PRZEJDŹ DO FACEBOOKA</button>
              </div>
            </div>
          </section>
        </main>
        <footer>
          <section class="contact">
            <div class="container-fluid px-0 px-sm-5">
              <div class="row ">
                <div class="col-12 col-lg-6 px-0 px-sm-5 pb-5 pb-lg-0">
                  <h2 class="contact-header">Kontakt</h2>
                  <p class="mb-4">Masz jakieś pytania? Skontaktuj się z nami telefonicznie lub za pomocą SMS. Jesteśmy do dyspozycji od poniedziałku do piątku w godzinach 10:00 - 19:00</p>
                  <div class="d-flex align-items-center contact-icons">
                    <img class="img-fluid" src="./img/contact-icon-name.png" alt="">
                    <p class="m-0">Monika Gacek</p>
                  </div>
                  <div class="d-flex align-items-center contact-icons">
                    <img class="img-fluid" src="./img/contact-icon-email.png" alt="">
                    <p class="m-0"><a class="contact-link" href="mailto: monikagacek99@gmail.com">monikagacek99@gmail.com</a></p>
                  </div>
                  <div class="d-flex align-items-center contact-icons">
                    <img class="img-fluid" src="./img/contact-icon-phone.png" alt="">
                    <p class="m-0"><a class="contact-link" href="tel: +48 509 405 302">+48 509 405 302</a></p>
                  </div>
                  <div class="d-flex align-items-center contact-icons">
                    <img class="img-fluid" src="./img/contact-icon-localization.png" alt="">
                    <p class="m-0"><a class="contact-link" href="https://www.google.com/maps/place/Koszarowa+11,+67-300+Szprotawa/data=!4m2!3m1!1s0x4708ac1707f6fcf1:0xa6fa778b57a4be89?sa=X&ved=2ahUKEwjn4ZHr743sAhXI2aQKHdJiBbQQ8gEwAHoECAsQAQ">ul. Koszarowa 11, 67-300 Szprotawa</a></p>
                  </div>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center position-relative contact-form-col flex-column ">
                  <form id="contact-form" action="" class="contact-form px-0 px-sm-5">
                    <div class="card">
                      <h3 class="text-center contact-form-header">Pozostańmy w kontakcie</h3>
                      <input type="text" class="form-control contact-input" placeholder="Imię" name="name">
                      <input type="number" class="form-control contact-input" placeholder="Numer telefonu" name="phone">
                      <input type="email" class="form-control contact-input" placeholder="Adres e-mail" name="email">
                      <textarea rows="4" class="form-control contact-input" placeholder="Treść wiadomości" name="message"></textarea>
                      <button type="submit" class="button">WYŚLIJ</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <section class="footer">
            <div style="height: 1.15rem; margin-top: -2.3rem"></div>
            <div class="footer-pink-line"></div>
            <div class="container-fluid p-5">
              <div class="row mb-4 ">
                <div class="col-12 px-0 px-sm-5">
                  <img class="img-fluid footer-logo" src="./img/logo.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-6 px-0 px-sm-5">
                  <div class="row m-0">
                    <div class="col-12 col-lg-4">
                      <h3 class="m-0 footer-list-title">Menu</h3>
                      <ul class="footer-subpages">
                        <li>O nas</li>
                        <li>Oferta</li>
                        <li>Galeria</li>
                        <li>Aktualności</li>
                        <li>Cennik</li>
                        <li>Kontakt</li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg-4">
                      <h3 class="m-0 footer-list-title">Oferta</h3>
                      <ul class="footer-subpages">
                        <li>Zabiegi podstawowe</li>
                        <li>Pielęgnacja twarzy</li>
                        <li>Zabiegi na ciało</li>
                        <li>Trychologia</li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg-4">
                      <h3 class="m-0 footer-list-title">Bat Beauty</h3>
                      <ul class="footer-subpages">
                        <li>Monika Gacek</li>
                        <li><a class="footer-link" href="mailto: monikagacek99@gmail.com">monikagacek99@gmail.com</a></li>
                        <li><a class="footer-link" href="tel: +48 509 405 302">+48 509 405 302</a></li>
                        <li><a class="footer-link" href="https://www.google.com/maps/place/Koszarowa+11,+67-300+Szprotawa/data=!4m2!3m1!1s0x4708ac1707f6fcf1:0xa6fa778b57a4be89?sa=X&ved=2ahUKEwjn4ZHr743sAhXI2aQKHdJiBbQQ8gEwAHoECAsQAQ">ul. Koszarowa 11, 67-300 Szprotawa</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-lg-end align-items-end px-0 px-sm-5">
                  <p class="ad-awards">Projekt i wdrożenie: <span class="font-weight-bold">AdAwards</span></p>
                </div>
              </div>
            </div>
          </section>
        </footer>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script src="https://kit.fontawesome.com/3353bb36d2.js" crossorigin="anonymous"></script>
        <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
        <script type="text/javascript">
        function openSidebar(){
        document.getElementsByTagName('aside')[0].className = 'd-show';
        }
        function closeSidebar(){
        document.getElementsByTagName('aside')[0].className = 'd-close';
        setTimeout(() => {document.getElementsByTagName('aside')[0].className = 'd-none'}, 500);
        }
        </script>
      </body>
    </html>