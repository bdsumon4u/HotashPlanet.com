<option value="{{ $category->id }}" @if(old('parent_id') == $category->id) selected @endif>{{ str_repeat('¦―', $loop->depth - 1) . ' ' . $category->name }}</option>
@foreach($category->children as $category)
    @include('manage.categories.option')
@endforeach
