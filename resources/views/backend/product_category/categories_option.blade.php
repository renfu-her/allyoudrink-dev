@foreach ($categories as $category)
    <option value="{{ $category->id }}">
        {{ str_repeat('--', $level) }} {{ $category->name }}
    </option>

    @if ($category->children->isNotEmpty())
        @include('categories_options', ['categories' => $category->children, 'level' => $level + 1])
    @endif
@endforeach
