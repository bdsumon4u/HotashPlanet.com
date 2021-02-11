<tr>
    <td class="font-w600 font-size-sm">
        <a href="">{{ str_repeat('¦―', $loop->depth - 1) . ' ' . $category->name }}</a>
    </td>
    <td class="d-none d-sm-table-cell text-center">
        <span class="badge badge-danger">0</span>
    </td>
    <td class="text-center">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Category">
                <i class="fa fa-fw fa-pencil-alt"></i>
            </button>
            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete Category">
                <i class="fa fa-fw fa-times"></i>
            </button>
        </div>
    </td>
</tr>
@foreach($category->children as $category)
    @include('manage.categories.row')
@endforeach
