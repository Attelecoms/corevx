<ul class="p-0 m-0">
    @foreach($categories as $category)

        <li><a href="{{url('/categories/'. $category->id) }}">{{$category->name }}</a></li>

    @endforeach
</ul>
