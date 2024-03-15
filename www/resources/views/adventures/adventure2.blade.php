<!DOCTYPE html>

<html>
<head>
<title>Prevention Strategies</title>
<link href="{{ asset('css/adventure2.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/badge.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/forms.css') }}" rel="stylesheet"/>
<script src="{{ asset('js/popup_form.js') }}"></script>
</head>
<body>
<div>
<img class="adv_background" src="{{ asset('assets/adventure.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 10%;">
<img class="badge" id="adv2-1_badge" onclick="open_form('adv2-1')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 30%;">
<img class="badge" id="adv2-2_badge" onclick="open_form('adv2-2')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 50%;">
<img class="badge" id="adv2-3_badge" onclick="open_form('adv2-3')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 70%;">
<img class="badge" id="adv2-4_badge" onclick="open_form('adv2-4')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 90%;">
<img class="badge" id="adv2-5_badge" onclick="open_form('adv2-5')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="form_popup" id="adv2-1">
<form class="form_container" id="adv2-1_form">
<h1>Prevention Strategies &amp; Daily Schedules</h1>
<h2>Prevention Strategies &amp; Visual Schedules</h2>
<p>In the next adventure, you will develop prevention strategies and visual schedules to assist with the treatment goals and target behavior you identified during the first adventure</p>
<h2>Helping Children Transition</h2>
<p>This video discusses transitions and helping your child cope with change</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/acaITYMnD4M?si=JXupUrdyN7QPOBUd" title="YouTube video player" width="560"></iframe></div>
<h3>What changes or transitions does your child have difficulty coping with?</h3>
<textarea class="text_obj" cols="100" name="adv2-1-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<h3>When faced with this change/transition, does your child display the target behavior you chose to focus on for this journey?</h3>
<input class="radio_obj" id="adv2-1-2ss-0" name="adv2-1-2ss" type="radio" value="1"/>
<label class="input_lbl" for="adv2-1-2ss-0">Yes</label><br/>
<input class="radio_obj" id="adv2-1-2ss-1" name="adv2-1-2ss" type="radio" value="0"/>
<label class="input_lbl" for="adv2-1-2ss-1">No</label><br/>
<p>If you answered "no" to the previous question, please provide an example of a time that a difficult change (for example, in a routine, situation, activity) did lead to the target behavior. If answered "yes" to the previous question, just write N/A</p>
<textarea class="text_obj" cols="100" name="adv2-1-3fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>What a great start to your second adventure! During the next task on this adventure, you will begin reviewing the different types of prevention strategies</p>
<img class="cancel" id="adv2-1_close" onclick="close_form('adv2-1')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv2-1_submit" onclick="get_answers('adv2-1_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv2-2">
<form class="form_container" id="adv2-2_form">
<h1>Prevention Strategies: Part 1</h1>
<p>In this task, we will discuss three prevention tips and have you identify ways you can use these tips with your child</p>
<h2>Prevention Strategy Tip #1</h2>
<p>Avoid situations or people that might cause your child to exhibit the difficult target behavior (for example, restaurants, stores, or other places that may be overwhelming for them)</p>
<h3>Are there certain situations or people that you can avoid to prevent the target behavior?</h3>
<textarea class="text_obj" cols="100" name="adv2-2-1fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<h2>Prevention Strategy Tip #2</h2>
<p>Control the environment or setting of events that can impact how a child responds in certain situations (for example, providing clear 5 and 1 minute warnings before transitions, putting specific objects in places that are out of reach, assess whether behaviors are caused by other aspects such as lack of sleep or hunger)</p>
<h3>Are there any ways that you can control the environment or change your child's setting to prevent the target behavior?</h3>
<textarea class="text_obj" cols="100" name="adv2-2-2fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<h2>Prevention Strategy Tip #3</h2>
<p>Do things in small doses/steps to prevent the target behavior and meltdown (e.g., limit the length of time working on homework at once or time spent in specific settings, such as the grocery store)</p>
<h3>Are there any ways in which you can have your child attend to activities in small doses/steps to prevent the target behavior? Please provide 1 or 2 examples</h3>
<textarea class="text_obj" cols="100" name="adv2-2-3fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<p>Congrats on finishing another task! Try to practice what you've learned so far! During the next task, you will review the final set of prevention strategies</p>
<img class="cancel" id="adv2-2_close" onclick="close_form('adv2-2')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv2-2_submit" onclick="get_answers('adv2-2_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv2-3">
<form class="form_container" id="adv2-3_form">
<h1>Prevention Strategies Part 2</h1>
<p>In this task, you will learn and reflect on how you can use three more prevention strategies</p>
<h2>Prevention Strategy Tip #4</h2>
<p>Respond to early signs of the problem to help your child stay calm and prevent the target behavior (for example, distract your child or change demands placed on them when you notice their mood changing)</p>
<h3>What are signs that occur before your child does the target behavior? Refer back to your ABC chart if needed</h3>
<textarea class="text_obj" cols="100" name="adv2-3-1fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<h3>What strategies can you use to help your child calm down when you notice those early signs?</h3>
<textarea class="text_obj" cols="100" name="adv2-3-2fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<h2>Prevention Strategy Tip #5</h2>
<p>Change how you ask or respond when requesting your child to comply with an activity (for example, give choices, avoid directly saying "no")</p>
<h3>Are there any ways that you can change the way you ask your child to do something (e.g., providing choices, giving a timer)?</h3>
<textarea class="text_obj" cols="100" name="adv2-3-3fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<h2>Prevention Strategy Tip #6</h2>
<p>Use visual or audio cues (e.g., pictures, schedules, timers, or set an order of events (for example, set the demand before a preferred activity versus the other way around)) to have predictable, consistent routines, when possible</p>
<h3>Can you add any visual or auditory cues to help your child transition between activities?</h3>
<textarea class="text_obj" cols="100" name="adv2-3-4fr" placeholder="Please provide 1 or 2 examples" rows="5"></textarea><br/>
<p>Now that we have covered various prevention strategies, we will move on to how to make visual schedules so you can help put these strategies into action during the next task!</p>
<img class="cancel" id="adv2-3_close" onclick="close_form('adv2-3')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv2-3_submit" onclick="get_answers('adv2-3_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv2-4">
<form class="form_container" id="adv2-4_form">
<h1>How to Make a Visual Schedule</h1>
<p>During this task, you will learn about how to use visual schedules and then be given examples of visual schedules so you can make your own!</p>
<h2>Teaching and Using Visual Schedules</h2>
<p>This video will explain what visual schedules are and how to use them with your child to increase the frequency with which desired behaviors occur, and to reduce the risk of problematic behaviors during transitions</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/pWtG7TkabH0?si=mdZfojyGMQKLOAEQ" title="YouTube video player" width="560"></iframe></div>
<h2>Examples of Visual Schedules</h2>Click on the link
        <a href="https://occupationaltherapy.com.au/how-to-make-a-visual-schedule/">here </a>to access a list of tips and a guide for creating a visual schedule
        <p>Take the night to think about what you might want to include in your child’s visual schedule. During the last task on this adventure, we will have you create and try out the visual schedule with your child</p>
<img class="cancel" id="adv2-4_close" onclick="close_form('adv2-4')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv2-4_submit" onclick="get_answers('adv2-4_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv2-5">
<form class="form_container" id="adv2-5_form">
<h1>Implementing Visual Schedule and Parent Mental Health Day</h1>
<p>Create your own visual schedule for your child based on what you learned in the video during the last task and the materials provided today</p>
<p>Post the visual schedule you create where your child can use it or show it to them before a change in activity</p>
<p>Take the next few days to try out the visual schedule you created with your child</p>
<p>Remember - While caring for your child, don't forget that it is also important to take care of yourself. Spend at least two minutes today to pause and relax or meditate, while not doing anything else</p>
<p>If you can, try this out right now. You can repeat as often as you like today and any other day. Remember, you have to be well to do well!</p>
<p>Congrats on finishing your second adventure! In this adventure you developed prevention strategies and visual schedules to assist with treatment goals and target behaviors. Great job, you are half way through the Support BRANCH Program, and have earned your Prevention Strategies Badge!</p>
<img class="cancel" id="adv2-5_close" onclick="close_form('adv2-5')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv2-5_submit" onclick="get_answers('adv2-5_form')" type="button">Submit</button>
</form>
</div>
</body>
</html>
