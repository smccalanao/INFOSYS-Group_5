<x-app-layout>
    <div class="page-content">
        <div class="heading-section">
            <h4><em>Plan</em> Your Trip</h4>
        </div>

        <div class="container my-5">
            <div class="row">
                <!-- Main Content (Form) -->
                <div class="col-lg-8 mb-4">
                    <div class="card border-0">
                        <div class="card-header text-white" id="card-header">
                            <h4 class="mb-0" id="planhdr">Trip Planner</h4>
                        </div>
                        <div class="card-body text-white" id="card-header">
                            <form id="tripForm">
                                <div class="row">
                                    <!-- Destination -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Select Destination</label>
                                        <select id="destination" class="form-select" required>
                                            <option value="">Choose...</option>
                                            <option>Lake Holon (Mount Melibengoy)</option>
                                            <option>Mount Apo</option>
                                            <option>Mount Dulang-Dulang</option>
                                            <option>Mount Guiting-Guiting</option>
                                            <option>Mount Hamiguitan</option>
                                            <option>Mount Hibok-Hibok</option>
                                            <option>Mount Kalatungan</option>
                                            <option>Mount Kanlaon</option>
                                            <option>Mount Kitanglad</option>
                                            <option>Mount Malindang</option>
                                            <option>Mount Matutum</option>
                                            <option>Mount Pinatubo</option>
                                            <option>Mount Pulag</option>
                                            <option>Other...</option>
                                        </select>
                                    </div>

                                    <!-- Start Date -->
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Start Date</label>
                                        <input type="date" id="startDate" class="form-control" required>
                                    </div>

                                    <!-- End Date -->
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">End Date</label>
                                        <input type="date" id="endDate" class="form-control" required>
                                    </div>

                                    <!-- Companions -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Companions</label>
                                        <input type="text" id="companions" class="form-control" placeholder="Enter companion names">
                                    </div>

                                    <!-- Gear -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Gear Responsibilities</label>
                                        <input type="text" id="gear" class="form-control" placeholder="e.g. John - Tent, Anna - Food">
                                    </div>

                                    <!-- Notes -->
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Notes / Reminders</label>
                                        <textarea id="notes" class="form-control" rows="4" placeholder="Any important details..."></textarea>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-dark">Clear</button>
                                    <button type="submit" class="btn btn-outline-light" id="saveBtn">Save Trip</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar (Saved Trips) -->
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 bg-light text-muted" >
                        <div class="card-header text-white" id="card-header">
                            <h6 class="mb-0">Saved Trips</h6>
                        </div>
                        <div class="card-body p-2">
                            <div id="savedTrips" class="timeline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trip Details Modal -->
        <div class="modal fade" id="tripModal" tabindex="-1" aria-labelledby="tripModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="tripModalLabel">Trip Details</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" id="tripDetails">
                        <p class="text-muted">Loading...</p>
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-danger" id="deleteTripBtn">Delete Trip</button>
                        <button type="button" class="btn btn-secondary" id="editTripBtn">Edit Trip</button>
                       <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom CSS -->
        <style>
            .timeline-item { cursor: pointer; 
                 padding: 8px;
                 border-radius: 6px;
                 transition: background-color 0.2s ease, transform 0.2s ease;
            }
            .timeline-item:hover {
                 background-color: rgba(0, 0, 0, 0.05); /* light hover background */
                 transform: translateX(4px); /* slight movement */
            }
            .timeline-img img {
                width: 50px;
                height: 50px;
                object-fit: cover;
            }#savedTrips::-webkit-scrollbar {
                width: 6px;
            }
            #savedTrips::-webkit-scrollbar-thumb {
                background: rgba(0,0,0,0.3);
                border-radius: 3px;
            }
            #savedTrips::-webkit-scrollbar-track {
                background: transparent;
            }
            #savedTrips {
                max-height: 400px; /* adjust to fit your layout */
                overflow-y: auto;
                padding-right: 4px; /* so scrollbar doesn't overlap */
            }
           #card-header{
                background-color: #1f2122;
             }
        </style>

        <!-- JavaScript -->
        <script>
            const tripForm = document.getElementById("tripForm");
            const savedTripsContainer = document.getElementById("savedTrips");
            const tripDetails = document.getElementById("tripDetails");
            const deleteTripBtn = document.getElementById("deleteTripBtn");
            const editTripBtn = document.getElementById("editTripBtn");
            let selectedTripId = null;
            let editMode = false;

            // Map destination → image
            function getTripImage(destination) {
                const images = {
                    "Lake Holon (Mount Melibengoy)": "assets/images/trips/lake_holon.jpg",
                    "Mount Apo": "/assets/images/trips/mount_apo.jpg",
                    "Mount Dulang-Dulang": "assets/images/trips/mount_dulang_dulang.jpg",
                    "Mount Guiting-Guiting":"assets/images/trips/mount_guiting_guiting.jpg",
                    "Mount Hamiguitan":"assets/images/trips/mount_hamiguitan.jpg",
                    "Mount Hibok-Hibok":"assets/images/trips/mount_hibok_hibok.jpg",
                    "Mount Kalatungan":"assets/images/trips/mount_kalatungan.jpg",
                    "Mount Kanlaon":"assets/images/trips/mount_kanlaon.jpg",
                    "Mount Kitanglad":"assets/images/trips/mount_kitanglad.jpg",
                    "Mount Malindang":"assets/images/trips/mount_malindang.jpg",
                    "Mount Matutum":"assets/images/trips/mount_matutum.jpg",
                    "Mount Pinatubo":"assets/images/trips/mount_pinatubo.jpg",
                    "Mount Pulag": "/assets/images/trips/mount_pulag.jpg",
                    "Other...": "/assets/images/trips/other.jpg",
                };

                return images[destination] || "/assets/images/trips/default.jpg";
            }

            // Fetch saved trips from DB
            function loadTrips() {
                fetch("/planner")
                    .then(res => res.json())
                    .then(data => {
                        renderTrips(data);
                    });
            }

            // Render trips into sidebar
            function renderTrips(trips) {
                savedTripsContainer.innerHTML = "";
                trips.forEach((trip) => {
                    const tripItem = document.createElement("div");
                    tripItem.classList.add("timeline-item", "d-flex", "align-items-center", "mb-3");
                    tripItem.innerHTML = `
                        <div class="timeline-img">
                            <img src="${getTripImage(trip.destination)}" class="rounded-circle" alt="${trip.destination}">
                        </div>
                        <div class="ms-2">
                            <h6 class="text-body mb-0">${trip.destination}</h6>
                            <small>${trip.start_date}</small>
                        </div>
                    `;
                    tripItem.addEventListener("click", () => viewTripDetails(trip.id));
                    savedTripsContainer.appendChild(tripItem);
                });
            }

            // Save or Update trip
            tripForm.addEventListener("submit", function(e) {
                e.preventDefault();

                const data = {
                    destination: document.getElementById("destination").value,
                    start_date: document.getElementById("startDate").value,
                    end_date: document.getElementById("endDate").value,
                    companions: document.getElementById("companions").value,
                    gear: document.getElementById("gear").value,
                    notes: document.getElementById("notes").value,
                };

                let url = "/planner";
                let method = "POST";

                if (editMode && selectedTripId) {
                    url = `/planner/${selectedTripId}`;
                    method = "PUT";
                }

                fetch(url, {
                    method: method,
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(data)
                })
                .then(res => res.json())
                .then(() => {
                    loadTrips();
                    tripForm.reset();
                    editMode = false;
                    selectedTripId = null;
                    document.getElementById("saveBtn").innerText = "Save Trip";
                    document.getElementById("planhdr").innerText = "Trip Planner";
                });
            });

            // Show trip details in modal
            function viewTripDetails(id) {
                selectedTripId = id;
                fetch(`/planner/${id}`)
                    .then(res => res.json())
                    .then(trip => {
                        tripDetails.innerHTML = `
                            <p><strong>Destination: </strong>${trip.destination}</p>
                            <p><strong>Dates:</strong> ${trip.start_date} to ${trip.end_date}</p>
                            <p><strong>Companions:</strong> ${trip.companions || "N/A"}</p>
                            <p><strong>Gear:</strong> ${trip.gear || "N/A"}</p>
                            <p><strong>Notes:</strong><br>${trip.notes || "No notes provided"}</p>
                        `;
                        deleteTripBtn.onclick = () => deleteTrip(id);
                        editTripBtn.onclick = () => editTrip(trip);
                        new bootstrap.Modal(document.getElementById("tripModal")).show();
                    });
            }

            // Prefill form for editing
            function editTrip(trip) {
                bootstrap.Modal.getInstance(document.getElementById("tripModal")).hide();

                document.getElementById("destination").value = trip.destination;
                document.getElementById("startDate").value = trip.start_date;
                document.getElementById("endDate").value = trip.end_date;
                document.getElementById("companions").value = trip.companions || "";
                document.getElementById("gear").value = trip.gear || "";
                document.getElementById("notes").value = trip.notes || "";

                editMode = true;
                document.getElementById("saveBtn").innerText = "Update Trip";
                document.getElementById("planhdr").innerText = "Update Your Trip";
            }

            // Delete trip from DB
            function deleteTrip(id) {
                if (confirm("Are you sure you want to delete this trip?")) {
                    fetch(`/planner/${id}`, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                        }
                    })
                    .then(res => res.json())
                    .then(() => {
                        loadTrips();
                        bootstrap.Modal.getInstance(document.getElementById("tripModal")).hide();
                    });
                }
            }

            // Initial load
            loadTrips();
        </script>
    </div>
</x-app-layout>
