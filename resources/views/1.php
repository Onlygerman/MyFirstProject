
<?php 

//class UserController extends BaseController {

    /**
     * Отобразить профиль соответствующего пользователя.
     */
   /* public function Hello()
    {
        
        return View::make('greeting', array('name' => 'Dasha'));

       
    }

}
Route::get('/', 'UserController@Hello');*/
Route::get('/', function () {
  return View::make('greeting', array('name' => 'Dasha'));
});
 ?>