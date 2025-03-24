@include('include.header')

<section class="my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Blog Information Add</h1>
                    </div>
                    <div class="card-body">
                        <div class="my-2">
                            <label for="title">Title </label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Blog Title">
                        </div>
                        <div class="my-2">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Blog Title">
                        </div>
                        <div class="my-2">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img" class="form-control" placeholder="Blog Title">
                        </div>
                        <div class="my-2">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Select Options</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                        </div>
                        <div class="my-2">
                            <input type="submit" name="btn" class="btn btn-success btn-sm btn-block" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('include.footer')