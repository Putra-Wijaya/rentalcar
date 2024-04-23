<style>
    body {
      background-color: #f8f9fc;
    }

    .login-brand img {
      margin-bottom: 30px;
    }

    .card-primary {
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      animation: slideInRight 1s ease-out;
    }

    @keyframes slideInRight {
      0% {
        transform: translateX(100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .card-head {
      background-color: #FFFFFF;
      color: #6777ef;
      text-align: center;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      padding: 20px;
    }

    .card-body {
      padding: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #6777ef;
      border-color: #6777ef;
    }

    .btn-primary:hover {
      background-color: #5563ee;
      border-color: #5563ee;
    }

    .mt-5 {
      margin-top: 50px;
    }

		.logo {
            animation: moveAnimation 2s infinite alternate;
        }

        @keyframes moveAnimation {
            0% {
                transform: translateX(-20px);
            }
            100% {
                transform: translateX(20px);
            }
        }
</style>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

					<!-- <div class="logo text-center"> -->
            <!-- <img src="<?php echo base_url('assets/assets_stisla') ?>/logo.png" alt="logo" width="250px"> -->
						<!-- <h1 >Nusa Rent Car</h1> -->
          <!-- </div> -->

            <div class="card card-primary">
              <div class="card-head">
								<h3>- Login -</h3>
              </div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
							<div class="mt-5 text-muted text-center">
								Belum memiliki akun? <a href="<?php echo base_url('register') ?>">Buat akun</a>
							</div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
