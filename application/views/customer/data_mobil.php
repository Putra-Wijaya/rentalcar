<!-- Page Title Area Start -->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Pilihan Mobil</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Berbagai mobil terbaik untuk kebutuhan anda</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title Area End -->

<!-- Car List Area Start -->
<section id="car-list-area" class="section-padding">
    <div class="container">
        <?php echo $this->session->flashdata('pesan') ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="car-list-content">
                    <div class="row">
                        <?php foreach ($mobil as $mb) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-car-wrap" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                <img class="car-list-img" src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt="<?php echo $mb->merk ?>" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="car-list-info without-bar">
                                                                       <h2><a href="#"><?php echo $mb->merk ?></a></h2>
                                                                       <h5>Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?>/Hari</h5>
                                    <p class="text-dark font-italic">Mobil ini disediakan oleh <?php echo $mb->nama_rental ?></p>
                                    <ul class="car-info-list">
                                        <li><?php echo ($mb->ac == "1") ? '<i class="fa fa-check-square text-warning"></i>' : '<i class="fa fa-times-circle text-danger"></i>' ?> AC</li>
                                        <li><?php echo ($mb->supir == "1") ? '<i class="fa fa-check-square text-warning"></i>' : '<i class="fa fa-times-circle text-danger"></i>' ?> Supir</li>
                                        <li><?php echo ($mb->mp3_player == "1") ? '<i class="fa fa-check-square text-warning"></i>' : '<i class="fa fa-times-circle text-danger"></i>' ?> MP3 Player</li>
                                        <li><?php echo ($mb->central_lock == "1") ? '<i class="fa fa-check-square text-warning"></i>' : '<i class="fa fa-times-circle text-danger"></i>' ?> Central Lock</li>
                                    </ul>
                                    <?php if ($mb->status == "1") {
                                        echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<span class="btn btn-warning">Rental</span>');
                                    } else {
                                        echo "<span class='rent-btn'>Tidak Tersedia</span>";
                                    } ?>
                                    <a href="<?php echo base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>" class="btn btn-success">Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car List Area End -->
