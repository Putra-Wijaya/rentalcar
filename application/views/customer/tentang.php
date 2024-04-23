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

<div class="container">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-5">
                <div class="single-footer-widget">
                    <h2 style="color: black;">Tentang Kami</h2>
                    <div class="widget-body">
                        <p>Kami menghadirkan beragam pilihan kendaraan mulai dari mobil keluarga yang
                            nyaman hingga mobil mewah untuk perjalanan bisnis atau liburan Anda. Dengan
                            armada yang terawat dan berkualitas, serta tim profesional yang siap membantu
                            setiap langkah perjalanan Anda, kami berkomitmen untuk memberikan pengalaman
                            rental mobil yang tak terlupakan. Tidak hanya itu, kami juga menawarkan berbagai
                            paket rental yang dapat disesuaikan dengan kebutuhan Anda, mulai dari sewa
                            harian, mingguan, hingga bulanan. Kami percaya bahwa setiap pelanggan adalah
                            prioritas kami, dan kami berusaha untuk memberikan layanan terbaik dengan harga
                            yang bersaing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5 ">
                <div class="single-footer-widget">
                    <h2 style="color: black;">Hubungi Kami</h2>
                    <div class="widget-body">
                        <p>Hubungi kami untuk mengetahui lebih banyak. Dapatkan layanan terbaik dan
                            prioritas dari kami, NRC.</p>

                        <br>

                            <div class="card-body border-dark mb-3" style="max-width: 100%;">
								<div class="card-header">
								<form action="<?php echo base_url('customer/tentang/kirim_email')?>" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
									</div>
									<div class="form-group">
										<label for="exampleFormControlTextarea3">Deskripsi</label>
										<textarea class="form-control" id="exampleFormControlTextarea3" name="deskripsi" rows="7" required></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
								</div>
                                
                                </div>

                                <br></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



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
