<?php 
$pageid = "navigation001";
$scss = "dev/scss/3_project/_navigation.scss";
$myPath = __FILE__;

$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
    <nav id="navigation1" class="c-navi1">
        <ul>
            <li>
            	<a href="#nav-section1" data-number="1" class="is-selected">
            	<span class="c-navi1__dot"></span>
            	<span class="c-navi1__label">Item 1</span>
            	</a>
            </li>
        	<li>
        		<a href="#nav-section2" data-number="2">
        		<span class="c-navi1__dot"></span>
            	<span class="c-navi1__label">Item 2</span>
            	</a>
        	</li>
        	<li>
        		<a href="#nav-section3" data-number="3">
        		<span class="c-navi1__dot"></span>
            	<span class="c-navi1__label">Item 3</span>
            	</a>
        	</li>
        	<li>
        		<a href="#nav-section4" data-number="4">
        		<span class="c-navi1__dot"></span>
            	<span class="c-navi1__label">Item 4</span>
            	</a>
        	</li>
        	<li>
        		<a href="#nav-section5" data-number="5">
        		<span class="c-navi1__dot"></span>
            	<span class="c-navi1__label">Item 5</span>
            	</a>
        	</li>
        	<li>
        		<a href="#nav-section6" data-number="6">
        		<span class="c-navi1__dot"></span>
            	<span class="c-navi1__label">Item 6</span>
            	</a>
        	</li>
        </ul>
    </nav>
    <section id="nav-section1" class="c-section">
    	<h1>VERTICAL FIXED NAVIGATION</h1>
    	<a href="#nav-section2" class="c-scrolldown"><img src="/assets/img/common/nav-arrow-bottom.svg" alt="" width="38" height="44"></a>
    </section>
    <section id="nav-section2" class="c-section">
    	<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam, totam iusto officia earum perferendis, culpa ad atque eveniet praesentium nobis expedita similique beatae tenetur. Distinctio vel tenetur, id cum.”</p>
    </section>
    <section id="nav-section3" class="c-section">
    	<p>“Nullam quis ultrices est, et laoreet enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras velit augue, ultrices ac enim ut, dignissim commodo lacus. Fusce posuere, risus sit amet ultrices laoreet, risus augue commodo dolor, id rutrum magna sem sed dolor.”</p>
    </section>
    <section id="nav-section4" class="c-section">
    	<p>“Cras a ante consectetur, elementum enim vel, sollicitudin lacus. Quisque ultrices, eros ut dapibus commodo, urna ligula dapibus justo, non dapibus nisi lorem vitae velit. Duis eu vulputate eros. ”</p>
    </section>
    <section id="nav-section5" class="c-section">
    	<p>“Fusce cursus magna lorem, id suscipit ipsum lobortis sed. Donec luctus velit sit amet ex egestas lobortis. Nunc nibh dui, ullamcorper eu felis vitae, varius lacinia tortor. Aenean luctus velit sed tellus commodo, ornare aliquam justo porta. Duis porta elementum nisi, sit amet ullamcorper eros mollis nec.”</p>
    </section>
    <section id="nav-section6" class="c-section">
    	<p>“Fusce dapibus dolor eget ante scelerisque auctor. Suspendisse at orci luctus, ornare ex sed, laoreet ante. Sed quis quam vel sapien tincidunt viverra quis at augue. Aenean elit nisi, elementum non maximus eu, tincidunt convallis arcu. Donec ac enim id turpis elementum cursus.”</p>
    </section>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>