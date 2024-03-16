@extends('layouts.template')

@section('title', $adventure->name)

@section('content')

<header>
    <hgroup>
        <h1>{{$adventure->name}}</h1>
        <p>{{$adventure->description}}</p>
    <hgroup>
</header>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<div> Last Prompt was Prompt ID {{$existingProgress->prompt_id}}</div>

@foreach ($adventure->slides as $slide)

    <div><h2>{{ $slide->title }}<h2></div>
    <div>{!! $slide->content !!}</div>

    @foreach ($slide->prompts as $prompt)
    <form method="POST" action="{{ route('form.submit') }}">
    @csrf
    <input type="hidden" name="adventure_id" value="{{ $adventure->id }}">
        <input type="hidden" name="progress_prompt_id" value="{{ $prompt->id }}">
        <div>{{ $prompt->text }}</div>
        @if ($prompt->type === 'FREE_RESPONSE')
            <div>
                <input type="text" name="responses[{{ $prompt->id }}]" value="{{ optional($responses[$prompt->id] ?? null)->first()->text ?? '' }}" required />

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        @elseif ($prompt->type === 'MULTIPLE_CHOICE')
            @foreach ($prompt->promptOptions as $option)
                <div>
                    <label>
                        <input type="radio" name="responses[{{ $prompt->id }}]" value="{{ $option->id }}" {{ isset($responses[$prompt->id]) && optional($responses[$prompt->id]->first())->prompt_option_id == $option->id ? 'checked' : '' }} required />

                        {{ $option->text }}
                    </label>
                </div>
                
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        @elseif ($prompt->type === 'FREE_SELECT')
            <input type="hidden" name="responses[{{ $prompt->id }}]" value="[]" />
            @foreach ($prompt->promptOptions as $option)
                <div>
                    <label>
                        <input type="checkbox" name="responses[{{ $prompt->id }}][]" value="{{ $option->id }}" {{ (isset($responses[$prompt->id]) && $responses[$prompt->id]->contains('prompt_option_id', $option->id)) ? 'checked' : '' }} />

                        {{ $option->text }}
                    </label>
                </div>
                
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
    </form>
    @endforeach
@endforeach


@endsection
