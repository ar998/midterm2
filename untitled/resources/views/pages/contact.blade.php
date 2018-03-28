<h1>Contact</h1>
<p class="lead">Contact to site owner</p>
<form action="/contact" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="body">Message</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>