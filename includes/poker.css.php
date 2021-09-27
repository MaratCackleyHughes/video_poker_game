<?php
header('Content-Type: text/css');
require_once ( 'poker_constants.php');
?>

.card_img {
    max-width: <?php echo CARD_IMAGE_PERCENT; ?>;
    max-height:<?php echo CARD_IMAGE_PERCENT; ?>;
}

.card {
    text-align: center;
    display: inline-block;
    max-width: <?php  echo 100/ HAND_CARDS; ?>%;
    max-height: 100%;
}

#hand {
    font-size: 0;
    padding: <?php echo HAND_PADDING; ?>;
}
/* so what is the deal here, why did Marc not create a style for this ID. Update later he did, see below */
#content {

}

#info {
    text-align: center;
    padding: <?php echo HAND_PADDING; ?>;
}

#draw_button {
    background-color: red;
    color: white;
    font-family: "Arial Black", sans-serif;
    padding: 5px 10px;
    font-size: 3em;
    border: black 2px solid;
    border-radius:8px ;
    cursor: pointer;
}

#hand_type {
    color: black;
    font-family: "Arial Black", sans-serif;
    padding: 5px 10px;
    font-size: 3em;
    max-width: 40%

}

#payoff {
    color: black;
    font-family: "Arial Black", sans-serif;
    padding: 5px 10px;
    font-size: 3em;
    max-width: 40% ;
    margin: auto;
}

#content {
    visibility: hidden;
    font-size: 0;
    padding: <?php echo HAND_PADDING; ?>;
}