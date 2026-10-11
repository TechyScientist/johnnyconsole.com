<?php
$page = "projects";
include("../assets/include/header.php");?>

<style>
    form label {
        margin-right: 5px;
    }

    form input, form label, form select {
        display: inline-block;
    }

    form input, form select {
        width: 25em;
        background-color: rgba(0,0,0,0);
        color: var(--blue);
        border: 0.0625em solid var(--blue);
        padding: 0.313em;
        border-radius: 0.5em;
    }

    form input[type=checkbox] {
        width: unset;
    }

    form input[type="submit"] {
        width: 25em;
        height: 3em;
        color: white;
        background-color: var(--blue);
        border-radius: 0.5em;
    }
</style>

<a href="paradox">< Return to Book Page</a><br/><br/>

<p id="warning"><strong>Warning</strong>: This form does not work yet! No data will be submitted.</p>
<h3>Artwork Submission: The Cameroah Paradox</h3>
<form action="" method="post">
    <label for="anonymous">Check this box to remain anonymous:
    <input type="checkbox" id="anonymous" name="anonymous"/></label><br/><br/>
   <div id="name-div">
        <label for="name" id="label-name">Your name:</label>
        <input type="text" id="name" name="name" required/><br/><br/>
   </div>
    <label for="email">Your E-mail:</label>
    <input type="email" id="email" name="email" required/><br/><br/>
    <label for="type">Artwork Type:</label>
    <select id="type" name="type">
        <option>Cover Art</option>
        <option>Concept Art/Other Art</option>
    </select><br/><br/>
    <label for="file">Upload File</label>
    <input type="file" id="file" name="file" accept="image/*" required><br/><br/>
    <input type="submit" id="artwork-submit" name="artwork-submit" value="Submit"><br/><br/>
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
