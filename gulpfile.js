var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('core.scss', 'public/css/app.css');
    mix.rollup('app.js');
    mix.browserSync({
        proxy: 'lumen-starter.dev'
    });
});
