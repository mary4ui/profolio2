<section id="about" class="py-5 bg-dark">
    <h1 style="color: rgb(92, 153, 0)">* Cooperation  </h1>
    <p>More than +168  <span style="color: rgb(177, 177, 177)"> companies</span></p>
    <p> trusted<span style="color: rgb(177, 177, 177)">  worldwide_</span></p>

    <!-- مربع يحتوي على صور متحركة -->
    <div class="image-box">
        <!-- صور متحركة -->
        <div class="moving-image">
            <div class="row">
                <img src="{{asset('img/google.PNG')}}" alt="moving image 1" />
                <img src="{{asset('img/samsung.PNG')}}" alt="moving image 2" />
            </div>
            <div class="row">
                <img src="{{asset('img/monzo.PNG')}}" alt="moving image 3" />
                <img src="{{asset('img/spotify.PNG')}}" alt="moving image 3" />
            </div>
        </div>

        <!-- صور ثابتة -->
        <div class="static-image">
            <img src="{{asset('img/spotify.PNG')}}" alt="static image 1" />
            <img src="{{asset('img/visa.PNG')}}" alt="static image 2" />
            <img src="{{asset('img/google.PNG')}}" alt="static image 3" />
        </div>
    </div>

    <!-- دائرة داخل دائرة أخرى -->
    <div class="circle-container">
        <div class="outer-circle">
            <div class="inner-circle">
                <img src="{{asset('img/aar.png')}}" style="border-radius: 50%;width: 40px;height: 40;object-fit: cover;" alt="profile picture" />
            </div>
        </div>
    </div>

    <!-- أيقونات تواصل -->
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank">
            <img src="{{asset('icons/facebook.PNG')}}" alt="Facebook" />
        </a>
        <p>maryam67@gmail.com</p>
        <a href="https://instagram.com" target="_blank">
            <img src="{{asset('icons/instagram.PNG')}}" alt="Instagram" />
        </a>
        <p>maryam67@gmail.com</p>
        <a href="https://" target="_blank">
            <img src="{{asset('icons/phone.PNG')}}" alt="Instagram" />
        </a>
        <p>123-456-789</p>
    </div>
    {{-- <div class="circle-container">
        <div class="circle-container1"></div>
        <div class="circle-container2"></div>
        <div class="circle-container3"></div>
    </div> --}}
</section>