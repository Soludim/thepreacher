@extends('main')

@section('title', 'About')

@section('content')
<section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url({{asset('images/bg_1.jpg')}});  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay js-fullheight"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
                <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Me</h1>
            </div>
        </div>
    </div>
</section>

@include('partials._earliestEvent')

<section class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
        <h2 class="text-center mb-2">Personal Journey</h2>
        <div class="row justify-content-center pb-5">
            <div class="col-md-3 mb-2">
                <img src="{{asset('images/profile.jpg')}}" alt="profile picture" class="img-fluid" style="border-radius:4px">
            </div>
            <div class="col-md-7 heading-section ftco-animate">
                <p>My name is Samuel Asampong Nyarko, and I was born and raised in Kumasi, Ghana.
                    I attended Kumasi Anglican Senior High School, where I completed my secondary education.
                    After graduating, I pursued my undergraduate degree in Business Administration at KNUST University,
                    one of the top universities in Ghana.</p>

                <p>During my time at KNUST, I became involved with a church group on campus
                    and served as the prayer secretary in my third year. In my final year, I was elected as the president
                    and also served as the SCC treasurer. These experiences allowed me to develop my
                    leadership skills and gave me the opportunity to serve my fellow students.</p>


                <p>After completing my undergraduate degree in 2018, I decided to further my education by pursuing a
                    Master's degree in Finance at KNUST. Combining ministry and studies was challenging, but I persevered
                    and graduated in 2022.</p>

                <p>Outside of my academic pursuits, I have been involved with various church denominations and have been
                    honored to minister to congregations. My passion is to bring light and understanding to believers,
                    and I hope to continue serving in this capacity throughout my life.</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-3 bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 py-5 nav-link-wrap aside-stretch">
                <div class="nav ftco-animate flex-column nav-pills text-md-right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active pr-5" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-mission" aria-selected="true">Mission</a>
                </div>
            </div>
            <div class="col-md-8 pt-5 pb-5 pl-md-5 d-flex align-items-center">

                <div class="tab-content ftco-animate pl-md-5" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                        <span class="icon mb-3 d-block flaticon-bed"></span>
                        <h2 class="mb-4">My Mission</h2>
                        <p class="lead">" I believe that true wisdom and knowledge come from God, as it says in Proverbs 2:6,
                            "For the Lord gives wisdom; from his mouth come knowledge and understanding."</p>
                        <p>My mission is to use my knowledge and understanding of God and religion to teach and bring clarity to people.
                            Through my ministry, I aim to help others develop a deeper understanding of the Bible and how its teachings
                            apply to their lives.</p>

                        <p>As a teacher, I strive to create an environment that fosters learning and growth. I draw on my own experiences
                            and education in order to help others navigate the complexities of faith and spirituality. By sharing the
                            teachings of the Bible and guiding others toward a closer relationship with God, I hope to make a positive
                            impact on their lives.</p>

                        <p>My mission is grounded in the commandment that Jesus gave to his followers in Matthew 28:19-20,
                            "Go and make disciples of all nations, baptizing them in the name of the Father and of the Son
                            and of the Holy Spirit, and teaching them to obey everything I have commanded you." I believe that
                            it is my duty as a Christian to share the gospel with others and help them grow in their faith.</p>

                        <p>Ultimately, my goal is to inspire and empower others to pursue a life of faith and service. As
                            it says in Proverbs 4:7, "The beginning of wisdom is this: Get wisdom. Though it cost all you
                            have, get understanding.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection