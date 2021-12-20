<h1>Product's Details</h1>
<li><a href="/"> Home </a></li>
<table border="1">
    <tr>
        <td>Id</td>
        <td>{{ $info['id'] }}</td>
    </tr>
    <tr>
        <td>Product name</td>
        <td>{{ $info['p_name'] }}</td>
    </tr>
    <tr>
        <td>Product code</td>
        <td>{{ $info['p_code'] }}</td>
    </tr>
    <tr>
        <td>Product description</td>
        <td>{{ $info['p_desc'] }}</td>
    </tr>
    <tr>
        <td>Product category</td>
        <td>{{ $info['p_category'] }}</td>
    </tr>
    <tr>
        <td>Product price</td>
        <td>{{ $info['p_price'] }}</td>
    </tr>
    <tr>
        <td>Product quantity</td>
        <td>{{ $info['p_quantity'] }}</td>
    </tr>
    <tr>
        <td>Product stock date</td>
        <td>{{ $info['p_stock_date'] }}</td>
    </tr>
    <tr>
        <td>Product rating</td>
        <td>{{ $info['p_rating'] }}</td>
    </tr>
    <tr>
        <td>Product purchased</td>
        <td>{{ $info['p_purchased'] }}</td>
    </tr>
    <tr>
        <td>Product created at</td>
        <td>{{ $info['created_at'] }}</td>
    </tr>
    <tr>
        <td>Product updated at</td>
        <td>{{ $info['updated_at'] }}</td>
    </tr>
</table>
