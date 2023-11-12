@if (session()->has('status'))
    <div class="alert alert-success small snackbar-{{session()->get('status')}}" >{{session()->get('message')}}</div>
@endif
<form method="post" action="{{route('store')}}">
    @csrf
    <input type="hidden" name="type" value="İletişim Mesajı">
    <fieldset>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <input class="from-control" type="text" id="name" name="json[name]" placeholder="İsim & Soyisim" value="{{old('json.name')}}" required>
                @error('json.name')
                  <div class="alert alert-danger small mt-3" >{{$message}}</div>
                @enderror
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" id="email" name="json[email]" placeholder="E-Posta" value="{{old('json.email')}}" required>
                @error('json.email')
                  <div class="alert alert-danger small mt-3" >{{$message}}</div>
                @enderror
            </div>   
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" id="phone" name="json[phone]" placeholder="Telefon" value="{{old('json.phone')}}" required>
                @error('json.phone')
                  <div class="alert alert-danger small mt-3" >{{$message}}</div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <input class="from-control" type="text" id="company" name="json[company]" placeholder="Firmanız" value="{{old('json.company')}}" required>
                @error('json.company')
                  <div class="alert alert-danger small mt-3" >{{$message}}</div>
                @enderror
            </div>
            <div class="col-lg-12 mb-30">
                <textarea class="from-control" id="message" name="json[message]" placeholder="Mesajınız" required>{{old('json.message')}}</textarea>
                @error('json.message')
                  <div class="alert alert-danger small mt-3" >{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="btn-part">                                            
            <div class="form-group submit-btn mb-0">
                <button class="submit">Gönder</button>
            </div>
        </div> 
    </fieldset>
</form>