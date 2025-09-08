<x-app-layout>
    <div class="page-content">

        <div class="heading-section">
            <h4><em>Plan</em> Your Trip</h4>
        </div>

        <form action="#" method="POST" class="p-4 bg-dark text-light rounded">
            <div class="row">
                <!-- Destination -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Select Destination</label>
                    <select class="form-control">
                        <option>Mount Apo</option>
                        <option>Mount Pulag</option>
                        <option>Mount Kanlaon</option>
                        <option>Other...</option>
                    </select>
                </div>

                <!-- Start Date -->
                <div class="col-md-3 mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="date" class="form-control">
                </div>

                <!-- End Date -->
                <div class="col-md-3 mb-3">
                    <label class="form-label">End Date</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Companions -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Companions</label>
                    <input type="text" class="form-control" placeholder="Enter companion names">
                </div>

                <!-- Gear -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Assign Gear Responsibilities</label>
                    <input type="text" class="form-control" placeholder="e.g. John - Tent, Anna - Food">
                </div>

                <!-- Notes -->
                <div class="col-12 mb-3">
                    <label class="form-label">Notes / Reminders</label>
                    <textarea class="form-control" rows="4" placeholder="Any important details..."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save Trip</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </form>

    </div>
</x-app-layout>
