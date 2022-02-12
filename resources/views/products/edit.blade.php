<h1>Update Products</h1>

<form method="POST" action="/products/{{$product->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{$product->name}}">
    <testarea name="description">{{$product->description}}
    <input type="number" name="price" value="{{$product->price}}">
    
    <button type="submit">Update</button>
</form>

<a href="/products">Back</a>