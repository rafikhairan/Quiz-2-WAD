<!-- Awal Page Header -->
<section id="page-header" class="d-flex flex-column text-center justify-content-center about-header">
  <h2 class="fw-bold">#KnowUs</h2>
  <p>Lorem ipsum dolor sit amet, consectetur</p>
</section>
<!-- Akhir Page Header -->

<!-- Awal About -->
<section id="about">
  <div class="container my-5">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-5 me-0 me-md-3 mb-4 mb-md-0">
        <iframe
          width="100%"
          height="300"
          src="https://www.youtube.com/embed/L_S6_MfAWmY"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="col-md-6">
        <h2>Who We Are?</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat libero modi amet iste sed odit molestiae sequi cupiditate, ab officiis error fugit atque similique aut eligendi delectus consequuntur! Iusto dolorem adipisci
          dolorum voluptatum quas voluptate nemo beatae nihil distinctio rem tenetur architecto maiores sunt culpa dolores mollitia a minus, dignissimos, impedit quos atque earum velit voluptas laudantium. Nihil dicta odio unde maiores
          ipsam sequi iste eveniet nesciunt autem voluptatem, veritatis debitis cupiditate nostrum sed consequatur, incidunt, exercitationem assumenda blanditiis quo!
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Akhir About -->

<!-- Awal About App -->
<section id="about-app">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <h1>Download Our <a href="">App</a></h1>
        <div class="mt-4 mb-4">
          <video src="<?= BASEURL; ?>/img/about/1.mp4" autoplay muted loop></video>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir About App -->

<!-- Awal Featuress -->
<section id="features">
  <div class="container my-5">
    <div class="row justify-content-evenly">
      <?php foreach($data['features'] as $feature) { ?>
        <div class="col-md-2 py-4 border text-center shadow-sm mb-xl-0 mb-lg-3 me-lg-2 mb-md-3 me-md-1 me-sm-1 mb-sm-4 mb-4 features-box">
          <img src="<?= BASEURL; ?>/img/features/<?= $feature; ?>.png" alt="" />
          <h6 class="py-1 px-2 rounded-1 mt-3 d-inline-block">Free Shipping</h6>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Akhir Features -->