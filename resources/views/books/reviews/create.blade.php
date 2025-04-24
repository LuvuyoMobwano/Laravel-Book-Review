@extends('layouts.app')

@section('title', 'Add Review')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <h1 class="mb-10 text-2xl">Add Review for {{ $book->title }}</h1>

    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf

        <div class="mb-4">
            <label for="review">Review</label>
            <textarea
                name="review"
                id="review"
                required
                rows="2"
                @class(['input', 'border-red-500' => $errors->has('review'), 'mb-1'])
            >{{ old('review') }}</textarea>
            @error('review')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rating">Rating</label>
            <select
                name="rating"
                id="rating"
                required
                @class(['input', 'border-red-500' => $errors->has('rating'), 'mb-1'])
            >
                <option value="">Select a Rating</option>
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
            @error('rating')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Review</button>
            <a href="{{ route('books.index') }}" class="cancel-btn">Cancel</a>
        </div>
    </form>
@endsection
