<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu\Menu;


/**
 * @OA\Info(
 *    title="APIs For Restaurant Server by AslanAsilon",
 *    version="1.0.0",
 *    description = "API documentation for the My Restaurant App such as Aresto, Savory, and Tailfood"
 * ),
 * 
 *  * @OA\Get(
 *      path="/api/menu",
 *      operationId="getMenusList",
 *      tags={"Menus"},
 *      summary="Get list of menus",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent()
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthorized",
 *      ),
 * )
**/

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return $menus;
    }
}
