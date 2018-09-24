<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\CustomValidator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //\Validator::resolver(function ($translator, $data, $rules, $messages) {
        //    return new CustomValidator($translator, $data, $rules, $messages);
        //});

        \Validator::extend('kana', function($attribute, $value, $parameters, $validator)
        {
            if (preg_match("/^[ァ-ヶｦ-ﾟー]+$/u", $value)) {
                return true;
            }
        });
        //\Validator::extend('kana', function($attribute, $value, $parameters, $validator) {
        //    // 半角空白、全角空白、全角記号、全角かなを許可
        //    return preg_match("/^[ぁ-んー 　！-＠［-｀｛-～]+$/u", $value);
        //});
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
