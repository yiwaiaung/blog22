<div class="form-group">
<label name="title">Title</label>
<input type="text" name="title" class="form-control" id="title" value="{{old('title')?? $post->title?? ""}}">
<div class="error">{{$errors->first('title')}}</div>
</div>

<div class="form-group">
<label name="content">Content</label>
<input type="text" name="content" class="form-control" id="content" value="{{old('content')?? $post->content?? ""}}">
<div class="error">{{$errors->first('content')}}</div>
</div>

<div class="form-group">
<label name="author">Author</label>
{{--<input type="text" name="author" id="author" value="{{old('author')?? $post->author?? ""}}">--}}
<select name="customer_id" id="customer_id" class="form-control">
@foreach($customers as $customer)
    <option value="{{$customer->id}}" {{ (($post->customer_id?? "")==$customer->id)?"selected":"" }}>{{$customer->name}}</option>
@endforeach
</select>
<div class="error">{{$errors->first('customer_id')}}</div>
</div>

<div class="form-group">
    <label name="file">Image</label>
       <input type="file" id="image" name="image">
        <div class="error">{{$errors->first('image')}}</div>

</div>
