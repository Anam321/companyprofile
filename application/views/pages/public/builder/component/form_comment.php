 <?php
    defined('BASEPATH') or exit('No direct script access allowed'); ?>
 <div class="comment-form wow fadeInUp">
     <div class="single-comment wow fadeInUp">
         <h2>3 Comments</h2>
         <ul class="comment-list">
             <li class="comment-item">
                 <div class="comment-body">
                     <div class="comment-img">
                         <img src="img/user.jpg" />
                     </div>
                     <div class="comment-text">
                         <h3><a href="">Josh Dunn</a></h3>
                         <span>01 Jan 2045 at 12:00pm</span>
                         <p>
                             Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non
                             eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea
                             dictumst.
                         </p>
                         <a class="btn" href="">Reply</a>
                     </div>
                 </div>
             </li>
             <li class="comment-item">
                 <div class="comment-body">
                     <div class="comment-img">
                         <img src="img/user.jpg" />
                     </div>
                     <div class="comment-text">
                         <h3><a href="">Josh Dunn</a></h3>
                         <p><span>01 Jan 2045 at 12:00pm</span></p>
                         <p>
                             Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non
                             eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea
                             dictumst.
                         </p>
                         <a class="btn" href="">Reply</a>
                     </div>
                 </div>
                 <ul class="comment-child">
                     <li class="comment-item">
                         <div class="comment-body">
                             <div class="comment-img">
                                 <img src="img/user.jpg" />
                             </div>
                             <div class="comment-text">
                                 <h3><a href="">Josh Dunn</a></h3>
                                 <p><span>01 Jan 2045 at 12:00pm</span></p>
                                 <p>
                                     Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis
                                     sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel
                                     justo. In hac platea dictumst.
                                 </p>
                                 <a class="btn" href="">Reply</a>
                             </div>
                         </div>
                     </li>
                 </ul>
             </li>
         </ul>
     </div>
     <h2>Leave a comment</h2>
     <form>
         <div class="form-group">
             <label for="name">Name *</label>
             <input type="text" class="form-control" id="name">
         </div>
         <div class="form-group">
             <label for="email">Email *</label>
             <input type="email" class="form-control" id="email">
         </div>
         <div class="form-group">
             <label for="website">Website</label>
             <input type="url" class="form-control" id="website">
         </div>

         <div class="form-group">
             <label for="message">Message *</label>
             <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <input type="submit" value="Post Comment" class="btn">
         </div>
     </form>
 </div>