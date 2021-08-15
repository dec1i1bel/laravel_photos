@include('header')

<div class="form load_img">
    <form action="/load_img/store" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="img_loaded" id="img_loaded"><br>
        <input type="submit" value="Load">
    </form>
</div>

@include('footer')