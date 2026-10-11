<nav>
    <a href="/" <?php if(!isset($page)) { ?> id="current" <?php } ?>>Home</a>
    <a href="/education" <?php if(isset($page) && $page == "education") { ?> id="current" <?php } ?>>Education</a>
    <a href="/teaching" <?php if(isset($page) && $page == "teaching") { ?> id="current" <?php } ?>>Teaching</a>
    <a href="/projects" <?php if(isset($page) && $page == "projects") { ?> id="current" <?php } ?>>Projects</a>
    <a href="/contact" <?php if(isset($page) && $page == "contact") { ?> id="current" <?php } ?>>Contact</a>
    <a href="https://lab.johnnyconsole.com/" class="navlink">Lab</a>
    <a href="https://wildfly.johnnyconsole.com:8443" class="navlink">Wildfly Server</a>
    <a href="https://github.com/TechyScientist/" class="navlink">GitHub</a>
</nav>
