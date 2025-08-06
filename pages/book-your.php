<section class="book-your">
    <div class="container">
        <h3 class="title-section">BOOK YOUR TABLE</h3>
        <form class="form-reserve" id="frmReserve">
            <div class="row row-20 gutters-20">
                <div class="col-md-4 col-lg-4 person-info">
                    <div class="form-wrap has-error wow slideInDown">
                        <input class="form-input" type="text" name="txtName" placeholder="Your Name*">
                        <span class="form-validation"></span>
                        <!--<label class="form-label">Your Name*</label>-->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 person-info">
                    <div class="form-wrap wow slideInDown">
                        <input class="form-input" type="email" name="txtMail" placeholder="Your E-mail">
                        <span class="form-validation"></span>
                        <!--<label class="form-label">Your E-mail</label>-->
                    </div>
                </div>
                <div class="col-lg-4 person-info">
                    <div class="form-wrap wow slideInDown">
                        <select class="form-input" name="cmbService" id="">
                            <option value="1">select a Service</option>
                            <option value="2">Dine-ln</option>
                            <option value="3">Carry-out</option>
                            <option value="4">Event Catering</option>
                        </select>
                        <span class="form-validation"></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap wow fadeIn">
                        <textarea class="form-input" name="txtmessage" id="" placeholder="message"></textarea>
                        <span class="form-validation"></span>
                        <!-- <span class="form-validation">The text field is required.</span>-->
                        <!-- <label class="form-label">message</label>-->
                    </div>
                </div>
            </div>
            <div class="send-info">
                <button class="button">
                    <div class="content-original">send message</div>
                </button>
                <article class="quote-classic">
                    <div class="quote-text">
                        <p>Please reserve your table at least 1 day in advance.</p>
                    </div>
                </article>
            </div>
        </form>
    </div>
</section>