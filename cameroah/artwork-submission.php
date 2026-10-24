<?php
$page = "projects";
include("../assets/include/header.php");?>

<a href="paradox">< Return to Book Page</a><br><br>

<p id="warning"><strong>Warning</strong>: This form does not work yet! No data will be submitted.</p>
<h3>Artwork Submission: The Cameroah Paradox</h3>
<form action="" method="post">
    <label for="anonymous">Check this box to remain anonymous:
    <input type="checkbox" id="anonymous" name="anonymous"></label><br><br>
   <div id="name-div">
        <label for="name" id="label-name">Your name:</label>
        <input type="text" id="name" name="name" required><br><br>
   </div>
    <label for="email">Your E-mail:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="type">Artwork Type:</label>
    <select id="type" name="type">
        <option>Cover Art</option>
        <option>Concept Art/Other Art</option>
    </select><br><br>
    <label for="file">Upload File</label>
    <input type="file" id="file" name="file" accept="image/*" required><br><br>
    <input type="submit" id="artwork-submit" name="artwork-submit" value="Submit"><br><br>
</form>


<script type="text/javascript">
    document.getElementById("anonymous").addEventListener("change", function() {
        if(this.checked) {
            document.getElementById("name-div").style.display = "none";
        }
        else {
            document.getElementById("name-div").style.display = "block";
        }
        document.getElementById("name").toggleAttribute("required");
    });
</script>
<?php include("../assets/include/footer.php"); ?>
