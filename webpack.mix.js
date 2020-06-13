const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/** Procesa el archivo javascript principal app.js */
mix.js('resources/js/app.js', 'public/js'
);
/** Procesa elementos compartidos de la aplicación */
mix.js(['resources/js/shared.js', 'resources/js/mixins.js'], 'public/js/shared-components.js');

/** Procesa los estilos de la aplicación en el archivo app.css */
mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/custom/custom.scss', 'public/css');
mix.combine([
   'public/css/app.css', 'public/css/custom.css'
], 'public/css/app.css');

/*
 |--------------------------------------------------------------------------
 | Ajustando la configuración del mix
 |--------------------------------------------------------------------------
 |
 | Especifica la ubicación de los archivos para entornos de desarrollo y de
 | producción.
 |
 */
 mix.webpackConfig({
    output:{
        chunkFilename: `js/components/${(mix.inProduction()) ? 'core/[chunkhash]' : '[name]'}.js`,
    },
});

/*
 |--------------------------------------------------------------------------
 | Sección para entornos de producción
 |--------------------------------------------------------------------------
 |
 | Especifica las condiciones e instrucciones a ejecutar para entornos de
 | producción.
 |
 */
/** Publica la versión de la compilación */
if (mix.inProduction()) {
   mix.version();
}
else {
    mix.sourceMaps();
}
