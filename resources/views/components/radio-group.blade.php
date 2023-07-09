<div>
    <label for="{{$name}}-all" class="flex items-center space-x-2 mb-1">
        <input type="radio" name="{{$name}}" value="" id="{{$name}}-all"
            @checked(!request($name))>
        <span>All</span>
    </label>
    @foreach($optionsWithLabels as $label => $option)
        <label for="{{$name}}-{{$option}}" class="flex items-center space-x-2 mb-1">
            <input type="radio" name="{{$name}}" value="{{$option}}" id="{{$name}}-{{$option}}"
                @checked(request($name) === $option)>
            <span>{{$label}}</span>
        </label>
    @endforeach
</div>
