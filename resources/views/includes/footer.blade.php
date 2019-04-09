<footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
        
            <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About GDPS</h5>
                        <!-- Nav -->
                        <nav>
                           <a>Menjalankan usaha di bidang penyediaan, penyiapan, dan pengelolaan ketenaga kerjaan, serta bidang aktivitas penyedia jasa lainnya</a> 
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Navigation Links</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                               <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('service')}}">Services</a></li>
                                <li><a href="{{route('form')}}">E-Recruitment</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <a href="{{route('contact')}}">
                        <h5 class="widget-title">Map Location</h5>
                        
                        <img src="{{asset('img/map_icon.png')}}" alt="" style="max-width: 100%; height: auto;" width="200" height="216">
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Services</h5><nav>
                            <ul>
                               <li><a href="{{route('service')}}">Helper Teknisi Pesawat</a></li>
                                <li><a href="{{route('service')}}">Ground Handling Pesawat</a></li>
                                <li><a href="{{route('service')}}">Painter Pesawat</a></li>
                                <li><a href="{{route('service')}}">Administration</a></li>
                                <li><a href="{{route('service')}}">Data Entry</a></li>
                                <li><a href="{{route('service')}}">Front Office</a></li>
                                <li><a href="{{route('service')}}">Aviation Security</a></li>
                                <li><a href="{{route('service')}}">Office & Bulding</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="{{route('index')}}" class="footer-logo"><img src="{{asset('img/logo_small.png')}}" alt=""></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
</body>
</html>
