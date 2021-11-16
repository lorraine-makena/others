<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagination</title>
    <style>
        li {
            color: red;
        }
    </style>

</head>

<body>

    <form action="" method="get">

        <li>a</li>
        <li>b</li>
        <li>c</li>
        <li>d</li>



    </form>


    <?php
    include("pagination.php");
    $result_per_page = 10;
    //total number  stored per page
    $query = "SELECT * FROM alphabet";
    $result = mysqli_query($conn, $query);
    $number_of_result = mysqli_num_rows($result);
    $number_of_page = ceil("$result_per_page");
    //determining the number of results per page
    if (isset($_GET["page"])) {
        $page = 1;
    } else {
        $page = $_GET["page"];
    }
    //determine sql limit starting num of results on the display pages
    $page_fisrt_result = ($_page1) * $result_per_page;
    $query = "SELECT FROM alphabet LIMIT" . "$page_fisrt_result" . "$result_per_page";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "$row[id]", "$row[alphas]";
    }
    for ($page = 1; $page <= $number_of_page; $page++)
        echo "<a href=name.php !page=.$page>.$page</a>";
    ?>




</body>

</html>