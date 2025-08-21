const Encore = require("@symfony/webpack-encore");

Encore.setOutputPath("public/build/")
    .setPublicPath("/build")
    .addEntry("app", "./assets/app.js")
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableSassLoader() // Si vous utilisez SASS
    .enablePostCssLoader();

module.exports = Encore.getWebpackConfig();
