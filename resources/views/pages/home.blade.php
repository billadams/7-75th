@extends('layouts.layout')

@section('title', 'Welcome to the 7-75th Virtual Rangers')

@section('content')
    {{--<h1>7-75th Rangers</h1>--}}
    <div>
        <img id="banner-home" src="/img/banner-home.jpg" alt="The 7-75th Rangers">
    </div>


    <div class="left-col">
        <div id="teamSpeak" class="teamspeak-server">
            <iframe src="http://cache.www.gametracker.com/components/html0/?host=149.56.106.210:9987&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=FFFFFF&borderColor=333333&linkColor=333333&borderLinkColor=333333&showMap=0&currentPlayersHeight=606&showCurrPlayers=1&showTopPlayers=0&showBlogs=0&width=255"frameborder="0" scrolling="yes" width="255" height="800"></iframe>
        </div> <!-- end teamSpeak -->
        <div class="events">
            <h3>Event Schedule</h3>
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id
                nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros
                molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula
                in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis.
                Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat.
                Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod
                felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
        </div>
    </div>

    <div class="center-col">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <a class="video" href="http://www.youtube.com/watch?v=DObePikXTsI">
                    <img src="img/swift_justice_video.jpg" />
                </a>
                <a class="video" href="http://www.youtube.com/watch?v=LHTy__wNsF8">
                    <img src="img/rapid_response_video.jpg" />
                </a>
                <a class="video" href="http://www.youtube.com/watch?v=HDBPe0KqOV0">
                    <img src="img/rolling_thunder_video.jpg" />
                </a>
                <a class="video" href="http://www.youtube.com/watch?v=NorVxDUqDnw">
                    <img src="img/lager_check_video.jpg" />
                </a>
                <a class="video" href="http://www.youtube.com/watch?v=TpuyjOtIQog" >
                    <img src="img/oil_rush_video.jpg" alt ="" />
                </a>
                <a class="video" href="http://www.youtube.com/watch?v=Won-kd8qkcg" >
                    <img src="img/triple_lance_video.jpg" alt="" />
                </a>
            </div> <!-- end slider -->
        </div> <!-- end sliderFrame -->
        <div class="shoutbox">
            <h3>Leave A Message</h3>

            <ul class="shoutbox-content"></ul>

            @include('layouts.partials.shoutform')

        </div>
        <div class="announcements">
            <h3>Battalion Announcements</h3>
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id
                nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros
                molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula
                in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis.
                Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat.
                Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod
                felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
        </div>
    </div>

    <div class="right-col">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Forum Center</a></li>
                <li><a href="#tabs-2">Dev Updates</a></li>
            </ul>
            <div id="tabs-1">
                @foreach ($recent_threads as $thread)
                    <div>
                        <h5>Title: <a href="{{ $thread->getRouteAttribute() }}">{{ $thread->title }}</a></h5>
                        <p>Date/Time: {{ $thread->updated_at }}</p>
                        <p>Posted by: {{ $thread->posts()->orderBy('updated_at', 'desc')->first()->author->username }}</p>
                    </div>
                @endforeach
            </div>
            <div id="tabs-2">
                @foreach ($dev_updates as $item)
                    <div>
                        <h5>{{ $item['title'] }}</h5>
                        {!! $item['excerpt'] !!}
                        <p>Author: {{ $item['author'] }}</p>
                        <p>Date: {{ $item['public_date'] }}</p>
                        <a href="http://dev.arma3.com/post/{{ $item['url'] }}" target="_blank">Read the full article...</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="donate">
            <h3>Server Funds</h3>
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id
                nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros
                molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula
                in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis.
                Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat.
                Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod
                felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
        </div>
    </div>

@stop

@section('scripts.footer')
    <script>
        $(function () {
            $("#tabs").tabs();
        });

        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
@stop
