<x-app-layout>
    <div class="page-content">

        <!-- Featured Trips -->
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-games header-text">
                    <div class="heading-section">
                        <h4><em>Featured</em> Trips</h4>
                    </div>
                    <div class="owl-features owl-carousel">
                        @forelse($trips as $trip)
                            <div class="item" data-bs-toggle="modal" data-bs-target="#tripModal{{ $trip->id }}" style="cursor: pointer;">
                                <div class="thumb">
                                    <img src="{{ asset($trip->image ?? 'assets/images/default-trip.jpg') }}"
                                         onerror="this.src='{{ asset('assets/images/default-trip.jpg') }}'"
                                         alt="{{ $trip->name }}"
                                         loading="lazy"
                                         style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                                    <div class="hover-effect">
                                        <h6>{{ $trip->difficulty }}</h6>
                                    </div>
                                </div>
                                <h4 class="mt-2">{{ $trip->name }}<br><span>{{ $trip->duration }}</span></h4>
                            </div>
                        @empty
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/default-trip.jpg') }}"
                                         alt="Sample Trip"
                                         style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                                    <div class="hover-effect">
                                        <h6>Easy</h6>
                                    </div>
                                </div>
                                <h4 class="mt-2">Sample Trip<br><span>2 Days</span></h4>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- All Trips Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>All</em> Trips</h4>
                </div>
                <div class="d-flex flex-wrap gap-3 justify-content-start">
                    @forelse($trips as $trip)
                        <div class="trip-card"
                             data-bs-toggle="modal"
                             data-bs-target="#tripModal{{ $trip->id }}"
                             style="cursor:pointer; flex:1 1 calc(25% - 1rem); max-width:calc(25% - 1rem);">

                            <img src="{{ asset($trip->image ?? 'assets/images/default-trip.jpg') }}"
                                 onerror="this.src='{{ asset('assets/images/default-trip.jpg') }}'"
                                 alt="{{ $trip->name }}"
                                 loading="lazy"
                                 style="width:100%; height:180px; object-fit:cover; border-radius:10px;">

                            <h6 class="mt-2 mb-0">{{ $trip->name }}</h6>
                            <small class="text-muted">{{ $trip->difficulty }}</small>
                        </div>
                    @empty
                        <p class="text-muted">No trips available yet.</p>
                    @endforelse
                </div>
                <div class="text-button mt-4 text-center">
                    <a href="{{ url('/trip-explorer') }}">Explore More Trips</a>
                </div>
            </div>
        </div>

     <!-- Dynamic Modals -->
@foreach($trips as $trip)
<div class="modal fade" id="tripModal{{ $trip->id }}" tabindex="-1" aria-labelledby="tripModal{{ $trip->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-dark">
            <div class="modal-header bg-gradient-primary text-white rounded-top p-3">
                <h5 class="modal-title" id="tripModal{{ $trip->id }}Label">{{ $trip->name }} - {{ $trip->duration }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <img src="{{ asset($trip->image ?? 'assets/images/default-trip.jpg') }}"
                     onerror="this.src='{{ asset('assets/images/default-trip.jpg') }}'"
                     class="img-fluid rounded mb-3"
                     alt="{{ $trip->name }}"
                     style="max-height:400px; object-fit:cover; width:100%;">

                <!-- Styled Description -->
                <div class="trip-description p-3 mb-3 rounded shadow-sm bg-dark text-light">
                    <h5 class="fw-bold mb-3"><i class="bi bi-info-circle-fill"></i> About this Trip</h5>
                    <p>{{ $trip->description ?? 'No description available.' }}</p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-success"><i class="bi bi-geo-alt-fill"></i> Difficulty: {{ $trip->difficulty }}</span>
                        <span class="badge bg-primary"><i class="bi bi-clock-fill"></i> Duration: {{ $trip->duration }}</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                <a href="https://www.facebook.com/share/17DTFgrYGy/" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="btn btn-primary btn-lg">
                   Book via Organizer FB Page
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach


    </div>

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);
            const climb = urlParams.get('climb');
            if (climb) {
                const modal = [...document.querySelectorAll('.modal')].find(
                    m => m.querySelector('.modal-title')?.textContent.includes(climb)
                );
                if (modal) {
                    const bsModal = new bootstrap.Modal(modal);
                    bsModal.show();
                }
            }
        });
    </script>
    @endpush

    <style>

        p {
            color: white;
        }
        /* Trip card */
        .trip-card {
            background: transparent;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .trip-card {
                flex: 1 1 calc(48% - 1rem);
                max-width: calc(48% - 1rem);
            }
        }
        @media (max-width: 575px) {
            .trip-card {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }

        /* Featured carousel hover */
        .owl-features .item:hover .hover-effect {
            opacity: 1;
            transition: all 0.3s ease;
        }
        .hover-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.35);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            border-radius: 8px;
            font-weight: bold;
        }

      /* Dark modal background */
.modal-dark {
    background-color: #1f2122;
    color: #f1f1f1;
}

/* Description box in dark modal */
.trip-description {
    background-color: #2c2e30;
    color: #f1f1f1;
}

/* Badges contrast better on dark bg */
.badge {
    font-size: 0.9rem;
    padding: 0.5em 0.8em;
    color: #fff;
}

    </style>
</x-app-layout>
