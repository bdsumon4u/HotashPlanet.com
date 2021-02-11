<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
        <style>
            label {
                margin-bottom: 0.15rem;
            }
            .form-group {
                margin-bottom: 0.75rem;
            }
        </style>
    @endpush

    <div class="row">
        <div class="col-xl-4">
            <h2 class="font-size-sm">Add New Category</h2>
            <form action="{{ route('manage.categories.store') }}" class="mb-5">
                <div class="form-group">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                    <small>The name is how it appears on your site.</small>
                </div>
                <div class="form-group">
                    <label for="slug">Slug <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="slug" name="slug">
                    <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                </div>
                <div class="form-group">
                    <label for="parent">Parent</label>
                    <select name="parent_id" id="parent" class="form-control js-select2">
                        <option value="">No Parent</option>
                        @foreach($categories as $category)
                            @include('manage.categories.option')
                        @endforeach
                    </select>
                    <small>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</small>
                </div>
                <div class="form-group">
                    <label for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order">
                    <small>You can optionally specify an order number.</small>
                </div>
                <button type="submit" class="btn btn-dark">Add New Category</button>
            </form>
        </div>
        <div class="col-xl-8">
            <div class="block block-rounded">
                <div class="block-header border-bottom">
                    <h3 class="block-title">Categories</h3>
                </div>
                <div class="block-content">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr class="bg-gray">
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Count</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                @include('manage.categories.row')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>
        <script>jQuery(function(){ One.helpers(['select2']); });</script>
    @endpush
</x-app-layout>
