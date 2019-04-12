@include('includes.header')

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/Foto/person.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">SELAMAT DATANG</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">  <span>Garuda Daya Pratama Sejahtera</span> </h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Menjalankan usaha di bidang penyediaan dan pengelolaan ketenagakerjaan, serta bidang aktivitas penyedia jasa lainnya</p>
                            </div>
                        </div>
                    </div>
                  </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/index-2.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">DAPATKAN SEGERA</h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Pelayanan Premium </span></h2>
                                <p data-animation="fadeInDown" data-delay="500ms">Memberikan layanan yang prima dan terbaik untuk kepuasan seluruh pelanggan secara konsisten</p>
                                <a href="{{route('service')}}" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>
            
            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/administration.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms"></h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Profesional dan Terpercaya </span></h2>
                                <p data-animation="fadeInDown" data-delay="500ms">Menjadi mitra profesional dan berintegritas guna menghasilkan layanan yang berkualitas</p>
                                <a href="{{route('service')}}" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2>Our services</h2>
            <br>
            <h6 style="color: darkgrey;"><i>Untuk meraih visi dan misi perusahaan, kami memiliki nilai-nilai yang menjadi budaya dan harus dianut oleh semua anggota dalam organisasi. Nilai-nilai ini diharapkan bisa membuat organisasi terus bertahan terhadap berbagai perubahan serta tantangan bisnis dari luar.</i></h6>
                        <a href="{{route('about')}}" class="btn credit-btn mt-50">CEO Message</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ###### -->                       

    
    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>Get in touch with us.</h4>
                        </div>
                        <div class="cta-btn">
                            <a href="{{route('contact')}}" class="btn credit-btn box-shadow">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->


    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/logo_new_small.png);"></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p>Garuda Daya Pratama Sejahtera</p>
                <h2>your PRIME partners</h2>
            </div>
            <h6><b>Kami akan menjadi mitra bisnis strategis anda dengan menjunjung tinggi nilai-nilai perusahaan. Menjadi mitra yang professional dan berintegritas guna menghasilkan layanan yang berkualitas.</b></h6>
            
            <br>
            <a href="{{route('about')}}" class="btn credit-btn box-shadow btn-2">Read More</a>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

@include('includes.footer')