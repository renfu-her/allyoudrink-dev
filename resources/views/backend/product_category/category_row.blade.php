<tr>
    <td>{{ $category->id }}</td>
    <td>{{ str_repeat('-->', $depth) }} {{ $category->name }}</td>
    <td>
        <button class="btn btn-primary" onclick="edit_row({{ $category->id }})">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>
    </td>
    <td>
        <button class="btn btn-danger" onclick="delete_row({{ $category->id }})">
            <i class="fa-solid fa-trash"></i>
        </button>
    </td>
</tr>

@if($category->children->isNotEmpty())
    @foreach($category->children as $child)
        @include('backend.product_category.category_row', ['category' => $child, 'depth' => $depth + 1])
    @endforeach
@endif