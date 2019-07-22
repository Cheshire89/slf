<!-- Main Search start from here -->
<section class="main-search-field">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select>
                        <option value="0" selected>Location</option>
                        <option value="1">Alabama</option>
                        <option value="2">Alaska</option>
                        <option value="3">California</option>
                        <option value="4">Colorado</option>
                        <option value="5">Delaware</option>
                        <option value="6">District of Columbia</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select class="div-toggle" data-target=".my-info-1">
                        <option value="0" data-show=".acitveon" selected>Property Status</option>
                        <option value="1" data-show=".sale">For Sale</option>
                        <option value="2" data-show=".rent">For Rent</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select>
                        <option value="0" selected>Bedroom</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select>
                        <option value="0" selected>Bathroom</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <div class="at-pricing-range">
                        <div class="my-info-1">
                            <h4>At first select Property Status</h4>
                            <div class="acitveon sale hide">
                                <label>Price : </label>
                                <input type="text" class="amount at-input-price" readonly>
                                <div class="slider-range"></div>
                            </div>
                            <div class="rent hide">
                                <label>Price : </label>
                                <input type="text" class="amount-two at-input-price" readonly>
                                <div class="slider-range-two"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Search End -->
