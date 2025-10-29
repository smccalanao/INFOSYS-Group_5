<x-app-layout>
    <div class="page-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="featured-games header-text">
                    <div class="heading-section">
                        <h4><em>Featured</em> Trips</h4>
                    </div>
                    <div class="owl-features owl-carousel">
                        {{-- Fallback: use $popularTrips, otherwise $trips, otherwise empty collection --}}
                        @forelse(($popularTrips ?? $trips ?? collect()) as $trip)
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
                            <div class="item"><p>No featured trips available.</p></div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>All</em> Trips</h4>
                </div>
                <div class="d-flex flex-wrap gap-3 justify-content-start">
                    {{-- Fallback: use $allTrips, otherwise $trips, otherwise empty collection --}}
                    @forelse(($allTrips ?? $trips ?? collect()) as $trip)
                        <div class="trip-card"
                             data-bs-toggle="modal"
                             data-bs-target="#tripModal{{ $trip->id }}"
                             style="cursor:pointer; flex:1 1 calc(25% - 1rem); max-width:calc(25% - 1rem);">

                            <img src="{{ asset($trip->image ?? 'assets/images/default-trip.jpg') }}"
                                 onerror="this.src='{{ asset('assets/images/default-trip.jpg') }}'"
                                 alt="{{ $trip->name }}"
                                 style="width:100%; height:180px; object-fit:cover; border-radius:10px;">

                            <h6 class="mt-2 mb-0">{{ $trip->name }}</h6>
                            <small class="text-muted">{{ $trip->difficulty }}</small>
                        </div>
                    @empty
                        <p class="text-muted">No trips available yet.</p>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- IMPORTANT: Loop through ALL trips to create a modal for every possible trip --}}
        @foreach(($allTrips ?? $trips ?? collect()) as $trip)
        <div class="modal fade" id="tripModal{{ $trip->id }}" tabindex="-1" aria-labelledby="tripModal{{ $trip->id }}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content modal-dark">
                    <div class="modal-header bg-gradient-primary text-white rounded-top p-3">
                        <h5 class="modal-title" id="tripModal{{ $trip->id }}Label">{{ $trip->name }} - {{ $trip->duration }}</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <img src="{{ asset($trip->image ?? 'assets/images/default-trip.jpg') }}" class="img-fluid rounded mb-3" alt="{{ $trip->name }}" style="max-height:400px; object-fit:cover; width:100%;">
                        <div class="trip-description p-3 mb-3 rounded shadow-sm bg-dark text-light">
                            <h5 class="fw-bold mb-3"><i class="bi bi-info-circle-fill"></i> About this Trip</h5>
                            <p>{{ $trip->description ?? 'No description available.' }}</p>
                            <div class="d-flex flex-wrap gap-2 mt-3">
                                <span class="badge bg-success"><i class="bi bi-bar-chart-fill"></i> Difficulty: {{ $trip->difficulty }}</span>
                                <span class="badge bg-primary"><i class="bi bi-clock-fill"></i> Duration: {{ $trip->duration }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                        <a href="https://www.facebook.com/share/17DTFgrYGy/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                            Book via Organizer FB Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Scripts and Styles remain the same --}}
    @push('scripts')
        {{-- Your script here --}}
    @endpush
    <style>
        {{-- Your styles here --}}
    </style>
</x-app-layout>