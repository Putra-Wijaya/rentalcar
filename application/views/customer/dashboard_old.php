 <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

#slide {
    background-image: url('./bg.jpg');
	/* background-color: #E05B5B; */
    background-size: cover;
    background-position: center;
    padding: 250px 0;
}

#typed {
    font-size: 36px;
    font-weight: bold;
    color: #00FF77;
    margin-bottom: 30px;
}

p {
    font-size: 15px;
    color: #000000;
    max-width: 600px;
    margin: 0 auto;
}

.content-wrapper {
    padding: 0 20px;
}

	#typed {
    font-size: 36px;
    font-weight: bold;
    overflow: hidden; /* Hide the content initially */
    border-right: .15em solid orange; /* The typewriter cursor */
    white-space: nowrap; /* Keeps the content on a single line */
    margin: 0 auto; /* Gives that scrolling effect as the typing happens */
    animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
    from, to {
        border-color: transparent;
    }
    50% {
        border-color: orange;
    }
}

 </style>  
 
 <!--== SlideshowBg Area Start ==-->
    <section id="slide">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="slideshowcontent">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h1 id="typed">SELAMAT DATANG  DI NUSA RENT CAR</h1>
                            <p>Tempat terpercaya untuk memenuhi kebutuhan perjalanan Anda! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--== SlideshowBg Area End ==-->


    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_customer ?></span>+</p>
                                        <h4>CUSTOMER</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_mobil ?></span>+</p>
                                        <h4>MOBIL TERSEDIA</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <!-- <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>

                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_rental ?></span>+</p>
                                        <h4>PENYEDIA RENTAL</h4>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Pilih Mobil Anda</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Mobil Pilihan Terbaik Untuk Memberikan Anda Kenyamanan</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->

                                <div class="home2-car-filter">
                                    <a href="#" data-filter="*" class="active">all</a>

                                    <?php foreach ($type as $tp ) : ?>
                                        <a href="#" data-filter=".<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                    <?php foreach ($mobil as $mb ) : ?>
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-6 col-md-6 <?php echo $mb->kode_type ?>">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="<?php echo base_url('assets/upload/' . $mb->gambar) ?>">
                                                        <img style="height: 300px"src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt="<?php echo $mb->merk ?>">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="<?php echo base_url('customer/data_mobil/detail_mobil/') . $mb->id_mobil ?>"><?php echo $mb->merk ?></a>
                                                        <span class="price"><i class="fa fa-tag"></i>Rp. <?php echo number_format($mb->harga,0,',','.') ?>/Hari</span>
                                                    </h3>

                                                    <h5><?php echo $mb->nama_rental ?></h5>

                                                    <div class="p-car-feature">
                                                        <?php if($mb->ac == '1') { ?>
                                                            <a>AC</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->supir == '1') { ?>
                                                            <a>SUPIR</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->mp3_player == '1') { ?>
                                                            <a>MP3 PLAYER</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->central_lock == '1') { ?>
                                                            <a>CENTRAL LOCK</a>
                                                        <?php } else { ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                    <?php endforeach; ?>
                                    
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->
