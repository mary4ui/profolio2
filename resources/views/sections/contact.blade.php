<!-- قسم التواصل -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="color: greenyellow">Contact Us </h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <!-- الاسم -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>

                    <!-- البريد الإلكتروني -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>

                    <!-- العنوان -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Your Address">
                    </div>

                    <!-- الهاتف -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Your Phone Number">
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
                    <div class="form-check">
                        <input type="checkbox"  class="form-check-input "style="color: gray" id="privacyPolicy" required>
                        <label class="form-check-label" for="privacyPolicy">
                            I agree to the Terms and <a >Privacy Policy</a>.
                        </label>
                    </div>

                    <!-- زر الإرسال -->
                    <button type="submit" class="custom-button">
                        Send Message <i class="bi bi-send"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>