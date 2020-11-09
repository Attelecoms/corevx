@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif


<form method="post" action="/contact">
    {{csrf_field()}}
    <input type="text" class="form-control" name="name" placeholder="Your Name">
    @if($errors->has('name'))
        <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
    @endif
    <input type="email" class="form-control" name="email" placeholder="Your Email">
    @if($errors->has('email'))
        <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
    @endif
    <input type="text" class="form-control" name="subject" placeholder="Subject">
    @if($errors->has('subject'))
        <small class="form-text invalid-feedback">{{$errors->first('subject')}}</small>
    @endif
    <textarea placeholder="Your Message" class="form-control" name="message" rows="4"></textarea>
    @if($errors->has('message'))
        <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
    @endif
    <input type="submit" value="Send Message">
</form>
