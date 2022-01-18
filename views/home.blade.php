@extends('layouts.master')

@section('content')
    @themeSlide('anasayfa')
    <div class="container-fluid footer-icon">
        {!! Menu::render('shortcuts', \Themes\Lion\Presenter\IconMenuPresenter::class) !!}
    </div>
    @if(@$page->settings->show_page_home)
        <div class="container">
            <div class="gap"></div>
            {!! $page->body !!}
        </div>
    @endif
    @pageFindByOptions('settings.show_services', 'services')
    @newsLatestPosts(8, 'latest')
@endsection
