<x-app-layout>
    <div class="page-content">

        <!-- ***** Gear Checklist Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>Essential</em> Gear Checklist</h4>
                </div>
                <div class="gear-checklist">
                    <ul>
                        <li><input type="checkbox"> Backpack</li>
                        <li><input type="checkbox"> Tent / Shelter</li>
                        <li><input type="checkbox"> Sleeping Bag</li>
                        <li><input type="checkbox"> Headlamp / Flashlight</li>
                        <li><input type="checkbox"> Cooking Gear</li>
                        <li><input type="checkbox"> Food & Water</li>
                        <li><input type="checkbox"> First Aid Kit</li>
                        <li><input type="checkbox"> Extra Clothes</li>
                        <li><input type="checkbox"> Navigation Tools (Map, Compass, GPS)</li>
                        <li><input type="checkbox"> Emergency Kit (Whistle, Firestarter, etc.)</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ***** Gear Checklist End ***** -->

    </div>

    @push('styles')
    <style>
        .gear-checklist ul {
            list-style: none;
            padding: 0;
        }
        .gear-checklist li {
            color: #fff; /* make text visible on dark background */
            font-size: 16px;
            margin-bottom: 10px;
        }
        .gear-checklist input[type="checkbox"] {
            margin-right: 10px;
        }
    </style>
    @endpush
</x-app-layout>
