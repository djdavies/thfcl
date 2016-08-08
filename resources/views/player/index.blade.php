@extends('layouts.master')

@section('title', 'All Players')

@section('content')
    <div class="row">
        @foreach ($players as $player)
            <div class="col-md-4">
                <div class="thumbnail">
                    <h3>{{ $player->name }}</h3>
                    <img src="..." alt="...">
                    <div class="caption">
                        <script>
                            $("#input-id").rating();
                        </script>
                        <input id="input-id" name="input-name" type="number" class="rating" min=0 max=5 step=1 data-size="lg" data-rtl="false">
                        <p><a href="#" class="btn btn-primary" role="button">Rate</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
