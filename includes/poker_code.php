<?php

function make_deck()
{
    $deck = [];
    for($rank = 0; $rank < RANK_COUNT; $rank ++) {
        for($suit = 0; $suit < SUIT_COUNT; $suit++) {
            $deck[] = [$rank, $suit];

        }
    }
    shuffle($deck);
    return $deck;
}

function deal(&$deck) {
    $hand = array_slice($deck, 0, HAND_CARDS);
    $deck = array_slice($deck, HAND_CARDS);
    return $hand;

}
function card_name($card)
{
    return IMAGES . RANK_NAMES[$card[RANK_FIELD]] . '_of_' . SUIT_NAMES[$card[SUIT_FIELD]] . '.png';
}

function show_card($card, $id)
{
    echo '    <div class="card">' . "\n";
    echo '      <img class="card_img"';
    echo ' ' . CARD_ID . ' ="' . $id .'" ';
    echo ' src="' . card_name($card) . ' "';
    echo ' ' . CARD_SRC . '="' . card_name($card) . '"' ;
    echo '>' . "\n";
    echo '    </div >' . "\n";

}

function show_hand($hand)
{
    echo '    <div id="hand">' . "\n";
    for($card = 0; $card < HAND_CARDS; $card++) {

        show_card($hand[$card], $card);

    }
    echo '    </div >' . "\n";
}

function show_draw_button()
{
    echo '<div id="info">' . "\n";
    echo '    <span id="draw_button">DRAW</span>' . "\n";
    echo '</div>' . "\n";

}

function show_type($hand)
{
    $type  = hand_type($hand);
    echo '<div id="info">' . "\n";
    echo '    <span id="hand_type">' . $type . '</span>' . "\n";
    echo '    <div id="payoff"';
    echo ' style="color: '. (PAYOFFS[$type] > 0 ? "green" : "red") . ' ">';
    echo 'Payoff: ' . PAYOFFS[$type] . '</div>' . "\n";
    echo '</div>' . "\n";

}

function show_content($hand, $final = FALSE)
{
    echo '<div id="content"' . "\n";
    show_hand($hand);
    if ($final){
        show_type($hand);
    } else {
        show_draw_button();
    }
    echo '</div>' . "\n";
}

function output_form($hand, $deck)
{

echo '<form method="POST" action="draw.php" id="draw_form">' . "\n";
echo '    <input type="hidden" name="' . HAND_KEY . '" value="' . urlencode(json_encode($hand)) . '">' . "\n";
echo '    <input type="hidden" name="' . DECK_KEY . '" value="' . urlencode(json_encode($deck)) . '">' . "\n";
for ($card = 0; $card < HAND_CARDS; $card++)
{
    echo '    <input type="hidden" name="' . CARD_KEY . $card . '" id="' . CARD_KEY . $card . '" value="' . KEEP . '">' . "\n";

}
echo '</form>' . "\n";
}

function draw_cards(&$hand, &$deck)
{
    for($card = 0; $card < HAND_CARDS; $card++){
        $draw = $_POST[CARD_KEY . $card];
        if($draw === DRAW) {
            $hand[$card] = $deck[0];
            $deck = array_slice($deck, 1);
        }
    }
}
