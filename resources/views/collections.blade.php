{{-- For showing user Collections --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <p>Collection List Page: Stuff soon</p>
            <br>
            <div class="listItems">
                <div class="column">
                    <a href="{{ route('recipes') }}">
                        <label for="collection1">collection1</label>
                        <img src="{{ asset('images/food1.jpg') }}" class="img-fluid" id="collection1">
                    </a>
                    <a href="{{ route('recipes') }}">
                        <label for="collection2">collection2</label>
                        <img src="{{ asset('images/collection2.jpg') }}" id="collection2">
                    </a>
                </div>
                <div class="column">
                    <a href="{{ route('recipes') }}">
                        <label for="collection3">collection3</label>
                        <img src="{{ asset('images/collection3.jpg') }}" class="img-fluid" id="collection3">
                    </a>
                    <a href="{{ route('recipes') }}">
                        <label for="collection4">collection4</label>
                        <img src="{{ asset('images/collection4.jpg') }}" class="img-fluid" id="collection4">
                    </a>
                </div>
            </div>
>>>>>>> master
        </div>
    </div>
@endsection
