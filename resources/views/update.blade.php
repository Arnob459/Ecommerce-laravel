<h1>Edit Products</h1>
<li><a href="/"> Home </a></li>
<form action="{{ route('update') }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <table border="1">
        <tr>
            <td>Attributes</td>
            <td>Current Values</td>
            <td>Enter New Values</td>
        </tr>
        <tr>
            <td><label for="id">ID : </label></td>
            <td>{{ $info['id'] }}</td>
            <td><input  type="hidden" name="id" value={{ $info['id'] }} id="id"></td>
        </tr>
        <tr>
            <td><label for="p_name">Product name : </label></td>
            <td>{{$info['p_name']}}</td>
            <td><input  type="text" name="p_name"  id="p_name"></td>
        </tr>
        <tr>
            <td><label for="p_code">Product code : </label></td>
            <td>{{$info['p_code']}}</td>
            <td><input  type="text" name="p_code"  id="p_code"></td>
        </tr>
        <tr>
            <td><label for="p_desc">Product description : </label></td>
            <td>{{ $info['p_desc'] }}</td>
            <td><input type="text" name="p_desc"  id="p_desc"></td>
        </tr>
        <tr>
            <td><label for="p_category">Product category : </label></td>
            <td>{{ $info['p_category'] }}</td>
            <td><input type="text" name="p_category" value={{ $info['p_category'] }} id="p_category"></td>
        </tr>
        <tr>
            <td><label for="p_price">Product price : </label></td>
            <td>{{ $info['p_price'] }}</td>
            <td><input type="text" name="p_price" value={{ $info['p_price'] }} id="p_price"></td>
        </tr>
        <tr>
            <td><label for="p_quantity">Product quantity : </label></td>
            <td>{{ $info['p_quantity'] }}</td>
            <td><input type="text" name="p_quantity" value={{ $info['p_quantity'] }} id="p_quantity"></td>
        </tr>
        <tr>
            <td><label for="p_stock_date">Product stock date : </label></td>
            <td>{{ $info['p_stock_date'] }}</td>
            <td><input type="text" name="p_stock_date" value={{ $info['p_stock_date'] }} id="p_stock_date"></td>
        </tr>
        <tr>
            <td><label for="p_rating">Product rating : </label></td>
            <td>{{ $info['p_rating'] }}</td>
            <td><input type="text" name="p_rating" value={{ $info['p_rating'] }} id="p_rating"></td>
        </tr>
        <tr>
            <td><label for="p_purchased">Product purchased : </label></td>
            <td>{{ $info['p_purchased'] }}</td>
            <td><input type="text" name="p_purchased" value={{ $info['p_purchased'] }} id="p_purchased"></td>
        </tr>

        <tr>
            <td><label for="created_at">Product purchased : </label></td>
            <td>{{ $info['created_at'] }}</td>
            <td><input type="hidden" name="created_at" value={{ $info['created_at'] }} id="created_at"></td>
        </tr>
        <tr>
            <td><label for="updated_at">Product purchased : </label></td>
            <td>{{ $info['updated_at'] }}</td>
            <td><input type="hidden" name="updated_at" value={{ $info['updated_at'] }} id="updated_at"></td>
        </tr>



        <tr>
            <td></td>
            <td></td>
            <td><button type="submit" > Update </button></td>
        </tr>
    </table>
</form>
