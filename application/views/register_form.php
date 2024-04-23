<style>
        .card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            animation: bounceAnimation 2s;
            animation-fill-mode: forwards;
        }
				
				.card-head {
					background-color: #FFFFFF;
					color: #6777ef;
					text-align: center;
					border-top-left-radius: 15px;
					border-top-right-radius: 15px;
					padding: 20px;
				}

        @keyframes bounceAnimation {
            0% {
                transform: translateY(-150px);
            }
            100% {
                transform: translateY(10px);
            }
        }
    </style>



<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- <div class="card"> -->

								<div class="card card-primary">
									<div class="card-head">
										<h3>Register</h3>
									</div>


                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('register') ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="gender" required>
                                    <option value="">-- Pilih gender --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="no_telp" placeholder="No. Telepon" required>
                            </div>
														<div class="form-group">
																<input type="password" class="form-control" name="password" placeholder="Password" required>
														</div>

                            <div class="form-group">
															<div class="card-body">
																<label>Upload Kartu Identitas</label>
                                <input type="file" class="form-control-file" name="foto_identitas" required>
															</div>
															
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>

														
                        </form>
                    </div>
                </div>
								<div class="mt-2 text-muted text-center">
										Sudah Memiliki Akun? <a href="<?php echo base_url('auth/login') ?>">Login</a>
								</div>
            </div>
        </div>
    </div>
