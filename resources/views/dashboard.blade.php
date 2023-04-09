<h1>dashboard</h1>


<form action="{{Route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    image<input type="file" name="image_product" id="image_product"><br>
    title<input type="text" name="title" id="title"><br>
    price<input type="number" name="price" id="price"><br>
    desc<input type="text" name="description" id="description"><br>
    category <select name="category">
        <option value="drink">drinks</option>¨
        <option value="food">food</option>
    </select>
    <button type="submit" class="btn btn-primary">Submitt</button>
</form>
