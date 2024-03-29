var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// Gentelella vendors path : vendor/bower_components/gentelella/vendors

elixir(function(mix) {

    /********************/
    /* Copy Stylesheets */
    /********************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/css/custom.min.css', 'public/css/gentelella.min.css');

    // datatables-butoons-bs
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css', 'public/css/buttons.bootstrap.min.css');

    // datatables-bs
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css', 'public/css/dataTables.bootstrap.min.css');

    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    mix.copy('vendor/bower_components/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/js/custom.min.js', 'public/js/gentelella.min.js');

    // datatables-buttons-bs
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js', 'public/js/buttons.bootstrap.min.js');

    // datatables-buttons
    mix.copy('/home/mini/certnote/vendor/bower_components/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js', 'public/js/dataTables.buttons.min.js');

    // datatables-bs
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js', 'public/js/dataTables.bootstrap.min.js');

    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');
});
