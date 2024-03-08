<!DOCTYPE html>

<html>
<head>
<title>Behavioral Principles</title>
<link href="{{ asset('css/adventure1.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/badge.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/forms.css') }}" rel="stylesheet"/>
<script src="{{ asset('js/popup_form.js') }}"></script>
</head>
<body>
<div>
<img class="adv_background" src="{{ asset('assets/adventure.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 10%;">
<img class="badge" id="adv1-1_badge" onclick="open_form('adv1-1')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 30%;">
<img class="badge" id="adv1-2_badge" onclick="open_form('adv1-2')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 50%;">
<img class="badge" id="adv1-3_badge" onclick="open_form('adv1-3')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 70%;">
<img class="badge" id="adv1-4_badge" onclick="open_form('adv1-4')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 90%;">
<img class="badge" id="adv1-5_badge" onclick="open_form('adv1-5')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="form_popup" id="adv1-1">
<form class="form_container" id="adv1-1_form">
<h1>Principles of Behavior: Understanding the Family Cycle</h1>
<p>During this first adventure, you'll be working to identify treatment goals, discuss functions of behavior, analyze your child's behaviors, and understand antecedents to behavioral problems</p>
<h2>Challenging Child Behaviors and the Family Cycle</h2>
<p>This video introduces the negative family cycle that often occurs when children display problematic behaviors and some of the strategies we will cover during Support BRANCH to help overcome these challenges.</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/fCcr5Cte8cw?si=EdsKs7eZqbAvfYCz" title="YouTube video player" width="560"></iframe></div>
<h2>Difficult Behaviors to Focus On</h2><p>What do you find to be most challenging as a parent?<p>
<textarea class="text_obj" cols="100" name="adv1-1-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/><p>Which of your child's difficult behaviors do you want to focus on in this journey?
Which of your child's behaviors do you find most problematic?<p>
<input class="radio_obj" id="adv1-1-2ss-0" name="adv1-1-2ss" type="radio" value="1"/>
<label class="input_lbl" for="adv1-1-2ss-0">Non-Compliance (resists help in a task, fails to follow through on directions)</label><br/>
<input class="radio_obj" id="adv1-1-2ss-1" name="adv1-1-2ss" type="radio" value="2"/>
<label class="input_lbl" for="adv1-1-2ss-1">Aggression (injures self/others, throws objects, spits)</label><br/>
<input class="radio_obj" id="adv1-1-2ss-2" name="adv1-1-2ss" type="radio" value="3"/>
<label class="input_lbl" for="adv1-1-2ss-2">Resistance to Change (has difficulties in flexibility, insists on routines &amp; sameness)</label><br/>
<input class="radio_obj" id="adv1-1-2ss-3" name="adv1-1-2ss" type="radio" value="4"/>
<label class="input_lbl" for="adv1-1-2ss-3">Tantrums (screams, cries, throws self on floor, destroys property)</label><br/>
<p>Keep this behavior in mind as we talk about the ABCs of behavior throughout this module to better understand why this problematic behavior is occurring</p>
<p>For more information to assist you throughout this program, please visit our resource page</p>
<a href="https://www.vtcar.science.vt.edu/clinical-services/Treks_behavior_difficulties.html">vtcar web site</a>
<img class="cancel" id="adv1-1_close" onclick="close_form('adv1-1')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv1-1_submit" onclick="get_answers('adv1-1_form')" type="button">Submit</button>
</p></p></p></p></form>
</div>
<div class="form_popup" id="adv1-2">
<form class="form_container" id="adv1-2_form">
<h1>The ABCs of Behavior: Part 1</h1>
<h2>ABC Model &amp; Charts</h2>
<p>We will now introduce the idea of the "ABCs" of Behavior or the Antecedent-Behavior-Consequence Model, before talking about using ABC Charts to better understand and change your child's behavior</p>
<p>Watch this video to learn more about the ABCs of Behavior Model!</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/3G2dCbwEPgE?si=Q7gZU_iusnP1-RMB" title="YouTube video player" width="560"></iframe></div>
<h2>Practice Identifying the ABCs</h2><p>What is the antecedent in this example: Mary hits Fred after he takes the toy she is playing with<p>
<input class="radio_obj" id="adv1-2-1ss-0" name="adv1-2-1ss" type="radio" value="1"/>
<label class="input_lbl" for="adv1-2-1ss-0">Mary hits Fred</label><br/>
<input class="radio_obj" id="adv1-2-1ss-1" name="adv1-2-1ss" type="radio" value="2"/>
<label class="input_lbl" for="adv1-2-1ss-1">Fred takes Mary's toy</label><br/>
<p>The correct answer is: Fred takes Mary's toy.</p><p>What is the behavior in this example: Mary hits Fred after he takes her toy, and the teacher tells Fred to give the toy back to her<p>
<input class="radio_obj" id="adv1-2-2ss-0" name="adv1-2-2ss" type="radio" value="1"/>
<label class="input_lbl" for="adv1-2-2ss-0">Mary gets her toy</label><br/>
<input class="radio_obj" id="adv1-2-2ss-1" name="adv1-2-2ss" type="radio" value="2"/>
<label class="input_lbl" for="adv1-2-2ss-1">Mary hits Fred</label><br/>
<p>The correct answer is: Mary hits Fred.</p><p>What is the consequence in this example: After Mary hits Fred for taking her toy, the teacher tells Fred to give the toy back to her<p>
<input class="radio_obj" id="adv1-2-3ss-0" name="adv1-2-3ss" type="radio" value="1"/>
<label class="input_lbl" for="adv1-2-3ss-0">Mary gets her toy</label><br/>
<input class="radio_obj" id="adv1-2-3ss-1" name="adv1-2-3ss" type="radio" value="2"/>
<label class="input_lbl" for="adv1-2-3ss-1">Mary hits Fred</label><br/>
<p>The correct answer is: Mary gets her toy back.</p>
<p>Now that you understand what the ABCs of Behavior are, we will cover how to use an ABC Chart.</p>
<img class="cancel" id="adv1-2_close" onclick="close_form('adv1-2')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv1-2_submit" onclick="get_answers('adv1-2_form')" type="button">Submit</button>
</p></p></p></p></p></p></form>
</div>
<div class="form_popup" id="adv1-3">
<form class="form_container" id="adv1-3_form">
<h1>The ABCs of Behavior: Part 2</h1>
<h2>Functions of Behavior</h2>
<p>Another aspect we look for when understanding children's behaviors, are the functions of the behavior</p>
<p>Check out this chart to review the four functions of behaviors and let's practice identifying them!</p>
<div class="embed_image">
<img src="{{ asset('https://i.pinimg.com/474x/98/17/10/981710b1ae30431fab9a057a974ef6e8.jpg') }}" style="width: 75%;"/>
</div>You can access this image on our resource page or download it
        <a href="https://i.pinimg.com/474x/98/17/10/981710b1ae30431fab9a057a974ef6e8.jpg">here</a>
<h2>Practice Identifying Functions of Behaviors</h2>
<p>Which one of these is an example of an escape/avoidance function of a behavior?</p>
<ol>
<li>John's mother tells her to put his tablet away so he can get ready for bed. John does not listen, so his mother takes it away from him. John starts to scream and kicks his feet on the ground. His mother gives him back his tablet and he stops screaming and kicking</li>
<li>Sarah's mother is putting her baby brother to bed, and Sarah gets upset because she wants a bedtime story. She begins throwing her toys and yelling. In order to stop her from yelling, Sarah's mother leaves the brother's room and reads Sarah a bedtime story</li>
</ol>
<input class="radio_obj" id="adv1-3-1ss-0" name="adv1-3-1ss" type="radio" value="1"/>
<label class="input_lbl" for="adv1-3-1ss-0">Example 1</label><br/>
<input class="radio_obj" id="adv1-3-1ss-1" name="adv1-3-1ss" type="radio" value="2"/>
<label class="input_lbl" for="adv1-3-1ss-1">Example 2</label><br/>
<p>The correct answer is: Example 2</p>
<img class="cancel" id="adv1-3_close" onclick="close_form('adv1-3')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv1-3_submit" onclick="get_answers('adv1-3_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv1-4">
<form class="form_container" id="adv1-4_form">
<h1>Intro to the ABC Chart</h1>
<p>Click on the link here to access a template of an ABC chart and either print or create your own based on this format</p>
<a href="https://i.pinimg.com/originals/9b/6c/ef/9b6cefe154372767c2140f9607c58532.png">ABC Chart</a>
<div class="embed_image">
<img src="{{ asset('https://i.pinimg.com/originals/9b/6c/ef/9b6cefe154372767c2140f9607c58532.png') }}" style="width: 75%;"/>
</div>
<h3>Example of a Completed Chart</h3>
<p>Don't forget to refer back to the four functions of behaviors in yesterday's task to help you determine the function of your child's behaviors</p>
<div class="embed_image">
<img src="{{ asset('https://i.pinimg.com/originals/f4/a7/b4/f4a7b4f2c7d05d90097ee6e4ed572bc3.jpg') }}" style="width: 75%;"/>
</div>
<p>Over the next two days, complete your ABC chart while considering the problematic behavior you identified at the beginning of this adventure. Refer to the example completed ABC Chart if you need help. Once you have completed the chart, come back to finish your first adventure and reflect on the results of your completed ABC Chart</p>
<textarea class="text_obj" cols="100" name="adv1-4-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<img class="cancel" id="adv1-4_close" onclick="close_form('adv1-4')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv1-4_submit" onclick="get_answers('adv1-4_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv1-5">
<form class="form_container" id="adv1-5_form">
<h1>Results of the ABC Chart and Review / Parent Mental Health Day</h1>
<p>Congrats on finishing your first adventure! During this adventure you learned about behavioral functions, learned how to analyze your child's behaviors, and how to understand antecedents to behavioral problems. So let's reflect and review!</p><p>What is one example of an ABC sequence you noted when observing your child's behavior?<p>
<textarea class="text_obj" cols="100" name="adv1-5-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/><p>What are some themes you noticed regarding the function of your child's behaviors? Select all that apply.<p>
<input class="checkbox_obj" id="adv1-5-2ms-0" name="adv1-5-2ms" type="checkbox" value="1"/>
<label class="input_lbl" for="adv1-5-2ms-0">Attention-Seeking</label><br/>
<input class="checkbox_obj" id="adv1-5-2ms-1" name="adv1-5-2ms" type="checkbox" value="2"/>
<label class="input_lbl" for="adv1-5-2ms-1">Seeks Tangible Item</label><br/>
<input class="checkbox_obj" id="adv1-5-2ms-2" name="adv1-5-2ms" type="checkbox" value="3"/>
<label class="input_lbl" for="adv1-5-2ms-2">Escape/Avoidance</label><br/>
<input class="checkbox_obj" id="adv1-5-2ms-3" name="adv1-5-2ms" type="checkbox" value="4"/>
<label class="input_lbl" for="adv1-5-2ms-3">Seeks Sensory Input</label><br/><p>What else have you learned about your child's behaviors this week?<p>
<textarea class="text_obj" cols="100" name="adv1-5-3fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>While caring for your child, don't forget that it is also important to take care of yourself. Take the day off tomorrow and engage in an activity that you enjoy (for example, go for a walk, take a relaxing bath, watch a favorite movie or TV show). In addition to engaging in some self-care, keep trying to identify antecedents to behavioral problems and observe how your child responds to different consequences to their problematic behaviors over the next week.</p><p>What enjoyable activity do you plan on doing today?<p>
<textarea class="text_obj" cols="100" name="adv1-5-4fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>Great job! You have earned the Behavioral Principles Badge for Completing Your First Adventure!</p>
<img class="cancel" id="adv1-5_close" onclick="close_form('adv1-5')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv1-5_submit" onclick="get_answers('adv1-5_form')" type="button">Submit</button>
</p></p></p></p></p></p></p></p></form>
</div>
</body>
</html>
