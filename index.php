    <?php 
        $page_title = "Home";
        require_once "includes/header.php"; 
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Trip Cost Caluclator</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="distance">Distance</label>
                        <input type="text" name="distance" id="distance" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="avg_price">Average Price Per Gallon: </label>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3.0" name="avg_price">3.00
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="3.50" name="avg_price">3.50
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="4.0" name="avg_price">4.00
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fuel_efficiency">Select Fuel Efficiency:</label>
                        <select class="form-control" id="fuel_efficiency" name="fuel_efficiency">
                            <option value="">--SELECT--</option>
                            <option value="10">Terrible</option>
                            <option value="20">Decent</option>
                            <option value="30">Very Good</option>
                            <option value="40">Outstanding</option>
                        </select>
                    </div>
                    <input type="submit" value="Calculate" class="btn btn-success" name="submit">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>