@foreach ($categories as $category)
    <option value="{{ $category->id }}"
        @if (!empty($category_id)) @if ($category_id == $category->id) selected @endif @endif>
        {{ str_repeat('-->', $level) }} {{ $category->name }}
    </option>

    @if ($category->children->isNotEmpty())
        @include('backend.product_category.categories_option', [
            'categories' => $category->children,
            'level' => $level + 1,
        ])
    @endif
@endforeach
