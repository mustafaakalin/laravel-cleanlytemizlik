@extends('frontend.app')

@section('content')
<div class="bg-base-100 backdrop-blur bg-opacity-50 py-24 sm:py-32 my-12">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Services</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Temizlik hizmetlerimizle eviniz ve iş yeriniz pırıl pırıl
                olsun. Şimdilik sadece Antalya Merkez.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ($services as $item)
            <li>
                <div class="card w-full bg-base-100 shadow-xl glass">
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">{{ $item['name'] }}</h2>
                        <p class="text-gray-600">{{ $item['description'] }}</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('service', $item['slug']) }}" class="btn btn-primary">Review</a>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
