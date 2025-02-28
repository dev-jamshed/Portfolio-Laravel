<section class="get-in-touch-area tmp-section-gapTop">
    <div class="container">
        <div class="contact-get-in-touch-wrap">
            <div class="get-in-touch-wrapper tmponhover">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="section-head text-align-left">
                            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <span class="subtitle">GET IN TOUCH</span>
                            </div>
                            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate your brand with Me </h2>
                            <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a reader will be
                                distrol acted bioiiy desig
                                ished fact that a reader will acted ished fact that a reader will be distrol
                                acted </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-inner">
                            <div class="contact-form">
                                <div id="form-messages" class="error"></div>
                                <form class="tmp-dynamic-form" id="create-contact-form">
                                    @csrf
                                    <div class="contact-form-wrapper row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field"  id="contact-name" name="full_name" placeholder="Your Name" type="text" required>
                                                <span class="error" id="full_name-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" id="contact-phone" name="phone_number" placeholder="Phone Number" type="number" required>
                                                <span class="error" id="phone_number-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" id="contact-email" name="email" placeholder="Your Email" type="email" required>
                                                <span class="error" id="email-error"></span>    
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" type="text" id="subject" name="subject" placeholder="Subject">
                                                <span class="error" id="subject-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="input-field" placeholder="Your Message" name="message"  id="contact-message" required></textarea>
                                                <span class="error" id="message-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="tmp-button-here">
                                                <button class="tmp-btn hover-icon-reverse radius-round w-100" name="submit" type="submit" id="submit">
                                                    <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Appointment Now</span>
                                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                    </span>
                                                </button>   
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.getElementById('create-contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);

        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text
       
        $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                    )
                    .prop('disabled', true);


        fetch("{{ route('frontend.contact.store') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                
                Swal.fire({
                title: "Query Subbmited!",
                text: "Thank You For Your Interest , We'll Get Back To You Soon!",
                icon: "success"
                });

                document.getElementById('create-contact-form').reset();

                // window.location.href = "{{ route('admin.contacts.index') }}";
            } else {
                // Clear previous errors
                document.querySelectorAll('.error').forEach(function(element) {
                    element.textContent = '';
                });

                // Display validation errors
                for (const [key, value] of Object.entries(data.errors)) {
                    document.getElementById(`${key}-error`).textContent = value[0];
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
        }).finally(()=>{
            $submitButton.html(originalText).prop('disabled', false);
        });
    });
</script>