<section class="hero  bg-dark border border-secondary" >
    <div class="container">
        <div class="row align-items-center">
            <!-- Profile Image -->
            <div class="col-md-6 text-center">
                <div class="profile-image position-relative">
                    <img 
                        style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%); max-width: 100%; height: auto;" 
                        src="{{asset('img/mmm.png')}}" 
                        class="img-fluid" 
                        alt="Profile Picture">
                    <img 
                        class="shape position-absolute" 
                        src="{{asset('img/people-shape.png')}}" 
                        alt="Decorative Shape">
                </div>
            </div>

            <!-- Developer Text and Tech Icons -->
            <div class="col-md-6">
                <h4 style="margin-bottom: 10px;">
                    &lt;<span style="color: #f585bd;">span</span>&gt;Hey, I'm MARYAM&lt;/<span style="color: #f585bd;">span</span>&gt;
                </h4>

                <h1 class="big-text">Senior<br><span style="color: green" class="full-stack">{Full Stack}</span></h1>
                <h1 class="big-text">Web & <br>App developer_</h1>

                <p class="p">
                    &lt;<span style="color: #f585bd;">p</span>&gt; 
                    With expertise in cutting-edge technologies such as 
                    <span class="highlight" style="color: rgb(247, 96, 229)">NodeJS</span>, 
                    <span class="highlight"  style="color: rgb(252, 124, 250)">React</span>, 
                    <span class="highlight"  style="color: rgb(241, 130, 230)">Angular</span>, and 
                    <span class="highlight"  style="color: rgb(250, 109, 245)">Laravel</span>... 
                    I deliver web solutions that are both innovative and robust.
                    &lt;/<span style="color: #f585bd;">p</span>&gt;
                </p>

                <!-- Flex container for tech icons and "and more" -->
                <div class="d-flex align-items-center">
                    <div class="tech-icons d-flex">
                        <div class="tech-icon-container">
                            <img src="{{asset('img/3.PNG')}}" alt="Firebase" class="tech-icon">
                            <img src="{{asset('img/2.PNG')}}" alt="MongoDB" class="tech-icon">
                            <img src="{{asset('img/4.PNG')}}" alt="NodeJS" class="tech-icon">
                            <img src="{{asset('img/5.PNG')}}" alt="TailwindCSS" class="tech-icon">
                        </div>
                    </div>
                    <!-- "and more" text aligned next to the icons -->
                    <div class="ms-3">
                        <p class="text-custom">...and more</p>
                    </div>
                </div>
                
                 <!-- CV Download Button with Icon -->
                <a href="#" class="btn d-flex align-items-center" style="color: rgb(93, 93, 93)"><i class="bi bi-download d-flex "></i>
                    <img src="{{asset('')}}" alt="" style="width: 20px; margin-right: 5px;">
                    Download My CV
                </a>
            </div>
        </div>
    </div>
</section>