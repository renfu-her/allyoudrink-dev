@foreach ($categories as $category)
    <option value="{{ $category->id }}">
        {{ str_repeat('-->', $level) }} {{ $category->name }}
    </option>

    @if ($category->children->isNotEmpty())
        @include('backend.product_category.categories_option', ['categories' => $category->children, 'level' => $level + 1])
    @endif
@endforeach
