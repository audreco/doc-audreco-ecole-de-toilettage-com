@extends('_layouts.master')

@section('body')
<section style="background-image: url(/assets/img/tmp-img/header.jpg); background-size: cover; background-position: 50% 0%; height: 60vh; margin-top: 90px">
    

</section>
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="sm:w-4/5 mx-auto bg-white text-center rounded shadow-lg-soft">
        <div class="flex -mx-2 mb-10 lg:flex-row lg:mb-24 justify-center">
        <!-- <div class="flex -mx-2 flex-col-reverse mb-10 lg:flex-row lg:mb-24"> -->
            <div class="mt-8 px-2 flex-1 text-center">
            <!-- <div class="mt-8 px-2"> -->
                <h1 id="intro-docs-template">{{ $page->siteName }}</h1>
        
                <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
        
                <div class="flex my-10 justify-center">
                <!-- <div class="flex my-10"> -->
                    <a href="/docs/ecole-de-toilettage" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">École de toilettage</a>
        
                    <a href="https://audreco.com?utm_source=ecole+de+toilettage+com" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Site principal Audreco</a>
                </div>
            </div>
        
            <!-- <img src="/assets/img/tmp-img/shutterstock_280679357.jpg" alt="{{ $page->siteName }} large logo" class="px-2 mx-auto mb-6 lg:mb-0 " style="block;max-width:30vw; width: auto; height: auto; margin: 0 auto;"> -->
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">
    <!-- <div class="flex justify-around" style="margin: 0 auto;"> -->
    <!-- <div class="md:flex -mx-2 -mx-4"> -->
        <div class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
        <!-- <div class="mb-8 mx-3 px-2 md:w-1/3"> -->
            <img src="/assets/img/tmp-img/basic_todolist_pen.svg" class="h-12 w-12" alt="to do list with pen icon">
            <!-- <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon"> -->

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Recevez une étude gratuite</h3>

            <p>Téléchargez nos études gratuites sur : <a href="https://audreco.com">Audreco</a> onglet "GRATUIT". <br>
                Vous pouvez également consuler nos services, onglet "SERVICES"<br> ainsi que nos formations longues et courtes, onglet "FORMATIONS".
            </p>
        </div>

        <div class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
        <!-- <div class="mb-8 mx-3 px-2 md:w-1/3"> -->
            <img src="/assets/img/tmp-img/basic_laptop.svg" class="h-12 w-12" alt="laptop icon">
            <!-- <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon"> -->

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Consultez nos blogs</h3>

            <p>
                <a href="https://audreco.com/mon-chien/?utm_source=ecole+de+toilettage+com">Tout ce que vous avez toujours cru savoir sur votre chien ou votre chat,<br>et qui n'est peut-être pas vrai !</a> <br>
                <a href="http://entreprendre-animaux.audreco.com/?utm_source=ecole+de+toilettage+com">Entreprendre dans les métiers de services auprès des animaux !</a>
            </p>
        </div>

        <div class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
        <!-- <div class="mx-3 px-2 md:w-1/3"> -->
            <img src="/assets/img/tmp-img/basic_spread_text_bookmark.svg" class="h-12 w-12" alt="spreaad text book icon">
            <!-- <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon"> -->

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Faites un petit tour dans notre librairie</h3>

            <p>Des livres pour tous ! <a href="https://librairie.audreco.com?utm_source=ecole+de+toilettage+com">Accéder à la librairie</a>
            </p>
        </div>
    </div>
</section>
@endsection
