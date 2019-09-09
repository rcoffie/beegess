<?php 

$page_id = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Begees</title>

<?php include dirname(__File__).'/includes/header.php' ?>
</head>
<body>


<!------------- Navbar ------>

<?php include dirname(__File__).'/includes/nav.php' ?>
  
<!------------ Body --------------->


<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push"  >

    <ul class="uk-slideshow-items " >
        <li>
            <img src="images/nathan-fertig-FBXuXp57eM0-unsplash.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h2 class="uk-margin-remove">Center</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/dan-gold-4HG3Ca3EzWw-unsplash.jpg" alt="" uk-cover>
            <div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
                <h3 class="uk-margin-remove">Bottom</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/christopher-jolly-GqbU78bdJFM-unsplash.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                <h3 class="uk-margin-remove">Overlay Bottom</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/grovemade-vfIx29EsLHA-unsplash.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-default uk-position-bottom-right uk-position-small">
                <h3 class="uk-margin-remove">Overlay Bottom Right</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet.</p>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

</div>

<div  class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Section</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>



<div  class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Section</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad tempore doloremque recusandae illo placeat? Iusto eligendi quam autem aut sunt quidem exercitationem, temporibus quos, molestiae, maiores inventore ipsam? Quod, consequuntur.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate esse necessitatibus quos alias labore quod! Repellendus possimus repellat ea voluptate consequuntur ut mollitia blanditiis delectus aliquam, libero eaque, atque cum.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus dolores, odio possimus adipisci, sunt eaque, quia error voluptatum minima nostrum optio. Ut accusamus porro voluptatum odit cum dolor quisquam unde.</p>
            </div>
        </div>

    </div>
</div>



<div id="target" class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Section</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>




 <!------------ Footer ------------>
 
 <?php include dirname(__File__).'/includes/footer.php' ?>
</body>
</html>