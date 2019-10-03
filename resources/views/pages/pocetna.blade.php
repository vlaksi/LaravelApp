@extends('layouts.app')

@section('kod')
    
    <!-- Starting Home Page Section -->
    <div id="home">
        <!-- Starting Landing Page Section -->
        <div class="landing">
                <div class="home-wrap">
                    <div class="home-inner">
    
                    </div>
                </div>
            </div>
    
            <div class="caption text-center">
                <div class="container"> <!-- stavio kontenjer da bi bolje izgledalo -->
                        <h1> Dobro dosli u Kulminaciju znanja !</h1>
                        <h3> Nadji materijal sa kojeg fakulteta ti je potreban.</h3>
                       <!-- <a class="btn btn-outline-light btn-lg" href="#"> Registruj se </a> -->
                        <p><a class="btn btn-primary btn-lg" href="/login" role="button"> Prijavi se </a> <a class="btn btn-success btn-lg" href="/register" role="button"> Registruj se</a></p>
                </div>
            </div>
        <!-- End Landing Page Section -->
    </div>
    <!-- End Home Page Section -->

    <!-- Starting Ideja Page Section -->
    <div id="ideja" class="offset">
        <div class="col-12 narrow text-center">
            <h1>Nadamo se da ces ovde naci sav materijal koji ti je potreban .</h1>
            <h5> Ako si u prilici,pomozi zajednici kao sto i ona pomaze tebi.</h5>
            <p class="lead">Nase malo Stefanu znaci sve! Budimo humani!</p>
            <a class="btn btn-secondary btn-md" href="https://www.budihuman.rs/sr/korisnik/664/stefan-goncin">664 na 3030</a>
        </div>
    </div>
    <!-- End Ideja Page Section -->

    <!-- Starting Nastanak Page Section -->
    <div id="nastanak" class="offset">
        <!-- START JUMBOTRON -->
        <div class="jumbotron">
            <div class="narrow text-center"> 

                <div class="col-12">
                    <h3 class="heading"> Nastanak </h3>
                    <div class="heading-underline"></div>
                </div>

                <!-- START ROW -->
                <div class="row text-center">
                    
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-mug-hot fa-3x"></i>
                            <h3>Druzenje</h3>
                            <p> Sve ideje i tako pocinju,uz kafu i razmisljanje.Sta bi to moglo dobrineti zajednici.
                                    Zbog toga i jesmo tu,da bi svojim znanjem,doprineli i pomogli onima kojima je to potrebno!
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-code fa-3x"></i>
                            <h3>Razvijanje</h3>
                            <p> Posle toga dolazi proces u kome provodimo vreme kako bi tu ideju izvrsili.A nedugo posle toga iz
                                kafe pocinje da se stvara kod koji pocinje da lici na krajnji proizvod.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-cubes fa-3x"></i>
                            <h3>Proizvod</h3>
                            <p> I na kraju kao kruna naseg prijateljstva i naseg truda rada i kafe,dolazi proizvod u koji verujemo 
                                i koji funkcionise. <br> Do neke nove kafe... </p>
                        </div>
                    </div>

                </div> <!-- END ROW -->

            </div><!-- END NARROW --> 
        </div> <!-- END JUMBOTRON -->
    </div>
    <!-- End Nastanak Page Section -->
 
    <!-- Starting Tim Page Section -->
    <div id="tim" class="offset">
        <div class="fixed-background">
            <div class="row dark text-center">          <!-- U CUSTOM CSS posle editujem dark kako bi pozadina bila tamna -->

                <div class="col-12">
                    <div class="container">
                            <h3 class="heading">Ucimo,primenjujemo,delimo</h3>
                    </div>
                    <div class="heading-underline"></div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-book fa-2x"></i>
                        <h3>Ucenje</h3>
                        <p>Obrazovanje je najmocnije oruzje koje mozete upotrebiti da promenite svet <br> Knjige, braco moja, knjige, a ne zvona i praporce</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-angle-double-up fa-2x"></i>
                        <h3>Primenjivanje</h3>
                        <p> Pravimo promene koje zelimo da vidimo sutra u svetu ! <br> Dela,ne reci!
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="fab fa-slideshare fa-2x"></i>
                        <h3>Deljenje</h3>
                        <p> Znanje se mnozi deljenjem.
                        </p>

                    </div>
                </div>


            </div> <!-- END Row Dark -->

            <div class="fixed-wrap">
                <div class="fixed">

                </div>
            </div>
        </div><!-- END Fixed Background -->
        
    </div>
    <!-- End Tim Page Section -->

    <!-- Starting Cilj Page Section -->
    <div id="cilj" class="offset">
        <div class="jumbotron">

            <div class="col-12 text-center">
                <h3 class="heading"> Podrzali aplikaciju </h3>
                <div class="heading-underline"></div>
            </div>
        
            <div class="row">

                <div class="col-md-6 klijent">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/%D0%92%D1%83%D0%BA_%D0%A1%D1%82%D0%B5%D1%84%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%9B_%D0%9A%D0%B0%D1%80%D0%B0%D1%9F%D0%B8%D1%9B.1816.jpg/220px-%D0%92%D1%83%D0%BA_%D0%A1%D1%82%D0%B5%D1%84%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%9B_%D0%9A%D0%B0%D1%80%D0%B0%D1%9F%D0%B8%D1%9B.1816.jpg">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"> </i>
                                bla bla Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto facere quisquam iste! Similique quas sint illum deserunt quam expedita tempora consequuntur facere quis, repellendus dicta voluptatem adipisci quae consequatur velit.
                                <hr class="klijent-hr">
                                <cite>&#8212; Mihajlo Idvorski Pupin </cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 klijent">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="http://museumofsolidarity.eu/wp-content/uploads/2017/08/pupinfeat2.jpg">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"> </i>
                                bla bla Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto facere quisquam iste! Similique quas sint illum deserunt quam expedita tempora consequuntur facere quis, repellendus dicta voluptatem adipisci quae consequatur velit.
                                <hr class="klijent-hr">
                                <cite>&#8212; Mihajlo Idvorski Pupin </cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- END Jumbotron -->

        <div class="col-12 narrow text-center">
            <p class="lead"> Nasem timu su uvek dobro dosle ideje i uvek smo spremni za saradnju,ako imas neki predlog,javi nam se. </p>
            <a class="btn btn-secondary btn-md" href="#" target="_blank"> Javi se </a>
        </div>

    </div>
    <!-- End Cilj Page Section -->

    <!-- Starting Kontakti Page Section -->
    <div id="kontakt" class="offset">
        <!-- START Footer -->
        <footer>
            <div class="row justify-content-center">
                
                <div class="col-md-5 text-center">
                    <i class="fas fa-id-card-alt fa-4x"></i>
                    <h1> Kulminacija Znanja </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla recusandae, explicabo sint perferendis maxime suscipit consectetur dolor modi, at tenetur assumenda, error corrupti. Esse, delectus consectetur excepturi deserunt dolor labore.</p>
                    <strong>Kontakt informacije</strong>
                    <p>+381 61 26-555-62 <br> daksrapsody@gmail.com <br></p>

                    <a href="" target="_blank"><i class="fab fa-facebook-square fa-2x"> </i></a>
                    <a href="" target="_blank"><i class="fab fa-twitter-square fa-2x"> </i></a>
                    <a href="" target="_blank"><i class="fab fa-instagram fa-2x"> </i></a>

                </div>

                <hr class="socket"> 
                &copy; Vladislav Maksimovic 
            </div>
        </footer>
        <!-- END Footer -->

    </div>
    <!-- End Kontakti Page Section -->


   
@endsection
