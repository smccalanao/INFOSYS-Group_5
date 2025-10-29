<x-app-layout>
    <div class="page-content">

        <!-- ***** Gear Checklist Start ***** -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="heading-section text-center mb-4">
                    <h2 class="fw-bold text-primary"><em>Essential</em> Gear Checklist</h2>
                    <p class="text-muted">Tick off the gear you’ve packed or add your own items</p>
                </div>

                <form action="{{ route('gear.save') }}" method="POST">
                    @csrf
                    <div class="gear-checklist card p-4 rounded-3 shadow-sm">
                        <div class="row">
                            <!-- Checklist Column -->
                            <div class="col-md-6 border-end">
                                @php
                                    $defaultGears = [
                                        'Backpack','Tent / Shelter','Sleeping Bag','Headlamp / Flashlight',
                                        'Cooking Gear','Food & Water','First Aid Kit','Extra Clothes',
                                        'Navigation Tools (Map, Compass, GPS)','Emergency Kit (Whistle, Firestarter, etc.)'
                                    ];
                                @endphp

                                <h5 class="fw-semibold mb-3">Checklist</h5>
                                <ul class="gear-list">
                                    @foreach ($defaultGears as $index => $item)
                                        <li>
                                            <label for="gear-{{ $index }}" class="gear-item">
                                                <input type="checkbox" name="gear[]" value="{{ $item }}" id="gear-{{ $index }}" onchange="updateSummary()"
                                                    @if(in_array($item, $savedGears ?? [])) checked @endif
                                                >
                                                <span class="check-label">{{ $item }}</span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Custom gear input -->
                                <div class="mt-4">
                                    <label for="custom-gear" class="form-label fw-semibold">Add Custom Gear</label>
                                    <div class="input-group">
                                        <input type="text" id="custom-gear" class="form-control" placeholder="Enter your gear item...">
                                        <button type="button" class="btn btn-outline-secondary" onclick="addCustomGear()">Add</button>
                                    </div>

                                    <ul id="custom-gear-list" class="mt-3">
                                        @foreach ($savedGears ?? [] as $custom)
                                            @if(!in_array($custom, $defaultGears))
                                                <li>
                                                    <label class="gear-item">
                                                        <input type="checkbox" name="gear[]" value="{{ $custom }}" checked onchange="updateSummary()">
                                                        <span class="check-label">{{ $custom }}</span>
                                                    </label>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Packed Summary Column -->
                            <div class="col-md-6">
                                <h5 class="fw-semibold mb-3 d-flex justify-content-between align-items-center">
                                    ✅ Packed Items
                                    <small class="text-muted" id="progress-text">0 items packed</small>
                                </h5>
                                <ul id="checked-list" class="summary-list"></ul>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-outline-danger" onclick="clearAll()">Clear All</button>
                            <button type="submit" class="btn btn-primary px-4 py-2">Save Checklist</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ***** Gear Checklist End ***** -->

    </div>

    @push('styles')
    <style>
        .gear-checklist ul{list-style:none;padding:0;margin:0;}
        .gear-checklist li{margin-bottom:12px;}
        .gear-item{display:flex;align-items:center;background:#f9fafb;border:1px solid #e5e7eb;padding:12px 16px;border-radius:8px;cursor:pointer;transition:all 0.2s ease;}
        .gear-item:hover{background:#f1f5f9;}
        .gear-item input[type="checkbox"]{margin-right:12px;transform:scale(1.3);accent-color:#2563eb;}
        .gear-item .check-label{font-size:16px;color:#374151;font-weight:500;}
        .gear-item input[type="checkbox"]:checked + .check-label{text-decoration:line-through;color:#6b7280;}
        .btn-primary{background-color:#2563eb;border:none;border-radius:8px;font-weight:500;transition:background 0.2s ease;}
        .btn-primary:hover{background-color:#1d4ed8;}
        .summary-list{list-style:none;padding-left:0;font-size:14px;color:#374151;}
        .summary-list li{margin-bottom:6px;}
    </style>
    @endpush

    @push('scripts')
    <script>
        function updateSummary() {
            const allCheckboxes = document.querySelectorAll('.gear-checklist input[type="checkbox"]');
            const checkedList = document.getElementById("checked-list");
            const progressText = document.getElementById("progress-text");

            checkedList.innerHTML = "";
            let checked = 0;

            allCheckboxes.forEach(cb => {
                if(cb.checked){
                    checked++;
                    const li = document.createElement("li");
                    li.textContent = cb.value;
                    checkedList.appendChild(li);
                }
            });

            progressText.textContent = `${checked} item${checked !== 1 ? 's' : ''} packed`;
        }

        function addCustomGear() {
            const input = document.getElementById("custom-gear");
            const value = input.value.trim();
            if(!value) return;

            const list = document.getElementById("custom-gear-list");
            const li = document.createElement("li");
            li.innerHTML = `<label class="gear-item">
                                <input type="checkbox" name="gear[]" value="${value}" checked onchange="updateSummary()">
                                <span class="check-label">${value}</span>
                            </label>`;
            list.appendChild(li);
            input.value = "";
            updateSummary();
        }

        function clearAll() {
            document.querySelectorAll('.gear-checklist input[type="checkbox"]').forEach(cb => cb.checked = false);
            document.getElementById("custom-gear-list").innerHTML = "";
            updateSummary();
        }

        document.addEventListener("DOMContentLoaded", updateSummary);
    </script>
    @endpush
</x-app-layout>
