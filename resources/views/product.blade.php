<h1>Products List</h1>
@include("navbar")



<table border="1">
    <tr>
        <td>Id</td>
        <td>Product name</td>
        <td>Product code </td>
        <td>Product category</td>
        <td>Product price</td>
        <td>Product rating</td>
        <td>Product details</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>


    @foreach($collection as $product)
    <tr>
        <td>{{ $product['id'] }}</td>
        <td><a href={{"detail/".$product['id']}}>{{ $product['p_name'] }}</a></td>
        <td>{{ $product['p_code'] }}</td>
        <td>{{ $product['p_category'] }}</td>
        <td>{{ $product['p_price'] }}</td>
        <td>{{ $product['p_rating'] }}</td>
        <td><a href={{"detail/".$product['id']}}>details</a></td>
        <td><a href={{"edit/".$product['id']}}>edit</a></td>
        <td><a href={{"delete/".$product['id']}}>Delete</a></td>

    </tr>

    @endforeach


</table>
