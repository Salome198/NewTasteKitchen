<div class="container-fluid my-5">
<h1>
    Menu
</h1>
<a href="home.php" class="btn btn-success text-light">home</a>
<a href="menu.php" class="btn btn-success text-light">menu</a>
<a href="policies.php" class="btn btn-success text-light">policies</a>
<a href="checkout.php" class="btn btn-success text-light">checkout</a>

<p>Please select what you would like form the menu below</p>

<!-- Search Bar -->
<div class="d-flex justify-content-end">
    <input type="search" id="search" class="form-control w-25" placeholder="Search for food...">
</div>

 <!-- Food List Table -->
 <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                </tr>
</thead>

<tbody id="foodTable">
                <tr>
                    <td>1</td>
                    <td>Jollof Rice</td>
                    <td>Delicious West African rice cooked with tomatoes and spices</td>
                    <td>£5.99</td>
                    <td>Rice</td>
                    <td><img src="img/Jollof Rice.jpg" alt="Jollof Rice" width="100"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fried Rice</td>
                    <td>Rice stir-fried with vegetables and special seasoning</td>
                    <td>£6.49</td>
                    <td>Rice</td>
                    <td><img src="img/veg-fried-rice.jpg" alt="Fried Rice" width="100"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Egusi Sooup</td>
                    <td>Rich melon seed soup with meat and vegetables</td>
                    <td>£9.50</td>
                    <td>Soup</td>
                    <td><img src="img/Egusi soup.jpg" alt="Egusi soup" width="100"></td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                </tr>
            </tfoot>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Function to fetch food data
    function fetchFood(query = '') {
        $.ajax({
            url: "search.php", // The PHP script handling the search
            method: "POST",
            data: { query: query },
            success: function(response) {
                $("#foodTable").html(response);
            }
        });
    }

    fetchFood();
    $("#search").on("keyup", function() {
        let query = $(this).val();
        fetchFood(query);
    });
});
</script>

</div>