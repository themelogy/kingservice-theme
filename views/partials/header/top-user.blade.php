<div class="top-user-area clearfix">
    <div class="pull-left">
        <ul class="list list-horizontal list-border mr-sm-10">
            <li>
                <p class="slogan"><strong>Ankara Özel Oto Servis</strong></p>
            </li>
        </ul>
    </div>
    <ul class="top-user-area-list list list-horizontal list-border">
        {!! Menu::render('top', \Themes\Lion\Presenter\TopMenuPresenter::class) !!}
        <li>
            <div class="top-link">
            <a href="tel:@setting('theme::phone')"><i class="fa fa-phone mr5"></i> @setting('theme::phone')</a>
            </div>
        </li>
        <li>
            @include('partials.components.socials', ['listClass'=>'list list-horizontal list-space top-socials', 'iconClass'=>''])
        </li>
        @auth
            <li class="top-user-area-avatar nav-drop">
                <a>
                    <img class="origin round" src="{{ $user->present()->gravatar() }}" alt="{{ $currentUser->fullname }}" title="{{ $currentUser->fullname }}" />{{ $currentUser->fullname }}
                </a>
                <ul class="list nav-drop-menu">
                    <li><a href="{{ route('dashboard.index') }}">Yönetim Paneli</a></li>
                </ul>
            </li>
            <li><a href="{{ LaravelLocalization::getLocalizedURL(locale(), route('logout')) }}">Çıkış</a></li>
        @endauth
        @if(collect(LaravelLocalization::getSupportedLocales())->count() > 1)
        <li class="top-user-area-lang nav-drop">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                <strong>{{ mb_strtoupper(LaravelLocalization::getCurrentLocaleNative()) }}</strong><i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
            </a>
            <ul class="list nav-drop-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                    <li>
                        <a href="{{ url($locale) }}">
                            <span>{{ mb_strtoupper($supportedLocale['native']) }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        @endif
    </ul>
</div>
