<?php


namespace Modules\Oauth2\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            'SocialiteProviders\\LaravelPassport\\LaravelPassportExtendSocialite@handle',
            'SocialiteProviders\\Discord\\DiscordExtendSocialite@handle',
            'SocialiteProviders\\Instagram\\InstagramExtendSocialite@handle',
            'SocialiteProviders\\VKontakte\\VKontakteExtendSocialite@handle',
            // 'SocialiteProviders\\Odnoklassniki\\OdnoklassnikiExtendSocialite@handle',
            'SocialiteProviders\\Yandex\\YandexExtendSocialite@handle'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
