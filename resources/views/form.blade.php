<form method="POST" action="/submit">
    @csrf
    <input type="text" name="message" placeholder="Type something">
    <button type="submit">Submit</button>
</form>