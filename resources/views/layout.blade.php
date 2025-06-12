<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js" integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <title>{{$title ?? 'Workopia | Find and list jobs'}}</title>
</head>

<body class="bg-gray-100">
    <x-header />
    @if(session('success'))
        <x-alert type="success" message="{{session('success')}}" />
        @endif
        @if(session('error'))
        <x-alert type="error" message="{{session('error')}}" />
        @endif
    @if(request()->is('/'))
    <x-hero />
    <x-top-banner />
    @endif
    <main class="container mx-auto p-4 mt-4">
        {{-- Display alert messages --}}
        
        {{$slot}}
    </main>

    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>