<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Swiper CSS -->
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">


<div class="container my-5">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470209_filename.jpg">
          <div class="card-body">
            <h5 class="card-title">Slide 1</h5>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470357_filename.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Slide 2</h5>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470319_filename.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Slide 3</h5>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470270_filename.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Slide 3</h5>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470987_filename.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Slide 3</h5>
          </div>
        </div>
      </div>
     <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470357_filename.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Slide 2</h5>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card">
          <img src="https://chandracoop.com/assets/uploads/prize/1761470270_filename.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Slide 3</h5>
          </div>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>



<style>
   
    .swiper {
  padding-bottom: 50px;
}

.swiper-slide img {
  width: 300px;
  height: 250px;      
  object-fit: cover; 
}

.swiper-slide {
  display: flex;
  justify-content: center;
}
</style>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,

    autoplay: {
      delay: 2000,             
      disableOnInteraction: false, 
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      576: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 3
      },
      992: {
        slidesPerView: 4
      }
    }
  });
  
  
</script>


