<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Illuminate\Database\MySqlConnection;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
{
    if ($exception instanceof QueryException && $exception->getCode() == 2002) {
        // Handle SQLSTATE[HY000] [2002] exception
        return response()->json(['message' => 'XAMPP belum dinyalakan. Silakan nyalakan XAMPP terlebih dahulu.'], 500);
    }

    return parent::render($request, $exception);
}

}
