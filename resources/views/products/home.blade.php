@extends('products.layout')

@section('content')

<h3 class="text-center">Welcome to my master thesis laravel project</h3>
<br>
<p>This project is a simple CRUD (Create, Read, Update, Delete) application built using the Laravel framework. The main purpose of this application is to manage products. CRUD applications are commonly used in web development to perform basic operations on data. <br>
Here's a breakdown of what the application does: </p>
<ol class="list-group list-group-numbered ">
    <li class="list-group-item" > Creation: Users can create new products by providing details like product name and details. When they submit the product details, it gets saved into the application's database.</li>

    <li class="list-group-item"> Updation: Users can update existing products. For example, they might want to update the product details. When they make changes and submit them, the application will update the product record in the database with the new information.</li>

    <li class="list-group-item"> Listing: The application allows users to view a list of all the products that have been created. The list typically shows essential details of each product, making it easy for users to see all the available products in one place.</li>

    <li class="list-group-item"> Deletion: If users want to remove a product from the system, they can delete it. When they choose to delete a product, the application will remove the corresponding record from the database, effectively eliminating the product from the list.</li>
</ol>
<p>By clicking on the "Application" link, users can access the user interface of this CRUD application and start managing products.</p>
 @endsection