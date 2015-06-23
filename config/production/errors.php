<?php
/**
 * Configure the Error and Exception handlers used by your application.
 *
 * By default errors are displayed using Debugger, when debug is true and logged
 * by Cake\Log\Log when debug is false.
 *
 * In CLI environments exceptions will be printed to stderr with a backtrace.
 * In web environments an HTML page will be displayed for the exception.
 * With debug true, framework errors like Missing Controller will be displayed.
 * When debug is false, framework errors will be coerced into generic HTTP errors.
 *
 * Options:
 *
 * - `errorLevel` - int - The level of errors you are interested in capturing.
 * - `trace` - boolean - Whether or not backtraces should be included in
 *   logged errors/exceptions.
 * - `log` - boolean - Whether or not you want exceptions logged.
 * - `exceptionRenderer` - string - The class responsible for rendering
 *   uncaught exceptions.  If you choose a custom class you should place
 *   the file for that class in src/Error. This class needs to implement a
 *   render method.
 * - `skipLog` - array - List of exceptions to skip for logging. Exceptions that
 *   extend one of the listed exceptions will also be skipped for logging.
 *   E.g.:
 *   `'skipLog' => ['Cake\Network\Exception\NotFoundException', 'Cake\Network\Exception\UnauthorizedException']`
 */
return [
    'Error' => [
        'errorLevel' => E_ALL & ~E_DEPRECATED,
        'exceptionRenderer' => 'Cake\Error\ExceptionRenderer',
        'skipLog' => [],
        'log' => true,
        'trace' => true,
    ],
];