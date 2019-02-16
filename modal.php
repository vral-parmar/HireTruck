<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="card">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button>

</div>
<div class="modal fade shadow-lg p-3 mb-5 bg-white rounded" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-light">HireTruck Ad Post</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="card-body">
                <h4 class="card-title">Post your AD for transfer your Luggage</h4>
                <p class="card-text">Fill up your requirement's for vehicle and Luggage and tap submit for open your ad
                    in the HireTruck </p>
                <div class="container">
                    <form action="" method="" class="form-group">
                        <div>
                            <label> Enter Source of Luggage</label>
                            <input type="textbox" name="source" class="form-control"/>
                        </div>
                        <label>Enter number of destination</label>
                        <textarea class="form-control">
        </textarea>
                        <div>
                            <label>What kind of luggage you want to transfer</label>
                            <input type="textbox" name="luggage" class="form-control"/>
                        </div>
                        <div>
                            <label>Type of luggage</label>
                            <input type="textbox" name="type_luggage" class="form-control"/>
                        </div>
                        <div>
                            <label>Waight of luggage in</label>&nbsp;<bold>Kg</bold>
                            <input type="number" name="waight" class="form-control"/>
                        </div>
                        <div>
                            <label>Your Budget</label>
                            <input type="number" name="budget" class="form-control"/>
                        </div>
                        <div>
                            <label>Order date</label>
                            <input type="date" name="order_date" class="form-control"/>
                        </div>
                        <div>
                            <label>Vehicle type</label>
                            <input type="textbox" name="vehicle_type" class="form-control"/>
                        </div>
                        <div>
                            <label>Extra Requirements</label>
                            <input type="textbox" name="extra_req" class="form-control"/>
                        </div>
                        <br>


                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                                <div class="col">
                                    <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                </div>
                                <div class="col">
                                    <input type="Submit" value="submit" class="form-control btn btn-primary"/>
                                    <div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
