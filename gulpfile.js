/**
 * Created by Admin on 09.06.2017.
 */
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.less(['general.less', 'style.less'],
        'public/build/css');
});

elixir(function(mix) {
    mix.scripts(['scrollUp.js', 'popUp.js'],
        'public/build/js');
});