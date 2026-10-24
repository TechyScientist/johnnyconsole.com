<?php
    $page = "projects";
    include("assets/include/header.php");
?>

<h3>Active Projects</h3>
<table>
	<tr>
		<th>Project Title</th>
		<th>Project Description</th>
		<th>Links</th>
	</tr>
    <tr>
        <td>The Cameroah Story (Novel Series)</td>
        <td>A series of novels following the story of two friends turned forbidden lovers.</td>
        <td><a href="cameroah">About the Series</a></td>
    </tr>
    <tr>
        <td>Android AI Chatbot App</td>
        <td>An app made using Kotlin and XML to serve as a multi-purpose, on-device AI Chatbot using the Gemma 4 Uncensored MAX model by PeppX.</td>
        <td><a href="https://github.com/TechyScientist/Android-Chatbot">Source Code (GitHub)</a></td>
    </tr>
	<tr>
		<td>Cryptography Suite</td>
		<td>An enterprise computing implementation of a variety of cipher algorithms, written in Java using the JBoss framework and Maven for dependency management</td>
		<td><a href="https://github.com/TechyScientist/CryptographySuite">Source Code (GitHub)</a><br><a href="https://wildfly.johnnyconsole.com:8443/cryptography-suite">Try it Out!</a></td>
	</tr>
	<tr>
		<td>Temperature Prediction Suite</td>
		<td>An enterprise computing dashboard for predicting temperatues based on historical data from Environment Canada (Ottawa Airport Station). Supports multiple different users with password hashing using <a href="https://github.com/patrickfav/BCrypt">BCrypt</a>. Written in Java using the JBoss framework and Maven for dependency management.<br><br><strong>Note:</strong> Access to this tool requires authentication. Username: <strong>guest</strong>, Password: <strong>TempSuiteGuest!2025</strong>. The guest user is a standard user (no administrative access) that has been disallowed to access the user profile section (i.e., the only available tool is to make a prediction using an existing model).</td>
		<td><a href="https://github.com/TechyScientist/TemperaturePredictionSuite">Source Code (GitHub)</a><br><a href="https://wildfly.johnnyconsole.com:8443/temperature-suite">Try it Out!</a></td>
	</tr>
    <tr>
        <td>Enterprise IMS</td>
        <td>An enterprise computing solution to inventory management, containing a RESTful API for use with future Android and iOS app implementations</td>
        <td><a href="https://github.com/TechyScientist/EnterpriseIMS">Source Code (GitHub)</a></td>
    </tr>
    <tr>
         <td>Enterprise Chess Club System</td>
         <td>An enterprise player/game management system for chess clubs. Includes rating calculation capabilities based on the ELO rating system</td>
         <td><a href="https://github.com/TechyScientist/ChessClub">Source Code (GitHub)</a></td>
    </tr>
    <tr>
         <td>Enterprise Library Management System</td>
	<td>An enterprise library management system</td>
	<td><a href="https://github.com/TechyScientist/EnterpriseLMS">Source Code (GitHub)</a></td>
    </tr>
</table><br>

<h3>Past Projects</h3>
<table>
    <tr>
        <th>Project Title</th>
        <th>Project Description</th>
        <th>Links</th>
    </tr>
    <tr>
        <td>CFC Players App</td>
        <td>Mobile applications for both the Android and iOS architectures based on native IDEs (Android Studio for Android, Xcode for iOS) and languages (Kotlin for Android and Swift for iOS) that asyncronously access the <a href="https://chess.ca">Chess Federation of Canada (CFC)</a> player search API to allow users to search for and view player CFC membership and rating information by searching by CFC ID number, Last Name, or First Name. Intended for tournament directors and arbiters to use to verify a player's membership and rating status, but can also be used by non-CFC users for the same purpose.</td>
        <td><a href="https://github.com/TechyScientist/CFCPlayers">Source Code (GitHub)</a></td>
    </tr>
</table> <br>

<h3>Planned Projects</h3>
<table>
	<tr>
		<th>Project Title</th>
		<th>Description</th>
		<th>Platform/Technology</th>
	</tr>
	<tr>
		<td>Physics Lab Timer with Photo-sensitive detector gates</td>
		<td>A hand-made clone of the <a href="http://ayva.ca/pasco/product/me-8932_smart_timer_photogate_system/">PASCO Smart Timer Photogate System (ME-8932)</a> for use in physics labs</td>
		<td>PIC32 Microcontroller, MPLAB X, XC32, Arduino nano, Arduino IDE, Arduino C</td>
	</tr>
	<tr>
		<td>Enterprise License Management Suite</td>
		<td>An enterprise computing suite for provisioning and managing software licensing information</td>
		<td>Jakarta EE (EJB, Web, RESTful), MySQL, Android, Kotlin, Android Studio, iOS, Swift and Xcode</td>
	</tr>
</table><br>

<h3>Suggestions?</h3>
<p>If you have a suggestion for a project, you can submit it for review using the <a href="contact">Contact page</a>.<br>
<strong>Developers:</strong> Most of my projects are open-source on GitHub under the <strong><a href="https://choosealicense.com/licenses/gpl-3.0/">GNU Public License v3</a></strong> unless otherwise stated - feel free to fork to add a feature and submit a pull request for review!</p>
<?php include("assets/include/footer.php"); ?>
