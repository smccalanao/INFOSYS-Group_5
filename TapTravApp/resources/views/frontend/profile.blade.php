<x-app-layout>
    <div class="page-content">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="heading-section text-center mb-4">
                    <h2 class="fw-bold text-primary"><em>Essential</em> Gear Checklist</h2>
                </div>

                <form action="{{ route('gear.save') }}" method="POST">
                    @csrf
                    <div class="gear-checklist">
                        <label><input type="checkbox" name="items[]" value="Tent"
                            {{ in_array('Tent', $savedGears ?? []) ? 'checked' : '' }}> Tent</label><br>
                        <label><input type="checkbox" name="items[]" value="Sleeping Bag"
                            {{ in_array('Sleeping Bag', $savedGears ?? []) ? 'checked' : '' }}> Sleeping Bag</label><br>
                        <label><input type="checkbox" name="items[]" value="Backpack"
                            {{ in_array('Backpack', $savedGears ?? []) ? 'checked' : '' }}> Backpack</label><br>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Save Gear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
