{{-- @if(count($sections) == 0)
<h1>Looks like there is nothing here</h1>
<button>Add a header to get started</button>
@endif --}}

@unless(count($sections) == 0)
    @foreach ($sections as $section)
    {{$section['name']}}
    <hr />
    @endforeach
@else
    <h1>Looks like there is nothing here</h1>
    <button>Add a header to get started</button>
@endunless
