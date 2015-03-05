<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Cd.php";

    session_start();
    if(empty($_SESSION[''])) {
        $_SESSION[''] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('cd_template.php', array('cds' => Cd::getAll()));

    });

    $app->post("/create_car", function() use ($app) {


        $car = new Car($_POST['year'], $_POST['make_model'], $_POST['price'], $_POST['miles'], $_POST['image']);
        $car->save();

        return $app['twig']->render('create_car.php', array('newcar' => $car));

    });

    $app->post("/search_result", function() use ($app) {

        $max_price = $_POST["user_price"];
        $max_miles = $_POST["user_miles"];
        $matching_cars = array();

        foreach ($_SESSION['car_list'] as $a_car) {
            if ($a_car->getPrice() <= $max_price && $a_car->getMiles() <= $max_miles) {
                array_push($matching_cars, $a_car);
            }
        }

        return $app['twig']->render('search_result.php', array('matching_cars' => $matching_cars));

    });

    $app->post("/delete_all", function() use ($app) {

        Car::deleteAll();
        return $app['twig']->render('delete_all.php');

    });


    return $app;
?>
