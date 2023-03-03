@extends('pages.dashboard.dash_main')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div style="padding:8px">
            <div class="row mt">
                @if($sermon == null)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Create Sermon</h4>
                    </div>
                    <div class="panel-body">
                        <form id="sermon_create_edit" action="{{route('dsermon.store')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    <label for="topic">Topic</label>
                                </div>
                                <div class="col-lg-10">
                                    <input id="topic" value="{{old('topic')}}" name="topic" class="form-control" type="text" />
                                    @error('topic')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    <label for="content">Speaker</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" id="speaker" value="{{old('speaker')}}" placeholder="speaker name" name="speaker" class="form-control" />
                                    @error('speaker')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label for="category">Category</label>
                                </div>
                                <div class="col-lg-10">
                                    <select class="form-control" name="category">
                                        @foreach($categories as $category)
                                        <option {{$category->id == old('category') ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group" style="margin-top: 30px">
                                <div class="col-lg-2">
                                    <label for="content">Audio id</label>
                                </div>
                                <div class="col-lg-10">
                                    <input name="audio_id" placeholder="Input audio id" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group pull-right" style="margin-right: 5px">
                                <button type="submit" class="btn btn-theme03">
                                    Create
                                </button>
                                <a href="/dsermons" class="btn btn-default">
                                    <i class="fa fa-list"></i>
                                    To List
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Edit Sermon</h4>
                    </div>
                    <div class="panel-body">
                        <form id="sermon_create_edit" action="{{route('dsermon.update', Crypt::encrypt($sermon->id))}}" method="post" autocomplete="off">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="row form-group">
                                        <div class="col-lg-2">
                                            <label for="topic">Topic</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input id="topic" value="{{old('topic') ? old('topic') : $sermon->topic}}" name="topic" class="form-control" type="text" />
                                            @error('topic')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-2">
                                            <label for="content">Speaker</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" id="speaker" value="{{old('speaker') ? old('speaker') : $sermon->speaker}}" placeholder="Input speaker" name="speaker" class="form-control" />
                                            @error('speaker')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label for="category">Category</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <select class="form-control" name="category">
                                                @foreach($categories as $category)
                                                <option {{$category->id == $sermon->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group" style="margin-top: 30px">
                                        <div class="col-lg-2">
                                            <label for="content">Audio id</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input name="audio_id" type="text" value="{{$sermon->audio_id}}" class="form-control" />
                                            @error('audio_id')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group pull-right" style="margin-right: 5px">
                                <button type="submit" class="btn btn-theme03">
                                    Edit Sermon
                                </button>
                                <a href="/dsermons" class="btn btn-default">
                                    <i class="fa fa-list"></i>
                                    To List
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
</section>

<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--common script for all pages-->
<script src="{{asset('lib/common-scripts.js')}}"></script>

<script src="{{asset('lib/advanced-form-components.js')}}"></script>
@endsection