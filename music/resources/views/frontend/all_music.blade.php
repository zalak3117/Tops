@extends('frontend.layout.main')

@section('main_section')
<script>
 function play(){
        var audio = document.getElementById("myaduio");
        audio.play();
        document.getElementById("play").style.display="none";        
    }
  </script>
<!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{url('frontend/img/bg-img/breadcumb3.jpg')}});">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Latest Albums</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>

            <div class="row oneMusic-albums">

    </section>
    <!-- ##### Album Catagory Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <div class="oneMusic-buy-now-area mb-100">
        <div class="container">
            <div class="row">

                <!-- Single Album Area -->
                @foreach($data as $d)
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="{{url('backend/musicimg/'.$d->music_img)}}" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                               
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon" id="play">
                                <a href="#"  onclick="play()"><span class="icon-play-button" ></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5 id="song">{{$d->music_name}}</h5>
                            </a>

                            <p>{{$d->movie_album}}</p>
                            <p>{{$d->singer_name}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            
        </div>
    </div>
    <!-- ##### Buy Now Area End ##### -->


    
    <div class="bottom-play" id="music">
        <div class="col-12">
                     <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="{{url('frontend/img/bg-img/s4.jpg')}}" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Main Hit Song</p>
                            </div>
                            
                            <audio id="myaduio">
                            @foreach($data as $d)
                                <source src="{{url('backend/music/'.$d->music_file)}}" type="audio/mpeg">
                                @endforeach
                            </audio>
                            
                        </div>
                    </div>
        </div>     
    </div>
    
@endsection