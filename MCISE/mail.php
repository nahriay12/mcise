<form action="php/mail.php" method="post">
           
                <div id="contact-input">
                 <!--[if IE]>
                    <label for="name">Name</label>
                <![endif]-->
                  <input type="text" name="nom" id="name" placeholder="Name (required)" >
                   <!--[if IE]>
                   		<label for="email">Email</label>
                    <![endif]-->
                  <input type="text" name="email" id="email" placeholder="Email (required)">
                   <!--[if IE]>
                   		<label for="subject">Subject</label>
                    <![endif]-->
                  <input type="text" name="subject" id="subject" placeholder="Subject" >
                </div>
                <div id="contact-textarea">
                 <!--[if IE]>
                   		<label for="message">Your Message Here</label>
                    <![endif]-->
                  <textarea name="message" id="message" cols="39" rows="4" placeholder="Your Message"></textarea>
                </div>
                <div id="contact-submit">
                  <div>
                    <input type="submit" href="mail.php" name="submit" tabindex="5" value="Post Comment" class="comment-submit small button">
                  </div>
                </div>
              </form> 