@extends('_layouts.master')

@section('body')
<section class="bg-cover mt-24 h-screen-60 bg-image-header">

</section>
<section itemscope itemtype="https://schema.org/EducationalOrganization" class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="sm:w-4/5 mx-auto bg-white text-center rounded shadow-lg-soft">
        <div class="flex -mx-2 mb-10 lg:flex-row lg:mb-24 justify-center">
            <div class="mt-8 px-2 flex-1 text-center">
                <h1 itemprop="name" id="intro-docs-template">{{ $page->siteName }}</h1>
                <h2 itemprop="description" id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
        
                <div class="flex my-10 justify-center">
                    <a href="/docs/toilettage-chien" title="{{ $page->siteName }} toilettage canin - toiletteur de chien" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Toilettage Chien : le Guide</a>
        
                    <a itemprop="url" href="https://audreco.com/?utm_source=ecole+de+toilettage+com" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Site principal Audreco</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="block my-8 border lg:hidden">
        <div itemscope itemtype="https://schema.org/Offer" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_todolist_pen.svg" class="h-12 w-12" alt="to do list with pen icon">
            <h3 itemprop="description" id="étude toilettage canin" class="text-2xl text-blue-900 mb-0">Recevez une étude gratuite sur le toilettage</h3>

            <p>Téléchargez nos études gratuites sur : <a itemprop="url" href="https://audreco.com">Audreco</a> onglet "GRATUIT". <br>
                Vous pouvez également consuler nos services, onglet "SERVICES"<br> ainsi que nos formations longues et courtes, onglet "FORMATIONS".
            </p>
        </div>
        <div itemscope itemptype="https://schema.org/Blog" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_laptop.svg" class="h-12 w-12" alt="laptop icon">
            <h3 id="blogs toilettage canin" class="text-2xl text-blue-900 mb-0">Consultez nos blogs</h3>
            <p>
                <a itemprop="url" href="https://audreco.com/mon-chien/?utm_source=ecole+de+toilettage+com">Tout ce que vous avez toujours cru savoir sur votre chien ou votre chat,<br>et qui n'est peut-être pas vrai !</a> <br>
                <a itemprop="url" href="http://entreprendre-animaux.audreco.com/?utm_source=ecole+de+toilettage+com">Entreprendre dans les métiers de services auprès des animaux !</a>
            </p>
        </div>

        <div itemscope itemptype="https://schema.org/LocalBusiness" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_spread_text_bookmark.svg" class="h-12 w-12" alt="text book icon">
            <h3 id="livre animaux" class="text-2xl text-blue-900 mb-0">Faites un petit tour dans notre librairie</h3>
            <p><a itemprop="url" href="https://librairie.audreco.com/?utm_source=ecole+de+toilettage+com">Des livres sur les animaux et le toilettage ! Accéder à la librairie</a></p>
        </div>

        <div itemscope itemptype="https://schema.org/EducationalOrganization" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_magnifier.svg" class="h-12 w-12" alt="magnifier icon">
            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Visitez notre site : Formation toiletteur canin</h3>

            <p><a itemprop="url" href="https://formation-toiletteur-canin.net/?utm_source=ecole+de+toilettage+com">Tout savoir sur la formation de toiletteur canin : quelles formations en toilettage canin ? quels programmes ? quelles méthodes ? quels sont les points essentiels à observer ?</a>
            </p>
        </div>
    <div itemscope itemptype="https://schema.org/CreativeWork" class="text-center">
        <h3>Sommaire</h3>
        <ul>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/toilettage-animaux">
                    Le toilettage pour quels animaux ?
                </a><br />
                <p itemprop="abstract">Incontestablement, les animaux les plus régulièrement toilettés sont les chiens. Cependant, certains salons toilettent aussi (ou seulement) les chats, à poil court ou long : c'est d'ailleurs un « marché » en pleine expansion. Le poil long, chez le chat, nécessite en effet un entretien régulier. Un travail souvent hors de portée de beaucoup de propriétaires. Ces derniers pouvant manquer soit de temps, soit de compétences, soit les deux...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/marche-toilettage">
                    Toilettage chien : le marché et ses attentes
                </a><br />
                <p itemprop="abstract">Le marché du toilettage canin et ses attentes : combien de chiens, de chats ? Le marché du toilettage, le nombre d'animaux dans les salons de toilettage...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/qualites-du-toiletteur">
                    Toiletteur chien, le métier : les qualités du toiletteur
                </a><br />
                <p itemprop="abstract">Toilettage chien, le métier : la pratique du toilettage professionnel implique certaines qualités que nous allons essayer d'envisager, amour des animaux, stabilité du caractère, sens artistique, vitalité physique, sens de la rigueur...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/activite-toilettage">
                    Toiletteur chien, le métier : les différentes formes de l'activité
                </a><br />
                <p itemprop="abstract">Les manières de pratiquer le toilettage canin ne sont pas uniformes : le travail en salon de toilettage, le salon de toilettage mobile, le toilettage à domicile...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/entreprises-toilettage">
                    Toilettage chien, le métier, combien de salons ? Combien de toiletteurs ?
                </a><br />
                <p itemprop="abstract">Le métier du toilettage canin : les entreprises de toilettage canin et l'emploi salarié en tant que toiletteur canin.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/budget-salon-toilettage">
                    Toilettage chien, le métier, quel budget ?
                </a><br />
                <p itemprop="abstract">Que vous exerciez comme toiletteur à domicile que vous soyez employé dans un salon de toilettage, il est recommandé de disposer de son équipement de toilettage personnel...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/toilettage-formes-juridiques">
                    Toilettage chien, le métier : formes juridiques de l'activité
                </a><br />
                <p itemprop="abstract">Le toiletteur est parfois salarié : employé dans un salon de toilettage ou dans une structure comportant un tel salon. Dans de nombreux autres cas, le toiletteur est un travailleur indépendant : auto-entrepreneur, microentreprise, SAS, SARL, EURL...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/reglementation-toilettage">
                    Toilettage chien, le métier et sa réglementation
                </a><br />
                <p itemprop="abstract">Si la plupart des métiers en rapport avec l'animal de compagnie nécessitent d'être titulaire du certificat de capacité, ce n'est pas le cas du toilettage canin.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/formation-toilettage">
                    Toilettage chien, le métier et sa formation
                </a><br />
               <p itemprop="abstract"> Si aucun diplôme de toilettage n'est obligatoire pour exercer en tant que toiletteur canin ou responsable de salon de toilettage, une solide formation est cependant recommandée.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/metier-toiletteur-histoire">
                    Toilettage chien, le métier : le passé, le présent, l'avenir...
                </a><br />
                <p itemprop="abstract">Le passé, le présent et l'avenir du toilettage canin : beaucoup de gens croyaient hier, et croient d'ailleurs toujours aujourd'hui, que certains pelages doivent être obligatoirement raccourcis. L'idée (complètement fausse) est que ces pelages poussent indéfiniment, et finiraient par compromettre la santé de l'animal.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/toilettage-chien/toilettage-aller-plus-loin">
                    Toiletteur canin, le métier : aller plus loin !
                </a><br />
                <p itemprop="abstract">Nous vous présentons sur cette page d'autres ressources relatives au toilettage et à la pratique du métier de toiletteur canin, études gratuites, livres, formations, blogues...</p>
            </li>
        </ul>
    </div>
</section>
@endsection
