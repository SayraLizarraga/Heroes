@include('shared.head')

<div class="container py-4r">
<div class="row mb-4">
    <div class="col text-center">
        <header class="py-4 bg-info">
            <h1 class= "mb-0 text-black">{{$page_title}}</h1>
        </header>
    </div>
</div>



@yield('content')
@yield('botones')
@yield('botones_1')
</div>
@include('shared.footer')