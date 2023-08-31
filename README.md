## Technology used

-   [Laravel Framework](https://laravel.com/docs/10.x/releases).
-   [Laravel Livewire](https://laravel-livewire.com/docs/2.x/quickstart).

## Server Requirements

-   PHP >= 8.1

## Open your terminal and cd into the project's root folder

-   `cd nikunj-7span-aire-labs-laravel-technical`

## Installation steps

1. `composer install`
2. `npm install && npm run dev`
3. `php artisan key:generate`
4. `php artisan storage:link`
5. `php artisan migrate:fresh --seed`
6. `php artisan serve`

### Accessing Reviews

-   To access the reviews section of this application, please make a GET request to the `/reviews` endpoint.
