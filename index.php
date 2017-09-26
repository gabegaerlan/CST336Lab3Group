<html>
    <head>
    </head>
    
    
     <body>
        <?php
        
        // Generate a deck of cards
        
        // [0,1,2, .., 51]
        // Map each number to a card
        
        // Function that generates a "hand" of cards for one person(No Duplicate)
        function cardMap($num)
        {
            $cardValue = ($num % 13) + 1;
            $cardSuit = floor($num / 13);
            $suitStr = "";
            
            switch($cardSuit)
            {
                case 0:
                    $suitStr = "Clubs";
                    break;
                case 1:
                    $suitStr = "Diamonds";
                    break;
                case 2:
                    $suitStr = "Hearts";
                    break;
                case 3:
                    $suitStr = "Spades";
                    break;
                    
                    
            }
        }
        
        
        function generateDeck()
        {
        $cards = array();
        
            for($i =0;$i<52;$i++)
            {
                array_push($cards, $i);
            }
            
            shuffle($cards);
            return $cards;
        }
        // 52/4 ==> gives us a suit 
        generateDeck();
        
        function printDeck($deck)
        {
            for($i = 0;$i < count($deck);$i++)
            {
                $cardNum = $deck[$i];
                $card = cardMap($cardNum);
                echo "imgUrl: ".$card["imgUrl"]."<br>";
            }
        }
        
        function generateHand($deck)
        {
            $hand = array();
            for($i = 0; $i < 3; $i++)
            {
                $cardNum = array_pop($deck);
                $card = cardMap($cardNum);
                array_push($hand, $card);
            }
            return $hand;
        }
        
        
        $deck = generateDeck();
        printDeck($deck);
        
        
        $card = array(
            'num' ==> $cardValue,
            'suit' ==> $cardSuit,
            $imgUrl = "/cards/".$card["suitStr"]."/".$card["value"].".png";
            );
            return $card;

            
          
          $person = array(
              "name" => "user1",
              "imgUrl" => "/cards/profpics/user1.png",
              "cards" => array(
                  array(
                      "suit" => "hearts",
                      "value" => "4"
                      ),
                  array(
                      "suit" => "clubs",
                      "value" => "10"
                      )
                  )
            );
            
            
            function calculateHandValue($cards)
            {
                $sum = 0;
                
                foreach($cards as $cards)
                {
                    $sum += $card["value"];
                    
                }

            }
            
            
            
            function displayPerson($person)
            {
            // show profile pic
            echo "<img src=' ".$person["profpics"]." '/>";
            
            //Iterate through $persons "cards"
            for($i = 0; $i< count($person["cards"]);$i++)
                {
                $card = $person["cards"][$i];
                
            // construct the imgUrl for each card
                $imgUrl = "/cards/".$card["suit"]."/".$card["value"].".png";
                
            // translate to HTML
                echo "<img src='".$imgUrl."'/>";
                }
                
                echo calculateHandValue($person["cards"]);
            }
            
            

            displayPerson($person);
           

            
            
            

            
            echo "name: " .$person["name"]. "<br>";
            echo "imgUrl: " .$person["imgUrl"]. "<br>";
            
           ?>
    </body>
</html>