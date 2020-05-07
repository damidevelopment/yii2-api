<?php

namespace app\api\v1\controllers;

use app\api\controllers\RestController;


/**
 * API v1 BaseController
 *
 * @OA\Info(
 *     version="1.0.0",
 *     title="Application name",
 *     description="Also see: <br><a href='/postman_collection.json'>Postman collection</a><br><a href='/postman_environment.json'>Postman environment</a>",
 *     @OA\Contact(name="DAMI Development")
 * )
 *
 * @OA\Server(
 *    url="/api/v1"
 * )
 *
 * @OA\Post(path="/errors",
 *     tags={"summary"},
 *     summary="List of all possible error responses",
 *
 *     @OA\Response(
 *         response=422,
 *         description="Input Validation Error",
 *         @OA\Schema(ref="#/definitions/ValidationErrorResponse")
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized Error",
 *         @OA\Schema(ref="#/definitions/UnauthorizedErrorResponse")
 *     ),
 *     @OA\Response(
 *         response=403,
 *         description="Forbidden Error",
 *         @OA\Schema(ref="#/definitions/ForbiddenErrorResponse")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Not Found Error",
 *         @OA\Schema(ref="#/definitions/NotFoundErrorResponse")
 *     ),
 *     @OA\Response(
 *         response=405,
 *         description="Method Not Allowed Error",
 *         @OA\Header(
 *             header="Allowed",
 *             description="Allowed methods for endpoint",
 *             @OA\Schema(
 *                 type="array",
 *                 collectionFormat="csv",
 *                 @OA\Items(type="string",example="POST")
 *             )
 *         ),
 *         @OA\Schema(ref="#/definitions/NotAllowedErrorResponse")
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal Server Error",
 *         @OA\Schema(ref="#/definitions/ServerErrorResponse")
 *     ),
 * )
 *
 *
 * GENERAL PARAMETERS
 *
 * @OA\Parameter(
 *     name="User-Agent",
 *     in="header",
 *     required=true,
 *     description="User agent",
 *     @OA\Schema(type="string", format="{appName}/{appVersion}/{buildNumber}/{bundleId} {OS}/{OSversion} ({deviceType};{deviceId})")
 * )
 *
 * @OA\Parameter(
 *     name="Accept-Language",
 *     in="header",
 *     required=false,
 *     description="Language in which API will sends response. Language code is in ISO 639-1. See https://tools.ietf.org/html/rfc7231#section-5.3.5. If header is not provided, as default language is set english.",
 *     @OA\Schema(type="string", default="en-US")
 * )
 *
 * @OA\Parameter(
 *     name="Access-Token",
 *     in="header",
 *     required=true,
 *     description="Access token",
 *     @OA\Schema(type="string")
 * )
 *
 * @OA\Parameter(
 *     name="X-Timezone",
 *     in="header",
 *     required=false,
 *     description="Timezone, for example: Europe/Prague",
 *     @OA\Schema(type="string")
 * )
 *
 * @OA\Parameter(
 *     name="page",
 *     in="query",
 *     required=false,
 *     description="Page number",
 *     @OA\Schema(type="integer")
 * )
 */
class BaseController extends RestController
{

    public function actionIndex(){
        return 'JA!';
    }
}