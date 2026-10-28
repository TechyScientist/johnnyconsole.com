<?php
$page = "projects";
include("../../assets/include/header.php"); ?>
<link rel="stylesheet" href="../../assets/style/pages/contact.css">
<script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>

<h3>Reviewer Dashboard</h3>
<p style="margin-left: 15px;"><strong>Chapter Rating System</strong>: <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/clean.png" alt="Clean"> = Clean/SFW chapter &emsp; <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/suggestive.png" alt="Suggestive"> = Mildly Spicy/Suggestive chapter &emsp; <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/spicy.png" alt="Spicy!"> = Spicy/NSFW chapter<br>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<img class="large-icon" src="../../assets/img/cameroah/rating-icons/trigger-warning.png" alt="Trigger Warning"> = Trigger Warning</p>
<?php if(isset($_GET['error'])) { ?>
    <p id="error"><strong>Error <?php echo $_GET['error']; ?></strong>: <?php echo $_GET['message']; ?></p>
<?php }
if(isset($_GET['feedback'])) {?>
    <p id="success">Thank you, your feedback has been sent!</p>
<?php } ?>

<p><strong><em>The Cameroah Paradox</em> Chapter Draft List:</strong></p>
<ul>
	<li><a href="../../assets/docs/cameroah/paradox/chapter1.pdf">Chapter 1: Convocation Day</a> Version 15 (19 April 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/clean.png" alt="Clean"></li>
	<li><a href="../../assets/docs/cameroah/paradox/protected/chapter2.pdf">Chapter 2: The Innocent Party</a> Version 7 (12 April 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/clean.png" alt="Clean"></li>
	<li><a href="../../assets/docs/cameroah/paradox/protected/chapter3.pdf">Chapter 3: The Game that Changed Everything</a> Version 5 (23 January 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/suggestive.png" alt="Suggestive"></li>
	<li><a href="../../assets/docs/cameroah/paradox/protected/chapter4.pdf">Chapter 4: A Night to Remember</a> Version 9 (9 February 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/spicy.png" alt="Spicy!"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapter5.pdf">Chapter 5: The Aftermath</a> Version 8 (23 January 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/suggestive.png" alt="Suggestive"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapter8.pdf">Chapter 8: A Day of Endless Taunting</a> Version 5 (27 March 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/suggestive.png" alt="Suggestive"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapter9.pdf">Chapter 9: The Dreaded Meeting</a> Version 1 (27 March 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/clean.png" alt="Clean"></li>
    <li>Coming Soon: Chapter 11: Game Day</li>
    <li>Coming Soon: Chapter 12: After the Final Buzzer</li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapter13.pdf">Chapter 13: Five for Roughing</a> Version 6 (19 March 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/spicy.png" alt="Spicy!"></li>
    <li>Coming Soon: Chapter 15: The Awkward Dinner with Cameron's Family <img class="large-icon" src="../../assets/img/cameroah/rating-icons/trigger-warning.png" alt="Trigger Warning"> Homophobia</li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapter16.pdf">Chapter 16: Taking Flight</a> Version 3 (30 April 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/clean.png" alt="Clean"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapterB.pdf">Unordered Chapter B: Date Night, Noah's Style</a> Version 6 (9 April 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/clean.png" alt="Clean"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapterI.pdf">Unordered Chapter I: Getaway</a> Version 5 (30 May 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/suggestive.png" alt="Mildly Spicy/Suggestive"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapterJ.pdf">Unordered Chapter J: Using the Amenities</a> Version 2 (30 May 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/spicy.png" alt="Spicy!"></li>
    <li><a href="../../assets/docs/cameroah/paradox/protected/chapterK.pdf">Unordered Chapter K: Using the Love Hotel</a> Version 2 (29 May 2026) <img class="rating-icon" src="../../assets/img/cameroah/rating-icons/spicy.png" alt="Spicy!"></li>
    <li>Coming Soon: Unordered Chapter L: Unraveled in Detention</li>
</ul><br>

<!--<p><strong><em>The Cameroah Mystery</em> Chapter Draft List:</strong></p>
<ul>
    <li>No Draft Chapters Available</li>
</ul><br> -->

<h3>Submit Feedback</h3>
<p>Fields marked with <sup>*</sup> are required.</p>
<form action="../../assets/script/cameroah/reviewer/feedback.php" method="post">
    <div class="form-field">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="form-field">
        <label for="chapter"><sup>*</sup>Chapter</label>
        <select name="chapter" id="chapter">
            <optgroup label="The Cameroah Paradox - Chapters in Sequence">
                <option>Chapter 1: Convocation Day</option>
                <option>Chapter 2: The Innocent Party</option>
                <option>Chapter 3: The Game that Changed Everything</option>
                <option>Chapter 4: A Night to Remember</option>
                <option>Chapter 5: The Aftermath</option>
                <option>Chapter 8: A Day of Endless Taunting</option>
                <option>Chapter 9: The Dreaded Meeting</option>
                <option disabled>Chapter 11: Game Day</option>
                <option disabled>Chapter 12: After the Final Buzzer</option>
                <option>Chapter 13: Five for Roughing</option>
                <option>Chapter 16: Taking Flight</option>
            </optgroup>
            <optgroup label="The Cameroah Paradox - Unordered Chapters">
                <option>Unordered Chapter B - Date Night, Noah's Style</option>
                <option>Unordered Chapter I - Getaway</option>
                <option>Unordered Chapter J - Using the Amenities</option>
                <option>Unordered Chapter K - Using the Love Hotel</option>
                <option disabled>Unordered Chapter L - Unraveled in Detention</option>
            </optgroup>
            <!-- <optgroup label="The Cameroah Mystery">
                <option disabled>No Chapters Available</option>
            </optgroup> -->
        </select>
    </div>
    <div class="form-field">
        <label for="feedback"><sup>*</sup>Feedback</label>
        <textarea name="feedback" id="feedback" required></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6LeLENIqAAAAAHyU0WlGVFyTJ3RA_YcNeTdiZoUw" data-action="CONTACT"></div>
    <button type="submit" name="cameroah-feedback-submit" id="cameroah-feedback-submit"> Submit Feedback</button>
</form>

<?php include("../../assets/include/footer.php"); ?>
