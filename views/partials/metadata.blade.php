{!! seo_helper()->render() !!}
<link rel="shortcut icon" href="{!! Theme::url('img/favicon.png') !!}" type="image/png">

<script async>
    WebFontConfig = { google: {
            families: [
                'Roboto:300,400,500,700,900:latin-ext',
                'Open Sans:300,400,500,700,900:latin-ext',
                'Roboto Condensed:300,400,500,700,900:latin-ext'
            ]
        }};
    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>

<link rel="stylesheet" href="{{ mix('/themes/kingservice/css/bootstrap.css') }}">
{!! Theme::style('vendor/font-awesome/css/font-awesome.css') !!}
{!! Theme::style('plugins/car-service-icons/flaticon.css') !!}
<link rel="stylesheet" href="{{ mix('/themes/kingservice/css/styles.css') }}">

<!--[if lt IE 9]>
{!! Theme::script('js/modernizr.js') !!}
<![endif]-->
