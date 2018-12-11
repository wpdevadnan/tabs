<?php $url = admin_url('admin.php?page=support_slug'); ?>
<?php
  global $current_user;
  get_currentuserinfo();
?>
<div class="container-fullw-width">
    <div class="jumbotron">
        <h1 class="display-3">Hello , <?php echo $current_user->user_login ?> </h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="http://google.com" role="button">Learn more About US </a>
        </p>
    </div>
    <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8">
            <form method="post" action="<?php $url ?>" >

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Skype</label>
                    <input type="text" name="skype_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Issue</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>

                <input type="submit" name="submit_social" id="submit" class="btn btn-primary btn-lg" value="SEND">
            </form>
            <br/><br/>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>

        </div> <!--- end of  form main div -->

        <div class="col-lg-4 col-sm-12 col-md-4">

            <div class="col-lg-12">
                <div class="bs-component">
                    <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Primary card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Secondary card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Success card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Danger card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Warning card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-info mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Info card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card bg-light mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Light card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-dark mb-3" style="max-width: 30rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Dark card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
            </div>
        </div>
    </div>
</div>