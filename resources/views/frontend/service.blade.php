@extends('frontend.app')

@section('content')
<div class="my-12 container px-8">
    <h1 class="flex text-4xl justify-center">Service |&nbsp;<div class="text-green-600">{{ $service['name'] }}</div></h1>

    <div class="my-36 px-2 border-2 border-black rounded-lg">
        <div class="flex justify-center">
            <p class="text-2xl">{{ $service['name'] }}</p>
        </div>
        <div class="my-4">
            <p class="text-base text-gray-700">{{ $service['description'] }}</p>
        </div>
        <div class="flex flex-row justify-center my-4">
            <a href="{{ route('reservation') }}" class="btn btn-primary">Reservation Yap</a>
        </div>
    </div>

    <div class="flex justify-center my-12">
        <a href="{{ route('services') }}" class="btn btn-ghost">&larr; Tüm Hizmetler</a>
    </div>
</div>
@endsection
