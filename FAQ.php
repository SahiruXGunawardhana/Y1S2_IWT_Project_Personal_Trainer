 <?php
 session_start();
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/FAQ.css">



  <script src="JavaScripts/Home.js"></script>
  <script src="JavaScripts/FAQ.js"></script>

 </head>
 <body>

 <?php
  include'homeheader.php';
 ?>
    
    <hr id="hr1">
    <div id="homebg">
        <div class="FAQheading">
            <h1>FAQs</h1>
        </div>
        <div class="setContainer">
            <div class="set">
                <div>
                    <div>
                        <h3>(01)&nbsp;&nbsp;How can I contact a fitness trainer for personalized guidance?</h3><button onclick="toggleAnswer('answer1',this)">view answer</button>
                    </div>
                    <div>
                        <p class="answr" id="answer1">You can contact a fitness trainer through the messaging feature in your account
                            dashboard or by scheduling a one-on-one consultation via the "Trainer info" option. 
                            Our trainers are dedicated to helping you achieve your fitness goals and will respond promptly to your inquiries.</p>
                    </div>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(02)&nbsp;&nbsp;How do I sign up for an online fitness program?</h3><button onclick="toggleAnswer('answer2',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer2">To sign up, click on the "Sign Up" button, fill out the required details, and choose a fitness plan that fits your goals.
                        After registration, you will receive a welcome email with further instruction</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(03)&nbsp;&nbsp;Do I need any special equipment to follow the workouts?</h3><button onclick="toggleAnswer('answer3',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer3">While many of our workouts are equipment-free, some plans may require basic gym equipment 
                        like dumbbells or resistance bands. We also offer modifications for workouts without equipment.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(04)&nbsp;&nbsp;Can I cancel my membership anytime?</h3><button onclick="toggleAnswer('answer4',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer4">Yes, you can cancel your membership at any time from your account settings.
                         There are no cancellation fees, but you may lose access to premium content after cancellation.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(05)&nbsp;&nbsp;Will I get a personalized workout plan?</h3><button onclick="toggleAnswer('answer5',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer5">Yes! After you sign up, you'll complete a questionnaire about your fitness level, goals, and preferences.
                         Based on your answers, our trainers will create a customized workout plan for you.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(06)&nbsp;&nbsp;Can I access the workouts on my phone or tablet?</h3><button onclick="toggleAnswer('answer6',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer6">Yes, our platform is mobile-friendly, so you can access workouts on any device with an 
                        internet connection, including phones and tablets.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(07)&nbsp;&nbsp;How often are new workout plans and exercises added?</h3><button onclick="toggleAnswer('answer7',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer7">We add new workout plans and exercises every month to keep your fitness routine fresh and challenging.
                         Stay tuned for updates on our blog and newsletters.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(08)&nbsp;&nbsp;What kind of support is available if I have questions about my workouts?</h3><button onclick="toggleAnswer('answer8',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer8">You can contact our support team through the "Contact Us" page or use the live chat feature 
                        for quick responses to your workout-related questions.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(09)&nbsp;&nbsp;Do you offer nutritional guidance along with workout plans?</h3><button onclick="toggleAnswer('answer9',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer9">Yes, we provide tailored nutritional plans to complement your workout routines. 
                        You can access meal plans, recipes, and nutrition tips through your account dashboard.</p>
                </div>
            </div>
            <div class="set">
                <div>
                    <h3>(10)&nbsp;&nbsp;How long will it take to see results?</h3><button onclick="toggleAnswer('answer10',this)">view answer</button>
                </div>
                <div>
                    <p class="answr" id="answer10">Results vary depending on factors such as your fitness level, dedication, and nutrition. 
                        However, most users notice improvements in strength, endurance, and overall health within 4-6 weeks.</p>
                </div>
            </div>
        </div>
        <div class="Images">
                <table width="100%" height="400px">
                    <tr>
                        <td><img class="FAQimg" src="Images/FAQ/FAQimg1.jpg"></td>
                        <td><img class="FAQimg" src="Images/FAQ/FAQimg2.jpg"></td>
                        <td><img class="FAQimg" src="Images/FAQ/FAQimg3.jpg"></td>
                    </tr>
                </table>
        </div>
    </div>

 <?php
  include'homefooter.php';
 ?>
 



 </body>
</html>