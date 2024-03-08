<!DOCTYPE html>
<html>
    <head>
        <title>Support BRANCH</title>
        <link href="css/home.css" rel="stylesheet">
        <link href="css/badge.css" rel="stylesheet">
        <link href="css/parallax.css" rel="stylesheet">
        <link href="css/forms.css" rel="stylesheet">
        <script src="js/banner.js"></script>
        <script src="js/popup_form.js"></script>
    </head>
    <body>
        <div id="banner" class="banner_div" onclick="toggle_extended_banner()">
            <div class="banner_text" style="top: 1.5vh; font-size: 4em">
                SUPPORT BRANCH
            </div>

            <div class="banner_text" style="font-size: 1.5em">
                <p>Welcome to Supporting Behavior Regulation and Navigating Challenging Behaviors at Home</p>
                <p>During Support BRANCH you'll be able to build your confidence as a parent and learn strategies to help manage and reduce your child's behavior problems. This program is based on principles of Behavior Modification and is intended to supplement professional consultation or therapy in order to address child behavior problems such as hyperactivity, tantrums, non-compliance, aggression, and resistance to change.</p>
                <p>Support BRANCH consists of Four Adventures that will be completed as you climb up the tree of parent support. Each adventure is meant to be completed over a single week, with five tasks in each adventure. If you need, you can complete multiple tasks within an adventure on the same day, though we recommend doing one per day!  As you complete the different adventures, you will earn badges along the way. We look forward to supporting you through this journey! </p>
            </div>
        </div>

        <div class="parallax">
            <div class="parallax__group">
                <div class="parallax__layer parallax__layer--deep">
                    <img class="back_scene" src="assets/5_back_scene_short.png"/>
                </div>
                
                <div class="parallax__layer parallax__layer--back">
                    <img class="midground" src="assets/6_midground_short.png"/>
                </div>

                <div class="parallax__layer parallax__layer--base">
                    <img class="foreground" src="assets/7_foreground_short.png"/>

                    <div id="adventure4_badge" class="badge_div" style="top: 110vh; left: 40vw;">
                        <a href="adventure4.html"><img class="badge" src="assets/simple_badge.png"></a>
                    </div>

                    <div id="adventure3_badge" class="badge_div" style="top: 130vh; left: 60vw;">
                        <a href="adventure3.html"><img class="badge" src="assets/simple_badge.png"></a>
                    </div>

                    <div id="adventure2_badge" class="badge_div" style="top: 150vh; left: 25vw;">
                        <a href="adventure2.html"><img class="badge" src="assets/simple_badge.png"></a>
                    </div>

                    <div id="adventure1_badge" class="badge_div" style="top: 170vh; left:75vw;">
                        <a href="adventure1.html"><img class="badge" src="assets/simple_badge.png"></a>
                    </div>

                    <div class="badge_div" style="top: 30%; left: 10%;">
                        <img class="badge" id="dr-badge" onclick="open_form('dr')" src="assets/simple_explore.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="form_popup daily_report" id="dr">
            <form class="form_container" id="dr-form">
                <h1>Daily Check-in</h1>
                <p>How CONFIDENT are you in your ability to manage your child's behaviors today?</p>
                    <input class="radio_obj" id="dr-1-0" name="dr-1" type="radio" value="1" required>
                    <label class="input_lbl" for="dr-1-0">Not Very</label><br>
                    <input class="radio_obj" id="dr-1-1" name="dr-1" type="radio" value="2">
                    <label class="input_lbl" for="dr-1-1">a lil</label><br>
                    <input class="radio_obj" id="dr-1-2" name="dr-1" type="radio" value="3">
                    <label class="input_lbl" for="dr-1-2">sort of</label><br>
                    <input class="radio_obj" id="dr-1-3" name="dr-1" type="radio" value="4">
                    <label class="input_lbl" for="dr-1-3">more than sort of</label><br>
                    <input class="radio_obj" id="dr-1-4" name="dr-1" type="radio" value="5">
                    <label class="input_lbl" for="dr-1-4">very</label><br>
                <p>How PREPARED are you to use the skills you've learned to manage your child's behaviors today?</p>
                    <input class="radio_obj" id="dr-2-0" name="dr-2" type="radio" value="1" required>
                    <label class="input_lbl" for="dr-2-0">Not Very</label><br>
                    <input class="radio_obj" id="dr-2-1" name="dr-2" type="radio" value="2">
                    <label class="input_lbl" for="dr-2-1">a lil</label><br>
                    <input class="radio_obj" id="dr-2-2" name="dr-2" type="radio" value="3">
                    <label class="input_lbl" for="dr-2-2">sort of</label><br>
                    <input class="radio_obj" id="dr-2-3" name="dr-2" type="radio" value="4">
                    <label class="input_lbl" for="dr-2-3">more than sort of</label><br>
                    <input class="radio_obj" id="dr-2-4" name="dr-2" type="radio" value="5">
                    <label class="input_lbl" for="dr-2-4">very</label><br>
                <p>How STRESSED have you felt in relation to your child's behaviors in the last 24 hours?</p>
                    <input class="radio_obj" id="dr-3-0" name="dr-3" type="radio" value="1" required>
                    <label class="input_lbl" for="dr-3-0">Not Very</label><br>
                    <input class="radio_obj" id="dr-3-1" name="dr-3" type="radio" value="2">
                    <label class="input_lbl" for="dr-3-1">a lil</label><br>
                    <input class="radio_obj" id="dr-3-2" name="dr-3" type="radio" value="3">
                    <label class="input_lbl" for="dr-3-2">sort of</label><br>
                    <input class="radio_obj" id="dr-3-3" name="dr-3" type="radio" value="4">
                    <label class="input_lbl" for="dr-3-3">more than sort of</label><br>
                    <input class="radio_obj" id="dr-3-4" name="dr-3" type="radio" value="5">
                    <label class="input_lbl" for="dr-3-4">very</label><br>
                <p>How SEVERE have your child's behaviors been in the last 24 hours?"</p>
                    <input class="radio_obj" id="dr-4-0" name="dr-4" type="radio" value="1" required>
                    <label class="input_lbl" for="dr-4-0">Not Very</label><br>
                    <input class="radio_obj" id="dr-4-1" name="dr-4" type="radio" value="2">
                    <label class="input_lbl" for="dr-4-1">a lil</label><br>
                    <input class="radio_obj" id="dr-4-2" name="dr-4" type="radio" value="3">
                    <label class="input_lbl" for="dr-4-2">sort of</label><br>
                    <input class="radio_obj" id="dr-4-3" name="dr-4" type="radio" value="4">
                    <label class="input_lbl" for="dr-4-3">more than sort of</label><br>
                    <input class="radio_obj" id="dr-4-4" name="dr-4" type="radio" value="5">
                    <label class="input_lbl" for="dr-4-4">very</label><br>
                <br>
                <button class="submit" id="dr-submit" onclick="get_answers('dr-form'); close_form('dr')" type="button">Submit</button>
          </form>
        </div>
    </body>
</html>
