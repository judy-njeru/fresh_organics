<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // if ($exception instanceof \Illuminate\Database\QueryException) {
        //     // dd($exception->getMessage());
        //     return response()->view('exceptions/database-error');
        // } elseif ($exception instanceof \Illuminate\Database\PDOException) {
        //     return response()->view('exceptions/database-error');
        // }

        if ($exception instanceof \Facade\Ignition\Exceptions\ViewException) {
            // dd($exception->getMessage());
            // $data['title'] = '404';
            // $data['name'] = 'Page not found';;
            // return response()
            //     ->view('errors.404', ['data' => $data], 404);
        }



        if ($this->isHttpException($exception) && $exception instanceof \Illuminate\Database\QueryException) {


            switch ($exception->getStatusCode()) {

                    // not authorized
                case '403':
                    $data['title'] = '403';
                    $data['name'] = "You're not authorised to View this page";
                    return response()
                        ->view('errors.403', ['data' => $data], 403);
                    break;
                    break;

                    // not found
                case '404':
                    $data['title'] = '404';
                    $data['name'] = 'Page not found';;
                    return response()
                        ->view('errors.404', ['data' => $data], 404);
                    break;

                    // internal error
                case '500':

                    $data['title'] = '500';
                    $data['name'] = 'Internal Error';;
                    return response()
                        ->view('errors.404', ['data' => $data], 404);
                    break;

                default:
                    return $this->renderHttpException(Exception);
                    break;
            }
        } else {
            return parent::render($request, $exception);
        }







        return parent::render($request, $exception);
    }
}
