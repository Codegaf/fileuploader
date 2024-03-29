<?php

namespace codegaf\fileuploader;

use Illuminate\Support\ServiceProvider;

class FileUploaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/FileUploader/FileUploader.php';
        $this->publishes([
            base_path('vendor/codegaf/fileuploader/src/app/FileUploader') => base_path('app/FileUploader')
        ]);
    }
}
