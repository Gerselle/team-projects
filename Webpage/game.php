<<<<<<< HEAD
<?php
$username = $_GET['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>It's gaming, not gambling!</title>
    <link rel="stylesheet" type="text/css" href="game.css">
</head>
<body>
    <!--Lobby Section-->
    <section id="lobby">
        <div class="container">
            <h1>Choose a gamemode and press ready when everyone at the table is in the lobby</h1>
            <div class="lobby-options">
                <label>
                        <button class="btn" id="blackjack-select">Blackjack</button>
                </label>
                <label>
                        <button class="btn" id="poker-select">Texas Hold'em</button>
                </label>
                <button class="btn" id="card-shuffle">Shuffle Cards</button>
                <button class="btn" id="ready-select">Ready</button>
            </div>
            <table class="gamestate" id="lobby-gamestate">
                <tr>
                    <th>Player</th>
                    <th>Game Mode</th>
                    <th>Status</th>
                </tr>
                <tr class="highlighted">
                    <td>Player 1</td>
                    <td>Blackjack</td>
                    <td class="win">Ready</td>
                </tr>
                <tr>
                    <td>Player 2</td>
                    <td>Poker</td>
                    <td class="loss">Not Ready</td>
                </tr>
                <tr>
                    <td>Player 3</td>
                    <td>Blackjack</td>
                    <td class="win">Ready</td>
                </tr>
                <tr>
                    <td>Player 4</td>
                    <td>Blackjack</td>
                    <td class="loss">Not Ready</td>
                </tr>
            </table>
        </div>
    </section>

    <!--Blackjack Section-->
    <section id="Blackjack">	
        <div class="container">
            
            <h1>Welcome to Blackjack!</h1>
            <div class="player">    
                <div class="hand" id="dealer-hand">
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/5_of_diamonds.png"></div>
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/ace_of_clubs.png"></div>
                </div>
                <h1>Dealer Score: <span class="score" id="dealer-score">16</span></h1>
        
                <div class="hand" id="blackjack-hand">
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/4_of_clubs.png"></div>
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/king_of_spades.png"></div>
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/queen_of_hearts.png"></div>
                </div>
                <div>
                    <h3 style="display: inline-block;">Score: <span class="score" id="blackjack-score">24</span></h3>
                    <h3 style="display: inline-block; margin-left: 10px;">Current Bet: <span class="score" id="blackjack-bet">0</span></h3>
                    <h3 style="display: inline-block; margin-left: 10px;">Chips: <span class="score" id="blackjack-chips">900</span></h3>
                </div>
                <div>                   
                    <input class="input-box" type="number" id="blackjack-input" min="10" max="1000" value="50" step="5"></input>
                    <button class="btn" id="blackjack-bet">Bet</button>
                    <button class="btn" id="hit">Hit</button>
                    <button class="btn" id="stand">Stand</button>
                    <button class="btn" id="double">Double</button>
                </div>
            </div>

            <table class="gamestate" id="blackjack-gamestate">
                <tr>
                    <th>Player</th>
                    <th>Bet</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>James</td>
                    <td>$25</td>
                    <td class="win">19</td>
                </tr>
                <tr class="highlighted">
                    <td>Gerald</td>
                    <td>$100</td>
                    <td class="loss">Busted!</td>
                </tr>
                <tr>
                    <td>Lloyd</td>
                    <td>$75</td>
                    <td class="win">Blackjack!</td>
                </tr>
                <tr>
                    <td>Brett</td>
                    <td>$50</td>
                    <td class="loss">Busted!</td>
                </tr>
            </table>
        </div>
    </section>

    <!--Poker Section-->
    <section id="Texas Hold'em" style="display: none;">
        <div class="container">
            <h1>Welcome to Texas Hold'em!</h1>
            <div class="player">   
                <div class="hand" id="community">
                    <div class="card"><img id="comm1" src="http://localhost/Htmls/PNG-cards-1.3/2_of_clubs.png"></div>
                    <div class="card"><img id="comm2" src="http://localhost/Htmls/PNG-cards-1.3/8_of_diamonds.png"></div>
                    <div class="card"><img id="comm3" src="http://localhost/Htmls/PNG-cards-1.3/6_of_hearts.png"></div>
                    <div class="card"><img id="turn" src="http://localhost/Htmls/PNG-cards-1.3/back_of_card.png"></div>
                    <div class="card"><img id="river" src="http://localhost/Htmls/PNG-cards-1.3/back_of_card.png"></div>
                </div> 
                <h1>Community Cards</h1>
                <div class="hand" id="poker-hand">
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/4_of_spades.png"></div>
                    <div class="card"><img src="http://localhost/Htmls/PNG-cards-1.3/king_of_clubs.png"></div>
                </div> 
                <h1>Your Hand</h1>
                <div>
                    <h3 style="display: inline-block;">Pot: <span class="score" id="poker-pot">?</span></h3>
                    <h3 style="display: inline-block; margin-left: 10px;">Chips: <span class="score" id="poker-chips">1000</span></h3>
                </div>

                <div>
                    <input class="input-box" type="number" id="poker-input" min="10" max="1000" value="50" step="5"></input>
                    <button class="btn" id="poker-bet">Bet</button>
                    <button class="btn" id="check">Check</button>
                    <button class="btn" id="call">Call</button>
                    <button class="btn" id="raise">Raise</button>
                    <button class="btn" id="fold">Fold</button>
                </div>
            </div>
            <table class="gamestate" id="poker-gamestate">
                <tr>
                    <th>Player</th>
                    <th>Bet</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>James</td>
                    <td>$25</td>
                    <td class="win">Called</td>
                </tr>
                <tr>
                    <td>Gerald</td>
                    <td>$100</td>
                    <td class="loss">Folded</td>
                </tr>
                <tr>
                    <td>Lloyd</td>
                    <td>$75</td>
                    <td class="win">Raised by $50</td>
                </tr>
                <tr>
                    <td>Brett</td>
                    <td>$50</td>
                    <td class="loss">Folded!</td>
                </tr>
            </table>
        </div>
    </section>
    <!-- Hidden variables section, shouldn't be visible in viewport-->
    <section hidden>
        <input id="username" value="<?php echo $username ?>">
    </section>
</body>
<script src="http://localhost/Htmls/game.js"></script>
</html>
=======
>>>>>>> 49c09af6a37ce069280cfb152f34b8b797507598
