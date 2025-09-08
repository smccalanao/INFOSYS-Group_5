<x-app-layout>
    <div class="main-banner">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-text">
                    <h6>Welcome To SummitSync</h6>
                    <h4><em>Explore</em> Your Next Climb Here</h4>
                    <div class="main-button">
                        <a href="{{ url('/trip-explorer') }}">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Climbs -->
    <div class="most-popular">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>Popular Climbs</em> Right Now</h4>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <img src="{{ asset('assets/images/mtapo.jpg') }}" alt="">
                            <h4>Mount Apo<br><span>Moderate</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <img src="{{ asset('assets/images/mtpulag.png') }}" alt="">
                            <h4>Mount Pulag<br><span>Easy</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <img src="{{ asset('assets/images/popular-03.jpg') }}" alt="">
                            <h4>Mount Kanlaon<br><span>Hard</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <img src="{{ asset('assets/images/popular-04.jpg') }}" alt="">
                            <h4>Mount Pinatubo<br><span>Moderate</span></h4>
                        </div>
                    </div>
                </div>
                <div class="main-button mt-3">
                    <a href="{{ url('/trip-explorer') }}">Discover More Climbs</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
