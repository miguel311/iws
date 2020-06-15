<?php

/** Gestiona las excepciones generadas por el sistema */
namespace App\Exceptions;

//use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

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
     * @param  \Throwable  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \App\Roles\Exceptions\PermissionDeniedException) {
            /** Exception catch when deny access by permissions */
            $msg = 'No dispone de permisos para acceder a esta funcionalidad';

            if ($request->ajax()) {
                return response()->json(['result' => false, 'message' => $msg], 403);
            }

            $request->session()->flash('message', ['type' => 'deny', 'msg' => $msg]);
            return redirect()->back();
        }

        if ($exception instanceof \App\Roles\Exceptions\LevelDeniedException) {
            /** Exception catch when deny access by levels */
            $msg = 'Su nivel de acceso no le permite acceder a esta funcionalidad';

            if ($request->ajax()) {
                return response()->json(['result' => false, 'message' => $msg], 403);
            }

            $request->session()->flash('message', ['type' => 'deny', 'msg' => $msg]);
            return redirect()->back();
        }

        if ($exception instanceof \App\Roles\Exceptions\RoleDeniedException) {
            /** Exception catch when deny access by roles */
            $msg = 'El rol asignado no le permite acceder a esta funcionalidad';

            if ($request->ajax()) {
                return response()->json(['result' => false, 'message' => $msg], 403);
            }

            $request->session()->flash('message', ['type' => 'deny', 'msg' => $msg]);
            return redirect()->back();
        }
        return parent::render($request, $exception);
    }
}
