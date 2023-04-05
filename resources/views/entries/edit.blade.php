@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Entry</h2>

    <form method="post" action="/console/entries/edit/{{$entry->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $entry->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{old('date', $entry->date)}}">

            @if ($errors->first('date'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Entry</button>

    </form>

    <a href="/console/entries/list">Back to Entry List</a>

</section>

@endsection
