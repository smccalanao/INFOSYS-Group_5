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
                    @forelse($popularClimbs as $trip)
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ url('/trip-explorer?climb=' . urlencode($trip->name)) }}">
                                <div class="item">
                                    <img src="{{ asset($trip->image) }}" alt="{{ $trip->name }}">
                                    <h4>
                                        {{ $trip->name }}<br>
                                        <span>{{ $trip->difficulty }}</span>
                                    </h4>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-lg-12">
                            <p>No popular climbs available at the moment.</p>
                        </div>
                    @endforelse
                </div>
                <div class="main-button mt-3">
                    <a href="{{ url('/trip-explorer') }}">Discover More Climbs</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    /* Fix image sizes */
    .most-popular .item img {
        width: 100%;
        height: 200px; /* adjust to your preferred size */
        object-fit: cover;
        border-radius: 8px; /* optional, makes corners rounded */
    }

    .most-popular .item {
        text-align: center;
        margin-bottom: 20px;
    }
</style>