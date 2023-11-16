<?php
	require "pages/breadcrumbs.php";
?>
<section class="section section-lg bg-default text-md-left contact-section">
    <div class="container">
        <div class="contact-page">
            <div class="cp-left">
                <div class="aside-contacts">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">GET SOCIAL</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <li><a href="" class="icon fi fi-facebook-1"></a></li>
                                <li><a href="" class="icon fi fi-twitter"></a></li>
                                <li><a href="" class="icon fi fi-instagram-1"></a></li>
                                <li><a href="" class="icon fi fi-gplus"></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">PHONE</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <li><a href="" class="icon fi fi-phone">1-800-1234-567</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">E-MAIL</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <li><a href="" class="icon fi fi-mail-alt">info@demolink.org</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">ADDRESS</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <li><a href="" class="icon fi fi-location">6036 Richmond hwy., Alexandria, VA, 2230</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cp-right">
                <h4>Get in Touch</h4>
                <form id="frmContacts">
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <input class="form-input" type="email" name="txtName" placeholder="Your Name*">
                            <span class="form-validation"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <input class="form-input" type="email" name="txtMail" placeholder="Your E-mail*">
                            <span class="form-validation"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <select class="form-input" name="txtSelect" id="cmbSelect">
                                <option value="1">select a Service</option>
                                <option value="2">Dine-ln</option>
                                <option value="3">Carry-out</option>
                                <option value="4">Event Catering</option>
                            </select>
                            <span class="form-validation"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <input class="form-input" type="email" name="txtPhone" placeholder="Your Phone*">
                            <span class="form-validation"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-wrap">
                            <textarea class="form-input" name="txtmessage" id="" placeholder="message"></textarea>
                            <span class="form-validation"></span>
                        </div>
                    </div>
                    <div class="send-info">
                        <button class="button"><div class="content-original">send message</div></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
