<div class="sidebar-item submit-comment">
                <div class="sidebar-heading">
                  <h2>Your comment</h2>
                </div>
                <div class="content">
                  <form id="comment" action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="hidden" id="name" placeholder="Your name" required="required">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="email" type="hidden" id="email" placeholder="Your email" required="required">
                        </fieldset>
                      </div>
 
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="comment" rows="6" id="comment" placeholder="Type your comment"
                            required="required"></textarea>
                        </fieldset>
                        <input type="hidden" name="comment_post_ID" value="37" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button" name="submit" value="Post Comment">Submit</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>