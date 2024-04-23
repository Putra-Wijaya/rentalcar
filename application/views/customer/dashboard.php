	<section class="content">
		<h1>
			<a href="" style="color: #f63e4e;" class="typewrite" data-period="2000" data-type='[ "Selamat Datang! ", "Nusa Rent Car"]'>
				<span class="wrap"></span>
			</a>
		</h1>
		<p style="color: #424144;">Tempat terpercaya untuk memenuhi kebutuhan <br>perjalanan Anda!</p>
				<button id="rentalButton" onclick="window.location.href='<?php echo base_url('customer/data_mobil') ?>'">Rental</button>
	</section>

	<section id="funfact-area" class="card-header">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <?php 
                            $funfacts = [
                                ['icon' => 'fa-smile-o', 'count' => $total_customer, 'title' => 'CUSTOMER'],
                                ['icon' => 'fa-car', 'count' => $total_mobil, 'title' => 'MOBIL TERSEDIA'],
                                ['icon' => 'fa-bank', 'count' => $total_rental, 'title' => 'PENYEDIA RENTAL']
                            ];
                            foreach ($funfacts as $funfact): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-icon">
                                        <i class="fa <?php echo $funfact['icon']; ?>"></i>
                                    </div>
                                    <div class="card-content">
                                        <p><span class="counter"><?php echo $funfact['count']; ?></span>+</p>
                                        <h4><?php echo $funfact['title']; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section id="choose-car" class="section-padding">
		<div class="container">
			<div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Pilih Mobil Anda</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Mobil Pilihan Terbaik Untuk Memberikan Anda Kenyamanan</p>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-12">
					<div class="choose-ur-cars">
						<div class="row">
							<div class="col-lg-3">
								<div class="home2-car-filter">
									<a href="#" data-filter="*" class="active">all</a>
									<?php foreach ($type as $tp): ?>
										<a href="#" data-filter=".<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></a>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="row popular-car-gird">
									<?php foreach ($mobil as $mb): ?>
										<div class="col-lg-6 col-md-6 <?php echo $mb->kode_type ?>">
											<div class="single-popular-car">
												<div class="p-car-thumbnails">
													<a class="car-hover" href="<?php echo base_url('assets/upload/' . $mb->gambar) ?>">
														<img style="height: 300px" src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt="<?php echo $mb->merk ?>">
													</a>
												</div>
												<div class="p-car-content">
													<h3>
														<a href="<?php echo base_url('customer/data_mobil/detail_mobil/') . $mb->id_mobil ?>"><?php echo $mb->merk ?></a>
														<span class="price" style="color: #f63e4e;">
															<i class="fa fa-tag"></i>
															<b>Rp. <?php echo number_format($mb->harga,0,',','.') ?>/Hari</b>
														</span>
													</h3>
													<h5><?php echo $mb->nama_rental ?></h5>
													<div class="p-car-feature">
														<?php if($mb->ac == '1') echo "<a>AC</a>"; ?>
														<?php if($mb->supir == '1') echo "<a>SUPIR</a>"; ?>
														<?php if($mb->mp3_player == '1') echo "<a>MP3 PLAYER</a>"; ?>
														<?php if($mb->central_lock == '1') echo "<a>CENTRAL LOCK</a>"; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<script>
	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
