<x-app-layout>
    <div class="page-content">

        <!-- ***** Featured Trips Start ***** -->
        <div class="row">
            <!-- Featured Trips -->
            <div class="col-lg-8">
                <div class="featured-games header-text">
                    <div class="heading-section">
                        <h4><em>Featured</em> Trips</h4>
                    </div>
                    <div class="owl-features owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/popular-01.jpg') }}" alt="">
                                <div class="hover-effect">
                                    <h6>Moderate</h6>
                                </div>
                            </div>
                            <h4>Mount Apo<br><span>3 Days Hike</span></h4>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/popular-02.jpg') }}" alt="">
                                <div class="hover-effect">
                                    <h6>Easy</h6>
                                </div>
                            </div>
                            <h4>Mount Pulag<br><span>2 Days Hike</span></h4>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/popular-03.jpg') }}" alt="">
                                <div class="hover-effect">
                                    <h6>Hard</h6>
                                </div>
                            </div>
                            <h4>Mount Kanlaon<br><span>4 Days Hike</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Trips -->
            <div class="col-lg-4">
                <div class="top-downloaded">
                    <div class="heading-section">
                        <h4><em>Most Popular</em> Trips</h4>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/images/popular-01.jpg') }}" alt="" class="templatemo-item">
                            <h4>Mount Apo</h4>
                            <h6>Moderate</h6>
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/popular-02.jpg') }}" alt="" class="templatemo-item">
                            <h4>Mount Pulag</h4>
                            <h6>Easy</h6>
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/popular-03.jpg') }}" alt="" class="templatemo-item">
                            <h4>Mount Kanlaon</h4>
                            <h6>Hard</h6>
                        </li>
                    </ul>
                    <div class="text-button">
                        <a href="#">View All Trips</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Featured Trips End ***** -->

    </div>
</x-app-layout>
