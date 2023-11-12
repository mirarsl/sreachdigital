<form method="post" action="{{route('store')}}">
    @csrf
    <input type="hidden" name="type" value="İletişim Mesajı">
    <fieldset>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <input class="from-control" type="text" id="name" name="json[name]" placeholder="İsim & Soyisim" required="">
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" id="email" name="json[email]" placeholder="E-Posta" required="">
            </div>   
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" id="phone" name="json[phone]" placeholder="Telefon" required="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <input class="from-control" type="text" id="company" name="json[company]" placeholder="Firmanız" required="">
            </div>
            <div class="col-lg-12 mb-30">
                <textarea class="from-control" id="message" name="json[message]" placeholder="Mesajınız" required=""></textarea>
            </div>
        </div>
        <div class="btn-part">                                            
            <div class="form-group submit-btn mb-0">
                <button class="submit">Gönder</button>
            </div>
        </div> 
    </fieldset>
</form>