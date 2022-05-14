@extends('visitor-layout.main')

@section('content')
<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{asset('assets/img/hd-10.jpg')}}" data-offset="0">
    <div class="container">
        <h1>Contact</h1>
        <h2>Lets Getting Closer</h2>
    </div>
</header>
<main>
    <section class="section-base">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6661055957569!2d106.82571782920002!3d-6.175659999720557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1652494730356!5m2!1sid!2sid" style="border:0; height: 400px; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <hr class="space" />
            <div class="row">
                <div class="col-lg-8">
                    <div class="title">
                        <h2>Write us</h2>
                        <p>Contact us from here</p>
                    </div>
                    <form action="themekit/scripts/contact-form/contact-form.php" class="form-box form-ajax" method="post" data-email="example@domain.com">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Name</p>
                                <input id="name" name="name" placeholder="Name" type="text" class="input-text" required>
                            </div>
                            <div class="col-lg-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="Email" type="email" class="input-text" required>
                            </div>
                        </div>
                        <p>Messagge</p>
                        <textarea id="messagge" name="messagge" class="input-textarea" placeholder="Write something ..." required></textarea>
                        <div class="form-checkbox">
                            <input type="checkbox" id="check" name="check" value="check" required>
                            <label for="check">You accept the terms of service and the privacy policy</label>
                        </div>
                        <button class="btn btn-sm" type="submit">Send messagge</button>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="title">
                        <h2>Contacts</h2>
                        <p>Information</p>
                    </div>
                    <ul class="text-list text-list-line">
                        <li><b>Address</b><hr /><p>Pellegrino, Veneto, Italy</p></li>
                        <li><b>Web</b><hr /><p>domain.com</p></li>
                        <li><b>Email</b><hr /><p>info@domain.com</p></li>
                        <li><b>Phone</b><hr /><p>(02) 123 456 789999</p></li>
                        <li><b>Skype</b><hr /><p>example.name</p></li>       
                    </ul> 
                    <hr class="space-sm" />
                    <div class="icon-links icon-social icon-links-grid social-colors-hover">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="google"><i class="icon-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection