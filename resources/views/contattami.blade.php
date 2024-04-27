<x-layout >


   {{-- TITOLI --}}
  <div class="container py-5">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center ">Contattami</h1>
        <h3  class="text-center">Per maggiori informazioni</h3>
      </div>
      <div class="col-12 d-flex justify-content-center align-items-center fs-1 py-2">
        <i class="bi bi-arrow-down"></i>
      </div>
    </div>
  </div>




    {{-- FORM DI CONTATTO --}}
    <div class="container pb-5">
      <div class="row">
        <div class="col-12 fotoshadow rounded-3 ">

          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nome</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nome">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Cognome</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="cognonome">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email </label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@gmail.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Testo</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="scrivimi" rows="3"></textarea>
            </div>
        </div>
      </div>
    </div>


    {{-- I MIEI SOCIAL --}}
    <div class="container py-5 imagesfondo">
      <div class="row">
        <div class="col-12 pb-5">
          <h2 class="text-center">Seguimi sui social per rimanere sempre aggiornato.!</h2>
        </div>
      </div>
      <div class="row justify-content-center ">
        <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
        
          <a class="nav-link fs-3" href="https://www.facebook.com/emanuele.pelliccia.7/">  <i class="bi bi-facebook"></i></a>
        </div>
        <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
       
          <a class="nav-link fs-3" href="https://www.instagram.com/__emanuelep__/">   <i class="bi bi-instagram"></i></a>
        </div>
        <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
          <a class="nav-link fs-3" href="https://www.linkedin.com/in/developer-full-stack-junior/"> <i class="bi bi-linkedin"></i></a>
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