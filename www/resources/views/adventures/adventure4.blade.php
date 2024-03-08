<!DOCTYPE html>

<html>
<head>
<title>Compliance and Coping</title>
<link href="{{ asset('css/adventure4.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/badge.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/forms.css') }}" rel="stylesheet"/>
<script src="{{ asset('js/popup_form.js') }}"></script>
</head>
<body>
<div>
<img class="adv_background" src="{{ asset('assets/adventure.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 10%;">
<img class="badge" id="adv4-1_badge" onclick="open_form('adv4-1')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 30%;">
<img class="badge" id="adv4-2_badge" onclick="open_form('adv4-2')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 50%;">
<img class="badge" id="adv4-3_badge" onclick="open_form('adv4-3')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 70%;">
<img class="badge" id="adv4-4_badge" onclick="open_form('adv4-4')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="badge_div" style="top: 30%; left: 90%;">
<img class="badge" id="adv4-5_badge" onclick="open_form('adv4-5')" src="{{ asset('assets/simple_explore.png') }}"/>
</div>
<div class="form_popup" id="adv4-1">
<form class="form_container" id="adv4-1_form">
<h1>Using Replacement Behaviors</h1>
<h2>Using Replacement Behaviors</h2>
<p>This video introduces the idea of replacement behaviors to help you identify ways to change your child’s problematic behaviors</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/Jx9v4KrVqgM?si=4y9vmNedlPds-M5_" title="YouTube video player" width="560"></iframe></div>
<p>To review, a replacement behavior should be easier and more effective than the problem behavior. It should also result in more reinforcement immediately following the appropriate replacement behavior</p>
<p>For example, with attention-seeking problem behaviors, the replacement behaviors will also result in your child receiving attention. However, this attention will be positive rather than negative. Try this with your child. Remember to provide the reinforcement after your child does the replacement behavior</p>
<p>Think about the target problem behavior that you have identified and come up with a replacement behavior that is more appropriate. If your child is younger, aim to first model the behavior or show a video or picture of the behavior before expecting it to be done. For example, using a visual schedule to show that they must "First show the replacement behavior" and "Then get a reinforcement" can also be helpful</p>
<p>Make sure you have tried out teaching and reinforcing a replacement behavior before moving forward with this task.</p>
<h3>Describe the replacement behavior you used</h3>
<textarea class="text_obj" cols="100" name="adv4-1-1fr" placeholder="How did it work?" rows="5"></textarea><br/>
<img class="cancel" id="adv4-1_close" onclick="close_form('adv4-1')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv4-1_submit" onclick="get_answers('adv4-1_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv4-2">
<form class="form_container" id="adv4-2_form">
<h1>Teaching and Practicing Compliance Training</h1>
<p>During this final adventure, you will learn how to teach your children to comply with commands, use appropriate coping skills and behaviors, and generalize strategies to other behaviors</p>
<h2>Teaching Compliance</h2>
<p>Another strategy that is important to teach your child is compliance. This involves teaching them to listen and follow through on instructions the first time they hear them</p>
<h3>List up to 5 commands that your child is already compliant to (without objection)</h3>
<textarea class="text_obj" cols="100" name="adv4-2-1fr" placeholder="Let us know what you think" rows="5"></textarea><br/>
<h3>Now, make a list of up to 5 commands that your child typically won't follow (but is capable of complying)</h3>
<textarea class="text_obj" cols="100" name="adv4-2-2fr" placeholder="Let us know what you think" rows="5"></textarea><br/>
<p>Now, let's review the four steps that are necessary for your child to learn to follow commands</p>
<ol>
<li>Make sure you have your child's attention (for example, call their name, make sure they are looking at you)</li>
<li>Tell (not ask) your child what to do (for example, Please go pick up the toys and clothes from the floor of your bedroom). State the command clearly and only once so your child knows exactly what they are supposed to do</li>
<li>If they do not comply, physically guide them to complete the command (by gesturing, pointing, modeling, or putting your hands over theirs). Ideally you want to use the minimum amount of physical guidance</li>
<li>If they comply, provide praise immediately so they learn that immediate compliance results in immediate reinforcement</li>
</ol><br/>Check out
        <a href="https://pcit.ucdavis.edu/wp-content/uploads/2012/08/48_BEDIRECTrevised.pdf">this document </a>that provides reminders on how to BE DIRECT to give effective commands and increase compliance!
        <h3>Let's review! Mrs. Edwards wants her son, Rob, to come to the dinner and yells "Come here" from the kitchen while he is watching TV in the living room. Is Mrs. Edwards following the compliance training steps?</h3>
<input class="radio_obj" id="adv4-2-3ss-0" name="adv4-2-3ss" type="radio" value="1"/>
<label class="input_lbl" for="adv4-2-3ss-0">Yes</label><br/>
<input class="radio_obj" id="adv4-2-3ss-1" name="adv4-2-3ss" type="radio" value="0"/>
<label class="input_lbl" for="adv4-2-3ss-1">No</label><br/>
<p>The correct answer is: No</p>
<h3>Mr. Johnson wanted his son Andrew to comply with cleaning up his toys. He decides to target one specific command: "Put your blue car in the box." He pointed at the car in front of Andrew while providing this command. Andrew picked up the car and put it in the box and Mr. Johnson reinforced him with a high-five. Is Mr. Johnson following the compliance training steps?</h3>
<input class="radio_obj" id="adv4-2-4ss-0" name="adv4-2-4ss" type="radio" value="1"/>
<label class="input_lbl" for="adv4-2-4ss-0">Yes</label><br/>
<input class="radio_obj" id="adv4-2-4ss-1" name="adv4-2-4ss" type="radio" value="0"/>
<label class="input_lbl" for="adv4-2-4ss-1">No</label><br/>
<p>Reading 21</p>
<p>Review the list of compliance commands you created during yesterday's trek and practice the 4 steps with at least 2 of those commands. Don't forget to provide immediate praise for immediate compliance!</p>
<p>Congrats on finishing another task! Try to practice what you've learned! Tomorrow you will learn about extending this compliance work to the school setting</p>
<img class="cancel" id="adv4-2_close" onclick="close_form('adv4-2')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv4-2_submit" onclick="get_answers('adv4-2_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv4-3">
<form class="form_container" id="adv4-3_form">
<h1>Extending Compliance Training to School/Implementing a DRC</h1>
<h2>Extending Compliance Training to School</h2>
<p>So far, you have learned strategies to reduce your child's problem behaviors at home. Now we will discuss how to work with your child's school to extend these skills to the school environment. In order for this to be effective, your home Token Economy System should be in place, so you can reinforce good behavior at school through the home token economy system</p>
<p>This video discusses the research supporting the use of a daily behavior report card (DRC) to help reduce behavior problems in the classroom and facilitate home-school communication</p>
<div class="embed_video"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/Xv-odWyrbfE?si=5VFrlR1GzFEIY--y" title="YouTube video player" width="560"></iframe></div>
<a href="https://ccf.fiu.edu/research/_assets/how_to_establish_a_school_drc.pdf">Here </a>is information on how to set up a school-home daily report card and examples of what these can look like. Determine whether you would like to send an email or speak with your child's teacher about establishing a DRC for your child
        <p>Let's review! Here are the steps for setting up a DRC at school:</p>
<ol>
<li>Identify Areas for Improvement</li>
<li>Determine How to Define the Target Behaviors/Goals</li>
<li>Decide on the Behaviors and Criteria for the Daily Report Card</li>
<li>Explain the Daily Report Card to Your Child</li>
<li>Integrate the Daily Report Card into Your Existing Token Economy System</li>
<li>Monitor, Modify, and Trouble-Shoot the Daily Report Card System as Needed</li>
</ol>
<h2>Decide your next step to start the process of implementing the DRC for your child. For example, this could be emailing yourself the link with the steps we just shared to print and review again, or emailing your child's teacher the link to discuss whether they would be open to setting up something like this</h2>
<textarea class="text_obj" cols="100" name="adv4-3-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>Another task done! Tomorrow you will learn techniques to help teach your child to use coping skills</p>
<img class="cancel" id="adv4-3_close" onclick="close_form('adv4-3')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv4-3_submit" onclick="get_answers('adv4-3_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv4-4">
<form class="form_container" id="adv4-4_form">
<h1>Teaching Coping Skills</h1>
<p>Coping skills are things we do to make ourselves feel better and that are not harmful to ourselves or others. Learning how to cope with big emotions is critical to being successful socially, behaviorally, and academically</p>
<p>It takes practice to be able to effectively use coping skills when you are experiencing a big emotion! As parents, showing and labeling your own use of coping skills is a great way to support your child learning to use these. Practicing these skills when your child isn't experiencing a big emotion is also key! There are lots of great resources available for children of different ages to learn and practice various coping skills. Here are some of our favorites:</p><ul><li>
<a href="https://www.youtube.com/watch?v=3EKPfQYi7GQ">Sesame Street: Monster Meditation (pre-school and early school-age)</a><li>
<a href="https://www.youtube.com/@mindfulnessmaya2019">Mindfulness Maya (elementary school age)</a><li>
<a href="https://www.youtube.com/playlist?list=PL74fOsUPmepxeNuIISeiL3W_Or4gjDUj8">Go Zen - Mindfulness Meditations for Kids (elementary and middle school age)</a></li></li></li></ul><br/>Check out
        <a href="https://www.bigspringsd.org/site/handlers/filedownload.ashx?moduleinstanceid=3901&amp;dataid=3974&amp;FileName=100%20Coping%20Skills.pdf">this list </a>of 100 Coping Strategies. Identify strategies that you already use or could use in your day to day life to manage your own stressors. Also think of which of these strategies your child could use alone, or with you
        <h3>Write down 10 coping strategies that you can use for yourself or with your child to help manage big emotions</h3>
<textarea class="text_obj" cols="100" name="adv4-4-1fr" placeholder="Let us know what you think!" rows="5"></textarea><br/>
<p>This week, try to practice using your coping skills at least once each day. Try to do a coping skill with your child 3-5 times throughout the week. On tomorrow's task, you will practice the techniques discussed today to teach your child the newly targeted skill you identified</p>
<img class="cancel" id="adv4-4_close" onclick="close_form('adv4-4')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv4-4_submit" onclick="get_answers('adv4-4_form')" type="button">Submit</button>
</form>
</div>
<div class="form_popup" id="adv4-5">
<form class="form_container" id="adv4-5_form">
<h1>Generalization, Maintenance, and Planning for the Future</h1>
<h2>What is Generalization and Maintenance?</h2>
<p>In order to promote generalization of behavior change and maintenance of new skills, follow these strategies:</p>
<ol>
<li>Continue to reinforce! This is very necessary in order to maintain a behavior. Reinforce across different settings (e.g., home, school, therapy)!</li>
<li>Use reinforcers that naturally occur depending on the setting (e.g., being able to go get a drink of water and go for a walk after completing seated desk work)</li>
<li>Make sure that behavior problems are not being reinforced in situations outside of the home. Discuss any new behavior or skill changes with your child's teachers and treatment providers so everyone is on the same page!</li>
<li>Over time, fade reinforcement of the new skill to a more realistic and natural reinforcement schedule (e.g. intermittent reinforcement or delayed reinforcement)</li>
</ol>
<p>If you would like to reinforce and generalize the use of coping skills that we discussed yesterday, consider adding these to your child's token economy system as a target behaviors!</p>
<p>It’s important for your child to regularly utilize their coping skills, both when they are struggling and when they are feeling well. Why? It takes practice to reap the full benefits from a coping skill. As such, you should reinforce practicing coping skills regardless of when they occur for consistency!</p>
<p>With regard to maintenance, your child's needs may shift over time, so adapting their coping skills or adding new ones may be necessary. Make sure to re-visit your child's list of coping skills every few months. Are there skills that are no longer working for them or ones you or they would like to add?</p>
<h3>Spend some time today thinking about 2-3 behaviors or skills that your child has learned and begun using (or has started to learn) that you would like to focus on</h3>
<textarea class="text_obj" cols="100" name="adv4-5-1fr" placeholder="What would you like to focus on?" rows="5"></textarea><br/>
<h3>Do you feel like you will be able to continue to use the techniques learned during this journey to help coach your child develop more positive behaviors and skills?</h3>
<input class="radio_obj" id="adv4-5-2ss-0" name="adv4-5-2ss" type="radio" value="1"/>
<label class="input_lbl" for="adv4-5-2ss-0">Definitely</label><br/>
<input class="radio_obj" id="adv4-5-2ss-1" name="adv4-5-2ss" type="radio" value="2"/>
<label class="input_lbl" for="adv4-5-2ss-1">Most Likely</label><br/>
<input class="radio_obj" id="adv4-5-2ss-2" name="adv4-5-2ss" type="radio" value="3"/>
<label class="input_lbl" for="adv4-5-2ss-2">Maybe</label><br/>
<input class="radio_obj" id="adv4-5-2ss-3" name="adv4-5-2ss" type="radio" value="4"/>
<label class="input_lbl" for="adv4-5-2ss-3">Not Likely</label><br/>
<input class="radio_obj" id="adv4-5-2ss-4" name="adv4-5-2ss" type="radio" value="5"/>
<label class="input_lbl" for="adv4-5-2ss-4">Not At All</label><br/>
<p>Congrats on finishing this last adventure! We hope you were able to learn a lot on this adventure. Take time to congratulate yourself today on a job well done! Give yourself a high-five or a pat on the back. Also, remember to take some mental health days as you continue to support your child</p>
<p>Now go celebrate this amazing achievement with your child and family! Here is your fourth and final badge, the Compliance and Coping Badge! You have also earned a certificate of completion for participating in this Support BRANCH Program! You can add your name and download your certificate here</p>
<img class="cancel" id="adv4-5_close" onclick="close_form('adv4-5')" src="{{ asset('assets/x-close.svg') }}"/>
<p></p>
<button class="submit" id="adv4-5_submit" onclick="get_answers('adv4-5_form')" type="button">Submit</button>
</form>
</div>
</body>
</html>
