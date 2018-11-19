<?php

return [

    /*
    |--------------------------------------------------------------------------
    | アプリケーション名
    |--------------------------------------------------------------------------
    |
    | ここにはアプリケーション名を指定します。この名前は
    | 通知時にアプリケーション名をフレームワークが必要な場合や、
    | アプリケーションやパッケージが必要としている場合に使用されます。
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーション環境
    |--------------------------------------------------------------------------
    |
    | この値により現在実行中のアプリケーションの「環境」が決まります。
    | これらの値はアプリケーションで活用する様々なサービスを好み通りに
    | 設定するために使用します。".env"ファイルに値を設定してください。
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションデバッグモード
    |--------------------------------------------------------------------------
    |
    | アプリケーションをデバッグモードにすると、アプリケーションでエラーが発生する
    | たびにスタックトレースともに、詳細なエラーメッセージが表示されます。
    | このモードでない場合、シンプルで一般利用者向きなエラーページが表示されます。
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションURL
    |--------------------------------------------------------------------------
    |
    | このURLはArtisanコマンドラインツールを使用する時に正しい
    | URLを生成するために使用します。アプリケーションのルートのURLを設定してください。
    | Artisanコマンドを実行する時に使用されます。
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションタイムゾーン
    |--------------------------------------------------------------------------
    |
    | ここではアプリケーションのデフォルトタイムゾーンを指定します。これは
    | PHPの日付／時間関数で使用されます。最初から未設定でも使用できるように
    | 適切なデフォルトを設定してあります。
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | アプリケーションローカル設定
    |--------------------------------------------------------------------------
    |
    | アプリケーションローカルは翻訳サービスプロバイダにより使用される
    | デフォルトローカルを指定します。アプリケーションで提供するローカルを
    | 自由に設定してください。
    |
    */

    'locale' => 'ja',

    /*
    |--------------------------------------------------------------------------
    | アプリケーションフォールバック言語
    |--------------------------------------------------------------------------
    |
    | フォールバック言語は現在のローカルが使用できない場合に、
    | 代替として使われます。アプリケーション全体に対して用意されている
    | 言語フォルダーに対応するコードであればどれでも使用可能です。
    |
    */

    'fallback_locale' => 'ja',

    /*
    |--------------------------------------------------------------------------
    | 暗号化キー
    |--------------------------------------------------------------------------
    |
    | このキーはIlluminate暗号化サービスで使用されます。ランダムな32文字を
    | セットしないと安全ではありません。アプリケーションをデプロイ
    | る前に、必ず変更してください。
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | 自動ロードされるサービスプロバイダ
    |--------------------------------------------------------------------------
    |
    | ここにリストしたサービスプロバイダはアプリケーションのリクエストに対し
    | 自動的にロードされます。アプリケーションの機能を拡張するため、この配列へ
    | 自由に自分のサービスを付け加えてください。
    |
    */

    'providers' => [

        /*
         * Laravelフレームワークサービスプロバイダ
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * パッケージのサービスプロバイダ
         */

        /*
         * アプリケーションサービスプロバイダ
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | クラスエイリアス
    |--------------------------------------------------------------------------
    |
    | このクラスエイリアスの配列はこのアプリケーションが開始されると登録されます。
    | エイリアスをどんなに好きなだけ自由に登録しても、「遅延」ロードされるので、
    | パフォーマンスを妨げることはありません。
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];