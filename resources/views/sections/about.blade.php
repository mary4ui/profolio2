<section id="about" class="py-5 bg-dark">
    <h1 style="color: rgb(92, 153, 0)">* Cooperation</h1>
    <p>More than +168 <span style="color: rgb(177, 177, 177)"> companies</span></p>
    <p>trusted<span style="color: rgb(177, 177, 177)"> worldwide_</span></p>

    <div class="image-box">
        <!-- صور متحركة تتحرك إلى اليسار -->
        <div class="moving-image">
            <div class="row">
                <img src="{{asset('img/google.PNG')}}" alt="moving image 1" />
                <img src="{{asset('img/samsung.PNG')}}" alt="moving image 2" />
                <img src="{{asset('img/monzo.PNG')}}" alt="moving image 3" />
                <img src="{{asset('img/spotify.PNG')}}" alt="moving image 4" />
            </div>
        </div>

        <!-- صور ثابتة تتحرك إلى اليمين -->
        <div class="static-image">
            <img src="{{asset('img/monzo.PNG')}}" alt="moving image 3" />
            <img src="{{asset('img/spotify.PNG')}}" alt="moving image 4" />
            <img src="{{asset('img/visa.PNG')}}" alt="static image 2" />
            <img src="{{asset('img/google.PNG')}}" alt="static image 3" />
        </div>
    </div>

    <!-- دائرة داخل دائرة أخرى -->
    <div class="circle-container">
        <div class="outer-circle">
            <div class="inner-circle">
                <img src="{{asset('img/aar.png')}}" style="border-radius: 50%;width: 40px;height: 40px;object-fit: cover;" alt="profile picture" />
            </div>
        </div>
    </div>
    <!-- أيقونات تواصل -->
    <div class="col-md-6 order-md-2 mt-4 mt-md-0 contact-info">
        <div class="row">
           <!-- skype-->
           <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
            <i class="bi bi-skype"></i>
            <p class="info-detail">james.doe</p>
            </div>
            <!-- البريد الإلكتروني -->
            <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
                    <i class="bi bi-envelope-fill"></i>
                    <p class="info-detail">contact@botble.com</p>
            </div>
             <!-- الهاتف -->
             <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
                <i class="bi bi-telephone-fill"></i>
                <p class="info-detail">770079789</p>
        </div>
            
</section>