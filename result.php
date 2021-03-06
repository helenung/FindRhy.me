<?php
/** Jin-li Chang
 *
 */

if(isset($_GET["lat"]) & isset($_GET["lon"])){
    $LAT = $_GET["lat"];

    $LON = $_GET["lon"];

    $dist = isset($_GET["dist"]) ? intval($_GET["dist"]) : 10;

    $db = new PDO("mysql:dbname=cederw_findrhyme;host=localhost","cederw_luke","nooba");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT *,

					    SQRT(POW(69.1 * (LAT - $LAT), 2) +

					    POW(69.1 * ($LON - LON) * COS(LAT / 57.3), 2)) * 1609 AS distance

					FROM main HAVING distance < $dist ORDER BY distance;";

    $statement=$db->prepare($query);
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    $json=json_encode($results);
    echo($json);
    //print $result;
}