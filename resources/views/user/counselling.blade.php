<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Welcome to EasyVisit</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/stress_activities.css">

  <link rel="stylesheet" href="../assets/css/chatbot.css">
 
 
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +94760625621</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> easyvisit@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

@include('user.navigation')

  </header>
<body>

<div class="content-chat">
        <div class="left-column">
            <!-- Left column content goes here -->
            <ul class="stress-activities">
              <h3 class="stress-heading">Stress Releasing Activities</h3>
              <li class="stress-item">Do a quick exercise</li>
              <li class="stress-item">Do something tactile</li>
              <li class="stress-item">Taking a Warm Bath</li>
              <li class="stress-item">Listening to Music</li>
              <li class="stress-item">Dance like no one is watching</li>
              <li class="stress-item">Meditate—or even just consciously breathe</li>
              <li class="stress-item">Go on a cleaning binge</li>
              <li class="stress-item">Creative Activities like Doodle</li>
            </ul>

        </div>

        <div class="middle-column">
      
        <h3 class="stress-heading">EasyVisit Gaming Panel</h3>
        <h4 style="text-align:center;">You can release your stress here by playing games.
        We have provided you two games.</h4><br>
        <h5 style="text-align:center;">Game 1 has a picture puzzle</h5>
        <button onclick="playGame1()" class="btn mt-3 wow zoomIn">Play Game 1</button>
      <br>
        <h5 style="text-align:center;">Game 2 has a number puzzle</h5>
      <button onclick="playGame2()" class="btn mt-3 wow zoomIn">Play Game 2</button><br>
      <img src="stressgame.png" width="100px" height="100px" class="center">
        <script>
    function playGame1() {
    try {
        window.location.href = '/game1/index1.html';
    } catch (error) {
        console.error('Error redirecting:', error);
    }
}

function playGame2() {
    try {
        window.location.href = '/game2/index2.html';
    } catch (error) {
        console.error('Error redirecting:', error);
    }
}
</script>


        </div>

        <div class="right-column">
        <div class="wrapper">
            <div class="title">Release your stress</div>
            <div class="form">
                <div class="chat-box" id="chatBox">
                   
                </div>
                <div class="answer-options" id="answerOptions">
                   
                </div>
                <div class="typing-field hidden">
                    <div class="input-data">
                      <input id="user-answer" type="text" placeholder="Type your answer here..." required>
                    </div>
                    <button class="send-btn" id="send-btn">Send</button>
                </div>
                <div class="final-message hidden" id="finalMessage"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var answers = [
            ["Never", "Rarely", "Occasionally", "Often", "Always"],
            ["Never", "Rarely", "Sometimes", "Often", "Always"],
            ["Very well", "Fairly well", "Sometimes poorly", "Often poorly", "Very poorly"],
            ["Never", "Rarely", "Sometimes", "Often", "Always"],
            ["Complete control", "A lot of control", "Moderate control", "Little control", "No control"]
        ];
        var questions = [
            "Hi there! What is your name?", // Moved to the beginning
            "Would you like to answer some stress level calculation questions?",
            "How often do you feel overwhelmed by your daily responsibilities?",
            "How frequently do you experience physical symptoms of stress such as headaches or muscle tension?",
            "How well do you sleep at night?",
            "How often do you find it difficult to concentrate due to stress?",
            "How much control do you feel you have over the events in your life?"
        ];

        var currentQuestionIndex = 0;
        var stressLevel = 0;
        var userName = "";

        function callGPT3(input, callback) {
            $.ajax({
                url: 'https://openrouter.ai/api/v1/chat/completions',
                method: 'POST',
                // contentType: 'application/json',
                headers: {
                    "Authorization": 'Bearer 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',
                    "Content-Type": "application/json"
                },
                data: JSON.stringify({
                    "model": "mistralai/mistral-7b-instruct",
                    "messages": [{"role": "user", "content": input}],
                    "max_tokens": 100
                }),
                success: function (response) {
                    const gptResponse = response.choices[0].message.content.trim();
                    // const gptResponse = "this is successful response";

                    callback(gptResponse);
                },
                error: function (error) {
                    console.error('Error with GPT-3.5 API call:', error);
                    callback(null);
                }
            });
        }


        function displayMessage(message, sender) {
            var chatMessage = '<div class="message ' + sender + '">' + message + '</div>';
            $("#chatBox").append(chatMessage);
        }

        function displayQuestion() {
            var question = questions[currentQuestionIndex];
            displayMessage(question, 'bot');

            if (currentQuestionIndex === 0) {
                $(".typing-field").removeClass('hidden');
            } 
            // else if (currentQuestionIndex === 1) {
            //     var optionsContainer = '<div class="answer-options">';
            //     optionsContainer += '<button class="answer-button" data-answer="Yes">Yes</button>';
            //     optionsContainer += '<button class="answer-button" data-answer="No">No</button>';
            //     optionsContainer += '</div>';
            //     $("#answerOptions").html(optionsContainer);
            // } else {
            //     var answerOptions = answers[currentQuestionIndex - 2];
            //     var optionsContainer = '<div class="answer-options">';
            //     answerOptions.forEach(function (option, optionIndex) {
            //         optionsContainer += '<button class="answer-button" data-answer="' + option + '">' + option + '</button>';
            //     });
            //     optionsContainer += '</div>';
            //     $("#answerOptions").html(optionsContainer);
            // }
        }

        function calculateStressLevel(answer) {
            if (currentQuestionIndex >= 2 && currentQuestionIndex <= questions.length) {
                var answerIndex = answers[currentQuestionIndex - 2].indexOf(answer);
                if (answerIndex !== -1) {
                    stressLevel += answerIndex + 1;
                }
            } else if (currentQuestionIndex === questions.length) {
                userName = answer;
            }
        }

        // function calculateStressLevel(gptResponse) {
        //     // Here you would need to parse the GPT-3.5 response and map it to a stress level score
        //     // This is an example, but you'll need to customize it based on the actual GPT-3.5 output
        //     const options = ["Never", "Rarely", "Occasionally", "Often", "Always"];
        //     let stressScore = 0;

        //     options.forEach(function(option, index) {
        //         if (gptResponse.includes(option)) {
        //             stressScore = index + 1;
        //         }
        //     });

        //     stressLevel += stressScore;
        // }

        // function displayStressLevel() {
        //     var totalStressQuestions = questions.length - 2;
        //     var percentageStress = (stressLevel / (totalStressQuestions * 5)) * 100;
        //     displayMessage("Your stress level is: " + percentageStress.toFixed(2) + "%", 'bot');
        //     $("#finalMessage").text("Thank you, " + userName + ", for completing the survey!");

        //     $(".typing-field").addClass('hidden');
        //     $(".input-data input, #send-btn").prop("disabled", true);
        // }
        function displayStressLevel() {
            var totalStressQuestions = questions.length - 2; // Adjust if the number of questions changes
            var percentageStress = (stressLevel / (totalStressQuestions * 5)) * 100;
            displayMessage("Your stress level is: " + percentageStress.toFixed(2) + "%", 'bot');
            $("#finalMessage").text("Thank you, " + userName + ", for completing the survey!");

            $(".typing-field").addClass('hidden');
            $(".input-data input, #send-btn").prop("disabled", true);

            // Assuming userName is in "First Last" format
            var nameParts = userName.split(' ');
            var firstName = nameParts[0];
            var lastName = nameParts[1] || '';
            // Send the stress level to the server
            $.ajax({
                url: '/save-stress-level',
                method: 'POST',
                data: {
                    first_name: firstName,
                    last_name: lastName,
                    stress_level: percentageStress,
                    _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token for security
                },
                success: function (response) {
                    console.log(response.message);
                },
                error: function (error) {
                    console.error('Error saving stress level:', error);
                }
            });
        }

        // function sendMessage() {
        //     var userAnswer = $("#user-answer").val().trim();
        //     if (userAnswer !== "") {
        //         displayMessage(userAnswer, 'user');
        //         calculateStressLevel(userAnswer);
        //         currentQuestionIndex++;

        //         if (currentQuestionIndex < questions.length) {
        //             displayQuestion();
        //         } else {
        //             $(".answer-options, #user-answer, #send-btn").addClass('hidden');
        //             displayStressLevel();
        //             $("#user-answer").prop("disabled", true);
        //             setTimeout(function() {
        //                 location.reload(); // Refresh the page after a short delay
        //             }, 8000);
        //         }

        //         $("#user-answer").val("");
        //     }
        // }
        function sendMessage() {
            var userAnswer = $("#user-answer").val().trim();
            if (userAnswer !== "") {
                displayMessage(userAnswer, 'user');
                $("#user-answer").val(""); // Clear the input field

                // Handle the decision on whether to take the stress survey
                if (currentQuestionIndex == 0){
                    userName = userAnswer;
                  currentQuestionIndex++;
                  displayQuestion();
                }
                else if (currentQuestionIndex === 1) {
                    if (userAnswer.toLowerCase() === "yes") {
                        currentQuestionIndex++;
                        displayQuestion();
                    } else if (userAnswer.toLowerCase() === "no") {
                        displayMessage("You can ask me any stress-related questions.", 'bot');
                        switchToFAQBot();
                        return;
                    }
                } else if (currentQuestionIndex >= 2 && currentQuestionIndex < questions.length) {

                    // Get the possible answers for the current question
                    var possibleAnswers = answers[currentQuestionIndex - 2];

                    var prompt = `
                      You are a highly intelligent assistant specialized in understanding user input and mapping it to a predefined set of possible answers.
                      A user has provided the following response to a question about "${questions[currentQuestionIndex]}":

                      User's Response: "${userAnswer}"

                      The possible answers for this question are: ${possibleAnswers.join(", ")}.

                      Based on the user's response, choose the most appropriate answer from the list of possible answers.
                      If the user's input is ambiguous or could relate to multiple options, choose the one that best fits their overall sentiment.

                      Please return the chosen answer in one word from the list provided.
                  `;

                    // Handle stress survey questions using GPT-3.5
                    callGPT3(prompt, function (gptResponse) {
                        if (gptResponse) {
                            calculateStressLevel(gptResponse); // Adjust this to parse the response properly
                            currentQuestionIndex++;
                            if (currentQuestionIndex < questions.length) {
                                displayQuestion();
                            } else {
                                displayStressLevel();
                            }
                        } else {
                            displayMessage("Sorry, I couldn't understand that. Could you please try again?", 'bot');
                        }
                    });
                } else {
                    displayMessage("Thank you for your time!", 'bot');
                }
            }
        }

        function switchToFAQBot() {
            $("#user-answer").prop("disabled", false).removeClass('hidden');
            $("#send-btn").prop("disabled", false).removeClass('hidden');

            // You can pre-load some common questions or just respond dynamically
            // displayMessage("Ask me anything about stress.", 'bot');

            $("#send-btn").off("click").on("click", function () {
                var userQuestion = $("#user-answer").val().trim();
                // userQuestion += 'hello'
                if (userQuestion !== "") {
                    displayMessage(userQuestion, 'user');
                    var prompt = `
                      You are a compassionate and knowledgeable virtual assistant specializing in mental health and stress management.
                      A user has asked the following question: "${userQuestion}"

                      Please respond with empathy, providing practical advice or information that can help the user manage their stress or anxiety.
                      Remember to be supportive, avoid making clinical diagnoses, and focus on offering helpful, non-clinical advice.
                    `;

                    callGPT3(prompt, function (gptResponse) {
                        if (gptResponse) {
                            displayMessage(gptResponse, 'bot');
                        } else {
                            displayMessage("Sorry, I couldn't understand that. Could you please try again?", 'bot');
                        }
                    });
                    $("#user-answer").val("");
                }
            });
        }


        $("#answerOptions").on("click", ".answer-button", function () {
            var selectedAnswer = $(this).data("answer");
            if (currentQuestionIndex === 1) {
                if (selectedAnswer.toLowerCase() === "yes") {
                    currentQuestionIndex++;
                    displayMessage(selectedAnswer, 'user');
                    displayQuestion();
                } else if (selectedAnswer.toLowerCase() === "no") {
                    displayMessage(selectedAnswer, 'user');
                    displayMessage("Thank you for your time!", 'bot');
                    $(".answer-options, .typing-field, #send-btn").addClass('hidden');
                    $(".input-data input").prop("disabled", true).addClass('hidden');
                    setTimeout(function() {
                        location.reload(); // Refresh the page after a short delay
                    }, 8000);
                }
            } else {
                $("#user-answer").val(selectedAnswer);
                $("#send-btn").prop("disabled", false);
                $(".answer-options, #user-answer, #send-btn").removeClass('hidden');
            }
        });

        $("#send-btn").on("click", function () {
            sendMessage();
        });

        displayQuestion();
    });
</script>


<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Counselling</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Pharamcies</a></li>
            <li><a href="#">Laboratories</a></li>
            <li><a href="#">Reports</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">223 Lady McCullums' Drive Kandy</p>
          <a href="#" class="footer-link">0760625621</a>
          <a href="#" class="footer-link">easyvist@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2024 <a href="easyvisit@gmail.com" target="_blank">EasyVisit</a>. All
        right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>



</body>
</html>