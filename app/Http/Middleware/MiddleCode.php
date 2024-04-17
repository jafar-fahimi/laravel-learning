<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MiddleCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // php artisan make:middleware NameofMiddleware
        // return $next($request);
        // if ($request -> input("code") !== "200") return redirect('error.page');
        if ($request -> query("code") !== "200") { // means $request.query("code")
            return redirect("error.page"); // 127.0.0.1:8000/?code=200
        }
        return $next($request); // after 1st if passed
    }
}

/* Constructor & Class Obj methods
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>
-------------------------------------------------
<?php :: is for accessing class constant values and for static methods & properties.
class Goodbye {
    public static function sayHi(){echo"Hello how are u?";}
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  } }
$goodbye = new Goodbye();
echo Goodbye::LEAVING_MESSAGE;
Goodbye::sayHi();
$goodbye->byebye();
?>
*/