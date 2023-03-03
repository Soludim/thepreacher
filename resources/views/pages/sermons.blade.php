@extends('main')

@section('title', 'Sermons')

@section('content')

<section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url({{asset('images/bg_1.jpg')}});  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay js-fullheight"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Sermons</span></p>
                <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sermons</h1>
            </div>
        </div>
    </div>
</section>

@include('partials._earliestEvent')

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate" id="sermon_list">
                @if($data->sermons->data != null)
                @foreach($data->sermons->data as $sermon)
                <div class="row mb-4">
                    <div class="col-12 text-center mb-3">
                        <h5>
                            <span class="badge badge-secondary" style="margin-left:5px; color:#fff; font-size:50%">{{$sermon->category->name}}</span>
                            <span class="text-uppercase">&ldquo;{{$sermon->topic}}&rdquo;</span> &mdash;
                            <span> {{$sermon->speaker}}</span>
                        </h5>
                    </div>
                    <div class="col-12">
                        <audio id="player2" preload="none" controls class="player">
                            <source src="https://docs.google.com/uc?export=download&id={{$sermon->audio_id}}" type="audio/mp3">
                        </audio>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row">
                    <h3 style="margin-left:auto; margin-right:auto">NO SERMONS AVAILABLE</h3>
                </div>
                @endif

                @if($data->sermons->last_page != 1)
                <div class="row mt-5" id="paginator">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li class="{{$data->sermons->prev_page_url == null ? 'disabled' : ''}}"><a href="{{url('sermons/'. Crypt::encrypt($data->sermons->current_page - 1) . ($data->topic ? '?topic='. $data->topic : ''))}}">&lt;</a></li>
                                @for($i=1; $i <= $data->sermons->last_page; $i++)
                                    <li class="{{ $data->sermons->current_page == $i ? 'active' : '' }}"><a href="{{url('sermons/'. Crypt::encrypt($i) . ($data->topic ? '?topic='. $data->topic : ''))}}">{{$i}}</a></li>
                                    @endfor
                                    <li class="{{$data->sermons->next_page_url == null ? 'disabled' : ''}}"><a href="{{url('sermons/'.Crypt::encrypt($data->sermons->current_page + 1) . ($data->topic ? '?topic='. $data->topic : ''))}}">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-md-4 sidebar ftco-animate order-first">
                <div class="sidebar-box">
                    <form autocomplete="off" method="GET" action="{{ URL::route('sermons', ['topic' => $topic ?? '']) }}" class="search-form">
                        <div class="form-group">
                            <span type="submit" class="icon fa fa-search" onclick="submitForm()" style="cursor:pointer"></span>
                            <input name="topic" type="text" class="form-control" placeholder="Search Sermon By Title" value="{{$data->topic ?? ''}}">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach($data->category_sermons as $cat_serm)
                        <li><a href="#">{{$cat_serm->name}} <span>{{$cat_serm->sermons_count}}</span></a></li>
                        @endforeach
                    </div>
                </div>

            </div>
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
<script>
    function submitForm() {
        document.querySelector('form').submit();
    }

    // when link is reloaded by search or pagination
    window.onload = function() {
    setTimeout(function() {
      let scrollPosition = 530; // Set your desired scroll position here
      window.scrollTo(0, scrollPosition);
    }, 500); // Set the delay time (in milliseconds) to give the page time to load before scrolling
  }
</script>
@endsection