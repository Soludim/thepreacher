@extends('pages.dashboard.dash_main')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div style="padding:8px">
      <div class="row mt">
        @if($sermon != null)
        <div class="col-12 text-center mb-3">
          <h3>
            <span class="badge badge-secondary" style="margin-left:5px; color:#fff; font-size:50%">{{$sermon->category->name}}</span>
            <span class="text-uppercase">&ldquo;{{$sermon->topic}}&rdquo;</span> &mdash; <span> {{$sermon->speaker}}</span>
          </h3>
          <p>Created on: {{date('M', strtotime($sermon->created_at))}} {{date('d', strtotime($sermon->created_at)) }}, {{ date('Y', strtotime($sermon->created_at)) }}</p>
        </div>
        <div class="col-12">
          <audio id="player2" preload="none" controls class="player">
            <source src="https://docs.google.com/uc?export=download&id={{$sermon->audio_id}}" type="audio/mp3">
          </audio>
        </div>
        @endif
      </div>
      <div class="row form-group pull-right" style="margin-top: 10px">
        <a href="{{ url('dsermon/' . $sermon->id . '/edit') }}" type="submit" class="btn btn-theme03">
          Edit Sermon
          </button>
          <a href="/dsermons" class="btn btn-default">
            <i class="fa fa-list"></i>
            To List
          </a>
      </div>
    </div>
  </section>
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
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--common script for all pages-->
<script src="{{asset('lib/common-scripts.js')}}"></script>
@endsection