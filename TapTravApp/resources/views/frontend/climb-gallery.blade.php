<x-app-layout>
    <div class="page-content">

        <div class="row climb-gallery">
            <div class="col-lg-12 flex justify-between items-center mb-4">
                <div class="heading-section">
                    <h4 class= "m-0"><em>My</em> Climb Gallery</h4>
</div>

<button id="btnOpenAdd" class="px-4 py-2 bg-[#B5C7A6] text-black rounded shadow hover:opacity-90">
    + Add Image
</button>
</div>

@forelse($climbs as $climb)
    <div class="col-lg-4 col-sm-6 mb-6">
        <div class="gallery-card bg-white rounded-xl shadow-md overflow-visible relative">
            <div class="relative">
                <img src="{{ asset('storage/' . $climb->image_url) }}" alt="{{ $climb->title }}"
                     class="w-full h-48 object-cover rounded-t-xl" loading="lazy">

                    {{-- dropdown in top-right corner --}}
                    <div class="absolute top-2 right-2">
                        <button type="button"
                                class="dots-btn px-2 py-1 rounded-full bg-white shadow hover:bg-gray-100 focus:outline-none"
                                data-climb='@json($climb)'>
                            &#x22EE;
                        </button>

                        <div class="dots-menu hidden absolute right-0 mt-2 w-36 bg-white border rounded shadow-lg z-50">
                            <button type="button"
                                    class="block w-full text-left px-4 py-2 hover:bg-gray-100 open-edit"
                                    data-climb='@json($climb)'>
                                Edit
                            </button>

                            {{-- ✅ Delete form with correct ID --}}
                            
    @if(!empty($climb->id))
<form action="{{ route('climbs.destroy', $climb->id) }}" method="POST" class="delete-form">
    @csrf
    @method('DELETE')
    <button type="button" 
    class="delete-btn block w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100">
        Delete
    </button>
</form>
@endif
                        </div>
                    </div>
                </div>

                <div class="caption p-3">
                    <div class="font-semibold text-sm truncate">{{ $climb->title }}</div>
                    <div class="text-xs text-gray-600">Difficulty: {{ $climb->difficulty }}</div>
                </div>

                <div class="p-3 text-sm text-gray-800 border-t">
                    <div class="mb-1"><strong>Address:</strong> {{ $climb->address }}</div>
                    <div>{{ $climb->description }}</div>
                </div>
            </div>
        </div>
    @empty
        <div class="w-full flex justify-center items-center py-20">
            <p class="text-white">No climbs yet.</p>
        </div>
    @endforelse
    <div id="deleteConfirmModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-[#B5C7A6] w-full max-w-sm p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold mb-4">Confirm Deletion</h2>
        <p class="mb-6 text-black">Are you sure you want to delete this climb? This action cannot be undone.</p>
        <div class="flex justify-end gap-3">
            <button type="button" id="cancelDelete" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
            <button type="button" id="confirmDelete" class="px-4 py-2 bg-red-600 text-white rounded">Delete</button>
        </div>
    </div>
</div>
</div>
</div>

{{-- Reusable Modal for Add/Edit --}}
<div id="climbModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center items-start pt-20 overflow-y-auto hidden z-[9999]">
    <div class="bg-[#B5C7A6] w-full max-w-lg p-6 rounded-lg shadow-lg relative">
        <button type="button" onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-black text-xl">&times;</button>

        <h2 id="modalTitle" class="text-xl font-semibold  mb-1">Add Climb</h2>

        <form id="climbForm" 
        method="POST" 
        enctype="multipart/form-data" 
        action="{{ route('climbs.store') }}"
        class="bg-[#B5C7A6]-50 p-6 rounded-lg">
            @csrf
            <input type="hidden" name="_method" id="formMethod" value="">

            <div class="mb-4">
                <label class="block mb-1 font-semibold"></label>
                <div class="border-2 border-none rounded p-4 text-center cursor-pointer">
                    <input type="file" name="image" id="imageInput" accept="image/*" class="w-full hidden" />
                    <img id="imagePreview" src="" class="hidden mt-1 w-full h-48 object-cover rounded" alt="preview">
                    <label for="imageInput" class="cursor-pointer text-blue-600 mt-2">Choose File</label>
                </div>
            </div>

            <div class="mb-3">
                <input type="text" id="inputTitle" name="title" placeholder="Title" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-3">
                <select id="inputDifficulty" name="difficulty" class="w-full p-2 border rounded" required>
                    <option value="" disabled>Select Difficulty</option>
                    <option value="Beginner">Easy</option>
                    <option value="Intermediate">Moderate</option>
                    <option value="Advanced">Hard</option>
                </select>
            </div>

            <div class="mb-3">
                <input type="text" id="inputAddress" name="address" placeholder="Address" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-3">
                <textarea id="inputDescription" name="description" placeholder="Description" class="w-full p-2 border rounded" required></textarea>
            </div>

            <div class="flex justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
                <button type="submit" id="modalSaveBtn" class="px-4 py-2 bg-green-600 text-white rounded">Save</button>
            </div>
        </form>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const btnOpenAdd = document.getElementById('btnOpenAdd');
    const climbModal = document.getElementById('climbModal');

    if (btnOpenAdd && climbModal) {
        btnOpenAdd.addEventListener('click', function () {
            climbModal.classList.remove('hidden');
        });
    }
});

function closeModal() {
    document.getElementById('climbModal').classList.add('hidden');
}
</script>
@push('styles')
<style>
    .gallery-card { overflow: visible; }
    .dots-menu { min-width: 9rem; }
</style>
@endpush

<script>
document.addEventListener('DOMContentLoaded', function () {
    const baseUrl = '{{ url('') }}';
    const storageBase = '{{ asset('storage') }}';
    let formToSubmit = null;

    // --- Utility: Close all dropdown menus ---
    function closeAllMenus() {
        document.querySelectorAll('.dots-menu').forEach(m => m.classList.add('hidden'));
    }

    // --- Handle dots menu toggle ---
    document.querySelectorAll('.dots-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            closeAllMenus();
            const menu = this.parentElement.querySelector('.dots-menu');
            menu.classList.toggle('hidden');
        });
    });

    // --- Handle Edit button clicks ---
    document.querySelectorAll('.open-edit').forEach(editBtn => {
        editBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
            const climb = JSON.parse(this.getAttribute('data-climb'));
            openEditModal(climb);
        });
    });

    // --- Handle Delete button clicks (confirmation modal) ---
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            formToSubmit = this.closest('form');
            closeAllMenus(); // close dropdown so it’s not behind modal
            document.getElementById('deleteConfirmModal').classList.remove('hidden');
        });
    });

    // Cancel delete
    document.getElementById('cancelDelete').addEventListener('click', function () {
        document.getElementById('deleteConfirmModal').classList.add('hidden');
        formToSubmit = null;
    });

    // Confirm delete
    document.getElementById('confirmDelete').addEventListener('click', function () {
        if (formToSubmit) {
            formToSubmit.submit();
        }
    });

    // --- Close menus when clicking outside ---
    window.addEventListener('click', function (e) {
        if (!e.target.closest('.dots-menu') && !e.target.closest('.dots-btn')) {
            closeAllMenus();
        }
    });

    // --- Open Add Modal ---
    const btnAdd = document.getElementById('btnOpenAdd');
    if (btnAdd) {
        btnAdd.addEventListener('click', function (e) {
            e.preventDefault();
            openAddModal();
        });
    }

    // --- Image preview on file select ---
    const imageInput = document.getElementById('imageInput');
    if (imageInput) {
        imageInput.addEventListener('change', function (e) {
            const preview = document.getElementById('imagePreview');
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = ev => {
                    preview.src = ev.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.classList.add('hidden');
            }
        });
    }

    // --- Add mode ---
    window.openAddModal = function () {
        const form = document.getElementById('climbForm');
        form.action = "{{ route('climbs.store') }}";
        document.getElementById('formMethod').value = '';
        document.getElementById('modalTitle').innerText = 'Add Climb';
        form.reset();
        document.getElementById('imagePreview').classList.add('hidden');
        document.getElementById('climbModal').classList.remove('hidden');
    };

    // --- Edit mode ---
    window.openEditModal = function (climb) {
        const form = document.getElementById('climbForm');
        form.action = `${baseUrl}/climbs/${climb.id}`;
        document.getElementById('formMethod').value = 'PUT';
        document.getElementById('modalTitle').innerText = 'Edit Climb';

        document.getElementById('inputTitle').value = climb.title || '';
        document.getElementById('inputDifficulty').value = climb.difficulty || '';
        document.getElementById('inputAddress').value = climb.address || '';
        document.getElementById('inputDescription').value = climb.description || '';

        const preview = document.getElementById('imagePreview');
        if (climb.image_url) {
            preview.src = `${storageBase}/${climb.image_url}`;
            preview.classList.remove('hidden');
        } else {
            preview.src = '';
            preview.classList.add('hidden');
        }

        document.getElementById('climbModal').classList.remove('hidden');
    };

    // --- Close modal ---
    window.closeModal = function () {
        document.getElementById('climbModal').classList.add('hidden');
        const form = document.getElementById('climbForm');
        form.reset();
        document.getElementById('imagePreview').classList.add('hidden');
    };
});
</script>
</x-app-layout>
