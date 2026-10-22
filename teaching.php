<?php
    $page = "teaching";
    include("assets/include/header.php");
?>
<script src="assets/script/teaching.js"></script>
<style>
    button {
        display: block;
        width: 100%;
        height: 3em;
        color: var(--blue);
        background-color: var(--background-color);
        border: 1px solid var(--blue);
        margin-bottom: 0.625em;
        padding: 0.5em;
        border-radius: 0.5em;
    }

    button:hover, button.selected {
        transition: all;
        transition-duration: 0.5s;
        color: var(--background-color);
        background-color: var(--blue);
    }


	table {
		border-spacing: 0;
		border-collapse: collapse;
	}

	th, td {
		max-width: 600px;
		text-align: left;
		align-items: center;
		padding: 10px;
        border: 1px solid var(--blue);
	}

    td.no-border {
        border: none;
    }
</style>

<h3>Teaching</h3>
<p>I have upwards of six years of experience teaching students in Algoma University's Faculty of Computer Science & technology in a variety of courses as both a teaching assistant and as an instructor. I have experience teaching the following courses:</p>

<table>
	<tr>
		<td class="no-border" style="display: grid; grid-template-columns: auto auto; grid-column-gap: 0.625em;">
            <button class="classBtn selected">PHYS 1006</button>
            <button class="classBtn">PHYS 1007</button>
            <button class="classBtn">COSC 1047</button>
            <button class="classBtn">COSC 2006</button>
            <button class="classBtn">MATH 2056</button>
            <button class="classBtn">COSC 2406</button>
            <button class="classBtn">COSC 2956</button>
            <button class="classBtn">COSC 3596</button>
            <button class="classBtn">COSC 4086</button>
            <button class="classBtn">COSC 4087</button>
            <button class="classBtn">COSC 4235</button>
            <button class="classBtn">COSC 4596</button>
        </td>
        <td class="no-border" id="infoCol" style="vertical-align: top;"></td>
	</tr>
</table>

<h3>Teaching Assistantships</h3>
<p>Upper-year (i.e., third- and fourth year) students are invited to complete this <a href="https://forms.gle/9khQoxA9Vn9EaD5F7">Teaching Assistant Application Form</a> <strong>while signed in to your Algoma University Gmail account</strong> to apply for any open teaching assistant positions for my courses. Positions are added to the list as I am assigned to them and are removed from the list as TAs are chosen. Please do not submit a general TA application - these will be discarded. Only successful applicants will be contacted to complete the hiring process. Emailed submissions are currently <strong>not</strong> accepted: <em>all applications must be done using the linked form</em>.</p>


<h4 style="margin-left: 10px;">Notable Current and Past Teaching Assistants</h4>
<p style="margin-left: 10px;"><strong><em>Note</em></strong>: The table below is dated using the <strong>academic
        year</strong>. This academic year is:
    <?php
    $year = intval(date('Y'));
    $month = intval(date('n'));
    if ($month < 9) {
        echo "<strong>Fall " . ($year - 1) . "</strong> <em>(Sept - Dec)</em>, <strong>Winter $year</strong> <em>(Jan - Apr)</em>,  <strong>Spring $year</strong> <em>(May - Aug)</em>";
    } else {
        echo "<strong>Fall $year</strong> <em>(Sept - Dec)</em>, <strong>Winter " . ($year + 1) . "</strong> <em>(Jan - Apr)</em>,  <strong>Spring " . ($year + 1) . "</strong> <em>(May - Aug)</em>";
    }
    ?></p>
<table style="margin-left: 10px;">
    <tr>
        <th>Name</th>
        <th>Period of Supervision</th>
        <th>Courses</th>
        <th>Graduation</th>
        <th>Current Whereabouts</th>
    </tr>
    <tr>
        <td><a href="https://www.linkedin.com/in/maria-de-melo-34ba721b4/">Maria de Melo</a></td>
        <td>Winter 2021 - Spring 2023</td>
        <td>COSC 2406 - Assembly Language Programming (Lab)</td>
        <td>Spring 2023</td>
        <td>Software Engineer at Ciena (Ottawa, ON)</td>
    </tr>
    <tr>
        <td><a href="https://www.linkedin.com/in/hasitha-hewakuruppu-71b172147/">Hasitha Hewakuruppu</a></td>
        <td>Fall 2023 - Winter 2024</td>
        <td>PHYS 1006 - Introductory Physics I (Lab)<br/>PHYS 1007 - Introductory Physics II (Lab)<br/>COSC 2006 - Data Structures I (Lab)</td>
        <td>Spring 2024</td>
        <td>AI Trainer at DataAnnotation (Remote)</td>
    </tr>
    <tr>
        <td><a href="https://www.linkedin.com/in/braeden-hong-20b86a256/">Braeden Hong</a></td>
        <td>Winter 2023 - Winter 2025</td>
        <td>COSC 2006 - Data Structures I (Lab)<br/>COSC 2406 - Assembly Language Programming (Lab)</td>
        <td>Spring 2025</td>
        <td>Software Engineer at PlayEveryWare (Yokohama, JP)</td>
    </tr>
    <tr>
        <td><a href="https://www.linkedin.com/in/mpetingola/">Mitchell Petingola</a></td>
        <td>Winter 2024 - Winter 2025</td>
        <td>COSC 2406 - Assembly Language Programming (Lecture/Lab)</td>
        <td>Spring 2025</td>
        <td>MSc Computing candidate at Queen's University (Kingston, ON)<br/>Vector Scholarship (AI) Recipient</td>
    </tr>
    <tr>
        <td><a href="https://www.linkedin.com/in/sabab-rahman-a9878420a/">Sabab Rahman</a></td>
        <td>Winter 2025 - Fall 2025</td>
        <td>COSC 1047 - Introduction to Computer Science II (Lab)<br/>COSC 2406 - Assembly Language Programming (Lecture/Lab)</td>
        <td>Winter 2026</td>
        <td></td>
    </tr>
</table><br/>


<h3>Supervision of Project and Thesis Work</h3>
<p>Are you a third year computer science student at Algoma University looking to complete a project or thesis in your fourth year? To request supervision for your project or thesis, please fill out my <a href="https://forms.gle/R2Wcyz2MLjCcQYnRA">Project/Thesis Supervision Request Form</a> <strong>while signed in to your Algoma University Gmail account</strong>. My areas of expertise include the following:
<ul style="margin-left: 35px;">
	<li>Desktop application development (Java, Python, C/C++)</li>
	<li>Android application development (Kotlin and Java)</li>
	<li>iOS application development (Swift with Storyboard design methodology)</li>
	<li>Low-level software design (MASM, MPASM)</li>
	<li>Use of microcontrollers (i.e., Raspberry Pi, Arduino)</li>
	<li>Physics calculations, applications and measurements</li>
</ul></p>
<p>It is ideal if you have a project or thesis topic that you want to study before requesting supervision, but if you don't have any ideas, you can always ask if there are any project or thesis ideas I may have for you.</p>

<h4 style="margin-left: 10px;">Current and Past Thesis and Project Students</h4>
<p style="margin-left: 10px;"><strong><em>Note</em></strong>: The table below is dated using the <strong>academic year</strong>. This academic year is:
    <?php
    $year = intval(date('Y'));
    $month = intval(date('n'));
    if ($month < 9) {
        echo "<strong>Fall " . ($year - 1) . "</strong> <em>(Sept - Dec)</em>, <strong>Winter $year</strong> <em>(Jan - Apr)</em>,  <strong>Spring $year</strong> <em>(May - Aug)</em>";
    } else {
        echo "<strong>Fall $year</strong> <em>(Sept - Dec)</em>, <strong>Winter " . ($year + 1) . "</strong> <em>(Jan - Apr)</em>,  <strong>Spring " . ($year + 1) . "</strong> <em>(May - Aug)</em>";
    }
    ?></p>
<table style="margin-left: 10px;">
    <tr>
        <th>Student Name</th>
        <th>Academic Term</th>
        <th>Supervised</th>
        <th>Topic</th>
    </tr>
    <tr>
        <td>Gift Mukolo</td>
        <td rowspan="2">Winter 2025</td>
        <td rowspan="2">Project</td>
        <td>Mobile chat application</td>
    </tr>
    <tr>
        <td>Chanchalpreet Singh</td>
        <td>Chat application with encryption</td>
    </tr>
    <tr>
        <td>Ashlinn Forsyth</td>
        <td>Fall 2025<br/>Winter 2026</td>
        <td>Thesis</td>
        <td>Examining How Graphical Design Elements Convey Information to Players in Video Games</td>
    </tr>
</table>

<?php include("assets/include/footer.php"); ?>
