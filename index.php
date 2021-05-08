<?php 
include('_includes/head.php');
?>

<main class="position-relative">

<?php include('_includes/monitor-riser.php') ?>

<?php include('_includes/progess-bar.php') ?>

<div class="container-fluid">
  <div class="container container__about col-12 col-lg-8 offset-lg-2">

    <div class="row">
      <div class="col-10 offset-1">
        <h2>About this project</h2>
        <p>The Mastercraft Bamboo Monitor Riser is a sturdy and stylish platform that elevates your screen 
          to a more comfortable viewing height. Placing your monitor at eye level has the potential to improve 
          your posture and make you more comfortable while at work, helping you stay focused on the task at hand.
        </p>
        </br>
        <p>Featuring artisan craftsmanship, the simplicity of design creates extra desk space below your computer 
          to allow notepads, pens, and USB sticks to be stored under the stand.</p>
      </div>
    </div>

    <div class="container container__reward col-10 offset-1">

      <div class="row">
        <div class="col-12 col-lg-6 text-left text-lg-start">
          <h2 class="">Bamboo Stand</h2>
        </div>
        <div class="col-12 col-lg-6 text-left text-lg-end">
          <p class="pledge">Pledge $25 or more</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <p>You get an ergonomic stand made of natural bamboo. You've helped us launch our promotional campaign, and 
            you’ll be added to a special Backer member list.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="wrapper-reward d-lg-inline-flex">
          <div class="col col-lg-6 d-inline-flex">
            <p class="numbers">64</p>
            <p style="padding-top: 1rem;margin-left: 1rem;">left</p>
          </div>
          <div class="col col-lg-6 text-lg-end">
            <button type="button" class="btn btn-primary btn__reward" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Select Reward
            </button>

            <?php include('_includes/first-modal.php'); ?>
                    

          </div>
        </div>
      </div>

    </div>

    <div class="container container__reward col-10 offset-1">

      <div class="row">
        <div class="col-12 col-lg-6 text-left text-lg-start">
          <h2 class="">Black Edition Stand</h2>
        </div>
        <div class="col-12 col-lg-6 text-left text-lg-end">
          <p class="pledge">Pledge $75 or more</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <p>You get a Black Special Edition computer stand and a personal thank you. You’ll be added to our Backer 
            member list. Shipping is included.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="wrapper-reward d-lg-inline-flex">
          <div class="col col-lg-6 d-inline-flex">
            <p class="numbers">101</p>
            <p style="padding-top: 1rem;margin-left: 1rem;">left</p>
          </div>
          <div class="col col-lg-6 text-lg-end">
            <button type="button" class="btn btn-primary btn__reward" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Select Reward
            </button>

            <?php include('_includes/first-modal.php'); ?>
                    

          </div>
        </div>
      </div>

    </div>

    <div class="container container__reward container__reward--opacity col-10 offset-1">

      <div class="row">
        <div class="col-12 col-lg-6 text-left text-lg-start">
          <h2 class="">Mahogany Special Edition</h2>
        </div>
        <div class="col-12 col-lg-6 text-left text-lg-end">
          <p class="pledge">Pledge $200 or more</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <p>You get two Special Edition Mahogany stands, a Backer T-Shirt, and a personal thank you. You’ll be added 
            to our Backer member list. Shipping is included.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="wrapper-reward d-lg-inline-flex">
          <div class="col col-lg-6 d-inline-flex">
            <p class="numbers">0</p>
            <p style="padding-top: 1rem;margin-left: 1rem;">left</p>
          </div>
          <div class="col col-lg-6 text-lg-end">
            <button type="button" class="btn btn__reward btn__reward--opacity" disabled data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Out of Stock
            </button>               
          </div>
          
        </div>
      </div>

    </div>

  </div>
</div>

</main>

<?php include('_includes/footer.php') ?>