document.addEventListener('DOMContentLoaded', () => {

    // set card pictures in array
    const cardArray = [
        {
            name: 'horse',
            img: 'images/horse.png'
        },
        {
            name: 'horse',
            img: 'images/horse.png'
        },
        {
            name: 'pig',
            img: 'images/pig.png'
        },
        {
            name: 'pig',
            img: 'images/pig.png'
        },
        {
            name: 'goat',
            img: 'images/goat.png'
        },
        {
            name: 'goat',
            img: 'images/goat.png'
        },
        {
            name: 'cow',
            img: 'images/cow.png'
        },
        {
            name: 'cow',
            img: 'images/cow.png'
        },
        {
            name: 'chick',
            img: 'images/chick.png'
        },
        {
            name: 'chick',
            img: 'images/chick.png'
        },
        {
            name: 'cat',
            img: 'images/cat.png'
        },
        {
            name: 'cat',
            img: 'images/cat.png'
        },
        {
            name: 'dog',
            img: 'images/dog.png'
        },
        {
            name: 'dog',
            img: 'images/dog.png'
        },
        {
            name: 'sheep',
            img: 'images/sheep.png'
        },
        {
            name: 'sheep',
            img: 'images/sheep.png'
        }
    ]

    // allow cards to reset to new position
    cardArray.sort(() => 0.5 - Math.random())

    // create the game board
    const grid = document.querySelector('.grid')
    var cardsChosen = []
    var cardsChosenId = []
    var cardsWon = []
    const resultDisplay = document.querySelector('#result')

    function createBoard() {
        for (let i = 0; i < cardArray.length; i++) {
            var card = document.createElement('img')
            card.setAttribute('src', 'images/barn.png')
            card.setAttribute('data-id', i)
            card.addEventListener('click', flipCard)
            grid.appendChild(card)
        }
    }

    //check for matches
    function checkForMatch() {
        var cards = document.querySelectorAll('img')
        const optionOneId = cardsChosenId[0]
        const optionTwoId = cardsChosenId[1]

        if (cardsChosen[0] === cardsChosen[1]) {
            cards[optionOneId].setAttribute('src', 'images/white.png')
            cards[optionTwoId].setAttribute('src', 'images/white.png')
            cardsWon.push(cardsChosen)
        } else {
            cards[optionOneId].setAttribute('src', 'images/barn.png')
            cards[optionTwoId].setAttribute('src', 'images/barn.png')
        }
        //clear the arrayas to choose again
        cardsChosen = []
        cardsChosenId = []
        resultDisplay.textContent = cardsWon.length

        if (cardsWon.length === cardArray.length/2) {
            resultDisplay.textContent = 'Congradulations!! You Win!! All Matches Found!!'
        }
    }

    //flip the card over
    function flipCard() {
        var cardId = this.getAttribute('data-id')
        cardsChosen.push(cardArray[cardId].name)
        cardsChosenId.push(cardId)
        this.setAttribute('src', cardArray[cardId].img)

        if (cardsChosen.length === 2) {
            setTimeout(checkForMatch, 500)
        }
    }


    createBoard()
})