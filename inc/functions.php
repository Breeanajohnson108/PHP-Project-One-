<?php
/**
 * @author Breeana Johnson
 * @name RANDOM QUOTE GENERATOR
 */

/**
 * @array quotes
 */
/**
 * @method getRandomQuote
 * @param N/A
 */
function getRandomQuote(){
$quotes = array(
        [
            'quotes' => 'Don\'t cry because it\'s over, smile because it happened.',
            'source' => 'Dr. Seuss',
            'citation' => 'https://www.goodreads.com/quotes',
            'year' => '2019',
            'tag' => 'Sad Quotes | business'
        ],
        [
            'quotes' => 'Be yourself; everyone else is already taken.',
            'source' => 'Oscar Wilde',
            'citation' => 'https://www.goodreads.com/quotes',
            'year' => '2019',
            'tag' => 'Sad Quotes'
        ],
        [
            'quotes' => 'Two things are infinite: the universe and human stupidity; and I\'m not sure about the universe',
            'source' => 'Albert Einstein',
            'citation' => 'https://www.goodreads.com/quotes',
            'year' => '2019',
            'tag' => 'Happy Quotes'
        ],
        [
            'quotes' => 'So many books, so little time.',
            'source' => 'Frank Zappa',
            'citation' => 'https://www.goodreads.com/quotes',
            'year' => '2018',
            'tag' => 'Sad Quotes'
        ],
        [
            'quotes' => 'A room without books is like a body without a soul.',
            'source' => 'Marcus Tullius Cicero',
            'citation' => 'https://www.goodreads.com/quotes',
            'year' => '1998',
            'tag' => 'Quotes'
        ]
    );
    //get random number for array
    $random_num = rand(0,count($quotes)-1);
    // use obtained number to query array
    return $quotes[$random_num];
}

/**
 * @method getRandomColor
 * @param N/A
 * use this function to generate random color
 */
function getRandomColor(){
    $color = ["#023E73","#8FADBF","#024059","#0578A6","#011F26"];
    return  $color[rand(0,count($color)-1)];
}

/**
 * @method printQuote
 * @param N/A
 */
function printQuote(){
    $quote = getRandomQuote();
    $quote['background'] = getRandomColor();
    $quote['tag'] = generateTag($quote['tag']);
    if(!empty($quote)){
        //quote obtained, display to page
        return $quote;
    }else{
        // unable to get random qoute, through  error
        return "unable to process request" ;
    }
}

/**
 * @method generateTag
 * @param (string) tag
 */
function generateTag($tag_){
    $tags_holder;
    $tags = explode("|",$tag_);
    if(is_array($tags)){
        foreach($tags as $tag){
            $tags_holder .= "<span class='tag' style='background-color:".getRandomColor()."'>".$tag."</span>";
        }
    }
    return $tags_holder;
}
?>