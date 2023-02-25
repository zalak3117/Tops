@extends('frontend.layout.main1')

@section('main_section')

    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-50 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="{{url('frontend/img/bg-img/s1.jpg')}}" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Main Hit Song</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->
@endsection