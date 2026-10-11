<?php
    $page = "teaching";
    include("assets/include/header.php");
?>

<style>
	table {
		border-spacing: 0;
		border-collapse: collapse;
	}

	th, td {
		max-width: 800px;
		text-align: left;
		align-items: center;
		padding: 10px;
		border: 1px solid var(--blue);
	}
</style>

<h3>Teaching</h3>
<p>I have upwards of six years of experience teaching students in Algoma University's Faculty of Computer Science & technology in a variety of courses as both a teaching assistant and as an instructor. I have experience teaching the following courses:</p>

<table>
	<tr>
		<th>Course</th>
		<th>Academic Calendar Description</th>
		<th>Teaching Capacity</th>
	</tr>
	<tr>
		<th>PHYS 1006 - Introductory Physics I</th>
		<td>This course is the first of two courses that provide the student with a thorough understanding of the basic concepts of physics. Topics covered include kinematics, dynamics, work, energy and momentum, equilibrium and fluids, waves and sound, temperature, heat, and thermodynamics. The theoretical concepts are augmented by weekly laboratory work and assignments.</td>
		<td>Teaching Assistant<br/>Lab Instructor</td>
	</tr>
	<tr>
		<th>PHYS 1007 - Introductory Physics II</th>
		<td>This is an introductory Physics course for students who have completed a 4U Physics course or a university physics course with mechanics. A knowledge of mechanics, vectors, and energy is assumed. The topics covered are: Geometrical Optics, Electricity and Magnetism and Modern Physics.</td>
		<td>Teaching Assistant<br/>Lab Instructor</td>
	</tr>
	<tr>
		<th>COSC 1047 - Introduction to Computer Science II</th>
		<td>This course takes a software engineering approach to programming in the large, with particular emphasis on modularity, abstract data types, program specification, testing, documentation, and maintenance. Students will develop and document software with reusable software libraries.</td>
		<td>Teaching Assistant<br/>Lab Instructor</td>
	</tr>
	<tr>
		<th>COSC 2006 - Data Structures I</th>
		<td>An introduction to data structures and their associated algorithms. Pointers and dynamic memory. Treatment of stacks, queues, and linked lists. Searching and sorting algorithms. Analysis of time and space requirements.</td>
		<td>Teaching Assistant<br/>Lab Instructor<br/>Lecture Instructor</td>
	</tr>
	<tr>
		<th>MATH 2056 - Discrete Mathematics II</th>
		<td>This course will cover the following topics: countability of sets; first order logic; algebra of relations; graph theory including path problems, chromatic number, trees, planarity, directed graphs and directed trees; recurrence relations; O (f), o (f), and ~ (f) notations.</td>
		<td>Teaching Assistant</td>
	<tr>
		<th>COSC 2406 - Assembly Language Programming</th>
		<td>This is an introduction to basic computer organization and instruction set architecture. Topics considered include: the instruction execution cycle; an overview of the assembly process; data representation; addressing modes, arrays, and strings; translation of high-level language control structures; procedures, parameter passing, and recursion; macros and conditional assembly; interrupts and input/output; interfacing to high level languages; floating point process or architecture and instructions code; code optimization techniques.</td>
		<td>Teaching Assistant<br/>Lab Instructor<br/>Lecture Instructor</td>
	</tr>
	<tr>
		<th>COSC 2956 - Internet Tools</th>
		<td>Various internet tools and services are examined. These include advanced editors, Java, JavaScript, web browsers, ftp, and the creation and maintenance of web pages and web sites. The course emphasizes the integration of these tools into a programming environment.</td>
		<td>Lecture Instructor</td>
	</tr>
	<tr>
		<th>COSC 3596 - Mobile Application Development I</th>
		<td>This course introduces the student to one of the major Mobile Computing platforms and develops their ability to write software applications for the platform. The student will learn to use the application development software for the platform and study the structure of the operating system and the application programs. They will learn to write programs that employ techniques to utilize complex User Interfaces, animation and graphics, data storage and retrieval, text input and output, network services, and platform hardware such as the camera and sensors. The Android operating system will form the basis for this course.</td>
		<td>Lecture Instructor</td>
	</tr>
	<tr>
		<th>COSC 4086 - Fourth Year Project I</th>
		<td>This course will be composed of a written report on some approved topic of research in the field of Computer Science, or an approved comprehensive software and/or hardware project together with a report documenting the project and related research - followed by a short public presentation of the research/project. The content of this project should not overlap with other projects the student has completed in other courses. Group projects are allowed with prior departmental consent. Departmental approval is required prior to registration and students need to present a proposal at least 20 days prior to approval.</td>
		<td>Project Supervisor</td>
	</tr>
	<tr>
		<th>COSC 4087 - Fourth Year Project II</th>
		<td>A written report on some approved topic of research in the field of Computer Science, or an approved comprehensive software and/or hardware project together with a report documenting the project and related research - followed by a short public presentation of the research/project. The content of this project should not overlap with other projects the student has completed in other courses. Group projects are allowed with prior departmental consent. Departmental approval is required prior to registration and students need to present a proposal at least 20 days prior to approval. </td>
		<td>Project Supervisor</td>
    </tr>
    <tr>
        <th>COSC 4235 - Thesis in Computer Science</th>
        <td>This course consists of a project in computer science chosen in consultation with, and supervised by, a member of the department. This course is only open to students enrolled in the fourth year of the Specialized program in Computer Science.</td>
        <td>Thesis Supervisor</td>
    </tr>
	<tr>
		<th>COSC 4596 - Mobile Application Development II</th>
		<td>This course extends the knowledge the student gained in COSC 3596 - Mobile Application Development I to two of the more popular of the other operating systems in the field. The course will focus on the development of applications that run on the Microsoft Surface tablet and Windows 8 computers and devices as well as devices that run Apple's iOS operating system such as the iPad and iPhone.</td>
		<td>Lecture Instructor</td>
	</tr>
</table><br/>
<h3>Teaching Assistantships</h3>
<p>Upper-year (i.e., third- and fourth year) students are invited to complete this <a href="https://app.smartsheet.com/b/form/60690b2107d74a63bfa8fd92636cbf66">Teaching Assistant Application Form</a> to apply for any open teaching assistant positions for my courses. Positions are added to the list as I am assigned to them and are removed from the list as TAs are chosen. Please do not submit a general TA application - these will be discarded. Only successful applicants will be contacted to complete the hiring process. Emailed submissions are currently <strong>not</strong> accepted: <em>all applications must be done using the linked form</em>.</p>


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
<p>Are you a third year computer science student at Algoma University looking to complete a project or thesis in your fourth year? To request supervision for your project or thesis, please fill out my <a href="https://app.smartsheet.com/b/form/40e4cdfd3c3c4a0b97da6c991c6d44dd">Project/Thesis Supervision Request Form</a>. My areas of expertise include the following:
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
