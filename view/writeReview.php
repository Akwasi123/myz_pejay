<?php

include_once (dirname(__FILE__)) . '/../settings/core.php';


$get_user = $_SESSION['user_id'];
$get_product = $_GET['product_id'];
$p_date = date("Y/m/d");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../actions/add_review.php" method="GET" id="form">

        <div class="form-control">
            <input type="hidden" name="user_id" value="<?php echo $get_user ?>">
            <input type="hidden" name="product_id" value="<?php echo $get_product ?>">
            <input type="hidden" name="post_date" value="<?php echo $p_date ?>">
            <label for="">Review</label>
            <textarea id="desc" name="desc" cols="50" placeholder="Review Message" rows="10" style="resize: none"></textarea>
            <br>
        </div>

        <div>
            <button type="submit" id="add" name="submitReview">Submit Review</button>
        </div>
        <br>

    </form>
</body>

</html>