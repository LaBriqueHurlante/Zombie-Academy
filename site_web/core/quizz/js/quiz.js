	var allQuestions = [{
	    question: "Which company first implemented the JavaScript language?",
	    choices: ["Microsoft Corp.", "  Sun Microsystems Corp.", "Netscape Communications Corp."],
	    correctAnswer: 2
	}, {
	    question: "Which of the following browsers was the first to support JavaScript?",
	    choices: ["Microsoft Internet Explorer 2.0 beta", "Netscape Navigator 2.0 beta", "Opera 2.0 beta"],
	    correctAnswer: 1
	}, {
	    question: "The JavaScript international standard is called",
	    choices: ["ECMA-262 Standard", "JavaScript 1.3 Standard", "IEEE-262 Standard"],
	    correctAnswer: 0
	}];

	//

	var questionCount = 0;
	var score = 0;

	// Set header and answer choices dynamically


	function setHeader(questionNum) {
	    var questionHeaderEl = document.getElementById("questionHeader");
	    questionHeaderEl.innerHTML = allQuestions[questionNum].question;
	}

	function setAnswer(idEl, questionNum, choiceNum) {
	    var choiceEl = document.getElementById(idEl);
	    choiceEl.innerHTML = allQuestions[questionNum].choices[choiceNum];
	}

	//

	function showQuestion() {
	    setHeader(questionCount);
	    setAnswer("answ1", questionCount, 0);
	    setAnswer("answ2", questionCount, 1);
	    setAnswer("answ3", questionCount, 2);
	}


	function updateScore() {
	    var rightAnswer = allQuestions[questionCount].correctAnswer;
	    var chosenAnswer = document.getElementById("choice" + (rightAnswer + 1));
	    if (chosenAnswer.checked) {
	        score++;
	    }
	}


	function showScore() {
	    if (questionCount >= allQuestions.length) {
	        document.body.innerHTML = "Your score is " + score;
	    }
	}


	function nextQuestion() {
	    updateScore();
	    questionCount++;
	    showScore();
	    showQuestion();
	}

	// add event listener

	var nextButton = document.getElementById("next");
	nextButton.addEventListener("click", nextQuestion, false);

	// play!
	showQuestion();
