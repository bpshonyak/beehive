<form role="form" action="process.php" method="GET">
    <div class="col-lg-6">
        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
        <div class="form-group">
            <label for="InputName">Hive ID:</label>
            <div class="input-group">
                <input type="number" class="form-control" name="hive_id" placeholder="Enter Hive ID" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="InputEmail">Collection Date</label>
            <div class="input-group">
                <input type="date" class="form-control" name="collection_date" placeholder="Enter Collection Date" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="InputEmail">Sample Period</label>
            <div class="input-group">
                <input type="number" class="form-control" name="sample_period" placeholder="Enter Sample Period" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="InputEmail">Number of Mites</label>
            <div class="input-group">
                <input type="number" class="form-control" name="num_mites" placeholder="Enter Number of Mites" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
</form>