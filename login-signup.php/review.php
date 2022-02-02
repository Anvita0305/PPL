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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </script>
    <title>JS Quiz</title>
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
            border-radius: 6px;
            width: 500px;
            height: 365px;

            margin: auto;
            padding-top: 5px;



            /*-moz-box-shadow: 10px 10px 5px #888;
    -webkit-box-shadow: 10px 10px 5px #888;
    box-shadow: 10px 10px 5px #888;*/
            position: relative;
        }

        /* .quizContainer2{
                              background-color: white;
                              border-radius: 6px;
                              width: 400px;
                              height:50px;
                              
                              margin: auto;
                              padding-top: 5px;
                    } */

        .quizcontainer #quiz1 {
            /* text-shadow: 1px 1px 2px orange; */
            font-family: "Georgia", Arial, sans-serif;

        }

        .nextButton {
            box-shadow: 3px 3px 5px #888;
            border-radius: 6px;
            /* width: 150px;*/
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
            float: right;
            right: 18%;
        }

        .preButton {
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
            font-size: 1.5em;
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
            font-size: 15px;
            font-weight: bold;
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
            top: 175px;
            left: 30%;
        }

        /* End of Quiz Classes */
    </style>
</head>

<body style="background: linear-gradient(45deg, rgb(28, 46, 21),rgb(199, 223, 95));">

    <div class="quizContainer container-fluid well well-lg">
        <div id="quiz1" class="text-center">
            <!-- 			<h3>KGCAS - Javascript FDP 2018</h3>
			<center><img class="img-responsive" height="180" width="180" src="http://res.cloudinary.com/dwjej2tbp/image/upload/v1523002021/KGCAS_SK_eyehy9.jpg"></center> -->
        </div>
        <div style="background: linear-gradient(90deg,rgb(238, 163, 234), rgb(65, 17, 53)); height:75px"
            class=" container-fluid well well-lg">
            <h4 style="color:white;position:absolute;left:67%;top:5%; " align:center;><span id="iTimeShow">
                </span><br /><span id='timer' style="font-size:25px;"></span></h4>
            <!-- <h2 style="position:absolute;right:55%;top:4%">Laplace Quiz</h2> -->
            <!-- <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <h5 class="card-header h5 text-center">
                                                
                                            </h5>
                                            <div class="card-body">
                                                <div class="booth"> -->
            <video style="position:absolute;right:70%;top:0ex" id="video" width="100px" height="85px" autoplay>
            </video>
            <!-- </div> -->


            <!-- </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

        </div>


        <div class="question"></div>
        <ul class="choiceList"></ul>
        <div class="quizMessage"></div>
        <div class="result"></div>
        <button class="preButton">Previous Question</button>
        <button class="nextButton">Next Question</button>
        <!-- <button class="clearchoice">Clear Choice</button> -->
        <div class="start_cam">
            <!-- <a href="#!" class="btn btn-danger"
                            onClick="stop()">
                            Stop Cam
                        </a> -->
            <a onClick="start()">

            </a>
        </div>
    </div>
</body>
<script>
    var questions = [{
        question: "1. How do you write 'Hello World' in an alert box?",
        choices: ["msg('Hello World')", "msgBox('Hello World');", "alertBox('Hello World');", "alert('Hello World');"],
        correctAnswer: 3
    }
        , {
        //     question: "2. How to empty an array in JavaScript?",
        //     choices: ["arrayList[]", "arrayList(0)", "arrayList.length=0", "arrayList.len(0)"],
        //     correctAnswer: 2
        // }, {
        //     question: "3. What function to add an element at the begining of an array and one at the end?",
        //     choices: ["push,unshift", "unshift,push", "first,push", "unshift,last"],
        //     correctAnswer: 1
        // }, {
        //     question: "4. What will this output? var a = [1, 2, 3]; console.log(a[6]);",
        //     choices: ["undefined", "0", "prints nothing", "Syntax error"],
        //     correctAnswer: 0
        // }, {
        //     question: "5. What would following code return? console.log(typeof typeof 1);",
        //     choices: ["string", "number", "Syntax error", "undefined"],
        //     correctAnswer: 0
        // },{
        // 	question: "6. Which software company developed JavaScript?",
        //     choices: ["Mozilla", "Netscape", "Sun Microsystems", "Oracle"],
        //     correctAnswer: 1
        // },{
        // 	question: "7. What would be the result of 3+2+'7'?",
        //     choices: ["327", "12", "14", "57"],
        //     correctAnswer: 3
        // },{
        // 	question: "8. Look at the following selector: $('div'). What does it select?",
        //     choices: ["The first div element", "The last div element", "All div elements", "Current div element"],
        //     correctAnswer: 2
        // },{
        // 	question: "9. How can a value be appended to an array?",
        //     choices: ["arr(length).value;", "arr[arr.length]=value;", "arr[]=add(value);", "None of these"],
        //     correctAnswer: 1
        // },{
        question: "10. What will the code below output to the console? console.log(1 +  +'2' + '2');",
        choices: ["'32'", "'122'", "'13'", "'14'"],
        correctAnswer: 0
    }];


    var currentQuestion = 0;
    var viewingAns = 0;
    var correctAnswers = 0;
    var quizOver = false;
    var iSelectedAnswer = [];
    var c = 10;
    var t;
    $(document).ready(function () {
        // Display the first question
        // displayCurrentQuestion();
        // $(this).find(".quizMessage").hide();
        // $(this).find(".preButton").attr('disabled', 'disabled');
        // $(this).find(".preButton").on("click", function () {

        //     if (!quizOver) {
        //         if (currentQuestion == 0) { return false; }

        //         if (currentQuestion == 1) {
        //             $(".preButton").attr('disabled', 'disabled');
        //         }

        //         currentQuestion--; // Since we have already displayed the first question on DOM ready
        //         if (currentQuestion < questions.length) {
        //             displayCurrentQuestion();

        //         }
            // } else {
            //     if (viewingAns == 3) { return false; }
            //     currentQuestion = 0; viewingAns = 3;
                // function Review() {
                //     window.open("review.html", "_blank");
                // }

                // $(document).find(".preButton").text("Review");
                // $(document).find(".nextButton").text("Restart");

                // viewResults();
                // $(this).find(".nextButton").on("click", function () {
                //     currentQuestion++;
                //     if (currentQuestion >= 1) {
                //         $('.preButton').prop("disabled", false);
                //     }
                //     if (currentQuestion < questions.length) {
                //         viewResults();

                //     }
                // });
            }
        );
        $(this).find(".nextButton").on("click", function () {
            if (!quizOver) {

                // var val = $("input[type='radio']:checked").val();
                // $(this).find("clearchoice").on("click", function(){
                //     $("input[type='radio']:checked").prop("checked", false)
                // });

                // if (val == undefined) {
                //     $(document).find(".quizMessage").text("Please select an answer");
                    //   $(document).find(".quizMessage").show();
                // }
                // else {
                    // TODO: Remove any message -> not sure if this is efficient to call this each time....
                    // $(document).find(".quizMessage").hide();
                    // if (val == questions[currentQuestion].correctAnswer) {
                    //     correctAnswers++;
                    // }
                    // iSelectedAnswer[currentQuestion] = val;

                    currentQuestion++; // Since we have already displayed the first question on DOM ready
                    if (currentQuestion >= 1) {
                        $('.preButton').prop("disabled", false);
                    }
                    if (currentQuestion < questions.length) {
                        displayCurrentQuestion();

                    }

                    // else {
                    //     displayScore();
                    //     $('#iTimeShow').html('Quiz  Completed!');
                    //     // $('#timer').html("You scored: " + correctAnswers + " out of " + questions.length);
                    //     c = 185;
                    //     $(document).find(".preButton").text("Review");
                    //     $(document).find(".nextButton").text("Restart");

                    //     $(this).find(".start_cam").on("click", stop());





                    //     quizOver = true;



                    //     return false;

                    // }
                // }

            }
        //     else { // quiz is over and clicked the next button (which now displays 'Play Again?'
        //         quizOver = false; $('#iTimeShow').html('Time Remaining:'); iSelectedAnswer = [];
        //         $(document).find(".nextButton").text("Next Question");
        //         $(document).find(".preButton").text("Previous Question");

        //         // $(".preButton").attr('disabled', 'disabled');
        //         $(this).find(".start_cam").on("click", start());
        //         resetQuiz();
        //         viewingAns = 1;
        //         displayCurrentQuestion();
        //         hideScore();
        //     }

        });
    
    function displayCurrentQuestion() {

        if (c == 185) { c = 10; timedCount(); }
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
                if (questions[currentQuestion].correctAnswer == i) {
                    $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                } else {
                    $('<li style="border:2px solid red;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                }
            } else {
                if (questions[currentQuestion].correctAnswer == i) {
                    $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                } else {
                    $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
                }
            }
        }

        currentQuestion++;
    }


</script>

</html>