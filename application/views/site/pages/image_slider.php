<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

<?php
$image_slider = $this->db->order_by('created_at', 'DESC')
  ->where('status', 1)
  ->get('image_slider')
  ->result_array();
?>


<div class="container my-2">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <?php if (!empty($image_slider)): ?>
        <?php foreach ($image_slider as $slide): ?>
          <div class="swiper-slide">

            <div class="card">
              <img src="<?= base_url('/assets/uploads/project/slider_image/' . $slide['image']) ?>" class="card-img-top"
                alt="<?= htmlspecialchars($slide['title']) ?>">
              <div class="card-body hover-show">
                <h5 class="card-title"><?= htmlspecialchars($slide['title']) ?></h5>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="swiper-slide">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="No slides">
            <div class="card-body">
              <h5 class="card-title">No slides available</h5>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<style>
  /* =========================
   SWIPER MAIN CONTAINER
========================= */

  .mySwiper {
    width: 100%;
    padding-bottom: 50px;
    overflow: hidden;
  }

  /* =========================
   EACH SLIDE
========================= */

  .mySwiper .swiper-slide {
    height: auto;
  }

  /* =========================
   CARD DESIGN
========================= */

  .mySwiper .card {
    position: relative;
    width: 100%;
    border: none;
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
  }

  /* =========================
   IMAGE
========================= */

  .mySwiper .card-img-top {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
  }

  /* =========================
   HOVER CAPTION
========================= */

  .mySwiper .hover-show {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;

    padding: 12px;

    background: rgba(0, 0, 0, 0.65);
    color: #fff;

    opacity: 0;
    transform: translateY(100%);

    transition: all .3s ease;
  }

  /* Show caption on hover */

  .mySwiper .card:hover .hover-show {
    opacity: 1;
    transform: translateY(0);
  }

  /* =========================
   TITLE
========================= */

  .mySwiper .card-title {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.4;
  }

  /* =========================
   SWIPER BUTTONS
========================= */

  .mySwiper .swiper-button-next,
  .mySwiper .swiper-button-prev {
    color: #0d6efd;
  }

  /* =========================
   PAGINATION
========================= */

  .mySwiper .swiper-pagination-bullet {
    background: #0d6efd;
    opacity: 0.5;
  }

  .mySwiper .swiper-pagination-bullet-active {
    opacity: 1;
  }

  /* =========================
   MOBILE RESPONSIVE
========================= */

  @media (max-width:576px) {

    .mySwiper .card-img-top {
      height: 180px;
    }

    .mySwiper .card-title {
      font-size: 14px;
    }

    /* Always show caption on mobile */

    .mySwiper .hover-show {
      opacity: 1;
      transform: translateY(0);
      padding: 10px;
    }

  }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".mySwiper", {

      loop: true,

      slidesPerView: 1,
      spaceBetween: 10,

      autoplay: {
        delay: 2500,
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
        },

        1200: {
          slidesPerView: 5
        }

      }

    });

  });
</script>








<!-- <div class="container my-2">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <?php if (!empty($image_slider)): ?>
        <?php foreach ($image_slider as $slide): ?>
          <div class="swiper-slide">

            <div class="card">
              <img src="<?= base_url('/assets/uploads/project/slider_image/' . $slide['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($slide['title']) ?>">
              <div class="card-body hover-show">
                <h5 class="card-title"><?= htmlspecialchars($slide['title']) ?></h5>
              </div>
            </div>
            
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="swiper-slide">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="No slides">
            <div class="card-body">
              <h5 class="card-title">No slides available</h5>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<style>
  .swiper {
    padding-bottom: 50px;
  }

  .swiper-slide {
    display: flex;
    justify-content: center;
    width: auto !important; 
  }

  .card {
    width: 100%;          
    max-width: 18rem;     
    box-shadow: 10px 10px 18px rgba(0, 0, 0, 0.12);
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
  }

  .card-img-top {
    height: 250px;
    object-fit: cover;
    width: 100%;
  }

  .card-body {
    background-color: transparent;
    position: relative;
  }

  .card-body.hover-show {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 15px;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.4s ease;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
  }

  .card:hover .card-body.hover-show {
    opacity: 1;
    transform: translateY(0);
  }

  .card-body.hover-show h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
  }

  /* Responsive tweaks */

  @media (max-width: 576px) {
    .card-img-top {
      height: 150px; 
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 1,
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

    0: {
        slidesPerView: 1,
        spaceBetween: 10
    },

    320: {
        slidesPerView: 1,
        spaceBetween: 10
    },

    480: {
        slidesPerView: 1.2,
        spaceBetween: 12
    },

    576: {
        slidesPerView: 2,
        spaceBetween: 15
    },

    640: {
        slidesPerView: 2.2,
        spaceBetween: 15
    },

    768: {
        slidesPerView: 3,
        spaceBetween: 20
    },

    820: {
        slidesPerView: 3.2,
        spaceBetween: 20
    },

    992: {
        slidesPerView: 4,
        spaceBetween: 20
    },

    1200: {
        slidesPerView: 5,
        spaceBetween: 24
    },

    1400: {
        slidesPerView: 6,
        spaceBetween: 24
    }

}
  });
</script> -->