@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
                            <h2>Redaguoti atsiliepima</h2>
                            <form method="post" action="{{ route('update-review', ['id' => $review->id]) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="text">Tekstas:</label>
                                    <input type="text" class="form-control" id="text" name="text" value="{{ $review->body }}">
                                </div>
                                <div class="form-group">
                                    <h4>įvertinimas:</h4>
                                    <select name="rating">
                                        <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>5</option>
                                    </select>
                                    </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
