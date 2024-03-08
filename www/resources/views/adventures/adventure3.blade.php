<!DOCTYPE html>

<html>
<head>
<title>Reinforcing Behabvior</title>
<link href="{{ asset('css/adventure3.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/badge.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/forms.css') }}" rel="stylesheet"/>
<script src="{{ asset('js/popup_form.js') }}"></script>
</head>
<body>
<div>
<img class="adv_background" src="{{ asset('assets/adventure.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 10%;">
<img class="badge" id="adv3-1_badge" onclick="open_form('adv3-1')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 30%;">
<img class="badge" id="adv3-2_badge" onclick="open_form('adv3-2')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 50%;">
<img class="badge" id="adv3-3_badge" onclick="open_form('adv3-3')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 70%;">
<img class="badge" id="adv3-4_badge" onclick="open_form('adv3-4')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 90%;">
<img class="badge" id="adv3-5_badge" onclick="open_form('adv3-5')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="form_popup" id="adv3-1">
<form class="form_container" id="adv3-1_form">
<h1>Types of Reinforcements</h1>
<h2>Reinforcements &amp; Decreasing Problem Behaviors</h2>
<p>In this third adventure, you will learn to use reinforcers to help your child comply with directions and also practice other effective methods to decrease problem behaviors</p>
<h2>Types of Reinforcement</h2>
<p>This video discusses positive reinforcement and provides tips for using this parenting strategy</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/1ml28hSuYE0?si=zph1iZSScRTReWy3" title="YouTube video player" width="560"></iframe></div>
<h3>What are some examples of reinforcements?</h3>
<textarea class="text_obj" cols="100" name="adv3-1-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>We hope you learned a lot of about reinforcements today! Over the next day, spend at least three 10-minute sessions observing your child and identify what activities they like to do or toys they enjoy playing with. Tomorrow's task will allow you to figure out what types of things are reinforcing for your child</p>
<img class="cancel" id="adv3-1_close" onclick="close_form('adv3-1')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv3-1_submit" onclick="get_answers('adv3-1_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv3-2">
<form class="form_container" id="adv3-2_form">
<h1>How to Identify Reinforcements</h1>
<h3>Yesterday you were supposed to have observed your child to identify what activities they like to do. So, what did you notice that your child likes to do or play with?</h3>
<textarea class="text_obj" cols="100" name="adv3-2-1fr" placeholder="Let us know!" rows="5"></textarea><br/>
<h2>Try it Out!</h2>
<h3>Pick one of the activities or toys your child likes and do it with them. Then come back to the Support BRANCH Program to reflect on the experience</h3>
<textarea class="text_obj" cols="100" name="adv3-2-2fr" placeholder="What did you notice?" rows="5"></textarea><br/>
<h3>List 3 or 4 possible reinforcers for your child</h3>
<textarea class="text_obj" cols="100" name="adv3-2-3fr" placeholder="What do you think could work?" rows="5"></textarea><br/>
<p>Tonight, think about a desired behavior (for example, complying after one request, sharing with sibling, sitting at dinner table) you would like to increase in your child. We will have you practice using reinforcers to increase the use of this desired behavior tomorrow</p>
<p>Whew, what a day! Congrats on completing this task</p>
<img class="cancel" id="adv3-2_close" onclick="close_form('adv3-2')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv3-2_submit" onclick="get_answers('adv3-2_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv3-3">
<form class="form_container" id="adv3-3_form">
<h1>Practicing Reinforcing Behaviors and Setting Up a Point/Token System</h1>
<p>Yesterday we asked you to think of a desired behavior you want to increase in your child. Today, use one of the reinforcers you listed in yesterday's task to reinforce your child when the desired behavior occurs. It is important to pick a behavior that you can reinforce each time it occurs (for now). Initially, aim to use rewards that can be given immediately</p>
<p>You can also work with your child to earn tokens or points to lead up to a larger reward, if needed! We will discuss how to set up this points/token system during the rest of this task and have you practice using it during the next task</p>
<h2>Setting Up a Point/Token System</h2>
<p>A token economy system is one of the most effective ways to get kids to follow the rules and engage more frequently in positive, desired behaviors. Token economies can involve lots of different types of "tokens." Token systems with tangible items the child can see (for example, pom poms, marbles, pennies, poker chips in a jar or box) work well for children 2-8 year-olds, whereas a point system works fine for older children</p>
<h3>What type of token economy system do you plan to use?</h3>
<textarea class="text_obj" cols="100" name="adv3-3-1fr" placeholder="Think about items you already have on hand around the house (like, cotton balls) so you don't need to buy anything" rows="5"></textarea><br/>
<p>Great, now that you have thought of the type of system you want to use, now you need to identify up to three behaviors to address for your child. Pick a behavior that your child is already doing fairly well, a behavior that needs a little improvement, and a challenging behavior. This will help with setting your child up for success and getting buy-in to the new system!</p>
<h3>What are the three behaviors you would like to target in your child?</h3>
<p>Make sure to frame the behaviors in a positive way. That is, instead of saying "don't hit your sister" you should frame the behavior you will be reinforcing as "keeping your hands to yourself"</p>
<textarea class="text_obj" cols="100" name="adv3-3-2fr" placeholder="What is the first behavior you'd like to target?" rows="5"></textarea><br/>
<textarea class="text_obj" cols="100" name="adv3-3-3fr" placeholder="the second?" rows="5"></textarea><br/>
<textarea class="text_obj" cols="100" name="adv3-3-4fr" placeholder="the third?" rows="5"></textarea><br/>
<p>Congrats on finishing one of our longer tasks! Good job identifying the three behaviors you would like to target. Before your task tomorrow, start thinking of some rewards that may help reinforce when your child engages in desired behaviors (e.g., picking the movie for family movie night, an extra book before bed, 10 extra minutes with the tablet)</p>
<img class="cancel" id="adv3-3_close" onclick="close_form('adv3-3')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv3-3_submit" onclick="get_answers('adv3-3_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv3-4">
<form class="form_container" id="adv3-4_form">
<h1>Continuing to Use a Point/Token System and Planned Ignoring</h1>
<h2>Implementing a Point/Token System</h2>
<p>Using the list of reinforcers you already generated, create a reward menu with a variety of items for your child. Offer rewards worth different point values so they can still earn something smaller on days where they may have struggled more. For example, staying up 15 minutes later may be worth 3 tokens/points, and choosing a special snack to include in their lunch the next day may be 5 tokens/points, but choosing an item from the Target Bullseye’s Playground may be 10 tokens/points. Almost all of the rewards should be things that are free or low cost - picking what to eat for dinner, baking cookies with you, going to the park, or getting an extra bedtime story</p>
<p>This week, introduce the token economy system to your child along with showing them the reward menu you create. See if they have any additional rewards they would like to add; if you agree, determine an appropriate point value and add it to the menu. Remember! A token system is about rewarding positive behavior, not punishing misbehavior or mistakes</p>
<p>Over the next few weeks, try out your token economy system. These systems often take a bit of trial and error. Perhaps you made the rewards too easy to earn. Or maybe, your child just isn't motivated by the rewards you're offering on the menu. If the system isn't working to change your child's behavior, don't get rid of the system altogether! Instead, just a few small changes can make a big difference in helping your child change his behavior. So, make sure you give your plan plenty of time before you make any major changes to it!</p>
<h2>What is Planned Ignoring and Why Should I Use It?</h2>
<p>This video introduces the idea of planned ignoring and how you can use it reduce attention to and thus occurrences of minor problematic behaviors</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/3fOy4l1jmmo?si=vKRSt4mDRM3BdhGM" title="YouTube video player" width="560"></iframe></div>
<h3>Trevor insults his brother Deshawn when Deshawn is playing by himself. Deshawn keeps playing. Is this an example of Deshawn using planned ignoring?</h3>
<input class="radio_obj" id="adv3-4-1ss-0" name="adv3-4-1ss" type="radio" value="1"/>
<label class="input_lbl" for="adv3-4-1ss-0">Yes</label><br/>
<input class="radio_obj" id="adv3-4-1ss-1" name="adv3-4-1ss" type="radio" value="0"/>
<label class="input_lbl" for="adv3-4-1ss-1">No</label><br/>
<p>The correct answer is: Yes</p>
<p>Another task done! During the last task on this adventure you will practice planned ignoring with your child. Good luck using the token economy system this week!</p>
<img class="cancel" id="adv3-4_close" onclick="close_form('adv3-4')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv3-4_submit" onclick="get_answers('adv3-4_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv3-5">
<form class="form_container" id="adv3-5_form">
<h1>Practice Ignoring and Parent Mental Health</h1>
<h3>Choose a target behavior that you would like to see decrease in your child. How would you ignore that behavior?</h3>
<textarea class="text_obj" cols="100" name="adv3-5-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>Try to practice ignoring today. Remember, the behavior might get worse before it gets better. Stay the course as long as your child is safe</p>
<p>You may need to physically turn your body away from your child to show that you are ignoring the behavior</p>
<p>Make sure you take care of your own mental health today. Throughout the day take 5 deep breaths (in through your nose, out through your mouth) three different times</p>
<p>Congrats on finishing your third adventure! You are almost done with the Support BRANCH Program, and have earned your third bade, the Reinforcing Behavior Badge!</p>
<img class="cancel" id="adv3-5_close" onclick="close_form('adv3-5')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv3-5_submit" onclick="get_answers('adv3-5_form')" type="button">Submit</button>
</form>
</div>
</body>
</html>
