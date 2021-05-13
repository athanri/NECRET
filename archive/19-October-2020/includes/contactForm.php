<div id="contactForm" class="container-fluid">
    <div class="container">
        <form method="POST" action=".\php\send">
            <div class="form-group">
                <label for="name" class="form-label">Your Name*:</label>
                <input type="text" name="fName" class="form-control" tabindex="1" placeholder="Enter Your Full Name" required/>
            </div>

            <div>
                <label for="email" class="form-label">Your Email*:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" required/>
            </div>

            <div>
                <label for="phone" class="form-label">Your Phone No*:</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number" required/>
            </div>
            
            <div>
                <label for="subject" class="form-label">Subject*:</label>
                <input type="text" name="subject" class="form-control" placeholder="Enter Your Subject" required/>
            </div>
            
            <div>
                <label for="message" class="form-label">Message*:</label>
                <textarea cols="40" rows="5" name="message" class="form-control" placeholder="Feel free to send us a message here..." required></textarea>
                <input type="submit" value="Send" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>