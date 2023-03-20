@extends('main')

@section('title', 'Home')
@section('content')
<section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url({{asset('images/bg_1.jpg')}});  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay js-fullheight"></div>
    <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=5m--ptwd_iI',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:false, startAt:0, opacity:1, quality:'default'}"></a>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Needing <strong>Jesus Christ</strong> Together</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/contact" class="btn btn-primary btn-outline-white px-4 py-3">Save your spirit</a></p>
            </div>
        </div>
    </div>
</section>

@include('partials._earliestEvent')

<section class="ftco-section-2">
    <div class="container-fluid">
        <div class="section-2-blocks-wrapper d-flex row no-gutters">
            <div class="img col-md-6 ftco-animate" style="background-image: url({{asset('images/about.jpg')}});">
                <a href="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2Fmoneyrotate00%2Fvideos%2F323174469615347%2F&show_text=false&width=560&t=0" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
            </div>
            <div class="text col-md-6 ftco-animate">
                <div class="text-inner align-self-start">

                    <h3>Ancient in Spirit: Young Men with Profound Divine Knowledge</h3>
                    <p>These individuals have been imbued with a profound understanding of the Bible and possess a level of
                        wisdom that belies their youthful appearance. Like the prophets of old, they possess an ancient spirit that
                        has been instilled within them by God, enabling them to impart His message with clarity and authority.
                    </p>

                    <p>Their age may be young, but their spiritual maturity and insight are a testament to the transformative power
                        of God's Word and the wisdom it can bestow upon those who seek to know Him.</p>
                    <p> "I have more insight than all my teachers, for I meditate on your statutes. I have more understanding
                        than the elders, for I obey your precepts." &mdash; Psalm 119:99-100 </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-6 text-center heading-section ftco-animate">
                <span class="subheading">Our Services</span>
                <h2 class="mb-4">Giving light to someone</h2>
                <p>You, my brothers and sisters, were called to be free. But do not use your freedom to indulge
                    the flesh; rather, serve one another humbly in love.
                </p>
                <p>Galatians 5:13</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <a href="/contact">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-planet-earth"></span></div>
                        </div>
                    </a>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">I'm a New Convert</h3>
                        <p>All manner of people are needed by God. You are warmly welcome!!!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-maternity"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Care Ministries</h3>
                        <p>I am committed to caring for you with the compassion and love of Jesus Christ.</p>
                    </div>
                </div>
            </div>
            @include('partials._prayerRequestModal')
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate" style="cursor:pointer" data-toggle="modal" data-target="#requestModal">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-pray"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Prayer Request</h3>
                        <p>Have a prayer request? Simply tab and send your message to us. We're here for you.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-podcast"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Podcasts</h3>
                        <p>Join my podcast to explore a range of topics. Subscribe now and never miss an episode!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Sermons</span>
                <h2 class="mb-3">Sermons, Covers & My Songs</h2>
                <p>Join me as we explore the richness of God's Word in sermons & songs and find inspiration to live a
                    life of purpose and meaning
                </p>
            </div>
        </div>
        @foreach($data->sermons as $sermon)
        <div class="row mb-2">
            <div class="col-12 text-center mb-3">
                <h3>
                    <span class="badge badge-secondary" style="margin-left:5px; color:#fff; font-size:50%">{{$sermon->category->name}}</span>
                    <span class="text-uppercase">&ldquo;{{$sermon->topic}}&rdquo;</span> &mdash;
                    <span> {{$sermon->speaker}}</span>
                </h3>
            </div>
            <div class="col-12">
                <audio id="player2" preload="none" controls class="player">
                    <source src="https://docs.google.com/uc?export=download&id={{$sermon->audio_id}}" type="audio/mp3">
                </audio>
            </div>
        </div>
        @endforeach
        <div class="row mt-5">
            <div class="col text-center">
                <p><a href="/sermons" class="btn btn-primary btn-outline-primary p-3">Check all uploads</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Recent Blog</h2>
                <p>Let's engage in insightful discussions and leave your comments to share your thoughts with our community</p>
            </div>
        </div>
        <div class="row">
            @foreach($data->posts as $post)
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry" data-aos-delay="100">
                    <a href="{{url('/post/' . Crypt::encrypt($post->id))}}" class="block-20" style="background-image: url({{asset('images/'.$post->coverImage)}});">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-3">
                            <div><a href="#">{{date('M', strtotime($post->updated_at))}} {{date('d', strtotime($post->updated_at)) }}, {{ date('Y', strtotime($post->updated_at)) }}</a></div>
                            <div><a href="#">{{$post->user->name}}</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{$post->comments_count}}</a></div>
                        </div>
                        <div style="height: 45px">
                            <h3 class="heading">
                                <a href="{{url('/post/' . Crypt::encrypt($post->id))}}">
                                    @if (strlen($post->title) < 41) {{$post->title}} @else {{substr($post->title, 0, 41)}}... @endif </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div> @endforeach
        </div>
    </div>
</section>
<style>
    .player {
        width: 100%;
        height: 32px;
        border-radius: 0;
    }

    audio {
        border: 2px solid black;
        border-radius: 0px;
        color: black;
    }
</style>
@endsection