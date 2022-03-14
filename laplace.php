<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </script>
    <title>Laplace Quiz</title>
    <style>
        h1 {
            font-family: 'Gabriola', serif;
            text-align: center;
        }

        ul {
            list-style: none;
        }

        li {
            font-family: 'Cambria', serif;
            font-size: 1em;
        }

        input[type=radio] {
            border: 0px;
            width: 20px;
            height: 2em;
        }

        p {
            font-family: 'Gabriola', serif;
        }

        /* Quiz Classes */
        .quizContainer {
            background-color: #eae0e7;
            /* background: linear-gradient(90deg,rgb(238, 163, 234), rgb(65, 17, 53)); */
            border-radius: 3rem;
            width: 200px;
            height: 400px;

            margin: auto;
            padding-top: 5px;
            box-sizing: border-box;
            box-shadow: 10px 10px 5px #888;
        }

        .quizcontainer #quiz1 {
            /* text-shadow: 1px 1px 2px orange; */
            font-family: "Georgia", Arial, sans-serif;
        }

        .nextButton {
            box-shadow: 3px 3px 5px #888;
            border-radius: 6px;
            /* width: 150px;*/
            height: 60px;
            text-align: center;
            background: rgb(127, 23, 131);
            /*clear: both;*/
            color: white;
            font-family: 'Gabriola', serif;
            position: relative;
            margin: auto;
            font-size: 45px;
            font-weight: bold;
            padding-top: 5px;
            float: right;
            right: 18%;
        }

        .endButton {
            box-shadow: 3px 3px 5px #888;
            border-radius: 6px;
            /* width: 150px;*/
            height: 50px;
            text-align: center;
            background: rgb(127, 23, 131);
            /*clear: both;*/
            color: white;
            font-family: 'Gabriola', serif;
            position: relative;
            margin-left: 60px;
            font-size: 30px;
            font-weight: bold;
            padding-top: 10px;
            padding-left: 10px;

        }

        .preButton {
            box-shadow: 3px 3px 5px #888;
            border-radius: 6px;
            /*width: 150px;*/
            height: 60px;
            text-align: center;
            background: rgb(127, 23, 131);
            /*clear: both;*/
            color: white;
            font-family: 'Gabriola', serif;
            position: relative;
            margin: auto;
            font-size: 45px;
            font-weight: bold;
            padding-top: 5px;
            float: left;
            left: 18%;
        }

        .clearchoice {
            box-shadow: 3px 3px 5px #888;
            border-radius: 6px;
            /*width: 150px;*/
            height: 40px;
            text-align: center;
            background: rgb(127, 23, 131);
            /*clear: both;*/
            color: white;
            font-family: 'Gabriola', serif;
            position: relative;
            margin: auto;
            font-size: 25px;
            font-weight: bold;
            padding-top: 5px;
            float: left;
            top: 50px;
            left: 8%;
        }


        .question {
            font-family: 'Century', serif;
            font-size: 3rem;
            font-weight: bold;
            width: 100%;
            height: auto;
            margin: auto;
            border-radius: 6px;
            /* background-color: #f3dc45; */
            text-align: center;
        }

        .quizMessage {
            background-color: peachpuff;
            border-radius: 6px;
            width: 20%;
            margin: auto;
            text-align: center;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Gabriola', serif;
            color: red;
            position: absolute;
            top: 80%;
            left: 40%;
        }

        .choiceList {
            font-family: 'Arial', serif;
            color: black;
            font-size: 2.5rem;
            font-weight: bold;
            /* text-align: center; */
        }

        .result {
            width: 40%;
            height: auto;
            border-radius: 6px;
            background-color: rgb(12, 11, 9);
            margin: auto;
            color: rgb(224, 226, 224);
            text-align: center;
            font-size: 25px;
            font-family: 'Verdana', serif;
            font-weight: bold;
            position: absolute;
            top: 320px;
            left: 30%;
        }

        .btn {
            box-shadow: 3px 3px 5px #888;
            border-radius: 6px;
            /* width: 150px;*/
            height: 60px;
            text-align: center;
            background: rgb(127, 23, 131);
            /*clear: both;*/
            color: white;
            font-family: 'Gabriola', serif;
            font-size: 45px;
            font-weight: bold;
        }

        .btnmain {
            margin-left: 37rem;
            padding-bottom: 3rem;
        }

        /* End of Quiz Classes */
        @media screen and (max-width: 720px) {
            .quizContainer {
                background-color: #eae0e7;
                /* background: linear-gradient(90deg,rgb(238, 163, 234), rgb(65, 17, 53)); */
                border-radius: 3rem;
                width: 100%;
                height: 100%;

                margin: auto;
                padding-top: 5px;
                box-sizing: border-box;
                box-shadow: 10px 10px 5px #888;
            }

            .choiceList {
                font-family: 'Arial', serif;
                color: black;
                font-size: 2rem;
                font-weight: bold;
                /* text-align: center; */
            }


        }
    </style>

<body style="background: linear-gradient(45deg, rgb(28, 46, 21),rgb(199, 223, 95)); ">

    <div>
        <div class="quizContainer container-fluid well well-lg" style="width:100rem;height:72rem;">
            <div id="quiz1" class="text-center">

            </div>
            <div style="background: linear-gradient(90deg,rgb(238, 163, 234), rgb(65, 17, 53));font-size:40px; height:145px;border-radius:3rem;" class=" container-fluid well well-lg">
                <h4 style="color:white;float:right; " align:center;><span id="iTimeShow">Time Left:
                    </span><br /><span id='timer' style="font-size:40px;"></span></h4>

                <!-- <a href="maths.php" style=" position:absolute;right:65%;bottom:85%;font-size=40px;">End Test</a> -->
                <!-- <a style=" position:absolute;right:65%;bottom:85% " class="btn btn-primary" href="maths.php" role="button">Exit</a> -->


                <video style="position:absolute;right:65%;bottom:76%" id="video" width="175px" height="205px" autoplay>
                </video>

            </div>
            <br><br>
            <div class="question"></div>
            <br><br>
            <ul class="choiceList"></ul>
            <div class="quizMessage"></div>
            <div class="result"></div>
            <br><br><br><br>
            <div>
                <button class="preButton" onclick="Review()">Previous Question
                    <button class="nextButton">Next Question</button>
            </div>
            <br><br><br><br><br>
            <button class="btnmain"><a href="maths.php" class="btn">Back to Main</a></button>
            <div class="start_cam">

                <a onClick="start()">

                </a>
            </div>
        </div>
        <br><br><br><br>
        <h1 id="analysis" style=" font-size: 4rem;
            margin-top: 4rem;"></h1>
        <p id="analysis1"> </p>
        <canvas id="myChart"></canvas>
    </div>
</body>
<script>
    var stop = function() {
        var stream = video.srcObject;
        var tracks = stream.getTracks();
        for (var i = 0; i < tracks.length; i++) {
            var track = tracks[i];
            track.stop();
        }
        video.srcObject = null;
    }
    var start = function() {
        var video = document.getElementById('video'),
            vendorUrl = window.URL || window.webkitURL;
        if (navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then(function(stream) {
                    video.srcObject = stream;
                }).catch(function(error) {
                    console.log("Something went wrong!");
                });
        }
    }
    $(function() {
        start();
    });
    var questions = [{
        question: "1. Laplace transform of a unit impulse function is",
        choices: ["s", "0", "e-s;",
            "1"
        ],
        correctAnswer: 3
    }, {
        question: "2. Laplace transforms of the function e^-2t is",
        choices: ["1/2s", "s+2", "1/s+2", "2s"],
        correctAnswer: 2
    }, {
        question: "3. The integral of a step function is",
        choices: ["A ramp function", "An impulse function", "Modified ramp function", "A sinusoidal function"],
        correctAnswer: 0
    }, {
        question: "4. The final value of the function (s+6)/s(s+3)",
        choices: ["1", "0", "2", "3"],
        correctAnswer: 2
    }, {
        question: "5.L(f * g) = L(f).L(g)",
        choices: ["true", "false", "cant say", "none"],
        correctAnswer: 0
    }, {
        question: "6.L(f') = sL(f) - f(0)",
        choices: ["true", "false", "cant say", "none"],
        correctAnswer: 0
    }, {
        question: "7.The unit step is not defined at",
        choices: ["3", "2", "1", "0"],
        correctAnswer: 3
    }, {
        question: "8.Laplace transform a changes any function from s-domain to t-domain.",
        choices: ["true", "false", "cant say", "none"],
        correctAnswer: 1
    }, {
        question: "9.Laplace transform if sin(at)u(t) is?",
        choices: ["s /a2+s2", "a /a2+s2", " s2 /a2+s2", " a2 / a2+s2"],
        correctAnswer: 1
    }, {
        question: "10.What is the laplace of e^6t",
        choices: ["6/s-6", "2/s+12", "1/s-6", "1/s+6"],
        correctAnswer: 2
    }];


    var currentQuestion = 0;
    var viewingAns = 0;
    var correctAnswers = 0;
    var quizOver = false;
    var iSelectedAnswer = [];
    var c = 1200;
    var t;

    $(document).ready(function() {
        // Display the first question
        displayCurrentQuestion();
        $(this).find(".quizMessage").hide();
        $(this).find(".preButton").attr('disabled', 'disabled');

        timedCount();

        $(this).find(".preButton").on("click", function() {

            if (!quizOver) {
                if (currentQuestion == 0) {
                    return false;
                }

                if (currentQuestion == 1) {
                    $(".preButton").attr('disabled', 'disabled');
                }

                currentQuestion--; // Since we have already displayed the first question on DOM ready
                if (currentQuestion < questions.length) {
                    displayCurrentQuestion();

                }
            } else {
                if (viewingAns == 3) {
                    return false;
                }
                currentQuestion = 0;
                viewingAns = 3;
                // function Review() {
                //     window.open("review.html", "_blank");
                // }
                $(document).find(".preButton").text("Review");
                $(document).find(".nextButton").text("Restart");
                $(document).find(".endButton").text("Analysis");

                viewResults();

            }
        });

        function scrollDown() {
            window.scroll(0, document.body.scrollHeight);
        }
        // On clicking next, display the next question
        $(this).find(".nextButton").on("click", function() {
            if (!quizOver) {

                var val = $("input[type='radio']:checked").val();


                if (val == undefined) {
                    $(document).find(".quizMessage").text("Please select an answer");
                    //   $(document).find(".quizMessage").show();
                } else {
                    // TODO: Remove any message -> not sure if this is efficient to call this each time....
                    $(document).find(".quizMessage").hide();
                    if (val == questions[currentQuestion].correctAnswer) {
                        correctAnswers++;
                    }
                    iSelectedAnswer[currentQuestion] = val;

                    currentQuestion++; // Since we have already displayed the first question on DOM ready
                    if (currentQuestion >= 1) {
                        $('.preButton').prop("disabled", false);
                    }
                    if (currentQuestion < questions.length) {
                        displayCurrentQuestion();

                    } else {
                        displayScore();
                        $('#iTimeShow').html('Quiz  Completed!');
                        // $('#timer').html("You scored: " + correctAnswers + " out of " + questions.length);
                        c = 185;
                        $(document).find(".preButton").text("Review");
                        $(document).find(".nextButton").text("Restart");
                        // $(document).find(".endButton").text("View Analysis").on("click", scrollDown());
                        $(this).find(".start_cam").on("click", stop());





                        quizOver = true;



                        return false;

                    }
                }

            } else { // quiz is over and clicked the next button (which now displays 'Play Again?'
                quizOver = false;
                $('#iTimeShow').html('Time Remaining:');
                iSelectedAnswer = [];
                $(document).find(".nextButton").text("Restart");
                $(document).find(".preButton").text("Review");
                $(document).find(".endButton").text("Analysis");

                $(".preButton").attr('disabled', 'disabled');
                $(this).find(".start_cam").on("click", start());
                resetQuiz();
                viewingAns = 1;
                displayCurrentQuestion();
                hideScore();
            }

        });
    });


    var final = correctAnswers;

    function timedCount() {
        if (c == 185) {
            return false;
        }

        var hours = parseInt(c / 3600) % 24;
        var minutes = parseInt(c / 60) % 60;
        var seconds = c % 60;
        var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds <
            10 ? "0" + seconds : seconds);
        $('#timer').html(result);

        if (c == 0) {
            displayScore();
            $('#iTimeShow').html('Time Over!');
            c = 185;
            $(document).find(".preButton").text("Review");
            $(document).find(".nextButton").text("Restart");
            $(document).find(".endButton").text("Analysis");

            $(this).find(".start_cam").on("click", stop());
            quizOver = true;
            return false;

        }
        c = c - 1;
        t = setTimeout(function() {
            timedCount()
        }, 1000);
    }


    // This displays the current question AND the choices
    function displayCurrentQuestion() {

        if (c == 185) {
            c = 10;
            timedCount();
        }
        //console.log("In display current Question");
        var question = questions[currentQuestion].question;
        var questionClass = $(document).find(".quizContainer > .question");
        var choiceList = $(document).find(".quizContainer > .choiceList");
        var numChoices = questions[currentQuestion].choices.length;
        // Set the questionClass text to the current question
        $(questionClass).text(question);
        // Remove all current <li> elements (if any)
        $(choiceList).find("li").remove();
        var choice;


        for (i = 0; i < numChoices; i++) {
            choice = questions[currentQuestion].choices[i];

            if (iSelectedAnswer[currentQuestion] == i) {
                $('<li><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +
                    ' ' + choice + '</li>').appendTo(choiceList);
            } else {
                $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' + ' ' + choice +
                    '</li>').appendTo(choiceList);
            }
        }
    }

    function displayReviewQuestion() {
        var question = questions[currentQuestion].question;
        var questionClass = $(document).find(".quizContainer > .question");
        var choiceList = $(document).find(".quizContainer > .choiceList");
        var numChoices = questions[currentQuestion].choices.length;
        // Set the questionClass text to the current question
        $(questionClass).text(question);
        // Remove all current <li> elements (if any)
        $(choiceList).find("li").remove();
        var choice;


        for (i = 0; i < numChoices; i++) {
            choice = questions[currentQuestion].choices[i];

            if (iSelectedAnswer[currentQuestion] == i) {
                if (questions[currentQuestion].correctAnswer == i) {
                    $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' +
                        i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                } else {
                    $('<li style="border:2px solid red;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' +
                        i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                }
            } else {
                if (questions[currentQuestion].correctAnswer == i) {
                    $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" value=' +
                        i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                } else {
                    $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' + ' ' + choice +
                        '</li>').appendTo(choiceList);
                }
            }
        }

    }
    let analysis = document.getElementById('analysis');

    function resetQuiz() {
        currentQuestion = 0;
        correctAnswers = 0;
        hideScore();
    }

    function hideBox() {
        $(document).find(".quizContainer").show();
    }

    function displayScore() {
        $(document).find(".quizContainer > .result").text("Your Score is:" + correctAnswers + "/" + questions.length + "     Scroll down to check the analysis");
        // $(document).find(".quizContainer > .result").text("Scroll down to check the analysis" );

        $(document).find(".quizContainer > .result").show();
        // console.log(correctAnswers);
        hideBox();
        analysis.innerHTML = '<h1>Test Analysis</h1>';
        analysis1.innerHTML = '<h1>Graph shows the correct and wrong answers</h1>'
        var xValues = ["Correct", "Wrong"];
        var yValues = [correctAnswers, questions.length - correctAnswers];
        var barColors = [
            "#00aba9",
            "#f08080",
        ];

        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
        });
    }


    function hideScore() {
        $(document).find(".result").hide();
    }

    // This displays the current question AND the choices
    function viewResults() {

        if (currentQuestion == 10) {
            currentQuestion = 0;
            return false;
        }
        if (viewingAns == 1) {
            return false;
        }

        hideScore();
        var question = questions[currentQuestion].question;
        var questionClass = $(document).find(".quizContainer > .question");
        var choiceList = $(document).find(".quizContainer > .choiceList");
        var numChoices = questions[currentQuestion].choices.length;
        // Set the questionClass text to the current question
        $(questionClass).text(question);
        // Remove all current <li> elements (if any)
        $(choiceList).find("li").remove();
        var choice;


        for (i = 0; i < numChoices; i++) {
            choice = questions[currentQuestion].choices[i];

            if (iSelectedAnswer[currentQuestion] == i) {
                if (questions[currentQuestion].correctAnswer == i) {
                    $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' +
                        i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                } else {
                    $('<li style="border:2px solid red;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' +
                        i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                }
            } else {
                if (questions[currentQuestion].correctAnswer == i) {
                    $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" value=' +
                        i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                } else {
                    $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' + ' ' + choice +
                        '</li>').appendTo(choiceList);
                }
            }
        }

        currentQuestion++;

        setTimeout(function() {
            viewResults();
        }, 2000);

    }
</script>

</html>