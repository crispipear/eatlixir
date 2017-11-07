const elixir = require('cakephp-elixir');

elixir(mix => {
  mix.browserSync({
      proxy: 'project.dev',
      files:[
        '**/*.js',
        '**/*.css',
        '**/*.php',
        '**/*.ctp'
      ]
  });
    mix.sass('app.scss');
});
