@extends('include/user')
@section('maincontent')
    <div class="container">
        <div class="signup">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-12">
                    <div id="UI">

                        <form  method="Post" action="/addusersproduct"  enctype="multipart/form-data">
                            @csrf
                            <div class="page-header"><h3 class="font-bold ">Add your Product</h3>
                                {{--<button type="button" class="close" data-dismiss="modal"> &times;</input>--}}
                            </div><br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="fa fa-money-check"></i>
                                    <label>Title of product</label>
                                    <input type="text" name="itemname" placeholder="Title" class="form-control" required>

                                </div>
                                <div class="col-lg-4">
                                    <i class="fa fa-money-bill"></i>
                                    <label> Retail Price</label>
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
                                    <span><label>Your Store Name</label></span>
                                    <input type="text" name="store_name" placeholder="Store name" class="form-control" required>
                                </div>
                                <div class="col-lg-4">
                                    <i class="fa fa-strikethrough"></i>
                                    <span><label>Quantity</label></span>
                                    <input type="number" name="quantity" placeholder="Quantity" class="form-control" required>
                                </div>
                            </div><br/>

                            <div class="form-file">
                                <label for="file" class="filetype">
                                    <i class="fa fa-upload"></i>
                                    Select Image</label>
                                <input id="file" type="file" name="proimage" required/>
                            </div>
                            <div><input type="hidden" value="{{Auth::user()->id}}" name="user_id"/></div>
                            <div class="row">
                                <div class="addpro"><input type="submit" value="Add Your Product" class="btn btn-danger btn-lg"></div><br/>

                                <div class="proback"><a href="/home"  type="button" class="btn btn-info btn-lg">Back</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


