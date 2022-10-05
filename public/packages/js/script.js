var symbols = ['1', '1', '2', '2', '3', '3', '4', '4'],
		opened = [],
		match = 0,
		moves = 0,
		$deck = $('.deck'),
		$scorePanel = $('#score-panel'),
		$moveNum = $scorePanel.find('.moves'),
		$ratingStars = $scorePanel.find('i'),
		$restart = $scorePanel.find('.restart'),
		delay = 800,
		gameCardsQTY = symbols.length / 2,
		rank3stars = gameCardsQTY + 2,
		rank2stars = gameCardsQTY + 6,
		rank1stars = gameCardsQTY + 10;

// Shuffle function From http://stackoverflow.com/a/2450976
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;
	
  while (0 !== currentIndex) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

// Initial Game
function initGame() {
  //StatusBar.hide();
  var cards = shuffle(symbols);
  $deck.empty();
  match = 0;
  moves = 0;
  $moveNum.html(moves);
  $ratingStars.removeClass('fa-times-circle').addClass('fa-bus');
	for (var i = 0; i < (cards.length+1); i++) {
		if(i==4){
			$deck.append($('<li class="card-logo"><img src="/packages/images/8.jpg"  style="width:100%;" /></li>'));
		}else{
			
			if(cards.length==(i)){
				$deck.append($('<li class="card"><img src="/packages/images/memory/' + cards[4] + '.jpg"  witdh="200px" height="200px" /></li>'));
			}else{
				$deck.append($('<li class="card"><img src="/packages/images/memory/' + cards[i] + '.jpg"  witdh="200px" height="200px" /></li>'));
			}
			
		}
		
	}
	//for (var i = 0; i < (cards.length+1); i++) {
	//		if(cards.length==(i)){
	//			$deck.append($('<li class="card"><img src="/packages/images/memory/' + cards[4] + '.jpg"  witdh="200px" height="200px" /></li>'));
	//		}else{
	//			$deck.append($('<li class="card"><img src="/packages/images/memory/' + cards[i] + '.jpg"  witdh="200px" height="200px" /></li>'));
	//		}
	//}
}

var rating = 3;
var score=0;
// Set Rating and final Score
function setRating(moves) {
	
	if (moves > rank3stars && moves < rank2stars) {
		$ratingStars.eq(2).removeClass('fa-hamburger').addClass('fa-times-circle');
		rating = 2;
	} else if (moves > rank2stars && moves < rank1stars) {
		$ratingStars.eq(1).removeClass('fa-hamburger').addClass('fa-times-circle');
		rating = 1;
	} else if (moves > rank1stars) {
		$ratingStars.eq(0).removeClass('fa-hamburger').addClass('fa-times-circle');
		rating = 0;
	}	
	return { score: rating };
};

// End Game
var image = 'images/prize_1.jpg';
function endGame(moves, score) {
	
	var image = 'images/prize_1.jpg';

	if(score==2){
		 image = 'images/prize_2.jpg';
	}
	if(score==3){
		 image = 'images/prize_3.jpg';
	}
	var data = $('.validate-form').serializeArray();


	$.post( "/formpost", data)
  	.done(function( data ) {
			   	
		swal.fire({
			allowEscapeKey: false,
			allowOutsideClick: false,
			html: '	<div class="row swallrow"><div class="col-md-12"><h2 style="font-size: 5em !important;text-align: center;font-weight: bold;color:#000;">GRÀCIES PER PARTICIPAR!</h2><img class="img-fluid" src="packages/images/Ralla-09.png" style="margin-bottom: 50px;" /></div></div>',
			confirmButtonColor: '#FFCE33',
			confirmButtonText: 'TORNAR',
			background: '#fff',
			
		}).then(function(isConfirm) {
			if (isConfirm) {
					window.location.reload();
			}
		});
	 },"json");

}

// Restart Game
$restart.on('click', function() {
  swal.fire({
    allowEscapeKey: false,
    allowOutsideClick: false,
    title: '¿Estás segur?',
    text: "El process del joc de perderá",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#9BCB3C',
    cancelButtonColor: '#EE0E51',
    confirmButtonText: 'Si, Reiniciar el joc',
	cancelButtonText: 'Cancel·lar'
  }).then(function(isConfirm) {
    if (isConfirm) {
    	initGame();
    }
  });
});

// Card flip
$deck.on('click', '.card:not(".match, .open")', function() {
	if($('.show').length > 1) { return true; }
	
	var $this = $(this),
	card = $this.context.innerHTML;
  	$this.addClass('open show');
	opened.push(card);

	// Compare with opened card
  if (opened.length > 1) {
    if (card === opened[0]) {
      $deck.find('.open').addClass('match animated infinite rubberBand');
      setTimeout(function() {
        $deck.find('.match').removeClass('open show animated infinite rubberBand');
      }, delay);
      match++;
    } else {
      $deck.find('.open').addClass('notmatch animated infinite wobble');
			setTimeout(function() {
				$deck.find('.open').removeClass('animated infinite wobble');
			}, delay / 1.5);
      setTimeout(function() {
        $deck.find('.open').removeClass('open show notmatch animated infinite wobble');
      }, delay);
    }
    opened = [];
		moves++;
		setRating(moves);
		$moveNum.html(moves);
  }
	
	// End Game if match all cards
	if (gameCardsQTY === match) {
		console.log('ey');
		setRating(moves);
		var score = setRating(moves).score;
		setTimeout(function() {
			endGame(moves, score);
			console.log('fin');
			swal.fire({
				allowEscapeKey: false,
				allowOutsideClick: false,
				html: '	<div class="row swallrow">' +
				'<div class="col-md-12"><h2 style="font-size: 5em !important;text-align: center;font-weight: bold;color:#000;">GRÀCIES PER PARTICIPAR!</h2>'+
				'<img class="img-fluid" src="packages/images/Ralla-09.png" style="margin-bottom: 50px;"/></div>'+
				'</div>'+
				'<div style="margin-top:2rem;"><a class="btn-inscripcions-infantils" href="https://www.google.es">INSCRIPCIONS INFANTILS</a><a class="btn-inscripcions" href="https://www.google.es">INSCRIPCIONS 10K</a><a class="btn-inscripcions" href="https://www.google.es">INSCRIPCIONS 5K</a></div>',
				confirmButtonColor: '#FF6633',
				confirmButtonText: 'TORNAR A JUGAR',
				background: '#fff',
				
			}).then(function(isConfirm) {
				if (isConfirm) {
						window.location.reload();
				}
			});
		}, 500);
		
  }
});

initGame();