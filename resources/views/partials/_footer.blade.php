<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="logo">
                        <a href="/" style="display:flex; align-items: center"><img src="{{asset('images/logo-w.png')}}" width="50" />
                            <div style="flex-direction:column; margin-left:10px"><span>the</span> <span>Preacher</span></div>
                        </a>
                    </h2>
                    <p>For I am not ashamed of the gospel, for it is the power of God for salvation to everyone who believes...</p>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="/blog" class="py-2 d-block">Blog</a></li>
                        <li><a href="/sermons" class="py-2 d-block">Sermons</a></li>
                        <li><a href="/events" class="py-2 d-block">Events</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">{{config('app.church_address')}}</a></li>
                        <li><a href="#" class="py-2 d-block"><span class="icon icon-phone"></span> {{config('app.contact_phone')}}</a></li>
                        <li><a href="mailto:{{config('app.contact_mail')}}" class="py-2 d-block"><span class="icon icon-envelope"> {{config('app.contact_mail')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{config('app.church_address')}}</span></li>
                            <li><span class="icon icon-clock-o"></span><span class="text">Sunday &mdash; Monday 8:00am - 5:00pm</span></li>
                        </ul>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="https://www.twitter.com/{{config('app.twitter')}}" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/{{config('app.facebook')}}" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/{{config('app.instagram')}}" target="_blank"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>