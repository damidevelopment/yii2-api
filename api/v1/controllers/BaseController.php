<?php

namespace app\api\v1\controllers;

use app\api\controllers\RestController;


/**
 * API v1 BaseController
 *
 * @SWG\Swagger(
 *     basePath="/api/v1",
 *     produces={"application/json"},
 *     consumes={"application/x-www-form-urlencoded", "application/json"},
 *     @SWG\Info(
 *          version="1.0.0",
 *          title="Application name",
 *          description="Also see: <br><a href='/postman_collection.json'>Postman collection</a><br><a href='/postman_environment.json'>Postman environment</a>",
 *          @SWG\Contact(name="DAMI Development")
 *     )
 * )
 *
 * @SWG\Post(path="/errors",
 *     tags={"summary"},
 *     summary="List of all possible error responses",
 *
 *     @SWG\Response(
 *         response=422,
 *         description="Input Validation Error",
 *         @SWG\Schema(ref="#/definitions/ValidationErrorResponse")
 *     ),
 *     @SWG\Response(
 *         response=401,
 *         description="Unauthorized Error",
 *         @SWG\Schema(ref="#/definitions/UnauthorizedErrorResponse")
 *     ),
 *     @SWG\Response(
 *         response=403,
 *         description="Forbidden Error",
 *         @SWG\Schema(ref="#/definitions/ForbiddenErrorResponse")
 *     ),
 *     @SWG\Response(
 *         response=404,
 *         description="Not Found Error",
 *         @SWG\Schema(ref="#/definitions/NotFoundErrorResponse")
 *     ),
 *     @SWG\Response(
 *         response=405,
 *         description="Method Not Allowed Error",
 *         @SWG\Header(
 *             header="Allowed",
 *             description="Allowed methods for endpoint",
 *             type="array",
 *             collectionFormat="csv",
 *             @SWG\Items(type="string", example="POST")
 *         ),
 *         @SWG\Schema(ref="#/definitions/NotAllowedErrorResponse")
 *     ),
 *     @SWG\Response(
 *         response=500,
 *         description="Internal Server Error",
 *         @SWG\Schema(ref="#/definitions/ServerErrorResponse")
 *     ),
 * )
 *
 *
 * GENERAL PARAMETERS
 *
 * @SWG\Parameter(
 *     name="User-Agent",
 *     in="header",
 *     required=true,
 *     type="string",
 *     description="User agent",
 *     format="{appName}/{appVersion}/{buildNumber}/{bundleId} {OS}/{OSversion} ({deviceType};{deviceId})"
 * )
 *
 * @SWG\Parameter(
 *     name="Accept-Language",
 *     in="header",
 *     required=false,
 *     type="string",
 *     default="en-US",
 *     description="Language in which API will sends response. Language code is in ISO 639-1. See https://tools.ietf.org/html/rfc7231#section-5.3.5. If header is not provided, as default language is set english."
 * )
 *
 * @SWG\Parameter(
 *     name="Access-Token",
 *     in="header",
 *     required=true,
 *     type="string",
 *     description="Access token",
 * )
 *
 * @SWG\Parameter(
 *     name="X-Timezone",
 *     in="header",
 *     required=false,
 *     type="string",
 *     description="Timezone, for example: Europe/Prague",
 * )
 *
 * @SWG\Parameter(
 *     name="page",
 *     in="query",
 *     type="integer",
 *     required=false,
 *     description="Page number"
 * )
 */
class BaseController extends RestController
{

    public function actionIndex(){
        return 'JA!';
    }
}