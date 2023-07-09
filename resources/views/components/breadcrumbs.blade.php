<x-layout>
    <nav {{$attributes}}>
        <ul class="flex space-x-4">
            <li><a href="/">Home</a></li>
            @foreach($links as $title => $link)
                <li>→</li>
                <li><a href="{{$link}}">{{$title}}</a></li>
            @endforeach
        </ul>
    </nav>
</x-layout>
