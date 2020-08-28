<ul class="list-group">
    @foreach($products as $product)
     <li class="list-group-item">{{$product->name}}</li>
    @endforeach
</ul>