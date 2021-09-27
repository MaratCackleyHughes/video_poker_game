<?php

const CARD_CLASS = 'card_img';
const CARD_ID = 'data-id';
const CARD_SRC = 'data-src';

const HAND_KEY = 'hand';
const DECK_KEY = 'deck';
const KEEP = 'keep';
const DRAW = 'draw';
const CARD_KEY = 'card';

const IMAGES = 'images/';
const INCLUDES = 'includes/';
const CARD_BACK = IMAGES . 'back.png';
const CARD_BLANK = IMAGES . 'blank.png';

const RANK_FIELD = 0;
const SUIT_FIELD = 1;
const RANK_COUNT = 13;
const SUIT_COUNT = 4;

//css
const CARD_IMAGE_PERCENT = '95%';
const HAND_PADDING = "8px";

const RANK_NAMES = [
    'ace',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    'jack',
    'queen',
    'king'

    ];

const SUIT_NAMES = [
    'clubs',
    'diamonds',
    'hearts',
    'spades'

    ];

const HAND_CARDS = 5;

const NOTHING = "No Pair";
const PAIR_JACKS = "One Pair,Jacks or Better";
const LOW_PAIR = "One Pair, Less Than Jacks";
const TWO_PAIR  = "Two Pair";
const TRIPS = "Three of a Kind";
const STRAIGHT = "Straight";
const FLUSH = "Flush";
const BOAT = "Full House";
const QUADS = "Four of a Kind";
const STRAIGHT_FLUSH = "Straight Flush";
const ROYAL_FLUSH = "Royal Flush";

const PAYOFFS = [
    NOTHING => 0,
    LOW_PAIR => 0,
    PAIR_JACKS => 1,
    TWO_PAIR  => 2,
    TRIPS => 3,
    STRAIGHT => 4,
    FLUSH => 6,
    BOAT => 9,
    QUADS => 25,
    STRAIGHT_FLUSH => 50,
    ROYAL_FLUSH => 800
];
