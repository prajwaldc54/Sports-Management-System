@extends('include/admin')
@section('maincontent')
<div class="container">
    <div class="product">
        <div class="row ">
            <div class="col-lg-1"></div>
            <div class="col-lg-12">
                <div id="UI"><form  method="Post" action="/addproduct"  enctype="multipart/form-data">
                        @csrf
                            <div class="page-header"><h3 class="font-bold ">Add Product</h3>
                                {{--<button type="button" class="close" data-dismiss="modal"> &times;</input>--}}
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="fa fa-money-check"></i>
                                    <label>Item Name:</label>
                                    <input type="text" name="itemname" placeholder="Item Name" class="form-control" required>
                                </div>
                                <div class="col-lg-4">
                                    <i class="fa fa-money-bill"></i>
                                    <label>Price:</label>
                                    <input type="text" name="price" placeholder="Price" class="form-control" required>
                                </div>
                            </div><br/>
                        <div class="row">
                            <div class="col-lg-4">
                                <i class="fa fa-adjust"></i>
                                <span ><label>Color:</label></span>
                                <select name="color" class="form-control">
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                                    <option value="Grey">Grey</option>
                                    <option value="SkyBlue">Sky Blue</option>
                                    <option value="Red">Red</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Pink">Pink</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                               <i class="fa fa-globe"></i>
                                <span><label>Sports:</label></span>
                                <select name="sports" class="form-control">
                                    <option value="Football">Football</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Badminton">Badminton</option>
                                    <option value="Volleyball">Volleyball</option>
                                    <option value="Cricket">Cricket</option>
                                    <option value="Hockey">Hockey</option>
                                    <option value="Cycling">Cycling</option>
                                    <option value="Table Tennis">Table Tennis</option>
                                    <option value="Golf">Golf</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div><br/>

                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="fa fa-apple-alt"></i>
                                    <span><label>Brand:</label></span>
                                    <input type="text" name="brand" placeholder="brand" class="form-control" required>
                                </div>

                                <div class="col-lg-4">
                                    <i class="fa fa-th-large"></i>
                                    <span><label>Accessories:</label></span>
                                    <select name="accessories" class="form-control">
                                        <option value="Boots">Boots</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Ball">Ball</option>
                                        <option value="Clothes">Clothes</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div><br/>
                        <div class="row">
                            <div class="col-lg-4">
                                <i class="fa fa-strikethrough"></i>
                                <span><label>Supplier:</label></span>
                                <input type="text" name="supplier" placeholder="Supplier" class="form-control" required>
                            </div>
                            <div class="col-lg-4">
                               <i class="fa fa-transgender"></i><span>Gender:</span><br>
                                <input type="radio" name="gender" value="Male" checked>Male
                                <input type="radio" name="gender" value="Female" >Female<br/>
                            </div>
                            </div><br/>

                        <div class="row">
                            <div class="col-lg-8">
                                <i class="fa fa-list-alt"></i><span><label>Description:</label></span>
                                <textarea name="description" placeholder="Description" rows="5"  class="form-control" required>

                                </textarea>
                            </div>
                        </div><br/>

                        <div class="form-file">
                        <label for="file" class="filetype">
                            <i class="fa fa-upload"></i>
                            Select Image</label>
                        <input id="file" type="file" name="proimage" required/>
                        </div>
                            <div class="row">
                            <div class="addpro"><input type="submit" value="Add Your Product" class="btn btn-danger btn-lg">
                            </div><br/>
                             <div class="proback"><a href="/admindashboard" type="button" class="btn btn-info btn-lg">Back</a></div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

    </div>
@endsection