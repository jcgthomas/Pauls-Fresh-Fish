<?php
    $pagetitle="Pauls Fresh Fish - Contact";
    include_once('resources/page/header.php');
?>

<h1 class="title">Drop us a message</h1>

<p class="callPaul">
Call Paul on <strong class="phoneNumber"><span>07527</span><span>898767</span></strong> for enquiries or to arrange a delivery.
</p>
<p class="callPaul">
You can also <a class="textFacebook" href="https://www.facebook.com/paulsfish2010" target="_blank">visit our facebook page by clicking here.</a>
</p>

<img id="contactImage" src="resources\images\paul 1000x1000.jpg" alt="Paul at the market" srcset="">

<div id="contact">
    <form id="contactForm" action="" method="POST">
        <ul>
            <li class="formGroup">
                <input class="formEntry" 
                        type="text" 
                        name="name" 
                        id="contactName" 
                        placeholder="Name" 
                        required>
            </li>
            <li class="formGroup">
                <input class="formEntry" 
                        type="email" 
                        name="email" 
                        id="contactEmail" 
                        placeholder="Email" 
                        required>
            </li>  
            <li class="formGroup">
                <input class="formEntry" 
                        type="text" 
                        name="subject" 
                        id="contactSubject" 
                        placeholder="Subject" 
                        required>
            </li>
            <li id="contactBox" class="formGroup">
                <textarea class="formEntry"
                        maxlength="4000"
                        name="message"
                        id="contactMessage"
                        placeholder="Message"></textarea>
            </li>
            <li class="formGroup">
            <button type="submit" id="submit" class="submitButton">
                Send Message
            </button>
            </li>    
        </ul>
        
    </form>
</div>

<?php
    include_once('resources/page/footer.php');
?>
