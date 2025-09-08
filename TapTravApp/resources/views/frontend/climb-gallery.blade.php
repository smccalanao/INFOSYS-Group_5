<x-app-layout>
    <div class="page-content">
        <!-- ***** Climb Gallery Start ***** -->
        <div class="row climb-gallery">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>My</em> Climb Gallery</h4>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/climb-01.jpg') }}" alt="Mount Apo Summit">
                    <div class="caption">Mount Apo – Summit View</div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/climb-02.jpg') }}" alt="Mount Pulag Sunrise">
                    <div class="caption">Mount Pulag – Sea of Clouds</div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/climb-03.jpg') }}" alt="Mount Kanlaon Crater">
                    <div class="caption">Mount Kanlaon – Crater Rim</div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/climb-04.jpg') }}" alt="Mount Pinatubo Lake">
                    <div class="caption">Mount Pinatubo – Crater Lake</div>
                </div>
            </div>
        </div>
        <!-- ***** Climb Gallery End ***** -->
    </div>

    @push('styles')
    <style>
        .climb-gallery {
            margin-top: 40px;
        }
        .climb-gallery h4 {
            color: #fff;
        }
        .climb-gallery .gallery-item {
            margin-bottom: 20px;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease;
        }
        .climb-gallery .gallery-item:hover {
            transform: scale(1.05);
        }
        .climb-gallery .gallery-item img {
            width: 100%;
            display: block;
            border-radius: 12px;
        }
        .climb-gallery .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            font-size: 14px;
            text-align: center;
        }
    </style>
    @endpush
</x-app-layout>
