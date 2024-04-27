<x-layout>
    {{-- TITOLO --}}
    <div class="container py-5">
        <div class="row ">
            <div class="col-12 align-items-center  justify-content-center ">
                <h1 class="text-center  ">da zero a cento</h1>
            </div>
            <div class="col-12">
                {{-- <i class="bi bi-arrow-down-short"></i> --}}
            </div>
        </div>
    </div>
    
    {{-- §SEZIONE HEADER --}}
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-6 sezioneborod">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis vel quia ducimus soluta odio laboriosam harum dignissimos consequuntur quae veritatis impedit eligendi reiciendis, sint omnis aliquid nisi hic perspiciatis dolor!</p>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center   ">
                <img src="{{asset('https://picsum.photos/200')}}" class="img-fluid fotoshadow  " alt="">

            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center  ">
                <img src="{{asset('https://picsum.photos/200')}}" class="img-fluid fotoshadow  " alt="">
            </div>
            <div class="col-12 col-lg-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur libero et numquam atque impedit error reiciendis temporibus explicabo nostrum ratione. Veniam, fugiat eligendi. Quia repellendus, cum nisi ipsa mollitia pariatur!</p>
            </div>
        </div>
    </div>

    {{-- SEZIONE 1 --}}
    <div class="container py-5 shadow">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('imgmia1.jpg')}}" class="d-block mx-auto img-fluid w-50   " alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('imgmia1.jpg')}}" class="d-block mx-auto img-fluid w-50 " alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('imgmia1.jpg')}}" class="d-block mx-auto img-fluid w-50 " alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev bg-black " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-black " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>


    {{-- SEZIONE-2 --}}
    <div class="container-fluid py-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h3>vi presento alcuni dei miei progetti</h3>
                <p>realizzati durante la formazione come web developer fullstack</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-4 d-flex    justify-content-center align-items-center">
                <img src="{{asset('imgvideo.png')}}" class="img-fluid w-50 fotoshadow " alt="">   
                <div >
                    <a class=" text-secondary nav-link" href="https://hackademy-142.github.io/presto_livecoding--emanuele-pelliccia/">scopri di più</a>
    
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex     justify-content-center align-items-center">
                <img src="{{asset('imgvideo1.png')}}" class="img-fluid w-50 fotoshadow " alt="">
              
                    <a class=" text-secondary nav-link" href="https://hackademy-142.github.io/progetto_red--emanuele-pellicciai/">scopri di più</a>

              
            </div>
            <div class="col-12 col-lg-4 d-flex     justify-content-center align-items-center">
                <img src="{{asset('imgvideo2.png')}}" class="img-fluid w-50 fotoshadow " alt="">
             
                    <a class=" text-secondary nav-link " href="https://hackademy-142.github.io/sito-emanuele-pelliccia/">scopri di più</a>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    <div class="container-fluid">
        <div class="row">
                <footer class="footer shadow">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                    </ul>
                    <p class="text-center text-body-secondary">© 2024 Emanuele Pelliccia</p>
                  </footer>
        </div>
    </div>

</x-layout>