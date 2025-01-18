<div class="container py-5">
    <h2 class="text-center mb-4" style="color: greenyellow">Contact Us</h2>
    <div class="row">
        <!-- قسم النموذج -->
        <div class="col-md-6 order-md-1">
            <form>
                <div class="row">
                    <!-- الاسم -->
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <!-- البريد الإلكتروني -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                </div>

                <div class="row">
                    <!-- العنوان -->
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Your Address">
                    </div>
                    <!-- الهاتف -->
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Your Phone Number">
                    </div>
                </div>

                <!-- الموضوع -->
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>

                <!-- الرسالة -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Write Your Message Here" required></textarea>
                </div>

                <!-- مربع الموافقة على سياسة الخصوصية -->
                <div class="form-check mb-3">
                    <input type="checkbox" class="custom-checkbox" id="privacyPolicy" required>
                    <label class="form-check-label" for="privacyPolicy">
                        I agree to the Terms and Privacy Policy.
                    </label>
                </div>

                <!-- زر الإرسال -->
                <button type="submit" class="custom-button">
                    Send Message <i class="bi bi-send"></i>
                </button>
            </form>
        </div>

        <!-- قسم معلومات الاتصال -->
        <div class="col-md-6 order-md-2 mt-4 mt-md-0 contact-info">
            <div class="row">
                <!-- الهاتف -->
                <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="info-text">
                        <p class="info-title">Phone</p>
                        <p class="info-detail">+1-234-567-8901</p>
                    </div>
                </div>

                <!-- البريد الإلكتروني -->
                <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="info-text">
                        <p class="info-title">Email</p>
                        <p class="info-detail">contact@botble.com</p>
                    </div>
                </div>

                <!-- تويتر -->
                <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="bi bi-twitter"></i>
                    </div>
                    <div class="info-text">
                        <p class="info-title">X (Twitter)</p>
                        <p class="info-detail">@BotbleTechnologies</p>
                    </div>
                </div>

                <!-- العنوان -->
                <div class="col-md-12 mb-3 d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="info-text">
                        <p class="info-title">Address</p>
                        <p class="info-detail">0811 Erdman Prairie, Joaville CA</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>