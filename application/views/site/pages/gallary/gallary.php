<section class="gallary-section">
    <div class="gallary-section-title">
        <h2>গ্যালারি</h2>
    </div>

    <section class="gallery-section py-4">
        <div class="container">
            <div class="row g-3">

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775014060_18856.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775014045_18849.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775014023_18854.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775014060_18856.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775014023_18854.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775013983_18852.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="http://localhost:8080/bjsu/assets/uploads/project/slider_image/1775014060_18856.jpg" onclick="openLightbox(this.src)">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/600/600?6" onclick="openLightbox(this.src)">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img">
    </div>
</section>



<style>

    .gallary-section{
        background-color: antiquewhite;
        width: 80%;
        margin: 0 auto;
    }


    .gallary-section-title {
        padding: 10px;
        color: #fff;
        background-color: #7A1C87;
        text-align: center;
        border-radius: 4px;
        margin: 0 auto;
        margin-top: 5px;

    }


    .gallery-item {
        width: 100%;
        height: 220px;
        overflow: hidden;
        border-radius: 10px;
        cursor: pointer;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.4s;
    }

    /* Hover zoom */
    .gallery-item:hover img {
        transform: scale(1.1);
    }

    /* Lightbox */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .lightbox img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
    }
</style>